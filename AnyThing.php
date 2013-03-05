<?php
namespace Illumina\AbpBundle\Entity;

use Illumina\PhphealthvaultBundle\Entity\BaseThing;

use com\microsoft\wc\thing\Thing;

class AnyThing extends BaseThing
{
    public static function reallySupports(Thing $thing)
    {
        return TRUE;
    }
    
    protected function getNewDataXmlContent() {
        return NULL;
    }
}
