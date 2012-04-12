<?php

namespace ILL\VisitBundle\Validator\Constraint;

use Symfony\Component\Validator\Constraint;

/**
* @Annotation
*/
class DiffDate extends Constraint
{
    public $field;
    public $message = 'The start date of the visit is later than the end date or equivalent';

	/**
	* {@inheritDoc}
	*/
    public function getDefaultOption()
    {
        return 'field';
    }
	    
	/**
	* {@inheritDoc}
	*/
    public function getRequiredOptions()
    {
        return array('field');
    }
}