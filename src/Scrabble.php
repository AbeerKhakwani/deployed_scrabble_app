<?php
class Scrabble {

     function ScrabbleChecker($input)
     {    $string= strtolower($input);
          $split_array_input= str_split( $string);
          $adder= 0;
          $one_point_array = array("a","e","i","o","u","l","s","n","r","t");
          $two_point_array = array("d","g");
          $three_point_array = array("b","c","m","p");
          $four_point_array = array("f","h","v","w","y");
          $five_point_array = array("k");
          $eight_point_array = array("j","x");
          $ten_point_array = array("q","z");

         foreach ($split_array_input as $letter)
         {
              if (in_array($letter,$one_point_array))
              {
                  $adder += 1;

              }
              elseif (in_array($letter,$two_point_array))
              {

                 $adder += 2;

              }
              elseif (in_array($letter,$three_point_array))
              {

                 $adder += 3;

              }
              elseif (in_array($letter,$four_point_array))
              {

                 $adder += 4;

              }
              elseif (in_array($letter,$five_point_array))
              {

                 $adder += 5;

              }
              elseif (in_array($letter,$eight_point_array))
              {

                 $adder += 8;

              }
              elseif (in_array($letter,$ten_point_array))
              {

                 $adder += 10;

              }







         }

       return $adder;

     }





}


?>
