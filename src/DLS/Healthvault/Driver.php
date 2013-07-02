<?php
namespace DLS\Healthvault;

use DLS\Healthvault\Shell\ShellMethodFactory;
use DLS\Healthvault\Platform\PlatformMethodFactory;
use DLS\Healthvault\Blob\BlobStoreFactory;

use DLS\Healthvault\Proxy\ProxyFactory;
use DLS\Healthvault\Proxy\ThingFactory;

use com\microsoft\wc\thing\Thing2;

use Doctrine\OXM\Types\Type;

class Driver {
    
    /**
     * Configuration information required for the connection
     * 
     * @var HealthvaultConfiguration
     */
    private $configuration;
    
    private $shellMethodFactory;
    private $platformMethodFactory;
    private $blobStore;
    private $proxyFactory;
    private $thingFactory;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
        
        // We need to change the default "DateTime" handler for OXM to be an ISO-8601 compliant one
        Type::overrideType(Type::DATETIME, '\DLS\Types\XMLSchemaDateTimeType');
        
        // Set up the thing factory. BEWARE: This could cause a loop if the code is changed
        $this->getThingFactory();
    }
    
    public function getShellMethod($methodName)
    {
        $shellMethodFactory = $this->getShellMethodFactory();
        
        return $shellMethodFactory->getShellMethod($methodName);
    }
    
    protected function getShellMethodFactory()
    {
        if ( ! isset($this->shellMethodFactory) )
        {
            $this->shellMethodFactory = new ShellMethodFactory($this->configuration);
        }
        
        return $this->shellMethodFactory;
    }
    
    public function getPlatformMethod($methodName)
    {
        $platformMethodFactory = $this->getPlatformMethodFactory();
        
        return $platformMethodFactory->getPlatformMethod($methodName);
    }
    
    protected function getPlatformMethodFactory()
    {
        if ( ! isset($this->platformMethodFactory) )
        {
            $this->platformMethodFactory = new PlatformMethodFactory($this->configuration);
        }
        
        return $this->platformMethodFactory;
    }
    
    public function getConfiguration()
    {
    	return $this->configuration;
    }
    
    public function getBlobStore(Thing2 $thing)
    {
        $blobStoreFactory = $this->getBlobStoreFactory();
        
        return $blobStoreFactory->getBlobStore($thing);
    }
    
    public function getBlobStoreFactory() 
    {
        if ( ! isset($this->blobStoreFactory) )
        {
            $this->blobStoreFactory = new BlobStoreFactory($this->getPlatformMethodFactory());
        }
        
        return $this->blobStoreFactory;
    }
    
    public function getVocabularyInterface()
    {
        return $this->configuration->getVocabularyInterface();
    }
    
    public function getProxyFactory()
    {
        static $proxyData = array(
            \com\microsoft\wc\thing\appointment\Appointment::ID => '\\DLS\\Healthvault\\Proxy\\Thing\Appointment',
            \com\microsoft\wc\thing\BloodPressure\BloodPressure::ID => '\\DLS\\Healthvault\\Proxy\\Thing\BloodPressure',
            \com\microsoft\wc\thing\care_plan\CarePlan::ID => '\\DLS\Healthvault\\Proxy\\Thing\\CarePlan',
            \com\microsoft\wc\thing\condition\Condition::ID => '\\DLS\Healthvault\Proxy\\Thing\\Condition',
            \com\microsoft\wc\thing\dietary_intake_daily\DietaryIntakeDaily::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\DietaryIntakeDaily',
            \com\microsoft\wc\thing\emotion\Emotion::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Emotion',
            \com\microsoft\wc\thing\exercise\Exercise::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Exercise',
            \com\microsoft\wc\thing\file\File::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\File',
            \com\microsoft\wc\thing\BloodGlucose\BloodGlucose::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Glucose',
            \com\microsoft\wc\thing\Hb1AC\Hb1AC::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\HbA1C',
            \com\microsoft\wc\thing\height\Height::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Height',
            \com\microsoft\wc\thing\life_goal\LifeGoal::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\LifeGoal',
            \com\microsoft\wc\thing\medication\Medication::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Medication',
            \com\microsoft\wc\thing\peak_flow\PeakFlow::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\PeakFlow',
            \com\microsoft\wc\thing\personal\Personal::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Personal',
            \com\microsoft\wc\thing\personal_image\PersonalImage::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\PersonalImage',
            \com\microsoft\wc\thing\question_answer\QuestionAnswer::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\QuestionAnswer',
            \com\microsoft\wc\thing\weight\Weight::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Weight',
        );
        
        if ( ! isset($this->proxyFactory) )
        {
            $this->proxyFactory = new ProxyFactory($this->getVocabularyInterface(), $this->getBlobStoreFactory());
            
            foreach ($proxyData as $thingId => $proxyClass) {
                $this->proxyFactory->registerProxy($thingId, $proxyClass);
            } 

            $callable = array($this->configuration, 'registerProxies');
            if (is_callable($callable)) {
                call_user_func($callable, $this->proxyFactory);
            }
        }
        
        return $this->proxyFactory;
    }
    
    public function getThingFactory()
    {
        if ( ! isset($this->thingFactory)) {
            $this->thingFactory = new ThingFactory($this);
        }
        
        return $this->thingFactory;
    }
}