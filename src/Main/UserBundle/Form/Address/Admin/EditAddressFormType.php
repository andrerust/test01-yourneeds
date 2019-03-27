<?php

namespace Main\UserBundle\Form\Address\Admin;

use Main\UserBundle\Entity\AddressType;
use Main\UserBundle\Entity\Custom\Address\EditAddressRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditAddressFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('type', TextType::class, [
				'label' => 'Type',
				'required' => true
			])
			->add('street', TextType::class, [
				'label' => 'Street',
				'required' => false
			])
			->add('streetNumber', TextType::class, [
				'label' => 'Street number',
				'required' => false
			])
			->add('postalCode', TextType::class, [
				'label' => 'Postal code',
				'required' => false
			])
			->add('city', TextType::class, [
				'label' => 'City',
				'required' => true,
			])
			->add('country', TextType::class, [
				'label' => 'Country',
				'required' => true,
			])
			->add('customCity', TextType::class, [
				'label' => 'Country',
				'required' => true,
			])
			->add('additionalInfo', TextType::class, [
				'label' => 'Additional info',
				'required' => false
			])
            ->add('isMain', ChoiceType::class, [
                'attr' => [
                    'class' => '',
                    'placeholder' => 'Ist Hauptadresse'
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
			->add('save', SubmitType::class, [
				'attr' => array(
					'class' => 'form-control'
				)
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => EditAddressRequest::class,
			'validation_groups' => ['Admin']
		]);
	}

	public function getName()
	{
		return 'main_address_edit_form_type';
	}
}
