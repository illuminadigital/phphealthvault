<?php
namespace DLS\Healthvault\Proxy\Type;

use DLS\Healthvault\Proxy\Type\CarePlanTargetType;

class CarePlanTask extends CarePlanTargetType
{

    public function __toString() {
        return $this->name->getText();
    }
}
