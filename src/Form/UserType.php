<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username',TextType::class,['attr' => ['class' => 'form-control']])
            ->add('roles', TextType::class,['attr' => ['class' => 'form-control']])
            ->add('password', PasswordType::class,['attr' => ['class' => 'form-control']])
            ->add('nom', TextType::class,['attr' => ['class' => 'form-control']])
            ->add('prenom',TextType::class,['attr' => ['class' => 'form-control']])
        ;

        $builder->get('roles')
        ->addModelTransformer(new CallbackTransformer(
        fn ($rolesAsArray) => count($rolesAsArray) ? $rolesAsArray[0]: null,
        fn ($rolesAsString) => [$rolesAsString]));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
