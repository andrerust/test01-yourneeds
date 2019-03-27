<?php

namespace Main\UserBundle\Form;

use Main\UserBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class RegistrationForm extends AbstractType
{
   /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
      $builder
         ->add('email', EmailType::class,
            [
               'attr' => array(
                  'class' => 'form-control input-lg img-rounded',
                  'placeholder' => 'E-Mail'
               ),
               'label' => false
            ])
         ->add('plainPassword', RepeatedType::class,
            [
               'type' => PasswordType::class,
               'invalid_message' => 'The password fields must match.',
               'options' => [
                  'attr' => [
                  ],
               ],
               'first_options' => [
                  'label' => false,
                  'attr' => [
                     'placeholder' => 'Passwort',
                  ]
               ],
               'second_options' => [
                  'label' => false,
                  'attr' => [
                     'placeholder' => 'Passwort Wiederholung',
                  ]
               ]
            ])
         ->add('userName', TextType::class, [
            'attr' => array(
               'placeholder' => 'Your name'
            ),
            'label' => false,
            'required' => true
         ])
         ->add('terms_accepted', CheckboxType::class, [
            'attr' => array(
               'placeholder' => 'Name of pet'
            ),
            'label' => false,
            'required' => true
         ]);
   }

   public function configureOptions(OptionsResolver $resolver)
   {
      $resolver->setDefaults([
         'data_class' => User::class
      ]);
   }
}