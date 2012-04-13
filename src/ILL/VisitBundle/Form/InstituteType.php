<?php

namespace ILL\VisitBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class InstituteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('printable_name')
        ;
    }

    public function getName()
    {
        return 'ill_visitbundle_institutetype';
    }
}
