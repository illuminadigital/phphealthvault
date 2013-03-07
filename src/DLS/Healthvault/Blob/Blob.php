<?php
namespace DLs\Healthvault\Blob;
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

    protected $isDeleted = FALSE;

    protected $isNew = FALSE;

    protected $isUploaded = FALSE;

    protected $hashAlgorithm;

    protected $hashParams;

    protected $hash;

    public function __construct($name, $size = NULL, $contentType = NULL)
    {
        $this->name = $name;
        $this->size = $size;
        $this->contentType = $contentType;
    }

    public function isDeleted()
    {
        return $this->isDeleted;
    }

    public function isNew()
    {
        return $this->isNew;
    }

    public function isUploaded()
    {
        return $this->isUploaded;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    public function getData($fetchIfEmpty = TRUE)
    {
        if (empty($this->data) && $fetchIfEmpty && !empty($this->reference)) {
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

            $this->isNew = FALSE;
            $this->isUploaded = TRUE;
        }

        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function hasData()
    {
        return (!is_empty($this->data));
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    public function getHashAlgorithm()
    {
        return $this->hashAlgorithm;
    }

    public function setHashAlgorithm($hashAlgorithm)
    {
        $this->hashAlgorithm = $hashAlgorithm;
        
        return $this;
    }

    public function getHashParams()
    {
        return $this->hashParams;
    }

    public function setHashParams($hashParams)
    {
        $this->hashParams = $hashParams;
        
        return $this;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function setHash($hash)
    {
        $this->hash = $hash;
        
        return $this;
    }

    public function delete()
    {
        $this->isDeleted = TRUE;
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
            return mb_strlen($this->output_data, 'latin1');
        } else {
            return strlen($this->output_data);
        }
    }
}
