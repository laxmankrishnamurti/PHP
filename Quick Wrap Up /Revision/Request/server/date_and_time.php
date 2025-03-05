<?php

echo "date M value is : ";
echo date("M");
echo "<br/>";

echo "date Y value is : ";
echo date("Y");
echo "<br/>";

echo "date D value is : ";
echo date("D");
echo "<br/>";

echo "date W value is : ";
echo date("W");
echo "<br/>";

echo "date H value is : ";
echo date("H");
echo "<br/>";

echo "date m value is : ";
echo date("m");
echo "<br/>";

echo "date L value is : ";
echo date("l");
echo "<br/>";

echo "Random date : ";
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
echo "<br/>";

echo "Date string : ";
echo date("l", mktime(0, 0, 0, 7, 1, 2000));