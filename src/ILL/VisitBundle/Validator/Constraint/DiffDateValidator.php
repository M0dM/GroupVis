<?php

namespace ILL\VisitBundle\Validator\Constraint;

use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Constraint;

class DiffDateValidator extends ConstraintValidator
{
/**
* Checks if the passed value is valid.
*
* @param mixed $value The value that should be validated
* @param Constraint $constraint The constrain for the validation
*
* @return Boolean Whether or not the value is valid
*/

    public function isValid($value, Constraint $constraint)
    /* $value <=> end_date
    */
    {
        if($value <= $this->context->getRoot()->get($constraint->field)->getData()) 
        /* $this->context->getRoot()->get($constraint->field)->getData() <=> start_date
        */
        {
        	$this->setMessage($constraint->message);
            return false;
        }
        return true;
    }
}