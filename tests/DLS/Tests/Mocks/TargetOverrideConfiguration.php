<?php
namespace DLS\Tests\Mocks;

use DLS\Healthvault\BaseHealthvaultConfiguration;

class TargetOverrideConfiguration extends BaseHealthvaultConfiguration {
	public function getReturnUrl($target) {
		switch ($target) {
			case 'AppAuth':
			case 'Auth':
				return 'http://foo.bar.baz/' . $target;
				
			default:
				return 'http://foo.bar.baz/';
		}
	}
}
