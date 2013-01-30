<?php
namespace DLS\Healthvault\Utilities;

use com\microsoft\wc\thing\Thing;
use com\microsoft\wc\thing\Thing2;

use com\microsoft\wc\thing\Audit;
use com\microsoft\wc\thing\Audit2;

class ThingConverter
{
    public static function toThing(Thing2 $originalThing)
    {
        $newThing = new Thing();
        
        $newThing->setThingId($originalThing->getThingId());
        $newThing->setTypeId($originalThing->getTypeId());
        $newThing->setThingState($originalThing->getThingState());
        $newThing->setFlags($originalThing->getFlags());
        $newThing->setEffDate($originalThing->getEffDate());
        $newThing->setCreated(self::toAudit($originalThing->getCreated())); // Thing2 only
        $newThing->setUpdated(self::toAudit($originalThing->getUpdated())); // Thing2 only
        $newThing->setDataXml($originalThing->getDataXml());
        $newThing->setDataOther($originalThing->getBlobPayload());
        $newThing->setEffPermissions($originalThing->getEffPermissions());
        $newThing->setTags($originalThing->getTags());
        $newThing->setSignature($originalThing->getSignatureInfo()->getSignature());
        
        return $newThing;
    }
    
    public static function toThing2(Thing $originalThing)
    {
        $newThing = new Thing2();
        
        $newThing->setTypeId($originalThing->getTypeId());
        $newThing->setThingState($originalThing->getThingState());
        $newThing->setFlags($originalThing->getFlags());
        $newThing->setEffDate($originalThing->getEffDate());
        $newThing->setDataXml($originalThing->getDataXml());
        $newThing->setEffPermissions($originalThing->getEffPermissions());
        $newThing->getSignatureInfo()->setSignature($originalThing->getSignature());
        
        if ($originalThing->getThingId()->getValue())
        {
            $newThing->setThingId($originalThing->getThingId());
        }
        
        if ($originalThing->getCreated()->getTimestamp())
        {
            $newThing->setCreated(self::toAudit2($originalThing->getCreated())); // Thing2 only
        }
        
        if ($originalThing->getUpdated()->getTimestamp())
        {
            $newThing->setUpdated(self::toAudit2($originalThing->getUpdated())); // Thing2 only
        }

        if ($originalThing->getDataOther()->getContentType()->getValue())
        {
            $newThing->setBlobPayload($originalThing->getDataOther()); // FIXME: will break
        }

        if ($originalThing->getTags()->getValue())
        {
            $newThing->setTags($originalThing->getTags());
        }
        
        return $newThing;
    }
    
    protected static function toAudit(Audit2 $originalAudit)
    {
        $newAudit = new Audit();
        
        $newAudit->setTimestamp($originalAudit->getTimestamp());
        $newAudit->setAppId($originalAudit->getAppId());
        $newAudit->setPersonId($originalAudit->getPersonId());
        $newAudit->setImpersonatorId($originalAudit->getImpersonatorId());
        $newAudit->setAccessAvenue($originalAudit->getAccessAvenue());
        $newAudit->setAuditAction($originalAudit->getAuditAction());
        
        return $newAudit;
    }
    
    protected static function toAudit2(Audit $originalAudit)
    {
        $newAudit = new Audit2();
        
        $newAudit->setTimestamp($originalAudit->getTimestamp());
        $newAudit->setAppId($originalAudit->getAppId());
        $newAudit->setPersonId($originalAudit->getPersonId());
        $newAudit->setImpersonatorId($originalAudit->getImpersonatorId());
        $newAudit->setAccessAvenue($originalAudit->getAccessAvenue());
        $newAudit->setAuditAction($originalAudit->getAuditAction());
        
        return $newAudit;
    }
}
