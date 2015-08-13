<?php 
	require_once "src/Weekday.php";
	
	class ScrabbleTest extends PHPUnit_Framework_TestCase
	{
		function test_one_letter()
		{
			$test = new Weekday;
			$input_one = 7;
			$input_two = 12;
			$input_three = 1278;
			
			$result = $test->dayOfTheWeek($input_one, $input_two, $input_three);
			$this->assertEquals("Wednesday", $result);
		}
?>
	}