<?php

namespace AppBundle\Form\Project;

use AppBundle\Entity\Custom\Project\EditProjectRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditProjectFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('project', ChoiceType::class, [
				'attr' => [
					'placeholder' => 'Aktiviert'
				],
				'choices' => [
					'Nein' => 1,
					'Ja' => 2,
					'Ja2' => 3,
					'Ja3' => 4,
					'Ja4' => 5
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
			'data_class' => EditProjectRequest::class,
			'validation_groups' => ['Admin'],
			'allow_extra_fields' => true
		]);
	}

	public function getName()
	{
		return 'manager_project_edit_form_type';
	}
}
