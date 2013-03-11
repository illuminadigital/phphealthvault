<?php
namespace DLS\Healthvault\Platform;
use DLS\Healthvault\Platform\NoBodyPlatformMethod;

class BeginPutBlobMethod extends NoBodyPlatformMethod
{
    protected $methodName = 'BeginPutBlob';
    protected $mustIncludeRecord = TRUE;
}
