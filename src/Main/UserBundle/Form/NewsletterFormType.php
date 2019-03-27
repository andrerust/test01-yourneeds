<?php

namespace Main\UserBundle\Form;

use Yourneeds\UserBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class NewsletterFormType extends AbstractType
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
            ]);
   }

   public function configureOptions(OptionsResolver $resolver)
   {
      $resolver->setDefaults([
         'data_class' => User::class
      ]);
   }
}