<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Entity\User;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;



class StatisticsController extends Controller
{

     /**
      * @Route("/api/statistics/", name="statistics")
      * @Method("POST")
      */
    public function statisticsAction(Request $request)
    {

      $encoders = array(new XmlEncoder(), new JsonEncoder());
      $normalizers = new ObjectNormalizer();
      $normalizers->setIgnoredAttributes(['id','Email','NumTel','MINLAT','MAXLAT',
        'MINLON','MAXLON','Username','Password','roles']);
      $serializer = new Serializer(array($normalizers), $encoders);

      $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['Username'=> $request->get('Username')]);

      if (!$user) {
          throw $this->createNotFoundException();
      }
      $data = $serializer->serialize($user, 'json');

       $response = new Response($data);
       $response->headers->set('Content-Type', 'application/json');

       return $response;
    }
}
