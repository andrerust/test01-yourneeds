<?php

namespace Main\UserBundle\Form\Bank\Admin;

use Main\UserBundle\Entity\Custom\Bank\NewBankRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewBankFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('iban', TextType::class, [
				'label' => 'IBAN',
				'required' => true
			])
			->add('bic', TextType::class, [
				'label' => 'BIC',
				'required' => true
			])
			->add('bank', TextType::class, [
				'label' => 'Bank',
				'required' => true
			])
			->add('country', TextType::class, [
				'label' => 'Country',
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
			'data_class' => NewBankRequest::class,
			'validation_groups' => ['Admin'],
			'allow_extra_fields' => true
		]);
	}

	public function getName()
	{
		return 'main_bank_new_form_type';
	}
}
