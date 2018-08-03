<?php

require_once("fetch.php");

class FetchTest extends PHPUnit_Framework_TestCase {
 
    public function testLoader()
    {
        $fetchTest = new Fetch();

        $type = "w+";
        $url = "http://feeds.nationalgeographic.com/ng/News/News_Main";
        $path = "test.php";
 
        $this->assertEquals(true, $fetchTest->loader($type, $url, $path));
    }

    public function testLoaderTable (){

		$fetchTest = new Fetch();
    	$this->assertInternalType('array',$fetchTest->fields);
    }
 
}