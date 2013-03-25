<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use com\microsoft\wc\types\Guid;
use com\microsoft\wc\methods\GetThings\ThingFilterSpec;
use com\microsoft\wc\methods\GetThings3\ThingRequestGroup2;
use com\microsoft\wc\methods\GetThings3\ThingFormatSpec2;
use com\microsoft\wc\methods\GetThings3\ThingSectionSpec2;
use com\microsoft\wc\methods\GetThings3\BlobFormatSpec;

class GetThingsMethod extends PlatformMethod
{
    protected $methodName = 'GetThings';
    protected $methodVersion = 3;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->mustIncludeRecord = TRUE;
        parent::__construct($configuration);
    }

    protected function getInfoClassName()
    {
        return '\com\microsoft\wc\methods\GetThings3\Info';
    }
    
    public function addBasicFilter($id, $newGroup = FALSE) {
        if ( $newGroup ) {
            $theGroup = $this->addGroup($this->createGroup());
        } else {
            $theGroup = $this->getLastGroup();
        }
    	
		$filterSpec = new ThingFilterSpec();
		$filterSpec->addTypeId(new Guid($id));
		
		$theGroup->addFilter($filterSpec);
		
		return $theGroup;
    }
    
    public function addBasicIdFilter($id) {
        $lastGroup = $this->getLastGroup();
        
        $lastGroup->addId(new Guid($id));
    }
    
    public function getLastGroup() {
        $groups = $this->requestData->getInfo()->getGroup();
         
        if (empty($groups)) {
            $lastGroup = $this->createGroup();
            
            $this->addGroup($lastGroup);
        } else {
            $groupIndexes = array_keys($groups);
            $lastGroupIndex = array_pop($groupIndexes);
            $lastGroup = $groups[$lastGroupIndex];
        }
        
        return $lastGroup;
    }

    public function addGroup($group) {
        $this->requestData->getInfo()->addGroup($group);
        
        return $group;
    }
    
    public function createGroup($format = NULL) {
    	if ($format == NULL) {
    		$format = $this->getDefaultFormat();
    	}
    	
    	$group = new ThingRequestGroup2();
    	$group->setFormat($format);
    	
    	return $group;
    }
    
    public function getDefaultFormat() {
    	$format = new ThingFormatSpec2();
    	
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
        
        $section = new ThingSectionSpec2($sectionName);
        $format->addSection($section);
        
        return $format;
    }
    
    public function addSection($sectionName) {
        $lastGroup = $this->getLastGroup();
        
        $format = $lastGroup->getFormat();
        
        return $this->addSectionToFormat($format, $sectionName);
    }
    
    public function includeStreamedBlobs($group = NULL) {
        if ($group == NULL) {
            $group = $this->getLastGroup();
        }
        
        $format = $group->getFormat();
        
        $this->addSectionToFormat($format, 'blobpayload');
        
        $blobPayloadRequest = $format->getBlobPayloadRequest();
        $blobFormat = $blobPayloadRequest->getBlobFormat();
        $blobFormatSpec = new BlobFormatSpec('streamed');
        $blobFormat->setBlobFormatSpec($blobFormatSpec);
    }
}
