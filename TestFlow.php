<?php
/**
 * TestClass
 */
class TestClass {
    const flow = 'test';
    private $_something = 'test';
    /**
     * @test
     */
    public function IsTest($index){
        return $index;
    }
}