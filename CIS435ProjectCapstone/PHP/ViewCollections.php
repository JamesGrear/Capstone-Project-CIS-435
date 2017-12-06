<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once('DB.php');

//Books library database info query
$queryUsers = "SELECT * FROM books ORDER BY title";


$execStatement = $db->prepare($queryUsers);
$execStatement->execute();

$bookList = $execStatement->fetchAll();
$execStatement->closeCursor();


//Games library database info query
$queryUsers1 = "SELECT * FROM games ORDER BY title";


$execStatement1 = $db->prepare($queryUsers1);
$execStatement1->execute();

$gameList = $execStatement1->fetchAll();
$execStatement1->closeCursor();

//Movies library database info query
$queryUsers2 = "SELECT * FROM movies ORDER BY title";


$execStatement2 = $db->prepare($queryUsers2);
$execStatement2->execute();

$movieList = $execStatement2->fetchAll();
$execStatement2->closeCursor();


//Music library database info query
$queryUsers3 = "SELECT * FROM music ORDER BY title";


$execStatement3 = $db->prepare($queryUsers3);
$execStatement3->execute();

$musicList = $execStatement3->fetchAll();
$execStatement3->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>
		  Your Libraries
	   </title>
	   <meta charset="UTF-8">
           <style>
               body{
                   background-color:#4FFFB0;
               }
               
               #Books{
                     border-style: solid;
                     border-width: 2px 2px 2px 2px;
                     border-radius: 24px;
                     width: 600px;
                     height: 250px;
                     margin: 0 auto;
               }
               
                #Games{
                     border-style: solid;
                     border-width: 2px 2px 2px 2px;
                     border-radius: 24px;
                     width: 600px;
                     height: 250px;
                     margin: 0 auto;
               }
               
                #Movies{
                     border-style: solid;
                     border-width: 2px 2px 2px 2px;
                     border-radius: 24px;
                     width: 600px;
                     height: 250px;
                     margin: 0 auto;
               }
               
                #Music{
                     border-style: solid;
                     border-width: 2px 2px 2px 2px;
                     border-radius: 24px;
                     width: 600px;
                     height: 250px;
                     margin: 0 auto;
               }
               
               #bo{
                    text-align: center;
                    border-style: solid;
                    border-width: 2px 2px 2px 2px;
                    border-color: orange;
                    background-color: orange;
               }
               #mo{
                   text-align: center;
                   border-style: solid;
                    border-width: 2px 2px 2px 2px;
                    border-color: yellow;
                    background-color: yellow;
               }
               #mu{
                   text-align: center;
                   border-style: solid;
                    border-width: 2px 2px 2px 2px;
                    border-color: red;
                    background-color: red;
               }
               #ga{
                   text-align: center; 
                    border-style: solid;
                    border-width: 2px 2px 2px 2px;
                    border-color: #999999;
                    background-color: #999999;
               }
           </style>
        </head>
	<body>
        
        <div id ="Books">
 	<h3 id="bo">Books</h3>
			<?php 
			       foreach($bookList as $book)
				   {
			         echo $book['title'] . "" .$book['author']. "" . $book['genre']. '<br>';
			       }
			  ?>
        </div>
            
        <div id="Games">
        <h3 id="ga">Games</h3>
                        <?php 
			       foreach($gameList as $game)
                               {
			         echo $game['title'] . "" .$game['system']. "" . $game['genre']. '<br>';
			       }
			  ?>
        </div>
        
        <div id="Movies">
        <h3 id="mo">Movies</h3>
                        <?php 
			       foreach($movieList as $film)
				   {
			         echo $film['title'] . "" .$film['year']. "" . $film['genre']. '<br>';
			       }
			  ?>
        </div>
        
        <div id="Music">
        <h3 id="mu">Music</h3>
                        <?php 
			       foreach($musicList as $jam)
				   {
			         echo $jam['title'] . "" .$jam['artist']. "" . $jam['genre']. '<br>';
			       }
			  ?>
        </div>
        
   </body>
</html>