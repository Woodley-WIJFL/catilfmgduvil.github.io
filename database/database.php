 <?php
 function placerEquipe($position,$nom)
 {
     $_SESSION[$position]=[
     "nom"=>$nom,
     "score"=>[0,0,0],
     "MJ"=>0,
     "MG"=>0,
     "MN"=>0,
     "MP"=>0,
     "BP"=>0,
     "BC"=>0,
     "Diff"=>0,
     "Pts"=>0 
     ];
 }
 ?>