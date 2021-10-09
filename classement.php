<?php
    session_start();
    include 'classementPlaceGroupeA.php';
    include 'classementPlaceGroupeB.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupe3eminfo.classement.com</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="./image/logo3info.png" width="170px"  alt="">
        </div>
        <div class="button">
            <?php
                if ($_SESSION['groupe1A']['MJ']==3 && 
                    $_SESSION['groupe2A']['MJ']==3 &&
                    $_SESSION['groupe3A']['MJ']==3 &&
                    $_SESSION['groupe4A']['MJ']==3 &&
                    $_SESSION['groupe1B']['MJ']==3 &&
                    $_SESSION['groupe2B']['MJ']==3 &&
                    $_SESSION['groupe3B']['MJ']==3 &&
                    $_SESSION['groupe4B']['MJ']==3
                ) {
            ?>
                <form action="demie-final.php">
                    <input class="button-calendrier" type="submit" value="Demi-Finale">
                </form>
            <?php } ?>

             <form action="tirage.php">
                <input class="button-calendrier" type="submit" value="Retour">
            </form>
        </div>
    </header>
    
<div class="classement">
    <div class="classementA">
        <table>
            <thead>
                <tr>
                    <th class="titre-groupe" colspan="9">
                        <div class="nom-groupe">
                            <img src="./image/logo3info.png" width="150px"  alt="">
                        </div>GROUPE A
                    </th>
                    </th>
                </tr>
                <tr class="t-titre score" id="none">
                    <th>EQUIPE</th>
                    <th>MJ</th>
                    <th>MG</th>
                    <th>MN</th>
                    <th>MP</th>
                    <th>BP</th>
                    <th>BC</th>
                    <th>Dif</th>
                    <th>Point</th>
                </tr>
            </thead>
            <tbody>
                <?php
                classementPlaceGroupeA();
                ?>
            </tbody>
        </table>
    </div>


    <div class="classementB">    
        <table>
            <thead>
                <tr>
                    <th class="titre-groupe" colspan="9">
                        <div class="nom-groupe">
                            <img src="./image/logo3info.png" width="150px"  alt="">
                        </div>GROUPE B
                    </th>
                </tr>
                <tr class="t-titre score">
                    <th>EQUIPE</th>
                    <th>MJ</th>
                    <th>MG</th>
                    <th>MN</th>
                    <th>MP</th>
                    <th>BP</th>
                    <th>BC</th>
                    <th>Dif</th>
                    <th>Point</th>
                </tr>
            </thead>
            <tbody>
                <?php
                classementPlaceGroupeB();
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>