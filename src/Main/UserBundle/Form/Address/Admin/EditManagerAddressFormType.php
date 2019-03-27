<?php

namespace Main\UserBundle\Form\Address\Admin;

use Main\UserBundle\Entity\Custom\Address\EditManagerAddressRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditManagerAddressFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('postalCode', TextType::class, [
                'label' => 'Postal code',
                'required' => false
            ])
            ->add('city', TextType::class, [
                'label' => 'City',
                'required' => false
            ])
            ->add('street', TextType::class, [
                'label' => 'Street',
                'required' => false
            ])
            ->add('streetNumber', TextType::class, [
                'label' => 'Street number',
                'required' => false
            ])
            ->add('additionalInfo', TextType::class, [
                'label' => 'Additional info',
                'required' => false
            ])
            ->add('isMain', ChoiceType::class, [
                'choices' => [
                    'Nein' => 0,
                    'Ja' => 1
                ]
            ])
            ->add('save', SubmitType::class, [
                'attr' => array(
                    'class' => 'form-control'
                )
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EditManagerAddressRequest::class,
            'allow_extra_fields' => true
        ]);
    }

    public function getName()
    {
        return 'edit_address_form';
    }
}
