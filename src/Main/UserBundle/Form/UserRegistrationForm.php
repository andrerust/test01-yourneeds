<?php

namespace Main\UserBundle\Form;

use Main\UserBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserRegistrationForm extends AbstractType
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
                            'class' => 'form-control input-lg img-rounded'
                        ],
                    ],
                    'first_options' => [
                        'label' => false,
                        'attr' => [
                            'placeholder' => 'Passwort',
                            'class' => 'form-control input-lg img-rounded'
                        ]
                    ],
                    'second_options' => [
                        'label' => false,
                        'attr' => [
                            'placeholder' => 'Passwort Wiederholung',
                            'class' => 'form-control input-lg img-rounded'
                        ]
                    ]
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'validation_groups' => ['Registration']
        ]);
    }

}
