<?php

namespace AppBundle\Form\Message;

use AppBundle\Entity\Custom\Message\EditMessageRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditMessageFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('subject', TextType::class, [
				'label' => 'Subject',
				'required' => false
			])
			->add('body', TextType::class, [
				'label' => 'Body',
				'required' => false
			])
			->add('messageType', ChoiceType::class, [
				'attr' => [
					'placeholder' => 'Kategorie'
				],
				'choices' => [
					'Nein' => 1,
					'Ja' => 2
				],
				'multiple' => false,
				'expanded' => true,
				'label' => 'Is active',
				'required' => false
			])
			->add('isRead', ChoiceType::class, [
				'attr' => [
					'placeholder' => 'Gelesen'
				],
				'choices' => [
					'Nein' => 1,
					'Ja' => 2
				],
				'multiple' => false,
				'expanded' => true,
				'label' => 'Is active',
				'required' => false
			])
			->add('hasAnswer', ChoiceType::class, [
				'attr' => [
					'placeholder' => 'Wurde geantwortet'
				],
				'choices' => [
					'Nein' => 1,
					'Ja' => 2
				],
				'multiple' => false,
				'expanded' => true,
				'label' => 'Is active',
				'required' => false
			])
			->add('isBlocked', ChoiceType::class, [
				'attr' => [
					'placeholder' => 'Blockiert'
				],
				'choices' => [
					'Nein' => 1,
					'Ja' => 2
				],
				'multiple' => false,
				'expanded' => true,
				'label' => 'Is active',
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
			'data_class' => EditMessageRequest::class,
			'validation_groups' => ['Admin'],
			'allow_extra_fields' => true
		]);
	}

	public function getName()
	{
		return 'manager_message_edit_form_type';
	}
}
