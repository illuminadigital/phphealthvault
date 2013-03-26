<?php
namespace DLS\Healthvault\Proxy\Type;

use DLS\Healthvault\Proxy\Type\BaseType;
use DLS\Healthvault\Utilities\VocabularyInterface;

abstract class VocabularyType extends BaseType
{
    /**
     * @var \DLS\Healthvault\Utilities\VocabularyInterface
     */
    protected $vocabularyInterface;
    
    public function __construct(VocabularyInterface $vocabularyInterface, $thingElement = NULL)
    {
        $this->vocabularyInterface = $vocabularyInterface;

        parent::__construct($thingElement);
    }
    
    public function getVocabularyInterface()
    {
        return $this->vocabularyInterface;
    }

    public function setVocabularyInterface($vocabularyInterface)
    {
        $this->vocabularyInterface = $vocabularyInterface;
    }
}
