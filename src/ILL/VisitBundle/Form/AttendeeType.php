<?php

namespace ILL\VisitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AttendeeType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('first_name')
            ->add('last_name')
			->add('birth_date', 'date', array(
			    'years' => range(date('Y') - 100, date('Y') - 16)
			   ))
            ->add('nationality')
            ->add('sex', 'choice', array(
   					 'choices'   => array(
        				'Male'   => 'Male',
        				'Female' => 'Female'
    					),
    				'expanded'	 => true
    		))
            ->add('place_of_birth');
    }

    public function getName()
    {
        return 'ill_visitbundle_attendeetype';
    }    
    
}
