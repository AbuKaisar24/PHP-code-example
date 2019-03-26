<?php
class Car
{
	function car()
	{
		$this->model="bmw";
	}
}
$a= new Car();
echo $a->model;
echo strlen("abu kaisar");
echo str_word_count("Abu kaisar mohammad masum");
$b="Abu kaisar mohammad masum";
echo strrev($b);


?>