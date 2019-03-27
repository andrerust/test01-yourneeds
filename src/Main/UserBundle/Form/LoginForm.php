<?php

namespace Main\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('benefitPartner', TextType::class, [
                'label' => 'Benefit-Partner',
                'required' => true
            ])
            ->add('_username', EmailType::class,
                [
                    'attr' => array(
                        'class' => 'form-control input-lg img-rounded',
                        'placeholder' => 'E-Mail'
                    ),
                    'label' => false,
                    'required' => true,
                ])
            ->add('termsAccepted', CheckboxType::class, [
                'attr' => [
                    'class' => '',
                    'placeholder' => 'Ich best�tige die Erstinformation gelesen und heruntergeladen zu haben.'
                ],
                'label' => 'Is active',
                'required' => true
            ])
            ->add('privacyPolicyAccepted', CheckboxType::class, [
                'attr' => [
                    'class' => '',
                    'placeholder' => 'Ich best�tige die Erstinformation gelesen und heruntergeladen zu haben.'
                ],
                'label' => 'Is active',
                'required' => true
            ])
            ->add('_target_path', HiddenType::class,
                [
                    'attr' => array(
                        'class' => 'form-control input-lg img-rounded'
                    ),
                    'label' => false
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'validation_groups' => ['User'],
            'allow_extra_fields' => true
        ]);
    }

    public function getName()
    {
        return 'login_form';
    }
}
/*
          ->add('_password', PasswordType::class,
              [
                  'attr' => array(
                      'class' => 'form-control input-lg img-rounded',
                      'placeholder' => 'Passwort'
                  ),
                  'label' => false,
                  'required' => true,
              ])
*/
