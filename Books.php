<?php
Class Books {

private $books = array(

	array("Title" => "JavaScript Step by Step 3e", "Author" => "Steve Suehring", "ISBN" => "5150"),
	array("Title" => "1984", "Author" => "George Orwell", "ISBN" => "5151"),
	array("Title" => "Foundation", "Author" => "Issac Asimov", "ISBN" => "5555"));

public function getISBN($title)
{
foreach ($books as $array)
{
	foreach($array as $key => $val)
	{
		if($title == $val)
		{
		//	print $array[2];
			return var_dump($array);
		//	return "ISBN" => $val;
		}
	}
}
return "Not Found";
}
//getISBN("1984");


public function getAuthor($title)
{
foreach ($books as $array)
{
	foreach($array as $key => $val)
	{
		if($title == $val)
		{
		//	print $array[1];
			return var_dump($array);
		//	return "ISBN" => $val;
		}
	}
}
return "Not Found";
}


}