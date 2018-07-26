<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AppFixtures extends Fixture implements ContainerAwareInterface
{
    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);

    }


	private function loadUsers(ObjectManager $manager)
    {
        $passwordEncoder = $this->container->get('security.password_encoder');
        $userAdmin = new User();
        $userAdmin->setNom('Ali');
        $userAdmin->setPrenom('master');
        $userAdmin->setEmail('ali-mtibaa@hotmail.fr');
        $userAdmin->setNumTel('24160610');
        $userAdmin->setLAT('50.289');
        $userAdmin->setLON('4.02187');
        $userAdmin->setMAXLAT('55');
        $userAdmin->setMINLAT('45');
        $userAdmin->setMAXLON('4.5');
        $userAdmin->setMINLON('3.5');
        $userAdmin->setUsername('ali_admin');
        $userAdmin->setRoles(['ROLE_ADMIN']);
        $encodedPassword = $passwordEncoder->encodePassword($userAdmin, 'admin');
        $userAdmin->setPassword($encodedPassword);
        $manager->persist($userAdmin);

        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null): void
    {
        $this->container = $container;
    }
}
