<?php session_start();
$f1 = rand(0, 7);
$f2 = rand(0, 7);

$pf1 = rand(0, 5);
$pf2 = rand(0, 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupe3eminfo.final .com</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>

<body class="body">
    <header>
        <div class="logo"><img src="./image/logo3info.png" width="170px" alt=""></div>
        <div class="button">
            <form action="index.php">
                <input class="button-calendrier" type="submit" value="Acceuil">
            </form>
        </div>
    </header>

    <?php
    if ($_SESSION['demie_f1A_score'] > $_SESSION['demie_f1B_score'] || $_SESSION['demie_f1A_TAB'] > $_SESSION['demie_f1B_TAB']) {
        $_SESSION['equipe1f'] = $_SESSION['groupeA'][0]["nom"];
        $_SESSION['equipe1pf'] = $_SESSION['groupeB'][1]["nom"];
    } else {
        $_SESSION['equipe1f'] = $_SESSION['groupeB'][1]["nom"];
        $_SESSION['equipe1pf'] = $_SESSION['groupeA'][0]["nom"];
    }

    if ($_SESSION['demie_f2B_score'] > $_SESSION['demie_f2A_score'] || $_SESSION['demie_f2A_TAB'] > $_SESSION['demie_f2B_TAB']) {

        $_SESSION['equipe2pf'] = $_SESSION['groupeA'][1]["nom"];
        $_SESSION['equipe2f'] = $_SESSION['groupeB'][0]["nom"];
    } else {
        $_SESSION['equipe2pf'] = $_SESSION['groupeB'][0]["nom"];
        $_SESSION['equipe2f'] = $_SESSION['groupeA'][1]["nom"];
    }
    ?>
    <div class="classement">
        <table class="t-final">
            <tr class="titre-groupe">
                <th colspan="4">
                    <div class="nom-groupe">
                        <img src="./image/logo3info.png" width="100px" alt="">
                    </div>
                    Petite FINALE
                </th>
            </tr>
            <tr>
                <td class="jouer-final">
                    <form action="" method="post">
                        <input type="submit" name="pFinal" value="Jouer">
                    </form>
                </td>
                <td class="f-final"><?= $_SESSION['equipe1pf'] ?></td>
                <td class="score"> -
                    <?php
                    if (isset($_POST['pFinal']) && $_SESSION['matchpf']) {
                        $_SESSION['scorePFinal1'] = $f1;
                        $_SESSION['scorePFinal2'] = $f2;

                        if ($_SESSION['scorePFinal1'] == $_SESSION['scorePFinal2']) {
                            $_SESSION['pFinal1'] = $pf1;
                            $_SESSION['pFinal2'] = $pf2;
                            $_SESSION['pTAB'] = false;
                            while ($_SESSION['pFinal1'] == $_SESSION['pFinal2']) {
                                $_SESSION['pFinal1'] = $pf1;
                                $_SESSION['pFinal2'] = $pf2;
                            }
                        }

                        $_SESSION['matchpf'] = false;
                    }
                    if ($_SESSION['matchpf'] == false) {
                        if ($_SESSION['pTAB'] == false) {
                            echo '(' . $_SESSION['pFinal1'] . ') ';
                        }
                        echo $_SESSION['scorePFinal1'] . ' : ' . $_SESSION['scorePFinal2'];
                        if ($_SESSION['pTAB'] == false) {
                            echo ' (' . $_SESSION['pFinal2'] . ')';
                        }
                    }
                    ?> -
                </td>
                <td class="f-final"><?= $_SESSION['equipe2pf'] ?></td>
            </tr>
        </table><br><br><br>

        <table class="t-final">
            <tr class="titre-groupe">
                <th colspan="4">
                    <div class="nom-groupe">
                        <img src="./image/logo3info.png" width="100px" alt="">
                    </div>
                    Grande FINALE
                </th>
            </tr>
            <tr>
                <td class="jouer-final">
                    <form action="" method="post">
                        <input href="#champion" type="submit" name="final" value="Jouer">
                    </form>
                </td>
                <td class="f-final"><?= $_SESSION['equipe1f'] ?></td>
                <td class="score">
                    - <?php
                        if (isset($_POST['final']) && $_SESSION['matchf'] && $_SESSION['matchpf'] == false) {
                            $_SESSION['scoreFinal1'] = $f1;
                            $_SESSION['scoreFinal2'] = $f2;

                            if ($_SESSION['scoreFinal1'] == $_SESSION['scoreFinal2']) {
                                $_SESSION['sfinal1'] = $pf1;
                                $_SESSION['sfinal2'] = $pf2;
                                $_SESSION['fTAB'] = false;
                                while ($_SESSION['sfinal1'] == $_SESSION['sfinal2']) {
                                    $_SESSION['sfinal1'] = $pf1;
                                    $_SESSION['sfinal2'] = $pf2;
                                }
                            }

                            $_SESSION['matchf'] = false;
                        }
                        if ($_SESSION['matchf'] == false) {
                            if ($_SESSION['fTAB'] == false) {
                                echo '(' . $_SESSION['sfinal1'] . ')';
                            }
                            echo $_SESSION['scoreFinal1'] . ' : ' . $_SESSION['scoreFinal2'];
                            if ($_SESSION['fTAB'] == false) {
                                echo '(' . $_SESSION['sfinal2'] . ')';
                            }
                        }
                        ?> -
                </td>
                <td class="f-final"><?= $_SESSION['equipe2f'] ?></td>
            </tr>
        </table>
    </div>
</body>

</html>
<!-- affichage nom equipe Championne  -->
<?php
if (($_SESSION['scoreFinal1'] > $_SESSION['scoreFinal2'] && $_SESSION['matchf'] == false) || $_SESSION['sfinal1'] > $_SESSION['pFinal2']) {
    $champion = $_SESSION['equipe1f'];
    $equipe2em = $_SESSION['equipe2f'];
} else {
    $champion = $_SESSION['equipe2f'];
    $equipe2em = $_SESSION['equipe1f'];
}

if ($_SESSION['matchf'] == false) {
?>
    <?php
    if (($_SESSION['scorePFinal1'] > $_SESSION['scorePFinal2'] && $_SESSION['matchpf'] == false) || $_SESSION['pFinal1'] > $_SESSION['pFinal2']) {
        $equipe3em = $_SESSION['equipe1pf'];
        $equipe4em = $_SESSION['equipe2pf'];
    } else {
        $equipe3em = $_SESSION['equipe2pf'];
        $equipe4em = $_SESSION['equipe1pf'];
    }
    ?>
    <div class="recompense" id="champion">
        <div class="champion" id="">
            <div class="gagner">
                <div class="coupe">
                    <img src="./image/coupe-foot-or-et-argent-33-cm.jpg" width="20%" alt="">
                </div>
                <h1>
                    <div class="nom"><?= $champion ?></div>
                    Champion <br>
                    <img src="./image/medaille1.png" width="150" alt="">
                </h1>
            </div>
        </div>
        <div class="emPlace">
            <div class="em">
                <h2>Vice Champion <div class="nom"><?= $equipe2em ?> <img src="./image/medaille2.png" width="20%" alt=""></div>
                </h2>
            </div>
            <div class="em">
                <h2>Troisieme Place <div class="nom"><?= $equipe3em ?> <img src="./image/medaille3.png" width="20%" alt=""></h2>
            </div>
        </div>
    </div>
<?php
}
if (isset($_POST['final'])) {
?>
    <script>
        setTimeout(() => {
            location.href = "#champion";
        }, 2000);
    </script>
<?php
}
?>