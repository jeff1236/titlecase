<?php
  class TitleCaseGenerator
  {
    function makeTitleCase($input_title)
    {
      //capitalize input
      $cap_title = ucwords($input_title, " ");
      //convert input to an array
      $word_array = array(explode(" ", $cap_title));
      //array_push($word_array, explode(" ", $cap_title));
      //finding out how many words are in the input string
      $number_of_words = count($word_array);

      $non_caps = array("a", "an", "the", "to", "at", "in", "with", "and", "but", "for", "or", "nor");
        $finished_title = array();
        foreach($word_array as $word) {
          foreach($non_caps as $article) {
            if($word == $article) {
              if (($word != $word_array[0]) && ($word != $word_array[($number_of_words - 1)])){
                lcfirst($word);
                array_push($finished_title, $word);
              }
              else{
                array_push($finished_title, $word);
              }
            }
          }
        }
      $cap_title = implode(" ", $finished_title);

      return $cap_title;


    }
  }


?>
