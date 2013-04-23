<?php
namespace DLS\Healthvault\Proxy\Type;
use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\Extension as hvExtension;

class Extension extends BaseType
{
    /**
     * The source/type ID of this extension
     * 
     * @var string
     */
    protected $source;

    /**
     * The payload elements
     * 
     * @var array
     */
    protected $elements = array();

    /**
     * The version of the extension
     * 
     * @var string
     */
    protected $ver;

    /**
     * The logo
     * 
     * @var string
     */
    protected $logo;

    /**
     * A transform for displaying the information
     * 
     * @var string
     */
    protected $xsl;
    
    /**
     * The proxy object (for reference)
     * 
     * @var object
     */
    protected $proxy;
    
    public function __construct($thingElement = NULL, $source = NULL, $thingProxy = NULL) {
        if ( ! empty($source) ) {
            $this->source = $source;
        }
        
        if ( ! empty($thingProxy) ) {
            $this->proxy = $thingProxy;
        }
        
        parent::__construct($thingElement);
    }
    

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
        
        return $this;
    }

    public function getElements()
    {
        return $this->elements;
    }

    public function setElements(array $elements)
    {
        $this->elements = $elements;
        
        return $this;
    }
    
    public function addElement($element)
    {
        if ( ! isset($this->elements) ) {
            $this->elements = array($element);
        } else if (! is_array($this->elements)) {
            $this->elements = array($this->elements, $element);
        } else {
            $this->elements[] = $element;
        }
        
        return $this;
    }

    public function getVer()
    {
        return $this->ver;
    }

    public function setVer($ver)
    {
        $this->ver = $ver;
        
        return $this;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
        
        return $this;
    }

    public function getXsl()
    {
        return $this->xsl;
    }

    public function setXsl($xsl)
    {
        $this->xsl = $xsl;
        
        return $this;
    }
    
    public function getProxy() {
        return $this->proxy;
    }
    
    public function setProxy($proxy) {
        $this->proxy = $proxy;
        
        return $this;
    }
    
    public function setFromThingElement($thingElement)
    {
        $this->source = $thingElement->getSource();
        $this->elements = $this->getElementsFromThingElement($thingElement);
        $this->ver = $thingElement->getVer();
        $this->logo = $thingElement->getLogo();
        $this->xsl = $thingElement->getXsl();
    }
    
    protected function getElementsFromThingElement($thingElement)
    {
        return $thingElement->getAny();
    }

    public function updateToThingElement($thingElement)
    {
        $thingElement->setSource($this->source);
        $this->updateElementsForThingElement($thingElement);
        $thingElement->getVer($this->ver);
        $thingElement->getLogo($this->logo);
        $thingElement->getXsl($this->xsl);
    }
    
    protected function updateElementsForThingElement($thingElement) 
    {
        $thingElement->setAny($this->elements);
    }

    public function __toString()
    {
        try {
            return 'Extension: '
                    . (isset($this->source) ? $this->source : 'Unknown source');
        } catch (\Exception $e) {
            return 'Extension';
        }
    }
}
