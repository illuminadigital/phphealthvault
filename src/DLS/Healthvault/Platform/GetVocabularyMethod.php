<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\HealthvaultConfigurationInterface;

use com\microsoft\wc\vocab\VocabularyKey;

class GetVocabularyMethod extends PlatformMethod
{
    protected $methodName = 'GetVocabulary';
    protected $methodVersion = 2;
    
    public function addBasicKey($name, $family = 'wc')
    {
        $parameters = $this->requestData->getInfo()->getVocabularyParameters();
        
        foreach ($parameters->getVocabularyKey() as $key)
        {
            if ($key->getName() == $name && $key->getFamily() == $family)
            {
                return $key;
            }
        }
        
        $key = new VocabularyKey($name, $family);
        
        $parameters->addVocabularyKey($key);
        
        return $key;
    }
}
