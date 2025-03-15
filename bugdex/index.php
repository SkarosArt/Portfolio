<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bugdex</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>

<section class="bug">
<?php
	foreach(file('./maya/maya.txt') as $line) {
	
	$array = preg_split ("/\;/", $line); 
	$maya_id = $array[0];
	$maya_title = $array[1];
	$maya_description = $array[2];
	$maya_solution = $array[3];

	echo 
	'<div class="card">
		<img src="./maya/'.$maya_id.'">
		<div class="description">
			<h1>'.$maya_title.'</h1>
			<p>'.$maya_description.'</p>
			<p>'.$maya_solution.'</p>
		</div>
	</div>';
}
?> 

</section>

<!-- FORM -->
<form action="upload-manager.php" method="post" enctype="multipart/form-data">
	<h2>Upload File</h2>
	<div>
		<label>File name:</label>
		<input type="text" name="name" required><br>
	</div>
	<div>
		<label for="logiciel">Logiciel</label>
		<select name="software" required>
			<option value=""></option>
			<option value="maya">Maya</option>
			<option value="unreal">Unreal Engine</option>
			<option value="photoshop">Photoshop</option>
			<option value="designer">Substance Designer</option>
			<option value="painter">Substance Painter</option>
			<option value="blender">Blender</option>
		</select>
	</div>
	<div>
		<label>Image:</label>
		<input type="file" name="photo" required>
	</div>
	<div>
		<label>Description:</label>
		<textarea id="description" name="description" rows="5" cols="33" required></textarea>
	</div>
	<div>
		<label>Solution?:</label>
		<textarea id="solution" name="solution" rows="5" cols="33" required></textarea>
	</div>
	<div>
		<input type="submit" name="submit" value="Upload">
	</div>
</form>

</body>
</html>