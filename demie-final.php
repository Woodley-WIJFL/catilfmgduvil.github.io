<?php
    session_start();
    $sf1=rand(0,7);
    $sf2=rand(0,7);

    $sfp1=rand(0,5);
    $sfp2=rand(0,5);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupe3eminfo.semie-finale.com</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body class="body">
    
    <header>
        <div class="logo"><img src="./image/logo3info.png" width="170px"  alt=""></div>
        <div class="button">
            <form action="classement.php">
                <input class="button-calendrier" type="submit" value="Classement">
            </form>
            <!-- <a class="calendrier" href="classement.php">classement</a>  -->
            <form action="index.php">
                <input class="button-calendrier" type="submit" value="Acceuil">
            </form>
        </div>
    </header>



<div class="classement"> 
<table class="tableSemieFinal">
    <thead class="titre-groupe">
            <th colspan="4">
                <div class="nom-groupe">
                    <img src="./image/logo3info.png" width="100px"  alt="">
                </div>
                Demi-Finale
            </th>
    </thead>
    <tbody>
        <tr>
            <td class="jouer-semie  ">
                <form action="" method="post">
                <input type="submit" name="jDemie" value="Jouer">
            </form></td>
            <td><?= $_SESSION['groupeA'][0]["nom"] ?></td>
            <td class="score-semiefinal"> -
                <?php
                if(isset($_POST['jDemie']) && $_SESSION['matchdf1'])
                {
                    $_SESSION['demie_f1A_score']=$sf1;
                    $_SESSION['demie_f1B_score']=$sf2;

                    if ($_SESSION['demie_f1A_score']==$_SESSION['demie_f1B_score']) {
                            $_SESSION['demie_f1A_TAB']=$sfp1;
                            $_SESSION['demie_f1B_TAB']=$sfp2;
                            $_SESSION['tirAuBut1']=false;
                        while($_SESSION['demie_f1A_TAB']==$_SESSION['demie_f1B_TAB']){
                            $_SESSION['demie_f1A_TAB']=$sfp1;
                            $_SESSION['demie_f1B_TAB']=$sfp2;
                        }
                    
                    }

                    $_SESSION['matchdf1']=false;
                }
                if($_SESSION['matchdf1']==false)
                {
                    if ($_SESSION['tirAuBut1']==false) {
                        echo '(' .$_SESSION['demie_f1A_TAB']. ')';
                    }
                echo $_SESSION['demie_f1A_score'].' : ' .$_SESSION['demie_f1B_score'];
                if ($_SESSION['tirAuBut1']==false) {
                   echo '(' .$_SESSION['demie_f1B_TAB']. ')';
                }  
                } 
                ?>
            -</td>
            <td><?= $_SESSION['groupeB'][1]["nom"] ?></td>
        </tr>
        <tr>
            <td class="jouer-semie">
                <form action="" method="post">
                    <input type="submit" name="jDemie2" value="Jouer">
                </form>
            </td>
            <td><?= $_SESSION['groupeB'][0]["nom"] ?></td>
            <td class="score-semiefinal"> -
                 <?php
                if(isset($_POST['jDemie2']) && $_SESSION['matchdf2'] && $_SESSION['matchdf1']==false)
                {
                    $_SESSION['demie_f2B_score']=$sf1;
                    $_SESSION['demie_f2A_score']=$sf2;

                    if ($_SESSION['demie_f2B_score']==$_SESSION['demie_f2A_score']) {
                            $_SESSION['demie_f2A_TAB']=$sfp1;
                            $_SESSION['demie_f2B_TAB']=$sfp2;
                            $_SESSION['tirAuBut2']=false;
                        while($_SESSION['demie_f2A_TAB']==$_SESSION['demie_f2B_TAB']){
                            $_SESSION['demie_f2A_TAB']=$sfp1;
                            $_SESSION['demie_f2B_TAB']=$sfp2;
                        }
                    }

                    $_SESSION['matchdf2']=false;
                }
                if($_SESSION['matchdf2']==false)
                {
                    if ($_SESSION['tirAuBut2']==false) {
                        echo '('.$_SESSION['demie_f2A_TAB'].')';
                    }
                    echo $_SESSION['demie_f2B_score'].' : '.$_SESSION['demie_f2A_score'];
                    if ($_SESSION['tirAuBut2']==false) {
                        echo '('.$_SESSION['demie_f2B_TAB'].')';
                    }

                }
                ?> -
            </td>
            <td><?= $_SESSION['groupeA'][1]["nom"] ?></td>
        </tr>
    </tbody>
</table>
</div>


</body>
</html>


<!-- lien vers la page finale  -->
<?php if ($_SESSION['matchdf1']==false && $_SESSION['matchdf2']==false) { ?>
                <form action="final.php">
                    <input class="button-final" type="submit" value="Final">
                </form>
<?php } ?>