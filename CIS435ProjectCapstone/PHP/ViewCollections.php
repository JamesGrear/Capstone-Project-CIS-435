<?php
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
                     overflow:auto;
               }
               
                #Games{
                     border-style: solid;
                     border-width: 2px 2px 2px 2px;
                     border-radius: 24px;
                     width: 600px;
                     height: 250px;
                     margin: 0 auto;
                     overflow:auto;
               }
               
                #Movies{
                     border-style: solid;
                     border-width: 2px 2px 2px 2px;
                     border-radius: 24px;
                     width: 600px;
                     height: 250px;
                     margin: 0 auto;
                     overflow:auto;
               }
               
                #Music{
                     border-style: solid;
                     border-width: 2px 2px 2px 2px;
                     border-radius: 24px;
                     width: 600px;
                     height: 250px;
                     margin: 0 auto;
                     overflow:auto;
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
               table, tr, td 
                {
                      border: 1px solid black;
                      border-collapse: collapse;
                      width: 600px;
                      
                }
           </style>
        </head>
	<body>
        
        <div id ="Books">
 	<h3 id="bo">Books</h3>
			<?php 
                        $rowindexb =0;
                        //surrounds data in a table an inserts it into a column 
                             echo '<table>
                                   <tr>';
			       foreach($bookList as $book)
			       {
                                    $rowindexb++;
                                    echo "&nbsp;&nbsp".'<td>'.$book['title'].'</td>';
                                    echo '<td>'.$book['author'].'</td>';
                                    echo '<td>'.$book['genre'].'</td>';
			        //used to ensure that a new row is made with each iteration of data
                                    if($rowindexb == 1) 
                                    {
                                        echo '</tr><tr>';
                                        $rowindexb =0;
                                    }
                               }
                            echo '</tr>
                               </table>';
			  ?>
        </div>
            
        <div id="Games">
        <h3 id="ga">Games</h3>
                        <?php 
                            $rowindex =0;
                        //surrounds data in a table an inserts it into a column 
                             echo '<table>
                                   <tr>';
			       foreach($gameList as $game)
                               {
			         echo "&nbsp;&nbsp".'<td>'. $game['title'].'</td>';
                                 echo '<td>'.$game['system'].'</td>';
                                 echo '<td>'.$game['genre'].'</td>';
			      //used to ensure that a new row is made with each iteration of data
                                    if($rowindex == 1) 
                                    {
                                        echo '</tr><tr>';
                                        $rowindex =0;
                                    }
                               }
                            echo '</tr>
                               </table>';
			  ?>
        </div>
        
        <div id="Movies">
        <h3 id="mo">Movies</h3>
                        <?php 
                               $rowindex =0;
                        //surrounds data in a table an inserts it into a column 
                             echo '<table>
                                   <tr>';
			       foreach($movieList as $film)
                               {
			         echo "&nbsp;&nbsp".'<td>'.$film['title'].'</td>';
                                 echo '<td>'.$film['year'].'</td>';
                                 echo '<td>'.$film['genre'].'</td>';
			      //used to ensure that a new row is made with each iteration of data
                                    if($rowindex == 1) 
                                    {
                                        echo '</tr><tr>';
                                        $rowindex =0;
                                    }
                               }
                            echo '</tr>
                               </table>';

			  ?>
        </div>
        
        <div id="Music">
        <h3 id="mu">Music</h3>
                        <?php 
                            $rowindex =0;
                        //surrounds data in a table an inserts it into a column 
                             echo '<table>
                                   <tr>';
			       foreach($musicList as $jam)
                               {
			         echo "&nbsp;&nbsp".'<td>'.$jam['title'].'</td>';
                                 echo '<td>'.$jam['artist'].'</td>';
                                 echo '<td>'.$jam['genre'].'</td>';
			        //used to ensure that a new row is made with each iteration of data
                                    if($rowindex == 1) 
                                    {
                                        echo '</tr><tr>';
                                        $rowindex =0;
                                    }
                               }
                            echo '</tr>
                               </table>';
			  ?>
        </div>
        
   </body>
</html>