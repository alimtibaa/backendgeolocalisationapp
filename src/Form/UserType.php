<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\User;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom', TextType::class, ['label'=> 'Nom'])
            ->add('Prenom', TextType::class, ['label'=> 'Prenom'])
            ->add('email', TextType::class, ['label'=> 'email'])
            ->add('NumTel',TextType::class, ['label'=> 'NumTel'])
            ->add('LAT', TextType::class, ['label'=> 'LAT'])
            ->add('LON', TextType::class, ['label'=> 'LON'])
            ->add('MAXLAT', TextType::class, ['label'=> 'MAXLAT'])
            ->add('MINLAT', TextType::class, ['label'=> 'MINLAT'])
            ->add('MAXLON', TextType::class, ['label'=> 'MAXLON'])
            ->add('MINLON', TextType::class, ['label'=> 'MINLON'])
            ->add('Username', TextType::class, ['label'=> 'Username'])
            ->add('Password', TextType::class, ['label'=> 'Password'])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
            'csrf_protection'   => false,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return '';
    }
}
