<?php
namespace DLS\Healthvault\Platform\Exceptions;

use DLS\Healthvault\Platform\Exceptions\HealthvaultException;

class HealthvaultExceptionFactory{

    public static function build($code){

        $status = HealthvaultException::findStatus($code);

        $exception_class  = HealthvaultException::findClass($status);

        if(class_exists($exception_class)){

            return new $exception_class;

        }

        return new HealthvaultException(null,$code);

    }
}