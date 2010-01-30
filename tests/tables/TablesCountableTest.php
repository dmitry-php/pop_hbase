<?php

/**
 * Copyright (c) 2008, SARL Adaltas. All rights reserved.
 * Code licensed under the BSD License:
 * http://www.php-pop.org/pop_config/license.html
 */

require_once dirname(__FILE__).'/../PopHbaseTestCase.php';

/**
 * Test the PopHbaseTables countable interface.
 * 
 * @author		David Worms info(at)adaltas.com
 *
 */
class TablesCountableTest extends PopHbaseTestCase{
	public function testCount(){
		$hbase = $this->hbase;
		// Test with no table
		$tables = $hbase->tables();
		$this->assertSame(0,count($tables));
		// Test with one table
//		$hbase->tables->create('pop_hbase');
//		$this->assertSame(1,count($tables));
//		$this->assertTrue($tables->current() instanceof PopHbaseTable);
//		$hbase->tables->delete('pop_hbase');
	}
}
