<?php
    function classementPlaceGroupeA()
    {
      $_SESSION['groupeA']=[
           'groupe1A'=>
           [
            "nom"=>$_SESSION['groupe1A']["nom"],
            "MJ"=>$_SESSION['groupe1A']["MJ"],
            "MG"=>$_SESSION['groupe1A']["MG"],
            "MN"=>$_SESSION['groupe1A']["MN"],
            "MP"=>$_SESSION['groupe1A']["MP"],
            "BP"=>$_SESSION['groupe1A']["BP"],
            "BC"=>$_SESSION['groupe1A']["BC"],
            "Diff"=>$_SESSION['groupe1A']["Diff"],
            "Pts"=>$_SESSION['groupe1A']["Pts"], 
           ],

    'groupe2A'=>
           [
            "nom"=>$_SESSION['groupe2A']["nom"],
            "MJ"=>$_SESSION['groupe2A']["MJ"],
            "MG"=>$_SESSION['groupe2A']["MG"],
            "MN"=>$_SESSION['groupe2A']["MN"],
            "MP"=>$_SESSION['groupe2A']["MP"],
            "BP"=>$_SESSION['groupe2A']["BP"],
            "BC"=>$_SESSION['groupe2A']["BC"],
            "Diff"=>$_SESSION['groupe2A']["Diff"],
            "Pts"=>$_SESSION['groupe2A']["Pts"],   
           ],

    'groupe3A'=>
           [
            "nom"=>$_SESSION['groupe3A']["nom"],
            "MJ"=>$_SESSION['groupe3A']["MJ"],
            "MG"=>$_SESSION['groupe3A']["MG"],
            "MN"=>$_SESSION['groupe3A']["MN"],
            "MP"=>$_SESSION['groupe3A']["MP"],
            "BP"=>$_SESSION['groupe3A']["BP"],
            "BC"=>$_SESSION['groupe3A']["BC"],
            "Diff"=>$_SESSION['groupe3A']["Diff"],
            "Pts"=>$_SESSION['groupe3A']["Pts"]   
           ],

    'groupe4A'=>
           [
            "nom"=>$_SESSION['groupe4A']["nom"],
            "MJ"=>$_SESSION['groupe4A']["MJ"],
            "MG"=>$_SESSION['groupe4A']["MG"],
            "MN"=>$_SESSION['groupe4A']["MN"],
            "MP"=>$_SESSION['groupe4A']["MP"],
            "BP"=>$_SESSION['groupe4A']["BP"],
            "BC"=>$_SESSION['groupe4A']["BC"],
            "Diff"=>$_SESSION['groupe4A']["Diff"],
            "Pts"=>$_SESSION['groupe4A']["Pts"] 
           ] 
        ];


            usort($_SESSION['groupeA'], function($x, $y){
               return $y["BC"]-$x["BC"];
            });
            usort($_SESSION['groupeA'], function($x, $y){
               return $y["BP"]-$x["BP"];
            });

           usort($_SESSION['groupeA'], function($x, $y){
               return $y["Pts"]-$x["Pts"];
           });
            

           foreach ($_SESSION['groupeA'] as $key => $value) {
               echo "<tr>";
               foreach ($value as $key => $value) {
                   echo "<td>".$value."</td>";
               }
               echo "</tr>";
           }
    
        }
?>
