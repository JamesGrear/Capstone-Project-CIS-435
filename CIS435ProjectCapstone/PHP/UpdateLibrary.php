<?php
        require_once('DB.php'); 
       
        
        
        if(!empty($_POST['sbmtnovel'])) {
	//////////for the books table ////////
	$title = filter_input(INPUT_POST, 'bttl');
	$title = htmlspecialchars($title);
	
	$author = filter_input(INPUT_POST, 'ba');
	$author = htmlspecialchars($author);
	
	$genre = filter_input(INPUT_POST, 'bg');
	$genre = htmlspecialchars($genre);
        
         //book query
	$querybooks = "SELECT * FROM books WHERE title=:bttl";
	
	$execStatement = $db->prepare($querybooks);
	$execStatement->bindValue(':bttl', $title);
	$execStatement->execute();
	
	$bookList = $execStatement->fetchAll();
	$empRowCount = $execStatement->rowCount();
      
        
	$execStatement->closeCursor();
        
        if($empRowCount == 0){
		$InsertBOOKtbl = "INSERT INTO books
										(title, author, genre)
								VALUES
										(:bttl,:ba,:bg)";
	   $bookupdate = $db->prepare($InsertBOOKtbl);
	   
	   $bookupdate->bindValue(':bttl', $title);
	   $bookupdate->bindValue(':ba', $author);
	   $bookupdate->bindValue(':bg', $genre);
	   
	   $bookupdate->execute();
	} 
        }
        else if(!empty($_POST['sbmtcinema'])) {
        /////////for the movies tables///////
	$Mtitle = filter_input(INPUT_POST, 'mottl');
	$Mtitle = htmlspecialchars($Mtitle);
	
	$Myear = filter_input(INPUT_POST, 'myr');
	$Myear = htmlspecialchars($Myear);
	
	$Mgenre = filter_input(INPUT_POST, 'mg');
	$Mgenre = htmlspecialchars($Mgenre);
        
        //movie query
        $querymovies = "SELECT * FROM movies WHERE title=:mottl";
	
	$movieexecStatement = $db->prepare($querymovies);
	$movieexecStatement->bindValue(':mottl', $Mtitle);
	$movieexecStatement->execute();
	
	$movieList = $movieexecStatement->fetchAll();
	$movieempRowCount = $movieexecStatement->rowCount();
	$movieexecStatement->closeCursor();
        
         if($movieempRowCount == 0){
		$InsertMOVIEtbl = "INSERT INTO movies
										(title, year, genre)
								VALUES
										(:mottl,:myr,:mg)";
	   $bookupdate = $db->prepare($InsertMOVIEtbl);
	   
	   $bookupdate->bindValue(':mottl', $Mtitle);
	   $bookupdate->bindValue(':myr', $Myear);
	   $bookupdate->bindValue(':mg', $Mgenre);
	   
	   $bookupdate->execute();
	}
        }
        else if(!empty($_POST['sbmtsound'])) {
        /////////for the music tables///////
	$Mutitle = filter_input(INPUT_POST, 'muttl');
	$Mutitle = htmlspecialchars($Mutitle);
	
	$MuArtist = filter_input(INPUT_POST, 'mart');
	$MuArtist = htmlspecialchars($MuArtist);
	
	$Mugenre = filter_input(INPUT_POST, 'mug');
	$Mugenre = htmlspecialchars($Mugenre);
        
        //music query
        $querymusic = "SELECT * FROM music WHERE title=:muttl";
	
	$musicexecStatement = $db->prepare($querymusic);
	$musicexecStatement->bindValue(':muttl', $Mutitle);
	$musicexecStatement->execute();
	
	$musicList = $musicexecStatement->fetchAll();
	$musicempRowCount = $musicexecStatement->rowCount();
	$musicexecStatement->closeCursor();
        
         if($musicempRowCount == 0){
		$InsertMUSICtbl = "INSERT INTO music
										(title, artist, genre)
								VALUES
										(:muttl,:mart,:mug)";
	   $bookupdate = $db->prepare($InsertMUSICtbl);
	   
	   $bookupdate->bindValue(':muttl', $Mutitle);
	   $bookupdate->bindValue(':mart', $MuArtist);
	   $bookupdate->bindValue(':mug', $Mugenre);
	   
	   $bookupdate->execute();
	}
        }
        else if(!empty($_POST['sbmtVidya'])) {
        /////////for the game tables///////
	$Gtitle = filter_input(INPUT_POST, 'gttl');
	$Gtitle = htmlspecialchars($Gtitle);
	
	$Gsystem = filter_input(INPUT_POST, 'gsys');
	$Gsystem = htmlspecialchars($Gsystem);
	
	$Ggenre = filter_input(INPUT_POST, 'gg');
	$Ggenre = htmlspecialchars($Ggenre);
	
        
         //game query
        $querygames = "SELECT * FROM games WHERE title=:gttl";
	
	$gamesexecStatement = $db->prepare($querygames);
	$gamesexecStatement->bindValue(':gttl', $Gtitle);
	$gamesexecStatement->execute();
	
	$gamesList = $gamesexecStatement->fetchAll();
	$gamesempRowCount = $gamesexecStatement->rowCount();
	$gamesexecStatement->closeCursor(); 
	
        if($gamesempRowCount == 0){
		$InsertGAMEtbl = "INSERT INTO games
										(title, system, genre)
								VALUES
										(:gttl,:gsys,:gg)";
	   $bookupdate = $db->prepare($InsertGAMEtbl);
	   
	   $bookupdate->bindValue(':gttl', $Gtitle);
	   $bookupdate->bindValue(':gsys', $Gsystem);
	   $bookupdate->bindValue(':gg', $Ggenre);
	   
	   $bookupdate->execute();
	}
        }
	?>
	

