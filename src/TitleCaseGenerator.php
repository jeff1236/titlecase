<?php
class TitleCaseGenerator
{
  function makeTitleCase($input_title)
  {
    //capitalize input
    $cap_title = ucwords($input_title);
    //convert input to an array
    $word_array = explode(" ", $cap_title);
    //array_push($word_array, explode(" ", $cap_title));
    //finding out how many words are in the input string
    $number_of_words = count($word_array);
    //var_dump($number_of_words);

    $non_caps = array("a", "an", "The", "to", "at", "in", "with", "And", "but", "for", "or", "nor");
    $finished_title = array();
    $counter = 0;
    foreach($word_array as $word) {

      //finding the index position of the word
      //$word_index = array_search($word, array_keys($word_array));
      //var_dump($word_index);
      if ((in_array($word, $non_caps)) && ($counter != 0) && ($counter != ($number_of_words - 1))){
        array_push($finished_title, (lcfirst($word)));
      }
      else{
        array_push($finished_title, $word);
      }
      ++$counter;
    }
    //var_dump($finished_title);
    $new_title = implode(" ", $finished_title);

    return $new_title;
  }
}




?>
