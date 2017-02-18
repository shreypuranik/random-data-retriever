<?php

/**
 * Class RDRData
 * Core Data class for app
 *
 * Handle all interaction with local data store
 *
 * @author Shrey Puranik
 */
class RDRData
{
    //The filename of the file containing the data
    public $filename = "datafile.txt";

    //The directory for the data store
    protected $dataStoreDirectory = "datastore";

    //The fileData variable contains the full body of the data file
    protected $fileData = "";

    //The array that contains individual lines from the $fileData variable
    protected $fileDataArray = array();

    //The counter, which will be used to determine the randomised limits
    protected $calculatedRowCount = 0;

    /**
     * Upon instantiation,
     * let's read in the data,
     * and prepare class variables
     */
    public function __construct()
    {
        $this->defineData();
    }

    /**
     * Return a boolean response when checking
     * if the data store directory exists
     * @return bool
     */
    public function doesDataStoreDirectoryExist()
    {
        return (file_exists($this->dataStoreDirectory) ? true: false);
    }

    /**
     * Return a boolean response when checking
     * if the data file directory exists
     * @return bool
     */
    public function doesDataFileExist()
    {
        return (file_exists($this->dataStoreDirectory .  "/" . $this->filename) ? true: false);
    }

    /**
     * Assuming the data directory and file
     * both exist, let's pull in the data
     */
    public function defineData()
    {
        if (($this->doesDataStoreDirectoryExist())
            && ($this->doesDataFileExist())) {
            //the data store directory exists!
            $this->doc = new DomDocument();
            $this->fileData = file_get_contents($this->dataStoreDirectory  . "/" . $this->filename);

            $this->fileDataArray = explode("\n", $this->fileData);
            $this->calculatedRowCount = count($this->fileDataArray);

        }
    }

    /**
     * Get back the raw file data
     * @return string
     */
    public function getRawFileData()
    {
        return $this->fileData;
    }


    /**
     * Get the number of lines
     * in our data store
     * @return int
     */
    public function getCalculatedRowCount()
    {
        return $this->calculatedRowCount;
    }

    /**
     * Get back a random data
     * @return mixed
     */
    public function getRandomDataFromStore()
    {
        $randomKey = rand(0, (($this->getCalculatedRowCount() - 1)));

        return $this->fileDataArray[$randomKey];
    }
}