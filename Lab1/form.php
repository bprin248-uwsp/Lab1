<?php
print'<!doctype html>
	<html lang="en">
		<head>
			<title>Form</title>
		</head>	
			<body>
				<h1>Please Select A Book</h1>
		
			<div class="book-form">
				<form name="book-form" action="action.php" method="post">
				
					<input id = "name" type="text" class="form-control" name="name" placeholder="Please Enter The Title of Your Book"><br>
					
					<input type="radio" class="form-control" id="isbn" name="isbn" value="isbn">
					<label for="isbn">ISBN of Book</label><br>
					
					
					
					<input type="submit" class="form-control" value="submit">
				</form>		
			</div>

			</body>
	</html>';
	
?>	