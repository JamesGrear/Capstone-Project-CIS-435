<!DOCTYPE html>

<html lang="en">
	<head>
		<title>
			Tom's Media Repository
		</title>
		
		<link rel="shortcut icon" href="Books.png">
		<link rel="stylesheet" href="CSS/normalize.css">
		<link rel = "stylesheet"  href="CSS/WebStyles.css"> 
	<meta charset="UTF-8">
	</head>
	<body>
		<h3 id="Title">
			Do I own it?
		</h3>
	
			<h2>
				Your Library experience personalized
			</h2>
                        <a href="PHP/UpdateLibrary.php">Your Library</a>
                        <form action="PHP/ViewCollections.php">
                            <input type="submit" value="View Current Library">
                        </form>
                        
                        
                        <form id="FormCap" name="FormCap" method ="post" action="PHP/UpdateLibrary.php">
                            <br>
                            <input type="text"  id="searchbar" placeholder="Search for items in your library...">
                            <br><br>
                            <input type="submit" value="Search" id="searchbtn">
                            
					<input type="button" value="+ Books" id="addbook" name="addbook" onclick="showbook()"> 
                                  <div id="novel" style="display:none">
                                        Title: <input type="text" name="bttl" id="bttl"> 
                                        Author: <input type="text" name="ba" id="ba"> 
                                        Genre: <input type="text" name="bg" id="bg">
                                        <br><br>
                                        <input type="submit" value ="submit" id="sbmtnovel" name="sbmtnovel" onclick="linkformB()" >
                                  </div>
                                        
                                        <br><br>
					<input type="button" value="+ Movies" id="addmovies" name="addmovies" onclick="showfilm()">
                                    <div id="cinema" style="display:none">
                                        Title: <input type="text" name="mottl" id="mottl"> 
                                        Year: <input type="text" name="myr" id="myr"> 
                                        Genre: <input type="text" name="mg" id="mg"> 
                                        <br><br>
                                        <input type="submit" value ="submit" id="sbmtcinema" name="sbmtcinema" onclick="linkformMo()">
                                    </div>
                                        <br><br>
					<input type="button" value="+ Music" id="addmusic" name="addmusic" onclick="showmusic()"> 
                                      <div id="sound" style="display:none">    
                                        Title: <input type="text" name="muttl" id="muttl"> 
                                        Artist: <input type="text" name="mart" id="mart"> 
                                        Genre: <input type="text" name="mug" id="mug"> 
                                        <br><br>
                                        <input type="submit" value ="submit" id="sbmtsound" name="sbmtsound" onclick="linkformMu()">
                                      </div>
					<br><br>		
					<input type="button" value="+ Games" id="addgames" name="addgames" onclick="showgame()">
                                    <div id="Vidya" style="display:none"> 
                                        Title: <input type="text" name="gttl" id="gttl"> 
                                        System: <input type="text" name="gsys" id="gsys"> 
                                        Genre: <input type="text" name="gg" id="gg"> 
                                        <br><br>
                                        <input type="submit" value ="submit" id="sbmtVidya" name="sbmtVidya" onclick="linkformG()">
                                    </div>
                        </form>
	 <script type="text/javascript" src="Scripts/DIOIscripts.js"></script>
         
	</body>
	
</html>

