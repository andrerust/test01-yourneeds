<?php

namespace Main\InsuranceBundle\Form\Company\Admin;

use Main\InsuranceBundle\Entity\Custom\Company\EditCompanyRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditCompanyFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('name', TextType::class, [
				'label' => 'Name',
				'required' => false
			])
			->add('publicName', TextType::class, [
				'label' => 'Angezeigter Name',
				'required' => false
			])
			->add('department', TextType::class, [
				'label' => 'Abteilung',
				'required' => false
			])
			->add('contactPerson', TextType::class, [
				'label' => 'Ansprechpartner',
				'required' => false
			])
			->add('faxNumber', TextType::class, [
				'label' => 'FaxNr.',
				'required' => false
			])
			->add('website', TextType::class, [
				'label' => 'Website',
				'required' => false
			])
			->add('logo', FileType::class, [
				'label' => 'Logo',
				'required' => false,
				'data_class' => null
			])
			->add('isActive', ChoiceType::class, [
				'attr' => [
					'placeholder' => 'Aktiviert'
				],
				'choices' => [
					'Nein' => 0,
					'Ja' => 1
				],
				'multiple' => false,
				'expanded' => true,
				'label' => 'Is active',
				'required' => false
			])
			->add('note', TextareaType::class, [
				'attr' => array(
					'class' => 'form-control',
					'placeholder' => 'Notiz'
				),
				'label' => 'Note',
				'required' => false
			])
			->add('phoneNumberGeneral', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('phoneDamageReportGeneral', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('phoneDamageReportCar', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('phoneDamageReportLaw', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('phoneDamageReportHealth', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('emailGeneral', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('emailBrokerService', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('emailTransfer', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('emailDamageReport', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('emailProvisions', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('brokerCourtagePin', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('linkBrokerPortal', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('brokerPortalUsername', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('brokerPortalPassword', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('brokerNumberGeneral', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('brokerNumberLife', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('brokerNumberHealth', TextType::class, [
				'label' => 'Phone',
				'required' => false
			])
			->add('mbpBrokerNo', TextType::class, [
				'label' => 'MBP Broker Nr',
				'required' => false
			])
			->add('save', SubmitType::class, [
				'attr' => array(
					'class' => 'form-control',
				),
				'label' => ''
			]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => EditCompanyRequest::class,
			'validation_groups' => ['Admin']
		]);
	}

	public function getName()
	{
		return 'main_company_edit_form_type';
	}
}
