<?php
session_start();
//afiche premier tour


include 'classementGestion.php';

// gestion score match groupe A 
if (isset($_POST['jouerm1']) && $_SESSION['match1']) {
    $_SESSION['groupe1A']["score"][0] = intval($_POST['eq1A-m1']);
    $_SESSION['groupe2A']["score"][0] = intval($_POST['eq2A-m1']);
    $_SESSION['match1'] = false;
    classer('groupe1A', 'groupe2A', 0);
}
if (isset($_POST['jouerm2']) && $_SESSION['match2'] && $_SESSION['match1'] == false) {
    $_SESSION['groupe3A']["score"][0] = intval($_POST['eq3A-m1']);
    $_SESSION['groupe4A']["score"][0] = intval($_POST['eq4A-m1']);
    $_SESSION['match2'] = false;
    classer('groupe3A', 'groupe4A', 0);
}

if (isset($_POST['jouerm3']) && $_SESSION['match3'] && $_SESSION['match2'] == false && $_SESSION['matchB2'] == false) {
    $_SESSION['groupe1A']["score"][1] = intval($_POST['eq1A-m2']);
    $_SESSION['groupe3A']["score"][1] = intval($_POST['eq3A-m2']);
    $_SESSION['match3'] = false;
    classer('groupe1A', 'groupe3A', 1);
}

if (isset($_POST['jouerm4']) && $_SESSION['match4'] && $_SESSION['match3'] == false) {
    $_SESSION['groupe2A']["score"][1] = intval($_POST['eq2A-m2']);
    $_SESSION['groupe4A']["score"][1] = intval($_POST['eq4A-m2']);
    $_SESSION['match4'] = false;
    classer('groupe2A', 'groupe4A', 1);
}
if (isset($_POST['jouerm5']) && $_SESSION['match5'] && $_SESSION['match4'] == false && $_SESSION['matchB4'] == false) {
    $_SESSION['groupe1A']["score"][2] = intval($_POST['eq1A-m3']);
    $_SESSION['groupe4A']["score"][2] = intval($_POST['eq4A-m3']);
    $_SESSION['match5'] = false;
    classer('groupe1A', 'groupe4A', 2);
}

if (isset($_POST['jouerm6']) && $_SESSION['match6'] && $_SESSION['match5'] == false) {
    $_SESSION['groupe2A']["score"][2] = intval($_POST['eq2A-m3']);
    $_SESSION['groupe3A']["score"][2] = intval($_POST['eq3A-m3']);
    $_SESSION['match6'] = false;
    classer('groupe2A', 'groupe3A', 2);
}



// gestion score match groupe B 

if (isset($_POST['jouerm7']) && $_SESSION['matchB1']) {
    $_SESSION['groupe1B']["score"][0] = intval($_POST['eq1B-m1']);
    $_SESSION['groupe2B']["score"][0] = intval($_POST['eq2B-m1']);
    $_SESSION['matchB1'] = false;
    classer('groupe1B', 'groupe2B', 0);
}
if (isset($_POST['jouerm8']) && $_SESSION['matchB2'] && $_SESSION['matchB1'] == false) {
    $_SESSION['groupe3B']["score"][0] = intval($_POST['eq3B-m1']);
    $_SESSION['groupe4B']["score"][0] = intval($_POST['eq4B-m1']);
    $_SESSION['matchB2'] = false;
    classer('groupe3B', 'groupe4B', 0);
}
if (isset($_POST['jouerm9']) && $_SESSION['matchB3']  && $_SESSION['matchB2'] == false && $_SESSION['match2'] == false) {
    $_SESSION['groupe1B']["score"][1] = intval($_POST['eq1B-m2']);
    $_SESSION['groupe3B']["score"][1] = intval($_POST['eq3B-m2']);
    $_SESSION['matchB3'] = false;
    classer('groupe1B', 'groupe3B', 1);
}
if (isset($_POST['jouerm10']) && $_SESSION['matchB4'] && $_SESSION['matchB3'] == false) {
    $_SESSION['groupe2B']["score"][1] = intval($_POST['eq2B-m2']);
    $_SESSION['groupe4B']["score"][1] = intval($_POST['eq4B-m2']);
    $_SESSION['matchB4'] = false;
    classer('groupe2B', 'groupe4B', 1);
}

