<?php
namespace DLS\Healthvault\Utilities;

use Doctrine\OXM\Id\UuidGenerator;

class Guid
{
    static function getGuid() {
        $generator = new UuidGenerator();
        $generator->setSalt((string) microtime());
        
        $v4Guid = $generator->generateV4();
        $v5Guid = $generator->generateV5($v4Guid, $generator->getSalt());
        
        $guid = sprintf("%s-%s-%s-%s-%s",
            substr($v5Guid, 0, 8),
            substr($v5Guid, 8, 4),
            substr($v5Guid, 12, 4),
            substr($v5Guid, 16, 4),
            substr($v5Guid, 20, 12)
        );
        
        return $guid;
    }
}
