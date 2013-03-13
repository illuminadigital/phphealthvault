<?php
namespace DLS\Healthvault\Utilities;

interface VocabularyInterface
{
    /**
     * Return the entire vocabulary as an array of the textual representation of the entries.
     * The key is the code for the entry
     * 
     * @param string $vocabulary
     * @param string $family
     */
    public function get($vocabulary, $family = 'wc');
    
    /**
     * Return the code for the entry with the given textual representation
     * 
     * @param unknown $entryText
     * @param unknown $vocabulary
     * @param string $family
     */
    public function getEntry($entryText, $vocabulary, $family = 'wc');
}