if (isset($_POST['jouerm11']) && $_SESSION['matchB5']  && $_SESSION['matchB4'] == false && $_SESSION['match4'] == false) {
    $_SESSION['groupe1B']["score"][2] = intval($_POST['eq1B-m3']);
    $_SESSION['groupe4B']["score"][2] = intval($_POST['eq4B-m3']);
    $_SESSION['matchB5'] = false;
    classer('groupe1B', 'groupe4B', 2);
}
if (isset($_POST['jouerm12']) && $_SESSION['matchB6']  && $_SESSION['matchB5'] == false) {
    $_SESSION['groupe2B']["score"][2] = intval($_POST['eq2B-m3']);
    $_SESSION['groupe3B']["score"][2] = intval($_POST['eq3B-m3']);
    $_SESSION['matchB6'] = false;
    classer('groupe2B', 'groupe3B', 2);
}
?>


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
        <div class="logo"> <img src="./image/logo3info.png" width="170px" alt=""></div>
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
                        <img src="./image/logo3info.png" width="90px" alt="">
                    </div> GROUPE A
                </th>

                <tr class="tr1">

                    <td class="equipe-1"><?= $_SESSION['groupe1A']["nom"] ?></td>
                    <td class="score">
                        <form action="" method="post">
                            <?php if ($_SESSION['match1'] == true) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq1A-m1">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq2A-m1">
                            <?php } ?>
                            <?php

                            if ($_SESSION['match1'] == false) {
                                echo $_SESSION['groupe1A']["score"][0] . ' : ' . $_SESSION['groupe2A']["score"][0];
                            }
                            ?>



                    </td>
                    <td class="equipe-2"><?= $_SESSION['groupe2A']["nom"] ?></td>
                    <td class="jouer">

                        <input type="submit" name="jouerm1" value="JOUER">

                    </td>
                    </form>
                </tr>

                <tr class="tr2">
                    <form action="" method="POST">
                        <td class="equipe-1"><?= $_SESSION['groupe3A']["nom"] ?></td>
                        <td class="score">
                            <?php if ($_SESSION['match2'] == true && $_SESSION['match1'] == false) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq3A-m1">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq4A-m1">
                            <?php } ?>

                            <?php
                            if ($_SESSION['match2'] == false) {
                                echo $_SESSION['groupe3A']["score"][0] . ' : ' . $_SESSION['groupe4A']["score"][0];
                            }
                            ?>
                        </td>
                        <td class="equipe-2"><?= $_SESSION['groupe4A']["nom"] ?></td>
                        <td class="jouer">
                            <input type="submit" name="jouerm2" value="JOUER">
                        </td>
                    </form>
                </tr>

                <th colspan='4'>_</th>
                <tr class="tr1">
                    <form action="" method="post">

                        <td class="equipe-1"><?= $_SESSION['groupe1A']["nom"] ?></td>
                        <td class="score">
                            <?php if ($_SESSION['match3'] == true && $_SESSION['match2'] == false && $_SESSION['matchB2'] == false) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq1A-m2">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq3A-m2">
                            <?php } ?>

                            <?php
                            if ($_SESSION['match3'] == false) {
                                echo $_SESSION['groupe1A']["score"][1] . ' : ' . $_SESSION['groupe3A']["score"][1];
                            }
                            ?>
                        </td>
                        <td class="equipe-2"><?= $_SESSION['groupe3A']["nom"] ?></td>
                        <td class="jouer">
                            <input type="submit" name="jouerm3" value="JOUER">
                        </td>
                    </form>
                </tr>

                <tr class="tr2">
                    <form action="" method="post">
                        <td class="equipe-1"><?= $_SESSION['groupe2A']["nom"] ?></td>
                        <td class="score">
                            <?php if ($_SESSION['match4'] == true && $_SESSION['match3'] == false) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq2A-m2">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq4A-m2">
                            <?php } ?>
                            <?php
                            if ($_SESSION['match4'] == false) {
                                echo $_SESSION['groupe2A']["score"][1] . ' : ' . $_SESSION['groupe4A']["score"][1];
                            }
                            ?>
                        </td>
                        <td class="equipe-2"><?= $_SESSION['groupe4A']["nom"] ?></td>
                        <td class="jouer"><input type="submit" name="jouerm4" value="JOUER"></td>
                    </form>
                </tr>
                <th colspan='4'>_</th>
                <tr class="tr1">
                    <form action="" method="post">
                        <td class="equipe-1"><?= $_SESSION['groupe1A']["nom"] ?></td>
                        <td class="score">
                            <?php if ($_SESSION['match5'] == true && $_SESSION['match4'] == false && $_SESSION['matchB4'] == false) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq1A-m3">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq4A-m3">
                            <?php } ?>
                            <?php
                            if ($_SESSION['match5'] == false) {
                                echo $_SESSION['groupe1A']["score"][2] . ' : ' . $_SESSION['groupe4A']["score"][2];
                            }
                            ?>
                        </td>
                        <td class="equipe-2"><?= $_SESSION['groupe4A']["nom"] ?></td>
                        <td class="jouer"><input type="submit" name="jouerm5" value="JOUER"></td>
                    </form>
                </tr>


                <tr class="tr2">
                    <form action="" method="post">
                        <td class="equipe-1"><?= $_SESSION['groupe2A']["nom"] ?></td>
                        <td class="score">
                            <?php if ($_SESSION['match6'] == true && $_SESSION['match5'] == false) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq2A-m3">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq3A-m3">
                            <?php } ?>
                            <?php
                            if ($_SESSION['match6'] == false) {
                                echo $_SESSION['groupe2A']["score"][2] . ' : ' . $_SESSION['groupe3A']["score"][2];
                            }
                            ?>
                            
                        </td>
                        <td class="equipe-2"><?= $_SESSION['groupe3A']["nom"] ?></td>
                        <td class="jouer"><input type="submit" name="jouerm6" value="JOUER"></td>
                    </form>
                </tr>
            </table>

        </div>





        <div class="affiche-groupeB">
            <table>
                <th class="titre-groupe" colspan='4'>
                    <div class="nom-groupe">
                        <img src="./image/logo3info.png" width="90px" alt="">
                    </div> GROUPE B
                </th>
                <tr class="tr2">
                    <form action="" method="post">
                        <td class="equipe-1"><?= $_SESSION['groupe1B']["nom"] ?></td>
                        <td class="score">
                            <?php if ($_SESSION['matchB1'] == true) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq1B-m1">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq2B-m1">
                            <?php } ?>
                            <?php
                            if ($_SESSION['matchB1'] == false) {
                                echo  $_SESSION['groupe1B']["score"][0] . ' : ' . $_SESSION['groupe2B']["score"][0];
                            }
                            ?>
                        </td>
                        <td class="equipe-2"><?= $_SESSION['groupe2B']["nom"] ?></td>
                        <td class="jouer"><input type="submit" name="jouerm7" value="JOUER"></td>
                    </form>
                </tr>
                <tr class="tr1">
                    <form action="" method="post">
                        <td class="equipe-1"><?= $_SESSION['groupe3B']["nom"] ?></td>
                        <td class="score">
                            <?php if ($_SESSION['matchB2'] == true && $_SESSION['matchB1'] == false) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq3B-m1">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq4B-m1">
                            <?php } ?>
                            <?php
                            if ($_SESSION['matchB2'] == false) {
                                echo  $_SESSION['groupe3B']["score"][0] . ' : ' . $_SESSION['groupe4B']["score"][0];
                            }
                            ?>
                        </td>
                        <td class="equipe-2"><?= $_SESSION['groupe4B']["nom"] ?></td>
                        <td class="jouer"><input type="submit" name="jouerm8" value="JOUER"></td>
                    </form>
                </tr>
                <th colspan='4'>_</th>
                <tr class="tr2">
                    <form action="" method="post">
                        <td class="equipe-1"><?= $_SESSION['groupe1B']["nom"] ?></td>
                        <td class="score">
                            <?php if ($_SESSION['matchB3'] == true && $_SESSION['matchB2'] == false &&$_SESSION['match2'] == false) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq1B-m2">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq3B-m2">
                            <?php } ?>
                            <?php
                            if ($_SESSION['matchB3'] == false) {
                                echo $_SESSION['groupe1B']["score"][1] . ' : ' . $_SESSION['groupe3B']["score"][1];
                            }
                            ?>
                        </td>
                        <td class="equipe-2"><?= $_SESSION['groupe3B']["nom"] ?></td>
                        <td class="jouer"><input type="submit" name="jouerm9" value="JOUER"></td>
                    </form>
                </tr>
                <tr class="tr1">
                    <form action="" method="post">
                        <td class="equipe-1"><?= $_SESSION['groupe2B']["nom"] ?></td>
                        <td class="score">
                            <?php if ($_SESSION['matchB4'] == true && $_SESSION['matchB3'] == false) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq2B-m2">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq4B-m2">
                            <?php } ?>
                            <?php
                            if ($_SESSION['matchB4'] == false) {
                                echo $_SESSION['groupe2B']["score"][1] . ' : ' . $_SESSION['groupe4B']["score"][1];
                            }
                            ?>
                        </td>
                        <td class="equipe-2"><?= $_SESSION['groupe4B']["nom"] ?></td>
                        <td class="jouer"><input type="submit" name="jouerm10" value="JOUER"></td>
                    </form>
                </tr>
                <th colspan='4'>_</th>
                <tr class="tr2">
                    <form action="" method="post">
                        <td class="equipe-1"><?= $_SESSION['groupe1B']["nom"] ?></td>
                        <td class="score">
                            <?php if ($_SESSION['matchB5'] == true && $_SESSION['matchB4'] == false && $_SESSION['match4'] == false) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq1B-m3">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq4B-m3">
                            <?php } ?>
                            <?php
                            if ($_SESSION['matchB5'] == false) {
                                echo  $_SESSION['groupe1B']["score"][2] . ' : ' . $_SESSION['groupe4B']["score"][2];
                            }
                            ?>
                        </td>
                        <td class="equipe-2"><?= $_SESSION['groupe4B']["nom"] ?></td>
                        <td class="jouer"><input type="submit" name="jouerm11" value="JOUER"></td>
                    </form>
                </tr>
                <tr class="tr1">
                    <form action="" method="post">
                        <td class="equipe-1"><?= $_SESSION['groupe2B']["nom"] ?></td>
                        <td class="score">
                            <?php if ($_SESSION['matchB6'] == true && $_SESSION['matchB5'] == false) { ?>
                                <input class="input-corriger" min="0" max="10" type="number" name="eq2B-m3">
                                <input class="input-corriger" min="0" max="10" type="number" name="eq3B-m3">
                            <?php } ?>
                            <?php
                            if ($_SESSION['matchB6'] == false) {
                                echo  $_SESSION['groupe2B']["score"][2] . ' : ' . $_SESSION['groupe3B']["score"][2];
                            }
                            ?>
                        </td>
                        <td class="equipe-2"><?= $_SESSION['groupe3B']["nom"] ?></td>
                        <td class="jouer"><input type="submit" name="jouerm12" value="JOUER"></td>
                    </form>
                </tr>
            </table>
        </div>
    </div>
    <!-- affichage des matchs par groupe end -->



</body>

</html>