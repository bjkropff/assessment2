<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_SimpleComparison()
        {

            //Arrange
            $test_EqualsFalse = new RepeatCounter;
            $input1 = "a";
            $input2 = "b";

            //Act
            $result = $test_EqualsFalse->countRepeat($input1, $input2);

            //Assert
            $this->assertEquals(false, $result);
        }

        function test_SameComparison()
        {

            //Arrange
            $test_EqualsFalse = new RepeatCounter;
            $input1 = "ab";
            $input2 = "ab";

            //Act
            $result = $test_EqualsFalse->countRepeat($input1, $input2);

            //Assert
            $this->assertEquals("ab", $result);
        }

        function test_TwoLetters()
        {

            //Arrange
            $test_EqualsFalse = new RepeatCounter;
            $input1 = "ab";
            $input2 = "ab";

            //Act
            $result = $test_EqualsFalse->countRepeat($input1, $input2);

            //Assert
            $this->assertEquals("1", $result);
        }

    }


?>
