<?php

namespace Main\InsuranceBundle\Form\Contract;

use Main\InsuranceBundle\Entity\Custom\Contract\EditContractRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditContractFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('contractType', TextType::class, [
				'label' => 'Contract Type',
				'required' => true
			])
			->add('status', TextType::class, [
				'label' => 'Status',
				'required' => true
			])
			->add('company', TextType::class, [
				'label' => 'Company',
				'required' => true
			])
			->add('dateRuntimeBegin', TextType::class, [
				'label' => 'Laufzeit Beginn',
				'required' => false
			])
			->add('dateRuntimeEnd', TextType::class, [
				'label' => 'Laufzeit Ende',
				'required' => true,
			])
			->add('dateProtectionBegin', TextType::class, [
				'label' => 'Versicherungsschutz Beginn',
				'required' => true,
			])
			->add('dateCanceled', TextType::class, [
				'label' => 'Gekündigt zum',
				'required' => true,
			])
			->add('dateProtectionEnd', TextType::class, [
				'label' => 'Versicherungsschutz Ende',
				'required' => false
			])
			->add('tariffName', TextType::class, [
				'label' => 'Tarifname',
				'required' => false
			])
			->add('paymentInterval', ChoiceType::class, [
				'label' => 'Zahlintervall',
				'attr' => [
					'class' => '',
					'placeholder' => 'Aktiviert'
				],
				'choices' => [
					'Monatlich' => 1,
					'Vierteljährlich' => 3,
					'Halbjährlich' => 6,
					'Jährlich' => 12
				],
				'multiple' => false,
				'expanded' => true,
				'required' => true
			])
			->add('paymentFee', TextType::class, [
				'label' => 'Payment Fee',
				'required' => true
			])
			->add('runtime', TextType::class, [
				'label' => 'Laufzeit',
				'required' => true
			])
			->add('retention', TextType::class, [
				'label' => 'Selbstbeteiligung',
				'required' => false
			])
			->add('insuranceNumber', TextType::class, [
				'label' => 'Versicherungsnummer',
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
			->add('save', SubmitType::class, [
				'attr' => array(
					'class' => 'form-control'
				)
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => EditContractRequest::class,
			'validation_groups' => ['Admin'],
			'allow_extra_fields' => true
		]);
	}

	public function getName()
	{
		return 'main_contract_edit_form_type';
	}
}