<!DOCTYPE html>

<html lang ="en"
		<head>
			<title>
				Register : Update Existing Information
			</title>
			<meta charset ="UTF-8">
		</head>
		<body>
      
                    <?php
                    ///////////////Book Insertion Logic///////////
                     if(!empty($_POST['sbmtnovel'])) {
                        global $empRowCount;
			     if($empRowCount == 0){
			     	echo '<h1>Library Book Insert </h1>';
			     	echo 'insertion successful';
			     }
				 else{
				 	echo '<h1>Update Prompt: </h1>';
					echo "Are you sure you want to update?";
				 
			?>
                    <form method="post" action="DoUpdate.php">
				<input type="hidden" name="bttl"
				 value="<?php echo $title; ?>">
				<input type="hidden" name="ba"
				 value="<?php echo $author; ?>">
				<input type="hidden" name="bg"
				 value="<?php echo $genre; ?>">
                                 <input type="submit" value="Yes, update!" name="bookupdate">
		   </form>
		   <?php
             } //end else
                     }
            ?>
                    
                 <?php
                    /////////////////Movie Insertion Logic /////////////////
                    if(!empty($_POST['sbmtcinema'])) {
                    global $movieempRowCount;
                    if($movieempRowCount == 0)
                    {
			     	echo '<h1>Library Movie Insert </h1>';
			     	echo 'insertion successful';
                    }
                    else{
				 	echo '<h1>Update Prompt: </h1>';
					echo "Are you sure you want to update?";
				 
			?>   
                            <form method="post" action="DoUpdate.php">
                                           <input type="hidden" name="mottl" 
                                           value="<?php echo $Mtitle; ?>">
                                           <input type="hidden" name="myr"
                                           value="<?php echo $Myear; ?>">
                                           <input type="hidden" name="mg"
                                           value="<?php echo $Mgenre; ?>">
                                           <br><br>
                                          <input type="submit" value="Yes, update!" name="movieupdate">
                            </form>
                       <?php
                    } //end else
                 }
            ?>
                    
            <?php
                    /////////////////MUSIC INSERT LOGIC////////////////////
            if(!empty($_POST['sbmtsound'])) {
                    global $musicempRowCount;
                    if($musicempRowCount == 0)
                    {
			     	echo '<h1>Library Music Insert </h1>';
			     	echo 'insertion successful';
                    }
                    else{
				 	echo '<h1>Update Prompt: </h1>';
					echo "Are you sure you want to update?";
				 
            ?>   
            <form method="post" action="DoUpdate.php">
                                 <input type="hidden" name="muttl" 
				 value="<?php echo $Mutitle; ?>">
				 <input type="hidden" name="mart"
				 value="<?php echo $MuArtist; ?>">
				 <input type="hidden" name="mug"
				 value="<?php echo $Mugenre; ?>">
                                 <br><br>
                                <input type="submit" value="Yes, update!" name="musicupdate"> 
            </form>                    
            <?php
                    } //end else
            }
            ?>                     
                                 
             <?php
                ///////////////////GAME INSERTION LOGIC///////////////
             if(!empty($_POST['sbmtVidya'])) {
                    global $gamesempRowCount;
                    if($gamesempRowCount == 0)
                    {
			     	echo '<h1>Library Game Insert </h1>';
			     	echo 'insertion successful';
                    }
                    else{
				 	echo '<h1>Update Prompt: </h1>';
					echo "Are you sure you want to update?";
				 
              ?> 
                    <form method="post" action="DoUpdate.php">
                                 <input type="hidden" name="gttl"
				 value="<?php echo $Gtitle; ?>">
				 <input type="hidden" name="gsys"
				 value="<?php echo $Gsystem; ?>">
				 <input type="hidden" name="gg"
				 value="<?php echo $Ggenre; ?>">
                                 <br><br>
                                 <input type="submit" value="Yes, update!" name="gameupdate"> 
                    </form>
            <?php
                    } //end else
             }
            ?>     
  
            <br>
            <a href="../index.php">Go back to main page</a>
            </body>
</html>

