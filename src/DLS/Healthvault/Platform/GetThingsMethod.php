<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

class GetThingsMethod extends PlatformMethod
{
    protected $methodName = 'GetThings';
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->mustIncludeRecord = TRUE;
        parent::__construct($configuration);
    }

    public function addBasicFilter($id) {
    	$groups = $this->requestData->getInfo()->getGroup();
    	
    	if (empty($groups)) {
    		$lastGroup = $this->createGroup();
    		
    		$this->requestData->getInfo()->addGroup($lastGroup);
    	} else {
	    	$groupIndexes = array_keys($groups);
	    	$lastGroupIndex = array_pop($groupIndexes);
	    	$lastGroup = $groups[$lastGroupIndex];
    	}
    	
		$filterSpec = new \com\microsoft\wc\methods\GetThings\ThingFilterSpec();
		$filterSpec->addTypeId(new \com\microsoft\wc\types\Guid($id));
		
		$lastGroup->addFilter($filterSpec);
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
    		$section = new \com\microsoft\wc\methods\GetThings\ThingSectionSpec($sectionName);
    		$format->addSection($section);
    	}

        $format->addXml('');
    	 
    	return $format;
    }
    
}
