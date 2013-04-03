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
    
    public function getVocabularyInterface()
    {
        return $this->vocabularyInterface;
    }

    public function setVocabularyInterface($vocabularyInterface)
    {
        $this->vocabularyInterface = $vocabularyInterface;
    }
}
