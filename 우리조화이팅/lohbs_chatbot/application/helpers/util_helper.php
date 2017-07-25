<?php

if ( ! function_exists('nvl'))
{
  function nvl($str, $rep = "")
  {
    if(isset($str))
    {
      if($str == "") return $rep;
      else return $str;
    }
    else return $rep;
  }
}



