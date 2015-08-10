<?php
  require_once "src/TitleCaseGenerator.php";

  class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
  {
    //Spec 1
    function test_makeTitleCase_oneLetter()
    {
      //Arrange
      $test_TitleCaseGenerator = new TitleCaseGenerator;
      $input = "a";

      //Act
      $result = $test_TitleCaseGenerator->makeTitleCase($input);

      //Assert
      $this->assertEquals("A", $result);
    }
    //Spec 2
    function test_makeTitleCase_oneWord()
    {
      //Arrange
      $test_TitleCaseGenerator = new TitleCaseGenerator;
      $input = "beowulf";

      //Act
      $result = $test_TitleCaseGenerator->makeTitleCase($input);

      //Assert
      $this->assertEquals("Beowulf", $result);
    }
    //Spec 3
    function test_makeTitleCase_multipleWords()
    {
      //Arrange
      $test_TitleCaseGenerator = new TitleCaseGenerator;
      $input = "beowulf begins";

      //Act
      $result = $test_TitleCaseGenerator->makeTitleCase($input);

      //Assert
      $this->assertEquals("Beowulf Begins", $result);
    }
    //Spec 4
    function test_makeTitleCase_lowerArticle()
    {
      $test_TitleCaseGenerator = new TitleCaseGenerator;
      $input = "beowulf and brighton beach";

      //Act
      $result = $test_TitleCaseGenerator->makeTitleCase($input);

      //Assert
      $this->assertEquals("Beowulf and Brighton Beach", $result);
    }
    //Spec 5
    function test_makeTitleCase_firstWord()
    {
      $test_TitleCaseGenerator = new TitleCaseGenerator;
      $input = "the beowulf and the hulk";

      //Act
      $result = $test_TitleCaseGenerator->makeTitleCase($input);

      //Assert
      $this->assertEquals("The Beowulf and the Hulk", $result);
    }
    //Spec 6
    function test_makeTitleCase_lastWord()
    {
      $test_TitleCaseGenerator = new TitleCaseGenerator;
      $input = "what is it all for?";

      //Act
      $result = $test_TitleCaseGenerator->makeTitleCase($input);

      //Assert
      $this->assertEquals("What is it all For?", $result);
    }
    //Spec 7
    function test_makeTitleCase_nonAlpha()
    {
      $test_TitleCaseGenerator = new TitleCaseGenerator;
      $input = "$500 dollars";

      //Act
      $result = $test_TitleCaseGenerator->makeTitleCase($input);

      //Assert
      $this->assertEquals("$500 Dollars", $result);
    }
    //Spec 8
    function test_makeTitleCase_midWordCaps()
    {
      $test_TitleCaseGenerator = new TitleCaseGenerator;
      $input = "homer simpson loves mcduff beer";

      //Act
      $result = $test_TitleCaseGenerator->makeTitleCase($input);

      //Assert
      $this->assertEquals("Homer Simpson Loves McDuff Beer", $result);
    }
    //Spec 9
    function test_makeTitleCase_acronymCap()
    {
      $test_TitleCaseGenerator = new TitleCaseGenerator;
      $input = "i love PHP";

      //Act
      $result = $test_TitleCaseGenerator->makeTitleCase($input);

      //Assert
      $this->assertEquals("I Love PHP", $result);
    }
  }


?>
