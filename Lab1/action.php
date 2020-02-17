<?php

require_once("Books.php");

$books = new Books();
//var_dump($_POST["name"]);
if(!isset($_POST["name"])|| empty($_POST["name"])){
	print "Please fill out the form";
}
else{
	//$books->getAuthor();
	print $books->getAuthor($_POST["name"]);
	
	if(isset($_POST["isbn"])){
		print $books->getISBN($_POST["name"]);
	}
	
};






?>