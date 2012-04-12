<?php

namespace ILL\VisitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class VisitType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('start_date', 'date', array('error_bubbling'=>false))
            ->add('end_date', 'date', array('error_bubbling'=>false))
            ->add('details', 'text', array('error_bubbling'=>true))
            ->add('responsible')
            ->add('institute')
        ;
    }

    public function getName()
    {
        return 'ill_visitbundle_visittype';
    }
}
