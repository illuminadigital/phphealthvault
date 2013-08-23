<?php
namespace DLS\Healthvault;

use DLS\Healthvault\Shell\ShellMethodFactory;
use DLS\Healthvault\Platform\PlatformMethodFactory;
use DLS\Healthvault\Blob\BlobStoreFactory;

use DLS\Healthvault\Proxy\ProxyFactory;
use DLS\Healthvault\Proxy\ThingFactory;

use com\microsoft\wc\thing\Thing2;

use Doctrine\OXM\Types\Type;

/**
 * Entry point for all interactions with Microsoft HealthVault
 * 
 * @author Alistair MacDonald <alistair.macdonald@digitallifesciences.co.uk>
 *
 */
class Driver {
    
    /**
     * Configuration information required for the connection
     * 
     * @var \DLS\Healthvault\HealthvaultConfigurationInterface
     */
    private $configuration;
    
    /**
     * Factory for the shell methods
     * 
     * @var \DLS\Healthvault\Shell\ShellMethodFactory
     */
    private $shellMethodFactory;
    
    /**
     * Factory for the platform methods
     * 
     * @var \DLS\Healthvault\Platform\PlatformMethodFactory
     */
    private $platformMethodFactory;
    
    /**
     * Storage area for Blobs
     * 
     * @var \DLS\Healthvault\Blob\BlobStore
     */
    private $blobStore;
    
    /**
     * Factory for converting Things to the Proxy equivalent
     * 
     * @var \DLS\Healthvault\Proxy\ProxyFactory
     */
    private $proxyFactory;
    
    /**
     * Factory for returning Things based on their ID
     * 
     * @var \DLS\Healthvault\Proxy\ThingFactory
     */
    private $thingFactory;
    
    public function __construct(HealthvaultConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;
        
        // We need to change the default "DateTime" handler for OXM to be an ISO-8601 compliant one
        Type::overrideType(Type::DATETIME, '\DLS\Types\XMLSchemaDateTimeType');
        
        // Set up the thing factory. BEWARE: This could cause a loop if the code is changed
        $this->getThingFactory();
    }
    
    /**
     * Return a shell method object for the method name
     * 
     * @param string $methodName
     */
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
    
    /**
     * Return a platform method objeect for the method name
     * 
     * @param string $methodName
     */
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
    
    
    /**
     * Return the configuration information used for this connection
     * 
     * @return \DLS\Healthvault\HealthvaultConfigurationInterface
     */
    public function getConfiguration()
    {
    	return $this->configuration;
    }
    
    
    /**
     * Return the Blob Store for the thing
     * 
     * @param Thing2 $thing
     * 
     * @return \DLS\Healthvault\Blob\BlobStore
     */
    public function getBlobStore(Thing2 $thing)
    {
        $blobStoreFactory = $this->getBlobStoreFactory();
        
        return $blobStoreFactory->getBlobStore($thing);
    }
    
    /**
     * Return the factory used to obtain Blob Stores
     * 
     * @return \DLS\Healthvault\Blob\BlobStoreFactory
     */
    public function getBlobStoreFactory() 
    {
        if ( ! isset($this->blobStoreFactory) )
        {
            $this->blobStoreFactory = new BlobStoreFactory($this->getPlatformMethodFactory());
        }
        
        return $this->blobStoreFactory;
    }
    
    /**
     * Return the main vocabulary interface for the connection
     * 
     * @return \DLS\Healtvault\Utilities\VocabularyInterface
     */
    public function getVocabularyInterface()
    {
        return $this->configuration->getVocabularyInterface();
    }
    
    /**
     * Return the factory used to provide proxies for things
     * 
     * Provides the following hook:
     * - CONFIGURATION->registerProxies(ProxyFactory) 
     * 
     * @return \DLS\Healthvault\Proxy\ProxyFactory
     */
    public function getProxyFactory()
    {
        // The proxyies we currently know about.
        // FIXME: Get the list of proxies automatically using annotations or the like
        static $proxyData = array(
            \com\microsoft\wc\thing\appointment\Appointment::ID => '\\DLS\\Healthvault\\Proxy\\Thing\Appointment',
            \com\microsoft\wc\thing\BloodPressure\BloodPressure::ID => '\\DLS\\Healthvault\\Proxy\\Thing\BloodPressure',
            \com\microsoft\wc\thing\care_plan\CarePlan::ID => '\\DLS\Healthvault\\Proxy\\Thing\\CarePlan',
            \com\microsoft\wc\thing\condition\Condition::ID => '\\DLS\Healthvault\Proxy\\Thing\\Condition',
            \com\microsoft\wc\thing\dietary_intake_daily\DietaryIntakeDaily::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\DietaryIntakeDaily',
            \com\microsoft\wc\thing\emotion\Emotion::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Emotion',
            \com\microsoft\wc\thing\exercise\Exercise::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Exercise',
            \com\microsoft\wc\thing\family_history\FamilyHistory::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\FamilyHistory',
            \com\microsoft\wc\thing\file\File::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\File',
            \com\microsoft\wc\thing\BloodGlucose\BloodGlucose::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Glucose',
            \com\microsoft\wc\thing\HbA1C\HbA1C::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\HbA1C',
            \com\microsoft\wc\thing\heart_rate\HearRate::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\HearRate',
            \com\microsoft\wc\thing\height\Height::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Height',
            \com\microsoft\wc\thing\life_goal\LifeGoal::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\LifeGoal',
            \com\microsoft\wc\thing\medication\Medication::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Medication',
            \com\microsoft\wc\thing\peak_flow\PeakFlow::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\PeakFlow',
            \com\microsoft\wc\thing\personal\Personal::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Personal',
            \com\microsoft\wc\thing\personal_image\PersonalImage::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\PersonalImage',
            \com\microsoft\wc\thing\question_answer\QuestionAnswer::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\QuestionAnswer',
            \com\microsoft\wc\thing\weight\Weight::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Weight',
            \com\microsoft\wc\thing\basic\Basic::ID => '\\DLS\\Healthvault\\Proxy\\Thing\\Basic',
        );
        
        if ( ! isset($this->proxyFactory) )
        {
            $this->proxyFactory = new ProxyFactory($this->getVocabularyInterface(), $this->getBlobStoreFactory());
            
            // We register each thing ID with it's corresponding proxy class
            foreach ($proxyData as $thingId => $proxyClass) {
                $this->proxyFactory->registerProxy($thingId, $proxyClass);
            } 

            // Provide a hook that implementors can use to replace our proxies with their own
            $callable = array($this->configuration, 'registerProxies');
            if (is_callable($callable)) {
                call_user_func($callable, $this->proxyFactory);
            }
        }
        
        return $this->proxyFactory;
    }
    
    /**
     * Returns a factory for creating things from their IDs
     * 
     * @return \DLS\Healthvault\Proxy\ThingFactory
     */
    public function getThingFactory()
    {
        if ( ! isset($this->thingFactory)) {
            $this->thingFactory = new ThingFactory($this);
        }
        
        return $this->thingFactory;
    }
}
