<?php
include_once(dirname(dirname(__FILE__))."/classes/class.RDRData.php");
/**
 * Class RDRDataTest
 * Test Suite to ensure that the core data class
 * is behaving as efficiently as it should do
 *
 * @author Shrey Puranik
 * @date February 2017
 * @group RandomDataRetriever
 */
class RDRDataTest extends PHPUnit_Framework_TestCase
{
    /**
     * Set up the RDRData class
     * for all tests
     */
    public function setUp()
    {
        $this->rdrData = new RDRData();
    }

    /**
     * Ensure that the data class has
     * a file name attribute
     * @test
     */
    public function ensureThatClassHasFileNameAttribute()
    {
        $this->assertClassHasAttribute('filename', 'RDRData');
    }

    /**
     * Ensure that the data class has
     * a datastoredirectory attribute
     * @test
     */
    public function ensureThatClassHasDataStoreDirectoryAttribute()
    {
        $this->assertClassHasAttribute('dataStoreDirectory', 'RDRData');
    }

    /**
     * Ensure that the data store directory check returns a
     * boolean response
     * @test
     */
    public function ensureThatDataStoreDirectoryCheckReturnsBooleanRespose()
    {
        $this->assertTrue(is_bool($this->rdrData->doesDataStoreDirectoryExist()));
    }


    /**
     * Ensure that the number of rows in the file is returned
     * @test
     */
    public function ensureRowCounterReturnsAnInt()
    {
        $this->assertTrue(is_int($this->rdrData->getCalculatedRowCount()));
    }
}