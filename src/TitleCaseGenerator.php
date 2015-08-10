<?php
  class TitleCaseGenerator
  {
    function makeTitleCase($input_title)
    {
      $cap_title = ucwords($input_title, " ");
      $non_caps = array["a", "an", "the", "to", "at", "in", "with", "and", "but", "for", "or", "nor"];
        foreach($cap_title as $word) {
          foreach($non_caps as $article) {
            if($word == $article) {
              
            }
          }

        }

      return $cap_title;


    }
  }


?>
