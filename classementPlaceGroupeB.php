<?php
    function classementPlaceGroupeB()
    {
      $_SESSION['groupeB']=[
           'groupe1B'=>
           [
            "nom"=>$_SESSION['groupe1B']["nom"],
            "MJ"=>$_SESSION['groupe1B']["MJ"],
            "MG"=>$_SESSION['groupe1B']["MG"],
            "MN"=>$_SESSION['groupe1B']["MN"],
            "MP"=>$_SESSION['groupe1B']["MP"],
            "BP"=>$_SESSION['groupe1B']["BP"],
            "BC"=>$_SESSION['groupe1B']["BC"],
            "Diff"=>$_SESSION['groupe1B']["Diff"],
            "Pts"=>$_SESSION['groupe1B']["Pts"], 
           ],

    'groupe2B'=>
           [
            "nom"=>$_SESSION['groupe2B']["nom"],
            "MJ"=>$_SESSION['groupe2B']["MJ"],
            "MG"=>$_SESSION['groupe2B']["MG"],
            "MN"=>$_SESSION['groupe2B']["MN"],
            "MP"=>$_SESSION['groupe2B']["MP"],
            "BP"=>$_SESSION['groupe2B']["BP"],
            "BC"=>$_SESSION['groupe2B']["BC"],
            "Diff"=>$_SESSION['groupe2B']["Diff"],
            "Pts"=>$_SESSION['groupe2B']["Pts"],   
           ],

    'groupe3B'=>
           [
            "nom"=>$_SESSION['groupe3B']["nom"],
            "MJ"=>$_SESSION['groupe3B']["MJ"],
            "MG"=>$_SESSION['groupe3B']["MG"],
            "MN"=>$_SESSION['groupe3B']["MN"],
            "MP"=>$_SESSION['groupe3B']["MP"],
            "BP"=>$_SESSION['groupe3B']["BP"],
            "BC"=>$_SESSION['groupe3B']["BC"],
            "Diff"=>$_SESSION['groupe3B']["Diff"],
            "Pts"=>$_SESSION['groupe3B']["Pts"]   
           ],

    'groupe4B'=>
           [
            "nom"=>$_SESSION['groupe4B']["nom"],
            "MJ"=>$_SESSION['groupe4B']["MJ"],
            "MG"=>$_SESSION['groupe4B']["MG"],
            "MN"=>$_SESSION['groupe4B']["MN"],
            "MP"=>$_SESSION['groupe4B']["MP"],
            "BP"=>$_SESSION['groupe4B']["BP"],
            "BC"=>$_SESSION['groupe4B']["BC"],
            "Diff"=>$_SESSION['groupe4B']["Diff"],
            "Pts"=>$_SESSION['groupe4B']["Pts"] 
           ] 
        ];
            
            usort($_SESSION['groupeB'], function($x, $y){
               return $x["BC"]-$y["BC"];
           }); 
           usort($_SESSION['groupeB'], function($x, $y){
               return $y["BP"]-$x["BP"];
           });

           usort($_SESSION['groupeB'], function($x, $y){
               return $y["Pts"]-$x["Pts"];
           });
          

           foreach ($_SESSION['groupeB'] as $key => $value) {
               echo "<tr>";
               foreach ($value as $key => $value) {
                   echo "<td>".$value."</td>";
               }
               echo "</tr>";
           }
    
        }
?>
