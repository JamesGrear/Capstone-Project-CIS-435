

function showbook() //to display books
{
    //grabbing div element
    var film = document.getElementById("cinema"); //film textboxes
     var radio = document.getElementById("sound"); //sound textboxes
      var gaem = document.getElementById("Vidya");  //game textboxes
      var comic = document.getElementById("novel"); //book textboxes
      
      if(radio.style.display == "none" && gaem.style.display =="none" && comic.style.display =="none" && film.style.display =="none")//toggle visibility
      {
          comic.style.display ="block";
          
      }
      else if (comic.style.display =="block")
      {
          comic.style.display ="none";
      }
      
      
}

function showfilm() //to display movies
{
    
    //grabbing div element
    var film = document.getElementById("cinema"); //film textboxes
     var radio = document.getElementById("sound"); //sound textboxes
      var gaem = document.getElementById("Vidya");  //game textboxes
      var comic = document.getElementById("novel"); //book textboxes
      
      if(radio.style.display == "none" && gaem.style.display =="none" && comic.style.display =="none" && film.style.display =="none")//toggle visibility
      {
          film.style.display ="block";
          
      }
      else if (film.style.display =="block")
      {
         film.style.display ="none";
      }
      
      
}

function showmusic() //to display music
{
    //grabbing div element
    var film = document.getElementById("cinema"); //film textboxes
     var radio = document.getElementById("sound"); //sound textboxes
      var gaem = document.getElementById("Vidya");  //game textboxes
      var comic = document.getElementById("novel"); //book textboxes
      
      if(radio.style.display == "none" && gaem.style.display =="none" && comic.style.display =="none" && film.style.display=="none") //toggle visibility
      {
          radio.style.display ="block";
          
      }
      else if (radio.style.display =="block")
      {
          radio.style.display ="none";
      }
      
      
}

function showgame() //to display music
{
    //grabbing div element
    var film = document.getElementById("cinema"); //film textboxes
     var radio = document.getElementById("sound"); //sound textboxes
      var gaem = document.getElementById("Vidya");  //game textboxes
      var comic = document.getElementById("novel"); //book textboxes
      
      if(radio.style.display == "none" && gaem.style.display =="none" && comic.style.display =="none" && film.style.display=="none") //toggle visibility
      {
          gaem.style.display ="block";
          
      }
      else if (gaem.style.display =="block")
      {
          gaem.style.display ="none";
      }
      
      
}

function Validatebook() //validate input in book category
{
    var items = ["bttl", "ba", "bg"];
    var amount = items.length;
    var index;
    var specitem;
    
    for(index = 0; index < amount; index++) //loops through each item and checks if empty
    {
        specitem = items[index];
         if (document.forms["FormCap"][specitem].value == ""|| document.forms["FormCap"][specitem].value == null) 
         { 
             document.forms["FormCap"][specitem].style.border = "1px solid red";
               alert("All areas must be filled out before submission");
                return false;
         }
    }
    
    return true;
}

function Validatefilm()
{
    var items = ["mottl", "myr", "mg"]; //items contained within film category
    var index;
    var specitem;
    
    for(index = 0; index < 3; index++) //loops through each item and checks if it is empty
    {
        specitem = items[index];
         if (document.forms["FormCap"][specitem].value == "" || document.forms["FormCap"][specitem].value == null) 
         { 
             document.forms["FormCap"][specitem].style.border = "1px solid red";
               alert("All areas must be filled out before submission");
                return false;
         }
    }
     return true;
}

function Validatemusic() //validate music and check if input empty
{
    var items = ["muttl", "mart", "mug"];
    var index;
    var specitem;
    
    for(index = 0; index < 3; index++) //checks each element in category
    {
        specitem = items[index ];
         if (document.forms["FormCap"][specitem].value == "" || document.forms["FormCap"][specitem].value == null) 
         { 
             document.forms["FormCap"][specitem].style.border = "1px solid red";
               alert("All areas must be filled out before submission");
                return false;
         }
    }
     return true;
}

function Validategame() //validate game input to check if each category is empty
{
    var items = ["gttl", "gsys", "gg"];
    var index;
    var specitem;
    
    for(index = 0; index < 3; index++) //loops through each item checking for an empty entry
    {
        specitem = items[index];
         if (document.forms["FormCap"][specitem].value == "" || document.forms["FormCap"][specitem].value == null) 
         { 
             document.forms["FormCap"][specitem].style.border = "1px solid red";
               alert("All areas must be filled out before submission");
                return false;
         }
         else
         {
              document.forms["FormCap"][specitem].style.border = "1px solid black";
         }
    }
     return true;
     
}


function linkformB()
{
    Validatebook();
    if(Validatebook() == true)
    {
        window.location.href = 'PHP/ViewCollections.php';
    }
}

function linkformMo()
{
    Validatefilm();
    if(Validatefilm() == true)
    {
        window.location.href = 'PHP/ViewCollections.php';
    }
}

function linkformMu()
{
    Validatemusic();
    if(Validatemusic() == true)
    {
        window.location.href = 'PHP/ViewCollections.php';
    }
}

function linkformG()
{
    Validategame();
    if(Validategame() == true)
    {
        window.location.href = 'PHP/ViewCollections.php';
    }
}