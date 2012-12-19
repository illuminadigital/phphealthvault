<?php
namespace DLS\Tests\Healthvault\Shell;

use DLS\Tests\HealthvaultTestCase;
use DLS\Healthvault\Shell\Exceptions\MissingParameterException;

class ViewItemsTest extends HealthvaultTestCase {

	/**
	 * @test
	 */
	public function theDriverMustGiveViewItemsShellMethods()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('ViewItems');
		
		$this->assertInstanceOf('DLS\Healthvault\Shell\ViewItemsMethod', $method);
		$this->assertEquals('ViewItems', $method->getMethodName());
	}
	
	/**
	 * @test
	 */
	public function theViewItemsShellMethodUrlsMustBeValid()
	{
		$driver = $this->getDriverWithRowConfiguration();
		
		$method = $driver->getShellMethod('ViewItems');
		
		try {
			$method->getMethodUrl();
			$this->fail('Did not detect missing parameters');
		}
		catch (MissingParameterException $e)
		{
			// good
		}
		
		$method->setExternalRecordId('baz');
		
		$baseUrl = sprintf ('https://account.healthvault.co.uk/redirect.aspx?target=ViewItems&targetqs=appid%%3D%s%%26extrecordid%%3D%s',
				$this->applicationId,
				'baz'
		);

		$method->addTypeId('Type1');
		$this->assertEquals($baseUrl . '%26typeid%3DType1%26additem%3DFalse', $method->getMethodUrl());

		$method->setTypeIds(array('Type2', 'Type3'));
		$this->assertEquals($baseUrl . '%26typeid%3DType2%252CType3%26additem%3DFalse', $method->getMethodUrl());
		
		$method->addTypeIds(array('Type1', 'Type4'));
		$this->assertEquals($baseUrl . '%26typeid%3DType2%252CType3%252CType1%252CType4%26additem%3DFalse', $method->getMethodUrl());
		
		$method->addTypeId('Type4');
		$this->assertEquals($baseUrl . '%26typeid%3DType2%252CType3%252CType1%252CType4%26additem%3DFalse', $method->getMethodUrl());
		
		$method->setAllowAddItem(TRUE);
		$this->assertEquals($baseUrl . '%26typeid%3DType2%252CType3%252CType1%252CType4%26additem%3DTrue', $method->getMethodUrl());
		
		$method->setAllowAddItem(FALSE);
		$this->assertEquals($baseUrl . '%26typeid%3DType2%252CType3%252CType1%252CType4%26additem%3DFalse', $method->getMethodUrl());

		$method->setAllowAddItem(NULL);
		
		try {
			$method->getMethodUrl();
			
			$this->fail('Did not detect missing parameters');
		}
		catch (MissingParameterException $e)
		{
			// Good
		}
	}
}
