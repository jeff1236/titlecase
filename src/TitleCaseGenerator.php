<?php
  class TitleCaseGenerator
  {
    function makeTitleCase($input_title)
    {
      $cap_title = ucwords($input_title, " ");
      return $cap_title;
    }
  }


?>
