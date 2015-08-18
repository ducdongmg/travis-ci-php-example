<?php
/**
 * TestClass
 */
class TestClass {
    const task = 'task';
    private $_Something = 'test';
    /**
     * @test
     */
    public function IsTest($index){
		$this->_Something = 'fix bug';
        return $index;
    }
}