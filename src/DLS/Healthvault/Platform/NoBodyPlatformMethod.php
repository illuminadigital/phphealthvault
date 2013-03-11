<?php
namespace DLS\Healthvault\Platform;

use DLS\Healthvault\Platform\PlatformMethod;

class NoBodyPlatformMethod extends PlatformMethod
{
    protected function getInfoClassName() {
        return NULL;
    }
}
