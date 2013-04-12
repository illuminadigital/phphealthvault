<?php
namespace DLS\Healthvault\Utilities;

use com\microsoft\wc\dates\DateTime;
use com\microsoft\wc\dates\ApproxDateTime;
use com\microsoft\wc\dates\Date;

class DateTimeUtils
{
    public static function getThingDateStr(Date $hvDate)
    {
        return sprintf('%d-%02d-%02d',
                $hvDate->getY()->getValue(), $hvDate->getM()->getValue(), $hvDate->getD()->getValue()
        );
    }
    
    public static function getThingDate(Date $hvDate = NULL)
    {
        if ( ! $hvDate ) {
            return NULL;
        }
    
        $y = $hvDate->getY()->getValue();
        $m = $hvDate->getM()->getValue();
        $d = $hvDate->getD()->getValue();
    
        if ( ! empty($y) && ! empty($m) && ! empty($d)) {
            $dateObj = new \DateTime();
            $dateObj->setDate($y, $m, $d);
            return $dateObj;
        }
    
        return NULL;
    }
    
    
    public static function setThingDate(Date $hvDate, $date) {
        if ( ! $date instanceof \DateTime ) {
            $date = new \DateTime($date);
        }
    
        if ( ! $date instanceof \DateTime ) {
            return FALSE;
        }
    
        $hvDate->getY()->setValue((int)$date->format('Y'));
        $hvDate->getM()->setValue((int)$date->format('m'));
        $hvDate->getD()->setValue((int)$date->format('d'));
    
        return TRUE;
    }
    
    public static function getThingDatetime(DateTime $hvDatetime = NULL)
    {
        if ( ! $hvDatetime ) {
            return NULL;
        }
    
        $hvDate = $hvDatetime->getDate();
        $hvTime = $hvDatetime->getTime();
    
        $y = $hvDate->getY()->getValue();
        $m = $hvDate->getM()->getValue();
        $d = $hvDate->getD()->getValue();
        
        $h = $hvTime->getH()->getValue();
        $i = $hvTime->getM()->getValue();
        $s = $hvTime->getS()->getValue();
        
        if ( ! empty($y) && ! empty($m) && ! empty($d)) {
            $dateObj = new \DateTime();
            $dateObj->setDate($y, $m, $d);
            $dateObj->setTime($h, $i, $s);
            return $dateObj;
        }

        return NULL;
    }
    
    public static function setThingDatetime(DateTime $hvDatetime, $datetime)
    {
        if ( ! $datetime instanceof \DateTime ) {
            $datetime = new \DateTime($datetime);
        }
    
        if ( ! $datetime instanceof \DateTime ) {
            return FALSE;
        }
    
        $date = $hvDatetime->getDate();
        $date->getY()->setValue((int)$datetime->format('Y'));
        $date->getM()->setValue((int)$datetime->format('m'));
        $date->getD()->setValue((int)$datetime->format('d'));
    
        $time = $hvDatetime->getTime();
        $time->getH()->setValue((int)$datetime->format('H'));
        $time->getM()->setValue((int)$datetime->format('i'));
        $time->getS()->setValue((int)$datetime->format('s'));
    
        return TRUE;
    }
    
    public static function setThingApproxDate(ApproxDateTime $hvDate, $date)
    {
        if ( ! empty($date) && ! $date instanceof \DateTime) {
            try {
                $date = new \DateTime($date);
            }
            catch (\Exception $e) {
                error_log('Failed to convert date to DateTime: ' . print_r($date, TRUE));
            }
        }
    
        if ( ! empty($date) ) {
            $structuredDate = $hvDate->getStructured()->getDate();
            $structuredDate->getY()->setValue((int) $date->format('Y'));
            $structuredDate->getM()->setValue((int) $date->format('m'));
            $structuredDate->getD()->setValue((int) $date->format('d'));
        }
        /*
         else if ( empty($date) ) {
        $hvDate->getStructured()->setDate(NULL); // Will be rebuilt on next request
        }
        */
    }
    
    public static function getThingApproxDate(ApproxDateTime $hvDate = NULL)
    {
        if ( ! $hvDate ) {
            return NULL;
        }
    
        $structuredDate = $hvDate->getStructured()->getDate();
    
        $y = $structuredDate->getY()->getValue();
        $m = $structuredDate->getM()->getValue();
        $d = $structuredDate->getD()->getValue();
    
        if ( ! empty($y) && ! empty($m) && ! empty($d)) {
            $dateObj = new \DateTime();
            $dateObj->setDate($y, $m, $d);
            return $dateObj;
        }
    
        return NULL;
    }
    
    public static function setThingApproxDateTime(ApproxDateTime $hvDate, $date)
    {
        if ( ! empty($date) && ! $date instanceof \DateTime) {
            try {
                $date = new \DateTime($date);
            }
            catch (\Exception $e) {
                error_log('Failed to convert date to DateTime: ' . print_r($date, TRUE));
            }
        }
    
        if ( ! empty($date) ) {
            $structuredDate = $hvDate->getStructured()->getDate();
            $structuredDate->getY()->setValue((int) $date->format('Y'));
            $structuredDate->getM()->setValue((int) $date->format('m'));
            $structuredDate->getD()->setValue((int) $date->format('d'));
    
    
            $time = $hvDate->getStructured()->getTime();
            $time->getH()->setValue( (int) $date->format('H'));
            $time->getM()->setValue( (int) $date->format('i'));
            $time->getS()->setValue( (int) $date->format('s'));
        }
    
        /*
         else if ( empty($date) ) {
        $hvDate->getStructured()->setDate(NULL); // Will be rebuilt on next request
        }
        */
    }
    
    public static function getThingApproxDateTime(ApproxDateTime $hvDate = NULL)
    {
        if ( ! $hvDate ) {
            return NULL;
        }
    
        $structuredDate = $hvDate->getStructured()->getDate();
        $structuredTime = $hvDate->getStructured()->getTime();
    
        $y = $structuredDate->getY()->getValue();
        $m = $structuredDate->getM()->getValue();
        $d = $structuredDate->getD()->getValue();
    
        $h = $structuredTime->getH()->getValue();
        $i = $structuredTime->getM()->getValue();
        $s = $structuredTime->getS()->getValue();
    
        if ( ! empty($y) && ! empty($m) && ! empty($d)) {
            $dateObj = new \DateTime();
            $dateObj->setDate($y, $m, $d);
            $dateObj->setTime($h, $i, $s);
            return $dateObj;
        }
    
        return NULL;
    }
    
}
