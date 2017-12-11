<?php
	require_once('DB.php');
	//get user input (passed through via hidden inputs)
        //////////for the books table ////////
	$title = filter_input(INPUT_POST, 'bttl');
	$title = htmlspecialchars($title);
	
	$author = filter_input(INPUT_POST, 'ba');
	$author = htmlspecialchars($author);
	
	$genre = filter_input(INPUT_POST, 'bg');
	$genre = htmlspecialchars($genre);
	
        /////////for the movies tables///////
	$Mtitle = filter_input(INPUT_POST, 'mottl');
	$Mtitle = htmlspecialchars($Mtitle);
	
	$Myear = filter_input(INPUT_POST, 'myr');
	$Myear = htmlspecialchars($Myear);
	
	$Mgenre = filter_input(INPUT_POST, 'mg');
	$Mgenre = htmlspecialchars($Mgenre);
        
        /////////for the music tables///////
	$Mutitle = filter_input(INPUT_POST, 'muttl');
	$Mutitle = htmlspecialchars($Mutitle);
	
	$MuArtist = filter_input(INPUT_POST, 'mart');
	$MuArtist = htmlspecialchars($MuArtist);
	
	$Mugenre = filter_input(INPUT_POST, 'mug');
	$Mugenre = htmlspecialchars($Mugenre);
	
        /////////for the game tables///////
	$Gtitle = filter_input(INPUT_POST, 'gttl');
	$Gtitle = htmlspecialchars($Gtitle);
	
	$Gsystem = filter_input(INPUT_POST, 'gsys');
	$Gsystem = htmlspecialchars($Gsystem);
	
	$Ggenre = filter_input(INPUT_POST, 'gg');
	$Ggenre = htmlspecialchars($Ggenre);
	
        
	$querybook = "UPDATE books
					SET author=:ba,
					     genre=:bg,
					WHERE title=:bttl";
					
        $bookupdate = $db->prepare($querybook);

        $bookupdate->bindValue(':bttl', $title);
        $bookupdate->bindValue(':ba', $author);
        $bookupdate->bindValue(':bg', $genre);

        $bookupdate->execute();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
		Library Update : Perform Update
		</title>
	<meta charset="UTF-8">
	</head>
	<body>
		<h1>Categorical Info Update</h1>
		<p>Update successful!</p>
		<br>
		<a href="../index.html">Go back to main page</a>
	</body>
</html>

