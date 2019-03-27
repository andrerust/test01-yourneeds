<?php

namespace Main\InsuranceBundle\Form\Tariff\Admin;

use Main\InsuranceBundle\Entity\Custom\Tariff\EditTariffRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditTariffFormType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
      $builder
         ->add('type', ChoiceType::class, [
            'attr' => [
               'class' => ''
            ],
            'choices' => [
               'A' => 1,
               'B' => 2,
               'C' => 3,
               'D' => 4,
               'E' => 5,
               'F' => 6,
               'G' => 7,
               'H' => 8,
               'I' => 9,
               'J' => 10,
               'K' => 11,
               'L' => 12
            ],
            'label' => 'Type',
            'required' => true
         ])
         ->add('company', ChoiceType::class, [
            'attr' => [
               'class' => ''
            ],
            'choices' => [
               'A' => 1,
               'B' => 2,
               'C' => 3,
               'D' => 4,
               'E' => 5,
               'F' => 6,
               'G' => 7,
               'H' => 8,
               'I' => 9,
               'J' => 10,
               'K' => 11,
               'L' => 12
            ],
            'label' => 'Company',
            'required' => true
         ])
         ->add('targetGroup', ChoiceType::class, [
            'attr' => [
               'class' => ''
            ],
            'choices' => [
               'A' => 1,
               'B' => 2,
               'C' => 3,
               'D' => 4,
               'E' => 5,
               'F' => 6,
               'G' => 7,
               'H' => 8,
               'I' => 9,
               'J' => 10,
               'K' => 11,
               'L' => 12
            ],
            'label' => 'Zielgruppe',
            'required' => true
         ])
         ->add('name', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'Tarifname',
            'required' => false
         ])
         ->add('description', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'Tarifbeschreibung',
            'required' => false
         ])
         ->add('amountOfCoverage', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'Deckungssumme',
            'required' => false
         ])
         ->add('retention', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'Selbstbeteiligung',
            'required' => false
         ])
         ->add('ageFrom', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'Alter von',
            'required' => false
         ])
         ->add('ageUntil', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'Alter bis',
            'required' => false
         ])
         ->add('discountName', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'First name',
            'required' => true
         ])
         ->add('discountPercentage', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'Last name',
            'required' => false
         ])
         ->add('rate', TextType::class,
            [
               'attr' => array(
                  'class' => ''
               ),
               'label' => 'Rate',
               'required' => false
            ])
         ->add('rateInterval', TextType::class, [
            'attr' => [
               'class' => ''
            ],
            'label' => 'Ratenintervall',
            'required' => true
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
            'choices_as_values' => true,
            'multiple' => false,
            'expanded' => true,
            'label' => 'Is active',
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
         'data_class' => EditTariffRequest::class,
         'validation_groups' => ['Admin']
      ]);
   }

   public function getName()
   {
      return 'main_tariff_edit_form_type';
   }
}
