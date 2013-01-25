<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

class GetThingsMethod extends PlatformMethod
{
    protected $methodName = 'GetThings';
    protected $methodVersion = 2;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->mustIncludeRecord = TRUE;
        parent::__construct($configuration);
    }

    public function addBasicFilter($id) {
        $lastGroup = $this->getLastGroup();
    	
		$filterSpec = new \com\microsoft\wc\methods\GetThings\ThingFilterSpec();
		$filterSpec->addTypeId(new \com\microsoft\wc\types\Guid($id));
		
		$lastGroup->addFilter($filterSpec);
    }
    
    public function getLastGroup() {
        $groups = $this->requestData->getInfo()->getGroup();
         
        if (empty($groups)) {
            $lastGroup = $this->createGroup();
        
            $this->requestData->getInfo()->addGroup($lastGroup);
        } else {
            $groupIndexes = array_keys($groups);
            $lastGroupIndex = array_pop($groupIndexes);
            $lastGroup = $groups[$lastGroupIndex];
        }
        
        return $lastGroup;
    }
    
    public function createGroup($format = NULL) {
    	if ($format == NULL) {
    		$format = $this->getDefaultFormat();
    	}
    	
    	$group = new \com\microsoft\wc\methods\GetThings\ThingRequestGroup();
    	$group->setFormat($format);
    	
    	return $group;
    }
    
    public function getDefaultFormat() {
    	$format = new \com\microsoft\wc\methods\GetThings\ThingFormatSpec();
    	
    	foreach (array('core') as $sectionName) {
    	    $this->addSectionToFormat($format, $sectionName);
    	}

        $format->addXml('');
    	 
    	return $format;
    }
    
    public function addSectionToFormat($format, $sectionName) {
        // Check if the section has already been added
        foreach ($format->getSection() as $existingSection) {
            if ($existingSection->getValue() == $sectionName) {
                return;
            }
        }
        
        $section = new \com\microsoft\wc\methods\GetThings\ThingSectionSpec($sectionName);
        $format->addSection($section);
        
        return $format;
    }
    
    public function addSection($sectionName) {
        $lastGroup = $this->getLastGroup();
        
        $format = $lastGroup->getFormat();
        
        return $this->addSectionToFormat($format, $sectionName);
    }
}
