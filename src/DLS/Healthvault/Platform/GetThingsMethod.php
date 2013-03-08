<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

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
        return sprintf('\com\microsoft\wc\methods\GetThings3\Info', $this->methodName);
    }
    
    public function addBasicFilter($id) {
        $lastGroup = $this->getLastGroup();
    	
		$filterSpec = new \com\microsoft\wc\methods\GetThings\ThingFilterSpec();
		$filterSpec->addTypeId(new \com\microsoft\wc\types\Guid($id));
		
		$lastGroup->addFilter($filterSpec);
    }
    
    public function addBasicIdFilter($id) {
        $lastGroup = $this->getLastGroup();
        
        $lastGroup->addId(new \com\microsoft\wc\types\Guid($id));
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
    	
    	$group = new \com\microsoft\wc\methods\GetThings3\ThingRequestGroup2();
    	$group->setFormat($format);
    	
    	return $group;
    }
    
    public function getDefaultFormat() {
    	$format = new \com\microsoft\wc\methods\GetThings3\ThingFormatSpec2();
    	
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
        
        $section = new \com\microsoft\wc\methods\GetThings3\ThingSectionSpec2($sectionName);
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
        //$blobFormatSpec = $blobFormat->getBlobFormatSpec();
        //$blobFormatSpec->setValue('streamed');
        $blobFormatSpec = new \com\microsoft\wc\methods\GetThings3\BlobFormatSpec('streamed');
        $blobFormat->setBlobFormatSpec($blobFormatSpec);
    }
}
