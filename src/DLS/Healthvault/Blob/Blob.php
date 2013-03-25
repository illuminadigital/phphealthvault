<?php
namespace DLS\Healthvault\Blob;

class Blob
{
    protected $name;

    protected $contentType;

    protected $size;

    /**
     * The remote reference (URL) for the uploaded blob
     * @var string
     */
    protected $reference;

    protected $data = NULL;
    
    protected $filename = NULL;

    protected $isDeleted = FALSE;

    protected $isModified = FALSE;

    protected $isUploaded = FALSE;

    protected $hashAlgorithm;

    protected $hashParams;

    protected $hash;

    public function __construct($name = NULL, $size = NULL, $contentType = NULL)
    {
        $this->name = $name;
        $this->size = $size;
        $this->contentType = $contentType;
    }

    public function isDeleted()
    {
        return $this->isDeleted;
    }

    public function isModified()
    {
        return $this->isModified;
    }

    public function isUploaded()
    {
        return $this->isUploaded;
    }
    
    public function setUploaded()
    {
        $this->isUploaded = TRUE;
        
        return $this;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;

        $this->isModified = TRUE;
        
        return $this;
    }

    public function getData($fetchIfEmpty = TRUE)
    {
        if (empty($this->data) && $fetchIfEmpty) {
            if ( ! empty($this->reference) ) {
                $conn = curl_init($this->reference);
                curl_setopt($conn, CURLOPT_HEADER, FALSE);
                curl_setopt($conn, CURLOPT_RETURNTRANSFER, TRUE);
    
                $response = curl_exec($conn);
    
                curl_close($conn);
    
                if ($response === FALSE) {
                    throw new \NetworkIOException(
                            sprintf('Failed to retrieve blob content from %s',
                                    $this->reference));
                }
                
                $this->data = $response;
                $this->size = self::safeStrlen($response);
    
                $this->isModified = FALSE;
                $this->isUploaded = TRUE;
                
            } else if ( ! empty($this->filename) ) {
                $this->data = file_get_contents($this->filename);
                
                $this->size = self::safeStrlen($this->data);
    
                $this->isModified = FALSE;
                $this->isUploaded = FALSE;
            }
        }

        return $this->data;
    }

    public function setData($data, $updateOtherFields = TRUE)
    {
        if ( ! is_string($data) ) {
            $this->data = NULL;
            
            return $this;
        }
        
        $this->data = $data;
        
        if ($updateOtherFields) {
            $this->size = self::safeStrlen($this->data);
            $this->contentType = self::determineContentType($data, TRUE);
        }
        
        $this->isModified = TRUE;
        
        return $this;
    }

    public function hasData()
    {
        return (!is_empty($this->data));
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        
        $this->isModified = TRUE;
        
        return $this;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setContentType($contentType)
    {
        $this->contentType = $contentType;

        $this->isModified = TRUE;
        
        return $this;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;

        $this->isModified = TRUE;
        
        return $this;
    }

    public function getHashAlgorithm()
    {
        return $this->hashAlgorithm;
    }

    public function setHashAlgorithm($hashAlgorithm)
    {
        $this->hashAlgorithm = $hashAlgorithm;

        $this->isModified = TRUE;
        
        return $this;
    }

    public function getHashParams()
    {
        return $this->hashParams;
    }

    public function setHashParams($hashParams)
    {
        $this->hashParams = $hashParams;

        $this->isModified = TRUE;
        
        return $this;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function setHash($hash)
    {
        $this->hash = $hash;

        $this->isModified = TRUE;
        
        return $this;
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    public function delete()
    {
        $this->isDeleted = TRUE;
        $this->isModified = TRUE;
    }
    
    public function setClean($isClean = FALSE) {
        if ($isClean) {
            $this->isModified = FALSE;
        }
    }

    /**
     * @see http://www.php.net/manual/en/function.strlen.php#54906
     * 
     * @param string $data
     * @return int
     */
    public static function safeStrlen($data)
    {
        $has_mbstring = extension_loaded('mbstring')
                || @dl(PHP_SHLIB_PREFIX . 'mbstring.' . PHP_SHLIB_SUFFIX);
        $has_mb_shadow = (int) ini_get('mbstring.func_overload');

        if ($has_mbstring && ($has_mb_shadow & 2)) {
            return mb_strlen($data, 'latin1');
        } else {
            return strlen($data);
        }
    }
    
    public static function determineContentType($file, $isString = FALSE)
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);

        if ( ! $isString ) {
            $contentType = finfo_file($finfo, $file);
        } else {
            $contentType = finfo_buffer($finfo, $file);
        }
        
        finfo_close($finfo);
        
        if ( empty($contentType) ) {
            $contentType = 'application/data'; // Fallback
        }
        
        return $contentType;
    }
}
