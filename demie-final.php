<?php
session_start();

$sfp1 = rand(0, 5);
$sfp2 = rand(0, 5);


if (isset($_POST['semi1']) && $_SESSION['matchdf1']) {
    $_SESSION['demie_f1A_score'] =intval($_POST['df1']);
    $_SESSION['demie_f1B_score'] = intval($_POST['df2']);

    if ($_SESSION['demie_f1A_score'] == $_SESSION['demie_f1B_score']) {
        $_SESSION['demie_f1A_TAB'] = $sfp1;
        $_SESSION['demie_f1B_TAB'] = $sfp2;
        $_SESSION['tirAuBut1'] = false;
        while ($_SESSION['demie_f1A_TAB'] == $_SESSION['demie_f1B_TAB']) {
            $_SESSION['demie_f1A_TAB'] = $sfp1;
            $_SESSION['demie_f1B_TAB'] = $sfp2;
        }
    }

    $_SESSION['matchdf1'] = false;
}

if (isset($_POST['semi2']) && $_SESSION['matchdf2']) {
    $_SESSION['demie_f2A_score'] = intval($_POST['df3']);
    $_SESSION['demie_f2B_score'] = intval($_POST['df4']);

    if ($_SESSION['demie_f2A_score'] == $_SESSION['demie_f2B_score']) {
        $_SESSION['demie_f2A_TAB'] = $sfp1;
        $_SESSION['demie_f2B_TAB'] = $sfp2;
        $_SESSION['tirAuBut2'] = false;
        while ($_SESSION['demie_f2A_TAB'] == $_SESSION['demie_f2B_TAB']) {
            $_SESSION['demie_f2A_TAB'] = $sfp1;
            $_SESSION['demie_f2B_TAB'] = $sfp2;
        }
    }

    $_SESSION['matchdf2'] = false;
}

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
        <div class="logo"><img src="./image/logo3info.png" width="170px" alt=""></div>
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
                        <img src="./image/logo3info.png" width="100px" alt="">
                    </div>
                    Demi-Finale
                </th>
            </thead>
            <tbody>
                <tr>
                    <form action="" method="post">
                        <td><?= $_SESSION['groupeA'][0]["nom"] ?></td>
                        <td class="score-semiefinal">
                            <?php

                            if ($_SESSION['matchdf1']) { ?>
                                <input min="0" max="10" class="input-corriger" type="number" name="df1">
                                <input min="0" max="10" class="input-corriger" type="number" name="df2">
                            <?php  } elseif ($_SESSION['matchdf1'] == false) {
                                if ($_SESSION['tirAuBut1'] == false) {
                                    echo '(' . $_SESSION['demie_f1A_TAB'] . ')';
                                }
                                echo $_SESSION['demie_f1A_score'] . ' : ' . $_SESSION['demie_f1B_score'];
                                if ($_SESSION['tirAuBut1'] == false) {
                                    echo '(' . $_SESSION['demie_f1B_TAB'] . ')';
                                }
                            }
                            ?>
                        </td>
                        <td><?= $_SESSION['groupeB'][1]["nom"] ?></td>
                        <td class="jouer"><input type="submit" name="semi1" value="JOUER"></td>
                    </form>
                </tr>








                <tr>
                    <form action="" method="post">
                    <td><?= $_SESSION['groupeB'][0]["nom"] ?></td>
                    <td class="score-semiefinal">
                        <?php
                            
                            if ($_SESSION['matchdf2'] && $_SESSION['matchdf1'] == false) { ?>
                                <input min="0" max="10" class="input-corriger" type="number" name="df3">
                                <input min="0" max="10" class="input-corriger" type="number" name="df4">
                        <?php

                        }
                        if ($_SESSION['matchdf2'] == false) {
                            if ($_SESSION['tirAuBut2'] == false) {
                                echo '(' . $_SESSION['demie_f2A_TAB'] . ')';
                            }
                            echo $_SESSION['demie_f2A_score'] . ' : ' . $_SESSION['demie_f2B_score'];
                            if ($_SESSION['tirAuBut2'] == false) {
                                echo '(' . $_SESSION['demie_f2B_TAB'] . ')';
                            }
                        }
                        ?> 
                    </td>
                    <td><?= $_SESSION['groupeA'][1]["nom"] ?></td>
                    <td class="jouer"><input type="submit" name="semi2" value="JOUER"></td>
                </tr>
            </tbody>
        </table>
    </div>



<!-- lien vers la page finale  -->
<?php if ($_SESSION['matchdf1'] == false && $_SESSION['matchdf2'] == false) { ?>
        <a class="button-final" href="final.php">Final</a>
<?php } ?>