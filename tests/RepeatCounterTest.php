<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_SimpleComparison()
        {

            //Arrange
            $testSimpleComparison = new RepeatCounter;
            $input1 = "a";
            $input2 = "b";

            //Act
            $result = $testSimpleComparison->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals( 0, $result);
        }

        function test_SameComparison()
        {

            //Arrange
            $testSameComparison = new RepeatCounter;
            $input1 = "ab";
            $input2 = "ab";

            //Act
            $result = $testSameComparison->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_TwoLetters()
        {

            //Arrange
            $testTwoLetters = new RepeatCounter;
            $input1 = "ab";
            $input2 = "ab";

            //Act
            $result = $testTwoLetters->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals("1", $result);
        }

        function test_TwoWords()
        {

            //Arrange
            $testTwoWords = new RepeatCounter;
            $input1 = "ab ab";
            $input2 = "ab";

            //Act
            $result = $testTwoWords->countRepeats($input1, $input2);

            //Assert
            $this->assertEquals("2", $result);
        }


    }


?>
