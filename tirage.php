
<?php
session_start();
//afiche premier tour


include 'classementGestion.php';

$m1=rand(0,7);
$m2=rand(0,7);

$m3=rand(0,7);
$m4=rand(0,7);
 ?>



 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Coupe3eminfo.affiche.com</title>
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="style2.css">
 </head>
 <body>
    
     <header>
        <div class="logo"> <img src="./image/logo3info.png" width="170px"  alt=""></div>
        <div class="button">
            <form action="classement.php">
                <input class="button-calendrier" type="submit" value="Classement">
            </form>
            <!-- <a class="calendrier" href="classement.php">classement</a>  -->
            <form action="index.php">
                <input class="button-calendrier" type="submit" value="Retour">
            </form>
        </div>
    </header>
     
<!-- affichage des matchs par groupe start -->
<div class="affiche">
    <div class="affiche-groupeA">
            <table>
        
        <th class="titre-groupe" colspan='4'>
            <div class="nom-groupe">
            <img src="./image/logo3info.png" width="90px"  alt="">
            </div> GROUPE A</th>
            <tr class="tr1">
                <td rowspan="2" class="jouer">
                    <form action="" method="post">
                        <input type="submit" name="jouer" value="JOUER">
                    </form> 
                </td>
                <td class="equipe-1"><?=$_SESSION['groupe1A']["nom"]?></td>
                <td class="score">-<?php
                if(isset($_POST['jouer']) && $_SESSION['match1'])
                {
                    $_SESSION['groupe1A']["score"][0]=$m1;
                    $_SESSION['groupe2A']["score"][0]=$m2;
                    $_SESSION['match1']=false;
                    classer('groupe1A','groupe2A',0);
                }
                if($_SESSION['match1']==false)
                {
                echo $_SESSION['groupe1A']["score"][0].' : '. $_SESSION['groupe2A']["score"][0];
                }
                ?>
                -</td>
                <td class="equipe-2"><?=$_SESSION['groupe2A']["nom"]?></td>
            </tr>
            <tr class="tr2">
                <td class="equipe-1"><?=$_SESSION['groupe3A']["nom"]?></td>
                <td class="score">-
                <?php
                if(isset($_POST['jouer']) && $_SESSION['match2'])
                {
                    $_SESSION['groupe3A']["score"][0]=$m3;
                    $_SESSION['groupe4A']["score"][0]=$m4;
                    $_SESSION['match2']=false;
                    classer('groupe3A','groupe4A',0);
                }
                if($_SESSION['match2']==false){
                echo $_SESSION['groupe3A']["score"][0].' : '.$_SESSION['groupe4A']["score"][0];
                }
                ?> -
                </td>
                <td class="equipe-2"><?=$_SESSION['groupe4A']["nom"]?></td>
            </tr>
            <th colspan='4'>_</th>
            <tr class="tr1">
                <td rowspan="2" class="jouer">
                    <form action="" method="post">
                        <input type="submit" name="jouerj2" value="JOUER">
                    </form> 
                </td>
                <td class="equipe-1"><?=$_SESSION['groupe1A']["nom"]?></td>
                <td class="score">-
                    <?php
                if(isset($_POST['jouerj2']) && $_SESSION['match3'] &&  $_SESSION['match1']==false && $_SESSION['matchB2']==false){
                $_SESSION['groupe1A']["score"][1]=$m1;
                    $_SESSION['groupe3A']["score"][1]=$m2;
                    $_SESSION['match3']=false;
                    classer('groupe1A','groupe3A',1);

                }
                if($_SESSION['match3']==false)
                {
                echo $_SESSION['groupe1A']["score"][1].' : '.$_SESSION['groupe3A']["score"][1];
            }
                ?> -
                </td>
                <td class="equipe-2"><?=$_SESSION['groupe3A']["nom"]?></td>
            </tr>

            <tr class="tr2">
                <td class="equipe-1"><?=$_SESSION['groupe2A']["nom"]?></td>
                <td class="score">-
                    <?php
                if(isset($_POST['jouerj2']) && $_SESSION['match4'] &&  $_SESSION['match1']==false && $_SESSION['matchB2']==false){
                    $_SESSION['groupe2A']["score"][1]=$m3;
                $_SESSION['groupe4A']["score"][1]=$m4;
                    $_SESSION['match4']=false;
                    classer('groupe2A','groupe4A',1);
                }
                if($_SESSION['match4']==false)
                {
                echo $_SESSION['groupe2A']["score"][1].' : '.$_SESSION['groupe4A']["score"][1];        
            }
                ?>-
                </td>
                <td class="equipe-2"><?=$_SESSION['groupe4A']["nom"]?></td>
            </tr>

            <th colspan='4'>_</th>
            <tr class="tr1">
                <td rowspan="2" class="jouer">
                    <form action="" method="post">
                        <input type="submit" name="jouerj3" value="JOUER">
                    </form> 
                </td>
                <td class="equipe-1"><?=$_SESSION['groupe1A']["nom"]?></td>
                <td class="score">-
                    <?php
                if(isset($_POST['jouerj3']) && $_SESSION['match5'] && $_SESSION['match4']==false && $_SESSION['matchB3']==false){
                $_SESSION['groupe1A']["score"][2]=$m1;
                $_SESSION['groupe4A']["score"][2]=$m2;
                $_SESSION['match5']=false;
                    classer('groupe1A','groupe4A',2);
                }
                if($_SESSION['match5']==false)
                {
                echo $_SESSION['groupe1A']["score"][2].' : '.$_SESSION['groupe4A']["score"][2];
                }
                ?>-
                </td>
                <td class="equipe-2"><?=$_SESSION['groupe4A']["nom"]?></td>
            </tr>
            <tr class="tr2">
                <td class="equipe-1"><?=$_SESSION['groupe2A']["nom"]?></td>
                <td class="score">-
                    <?php
                if(isset($_POST['jouerj3']) && $_SESSION['match6'] && $_SESSION['match4']==false && $_SESSION['matchB3']==false){
                    $_SESSION['groupe2A']["score"][2]=$m3;
                $_SESSION['groupe3A']["score"][2]=$m4;
                    $_SESSION['match6']=false;
                    classer('groupe2A','groupe3A',2);
                }
                if($_SESSION['match6']==false)
                {
                echo $_SESSION['groupe2A']["score"][2].' : '.$_SESSION['groupe3A']["score"][2];
                }
                ?>
                -</td>
                <td class="equipe-2"><?=$_SESSION['groupe3A']["nom"]?></td>
            </tr>
        </table>

        </div>





            <div class="affiche-groupeB">
                    <table>
                    <th class="titre-groupe" colspan='4'><div class="nom-groupe">
                        <img src="./image/logo3info.png" width="90px"  alt="">
                    </div> GROUPE B</th>
                    <tr class="tr2">
                            <td rowspan='2' class="jouer">
                                <form action="" method="post">
                                    <input type="submit" name="jouer2" value="JOUER">
                                </form> 
                            </td>
                            <td class="equipe-1"><?=$_SESSION['groupe1B']["nom"]?></td>
                            <td class="score">-
                                <?php
                                    if(isset($_POST['jouer2']) && $_SESSION['matchB1'])
                                    {
                                        $_SESSION['groupe2B']["score"][0]=$m2;
                                        $_SESSION['groupe1B']["score"][0]=$m1;
                                        $_SESSION['matchB1']=false;
                                        classer('groupe1B','groupe2B',0);
                                    }
                                    if($_SESSION['matchB1']==false)
                                    {
                                    echo  $_SESSION['groupe1B']["score"][0].' : '. $_SESSION['groupe2B']["score"][0];
                                    }
                                ?>-
                            </td>
                            <td class="equipe-2"><?=$_SESSION['groupe2B']["nom"]?></td>
                        </tr>
                        <tr class="tr1">
                            <td class="equipe-1"><?=$_SESSION['groupe3B']["nom"]?></td>
                            <td class="score">-
                            <?php
                            if(isset($_POST['jouer2']) && $_SESSION['matchB2'])
                            {
                                $_SESSION['groupe3B']["score"][0]=$m3;
                                $_SESSION['groupe4B']["score"][0]=$m4;
                                $_SESSION['matchB2']=false;
                            classer('groupe3B','groupe4B',0);
                            }
                            if($_SESSION['matchB2']==false)
                            {
                            echo  $_SESSION['groupe3B']["score"][0].' : '. $_SESSION['groupe4B']["score"][0];
                            }
                            ?>-
                            </td>
                            <td class="equipe-2"><?=$_SESSION['groupe4B']["nom"]?></td>
                        </tr>
                        <th colspan='4'>_</th>
                        <tr class="tr2">
                            <td rowspan='2' class="jouer">
                                <form action="" method="post">
                                    <input type="submit" name="jouer2j2" value="JOUER">
                                </form> 
                            </td>
                        <td class="equipe-1"><?=$_SESSION['groupe1B']["nom"]?></td> 
                        <td class="score">-
                            <?php
                                    if(isset($_POST['jouer2j2']) && $_SESSION['matchB3'] && $_SESSION['matchB1']==false && $_SESSION['match1']==false)
                                    {
                                    $_SESSION['groupe1B']["score"][1]=$m1;
                                    $_SESSION['groupe3B']["score"][1]=$m2;
                                    $_SESSION['matchB3']=false;
                                    classer('groupe1B','groupe3B',1);
                                    }
                                    if($_SESSION['matchB3']==false)
                                    {
                                    echo $_SESSION['groupe1B']["score"][1].' : '.$_SESSION['groupe3B']["score"][1];
                                    }
                                ?>-
                        </td>
                        <td class="equipe-2"><?=$_SESSION['groupe3B']["nom"]?></td> 
                        </tr>
                        <tr class="tr1">
                            <td class="equipe-1"><?=$_SESSION['groupe2B']["nom"]?></td>
                            <td class="score">-
                                <?php
                                    if(isset($_POST['jouer2j2']) && $_SESSION['matchB4'] && $_SESSION['matchB1']==false && $_SESSION['match1']==false)
                                    {
                                        $_SESSION['groupe2B']["score"][1]=$m3;
                                        $_SESSION['groupe4B']["score"][1]=$m4;
                                        $_SESSION['matchB4']=false;
                                    classer('groupe2B','groupe4B',1);
                                    }
                                    if($_SESSION['matchB4']==false)
                                    {
                                    echo $_SESSION['groupe2B']["score"][1].' : '.$_SESSION['groupe4B']["score"][1];
                                    }
                                ?>-
                            </td>
                            <td class="equipe-2"><?=$_SESSION['groupe4B']["nom"]?></td>
                        </tr>
                        <th colspan='4'>_</th>
                        <tr class="tr2">
                            <td rowspan='2' class="jouer">
                                <form action="" method="post">
                                    <input type="submit" name="jouer2j3" value="JOUER">
                                </form> 
                            </td>
                            <td class="equipe-1"><?=$_SESSION['groupe1B']["nom"]?></td>
                            <td class="score">-
                                <?php
                                    if(isset($_POST['jouer2j3']) && $_SESSION['matchB5'] && $_SESSION['matchB4']==false && $_SESSION['match3']==false)
                                    {
                                        $_SESSION['groupe1B']["score"][2]=$m1;
                                        $_SESSION['groupe4B']["score"][2]=$m2;
                                    $_SESSION['matchB5']=false;
                                                    classer('groupe1B','groupe4B',2);

                                    }
                                    if($_SESSION['matchB5']==false)
                                    {
                                    echo  $_SESSION['groupe1B']["score"][2].' : '. $_SESSION['groupe4B']["score"][2];
                                    }
                                ?>-
                            </td>
                            <td class="equipe-2"><?=$_SESSION['groupe4B']["nom"]?></td>
                        </tr>
                        <tr class="tr1">
                        <td class="equipe-1"><?=$_SESSION['groupe2B']["nom"]?></td>
                        <td class="score">-
                            <?php
                                    if(isset($_POST['jouer2j3']) && $_SESSION['matchB6'] && $_SESSION['matchB4']==false && $_SESSION['match3']==false)
                                    {
                                        $_SESSION['groupe2B']["score"][2]=$m3;
                                        $_SESSION['groupe3B']["score"][2]=$m4;
                                    $_SESSION['matchB6']=false;
                                    classer('groupe2B','groupe3B',2);
                                    }
                                    if($_SESSION['matchB6']==false)
                                    {
                                    echo  $_SESSION['groupe2B']["score"][2].' : '. $_SESSION['groupe3B']["score"][2];
                                    }
                                ?>-
                        </td>
                        <td class="equipe-2"><?=$_SESSION['groupe3B']["nom"]?></td> 
                        </tr>
                    </table>
        </div>
 </div>
<!-- affichage des matchs par groupe end -->



 </body>
 </html>