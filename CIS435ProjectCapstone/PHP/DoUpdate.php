<?php
	require_once('DB.php');
	//get user input (passed through via hidden inputs)
        //////////for the books table ////////
        
        if(!empty($_POST['bookupdate'])) {
	$title = filter_input(INPUT_POST, 'bttl');
	$title = htmlspecialchars($title);
	
	$author = filter_input(INPUT_POST, 'ba');
	$author = htmlspecialchars($author);
	
	$genre = filter_input(INPUT_POST, 'bg');
	$genre = htmlspecialchars($genre);
        
        //query books to update values
        $querybook = "UPDATE books
					SET author=:ba,
					     genre=:bg,
					WHERE title=:bttl";
					
        $bookupdate = $db->prepare($querybook);

        $bookupdate->bindValue(':bttl', $title);
        $bookupdate->bindValue(':ba', $author);
        $bookupdate->bindValue(':bg', $genre);

        $bookupdate->execute();
        }
        else if(!empty($_POST['movieupdate'])) {
        /////////for the movies tables///////
	$Mtitle = filter_input(INPUT_POST, 'mottl');
	$Mtitle = htmlspecialchars($Mtitle);
	
	$Myear = filter_input(INPUT_POST, 'myr');
	$Myear = htmlspecialchars($Myear);
	
	$Mgenre = filter_input(INPUT_POST, 'mg');
	$Mgenre = htmlspecialchars($Mgenre);
        
        //query books to update values
        $queryfilm = "UPDATE movies
					SET year=:myr,
					     genre=:mg,
					WHERE title=:mottl";
					
        $filmupdate = $db->prepare($queryfilm);

        $filmupdate->bindValue(':mottl', $Mtitle);
        $filmupdate->bindValue(':myr', $Myear);
        $filmupdate->bindValue(':mg', $Mgenre);

        $filmupdate->execute();
        
        }
        else if(!empty($_POST['musicupdate'])) {
        /////////for the music tables///////
	$Mutitle = filter_input(INPUT_POST, 'muttl');
	$Mutitle = htmlspecialchars($Mutitle);
	
	$MuArtist = filter_input(INPUT_POST, 'mart');
	$MuArtist = htmlspecialchars($MuArtist);
	
	$Mugenre = filter_input(INPUT_POST, 'mug');
	$Mugenre = htmlspecialchars($Mugenre);
        
        //query books to update values
        $querymusic = "UPDATE music
					SET artist=:mart,
					     genre=:mug,
					WHERE title=:muttl";
					
        $musicupdate = $db->prepare($querymusic);

        $musicupdate->bindValue(':muttl', $Mutitle);
        $musicupdate->bindValue(':mart', $MuArtist);
        $musicupdate->bindValue(':mug', $Mugenre);

        $musicupdate->execute();
        }
        else if(!empty($_POST['gameupdate'])) {
        /////////for the game tables///////
	$Gtitle = filter_input(INPUT_POST, 'gttl');
	$Gtitle = htmlspecialchars($Gtitle);
	
	$Gsystem = filter_input(INPUT_POST, 'gsys');
	$Gsystem = htmlspecialchars($Gsystem);
	
	$Ggenre = filter_input(INPUT_POST, 'gg');
	$Ggenre = htmlspecialchars($Ggenre);
        
        //query books to update values
        $querygames = "UPDATE games
					SET system=:gsys,
					     genre=:gg,
					WHERE title=:gttl";
					
        $gameupdate = $db->prepare($querygames);

        $gameupdate->bindValue(':gttl', $Gtitle);
        $gameupdate->bindValue(':gsys', $Gsystem);
        $gameupdate->bindValue(':gg', $Ggenre);

        $gameupdate->execute();
        }
        
	
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
		<a href="../index.php">Go back to main page</a>
	</body>
</html>

