<?php

namespace Main\UserBundle\Form\User\Admin;

use Main\UserBundle\Entity\Custom\User\NewUserRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewUserFormType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
      $builder
         ->add('gender', ChoiceType::class, [
            'attr' => [
               'class' => ''
            ],
            'choices' => [
               'A' => 1,
               'B' => 2,
               'C' => 3
            ],
            'label' => 'Gender',
            'required' => true
         ])
         ->add('userTitle', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'Titel',
            'required' => false
         ])
         ->add('familyStatus', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'Family Status',
            'required' => false
         ])
         ->add('birthdate', TextType::class, array(
            'attr' => [
               'class' => ''
            ],
            'label' => 'Geburtsdatum',
            'required' => false
         ))
         ->add('jobGroup', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'Job Group',
            'required' => false
         ])
         ->add('profilePicture', FileType::class,
            [
               'attr' => [
                  'class' => 'form-control file'
               ],
               'label' => 'Profile picture',
               'data_class' => null
            ])
         ->add('firstName', TextType::class, [
            'attr' => [
               'class' => 'form-control',
               'placeholder' => 'Vorname'
            ],
            'label' => 'First name',
            'required' => true
         ])
         ->add('lastName', TextType::class, [
            'attr' => [
               'class' => 'form-control',
               'placeholder' => 'Nachname'
            ],
            'label' => 'Last name',
            'required' => true
         ])
         ->add('email', EmailType::class,
            [
               'attr' => array(
                  'class' => 'form-control',
                  'placeholder' => 'E-Mail'
               ),
               'label' => true,
               'required' => true
            ])
         ->add('phoneNumber', TextType::class, [
            'attr' => [
               'class' => 'form-control',
               'placeholder' => 'Mobilnummer'
            ],
            'label' => 'Mobile number',
            'required' => true
         ])
         ->add('userName', TextType::class, [
            'attr' => array(
               'class' => 'form-control',
               'placeholder' => 'Username'
            ),
            'label' => 'User name',
            'required' => true
         ])
         ->add('job', TextType::class, [
            'attr' => array(
               'class' => 'form-control',
               'placeholder' => 'Job'
            ),
            'label' => 'Job',
            'required' => false
         ])
         ->add('employer', TextType::class, [
            'attr' => array(
               'class' => 'form-control',
               'placeholder' => 'Arbeitgeber'
            ),
            'label' => 'Employer',
            'required' => false
         ])
         ->add('isActive', ChoiceType::class, [
            'attr' => [
               'class' => '',
               'placeholder' => 'Aktiviert'
            ],
            'choices' => [
               'Nein' => 0,
               'Ja' => 1
            ],
            'multiple' => false,
            'expanded' => true,
            'label' => 'Is active',
            'required' => true
         ])
         ->add('isBlocked', ChoiceType::class, [
            'attr' => [
               'class' => '',
               'placeholder' => 'Blockiert'
            ],
            'choices' => [
               'Nein' => 0,
               'Ja' => 1
            ],
            'multiple' => false,
            'expanded' => true,
            'label' => 'Is blocked',
            'required' => true
         ])
         ->add('note', TextareaType::class, [
            'attr' => array(
               'class' => 'form-control',
               'placeholder' => 'Notiz'
            ),
            'label' => 'Note',
            'required' => false
         ])
         ->add('receiveNewsletter', CheckboxType::class, [
            'attr' => array(
               'placeholder' => 'Receive Newsletter'
            ),
            'label' => 'Receive newsletter',
            'required' => false
         ])
         ->add('termsAccepted', CheckboxType::class, [
            'attr' => array(
               'placeholder' => 'Terms accepted'
            ),
            'label' => 'Terms accepted',
            'required' => false
         ])
         ->add('save', SubmitType::class, [
            'attr' => array(
               'class' => 'form-control',
            ),
            'label' => 'Note'
         ]);
   }

   /*
     ->add('tags', CollectionType::class, [
               'entry_type'   => TagFormType::class,
               'allow_add'    => true,
               'attr' => [
                   'class' => 'form-control input-lg img-rounded',
                   'placeholder' => 'Name of pet'
               ],
               'label' => "Tags (separated via ',')",
               'required' => false
           ])
    */
   public function configureOptions(OptionsResolver $resolver)
   {
      $resolver->setDefaults([
         'data_class' => NewUserRequest::class,
         'validation_groups' => ['Admin'],
         'allow_extra_fields' => true
      ]);
   }

   public function getName()
   {
      return 'main_user_new_form_type';
   }
}
