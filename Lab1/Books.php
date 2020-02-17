<?php
Class Books {

private $books = array(

	array("Title" => "JavaScript Step by Step 3e", "Author" => "Steve Suehring", "ISBN" => "5150"),
	array("Title" => "1984", "Author" => "George Orwell", "ISBN" => "5151"),
	array("Title" => "Foundation", "Author" => "Issac Asimov", "ISBN" => "5555"));

public function getISBN($title)
{
	$ISBN= "NOT FOUND";
foreach ($this->books as $array)
{
	foreach($array as $key => $val)
	{
		if($title == $val)
		{
		//	print $array[2];
			$ISBN= $array["ISBN"];
		//	return "ISBN" => $val;
		}
	}
}
return $ISBN;
}
//getISBN("1984");


public function getAuthor($title)
{
	$Author = "NOT FOUND";
	
foreach ($this->books as $array)
{
	foreach($array as $key => $val)
	{
		if($title == $val)
		{
		//	print $array[1];
			$Author = $array["Author"];
		//	return "ISBN" => $val;
		}
	}
}
return $Author;
}


}