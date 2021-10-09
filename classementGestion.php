<?php

function classer($equipe1,$equipe2,$matchNum)
{
    $_SESSION[$equipe1]['MJ']=($matchNum+1);
    $_SESSION[$equipe2]['MJ']=($matchNum+1);
   
    if($_SESSION[$equipe1]['score'][$matchNum] > $_SESSION[$equipe2]['score'][$matchNum])
    {
       $_SESSION[$equipe1]['MG']+=1; 
       $_SESSION[$equipe1]['BP']+=$_SESSION[$equipe1]['score'][$matchNum];
       $_SESSION[$equipe1]['BC']+=$_SESSION[$equipe2]['score'][$matchNum];
       $_SESSION[$equipe1]['Diff']+=($_SESSION[$equipe1]['score'][$matchNum]-$_SESSION[$equipe2]['score'][$matchNum]);  
       $_SESSION[$equipe1]['Pts']+=3; 
       
       $_SESSION[$equipe2]['MP']+=1; 
       $_SESSION[$equipe2]['BP']+=$_SESSION[$equipe2]['score'][$matchNum];
       $_SESSION[$equipe2]['BC']+=$_SESSION[$equipe1]['score'][$matchNum];
       $_SESSION[$equipe2]['Diff']+=($_SESSION[$equipe2]['score'][$matchNum]-$_SESSION[$equipe1]['score'][$matchNum]);         
    }

     elseif ($_SESSION[$equipe1]['score'][$matchNum] < $_SESSION[$equipe2]['score'][$matchNum])
     {
       $_SESSION[$equipe1]['MP']+=1; 
       $_SESSION[$equipe1]['BP']+=$_SESSION[$equipe1]['score'][$matchNum];
       $_SESSION[$equipe1]['BC']+=$_SESSION[$equipe2]['score'][$matchNum];
       $_SESSION[$equipe1]['Diff']+=($_SESSION[$equipe1]['score'][$matchNum]-$_SESSION[$equipe2]['score'][$matchNum]);  

       $_SESSION[$equipe2]['MG']+=1; 
       $_SESSION[$equipe2]['BP']+=$_SESSION[$equipe2]['score'][$matchNum];
       $_SESSION[$equipe2]['BC']+=$_SESSION[$equipe1]['score'][$matchNum];
       $_SESSION[$equipe2]['Diff']+=($_SESSION[$equipe2]['score'][$matchNum]-$_SESSION[$equipe1]['score'][$matchNum]);         
       $_SESSION[$equipe2]['Pts']+=3; 

    }
    else {
      $_SESSION[$equipe1]['MN']+=1; 
       $_SESSION[$equipe1]['BP']+=$_SESSION[$equipe1]['score'][$matchNum];
       $_SESSION[$equipe1]['BC']+=$_SESSION[$equipe2]['score'][$matchNum];
       $_SESSION[$equipe1]['Diff']+=($_SESSION[$equipe1]['score'][$matchNum]-$_SESSION[$equipe2]['score'][$matchNum]);  
       $_SESSION[$equipe1]['Pts']+=1; 


       $_SESSION[$equipe2]['MN']+=1; 
       $_SESSION[$equipe2]['BP']+=$_SESSION[$equipe2]['score'][$matchNum];
       $_SESSION[$equipe2]['BC']+=$_SESSION[$equipe1]['score'][$matchNum];
       $_SESSION[$equipe2]['Diff']+=($_SESSION[$equipe2]['score'][$matchNum]-$_SESSION[$equipe1]['score'][$matchNum]);         
       $_SESSION[$equipe2]['Pts']+=1; 

    }


}

?>