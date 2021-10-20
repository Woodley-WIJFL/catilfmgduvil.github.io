<?php
    session_start();
        $equipe = ['Bresil', 'Argentine', 'France', 'Italie', 'Espagne', 'Allemagne', 'Portugal', 'Haiti'];
        
        $groupTeteA = rand(0,1);
        $groupTeteB = rand(0,1); 

        $group2eA=rand(2,3);
        $group2eB=rand(2,3);

        $groupA3=rand(4,5);
        $groupB3=rand(4,5);

        $groupA4=rand(6,7);
        $groupB4=rand(6,7);

        while($groupTeteA==$groupTeteB) {
            $groupTeteB=rand(0,1);
        }
        while ($group2eA==$group2eB) {
        $group2eB=rand(2,3);
        }
        while ($groupA3==$groupB3) {
            $groupA3=rand(4,5);
        }
        while ($groupA4==$groupB4) {
            $groupA4=rand(6,7);
        }

    ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupe3eminfo.acceuil.com</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <header>
        <div class="logo"><img src="./image/logo3info.png" width="170px"  alt=""></div>
        <div class="button">
                <?php
                    if(isset($_POST['tirage'])){
                 ?>
                     <div>
                        <form action="" method="post">
                            <input class="button-calendrier" type="submit" name="groupe" value="Calendrier">
                        </form>
                    </div>

               <?php } ?>

                <form action="" method="post">
                    <input class="button-tirage" type="submit" name="tirage" value="Tirage">
                </form>

                 
        </div>
    </header>



    <div class="container">
        <div class="r-container">
            <center>
                <table>
                    <thead class="tete">
                        <tr class="titre">
                            <th colspan="4"><img src="./image/coupe3info.png" width="370px" alt=""></th>
                        </tr >
                        <th>1<sup>e</sup><br> tête de série </th>
                        <th>2<sup>e</sup><br> tête de série</th>
                        <th>3<sup>e</sup><br> tête de série</th>
                        <th>4<sup>e</sup><br> tête de série</th>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td>Bresil</td>
                            <td>France</td>
                            <td>Espagne</td>
                            <td>portugal</td>
                        </tr>
                        <tr>
                            <td>Argentine</td>
                            <td>Italie</td>
                            <td>Allemagne</td>
                            <td>Haiti</td>
                        </tr>
                    </tbody>
                </table>
            </center
        </div>
    </div>

    <div class="table-responsive">
        <table>
            <tbody>
                <tr>
                    <td class="tds">1-TDS</td>
                    <td>Bresil</td>
                    <td>Argentine</td>
                </tr>
                 <tr>
                    <td class="tds">2-TDS</td>
                    <td>France</td>
                    <td>Italie</td>
                </tr>
                 <tr>
                    <td class="tds">3-TDS</td>
                    <td>Espagne</td>
                    <td>Allemagne</td>
                </tr>
                 <tr>
                    <td class="tds">4-TDS</td>
                    <td>Portugal</td>
                    <td>Espagne</td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php
        if(isset($_POST['tirage'])){
    ?>

    <!-- groupe a et groupe start -->
    <div class="responsive-b">
        <form action="" method="post">
            <input class="button-calendrier" type="submit" name="groupe" value="Calendrier">
        </form>
    </div>
    <div class="groupe">
        <div class="groupeA">
            <div class="titre-groupe">Groupe A</div>
            <ul>
                <li><?=$equipe[$groupTeteA] ?></li>
                <li><?=$equipe[$group2eA] ?></li>
                <li><?=$equipe[$groupA3] ?></li>
                <li><?=$equipe[$groupA4] ?></li>
            </ul>
        </div>
        <div class="groupeB">
            <div class="titre-groupe">Groupe B</div>
            <ul>
                <li><?=$equipe[$groupTeteB] ?></li>
                <li><?=$equipe[$group2eB] ?></li>
                <li><?=$equipe[$groupB3]?></li>
                <li><?=$equipe[$groupB4]?></li>
            </ul>
        </div>
    </div>
    <!-- groupe a et groupe end -->





    <?php
       include 'database/database.php';

    placerEquipe('groupe1A',$equipe[$groupTeteA]);
    placerEquipe('groupe2A',$equipe[$group2eA]);
    placerEquipe('groupe3A',$equipe[$groupA3]);
    placerEquipe('groupe4A',$equipe[$groupA4]);
    placerEquipe('groupe1B',$equipe[$groupTeteB]);
    placerEquipe('groupe2B',$equipe[$group2eB]);
    placerEquipe('groupe3B',$equipe[$groupB3]);
    placerEquipe('groupe4B',$equipe[$groupB4]);

 } ?>

<?php
    if(isset($_POST['groupe'])){
            header('location:tirage.php');
            $_SESSION['match1']=true;
            $_SESSION['match2']=true;
            $_SESSION['match3']=true;
            $_SESSION['match4']=true;
            $_SESSION['match5']=true;
            $_SESSION['match6']=true;


            $_SESSION['matchB1']=true;
            $_SESSION['matchB2']=true;
            $_SESSION['matchB3']=true;
            $_SESSION['matchB4']=true;
            $_SESSION['matchB5']=true;
            $_SESSION['matchB6']=true;

            $_SESSION['matchdf1']=true; 
            $_SESSION['matchdf2']=true;
            $_SESSION['tirAuBut1']=true;
            $_SESSION['tirAuBut2']=true;
            
            $_SESSION['matchpf']=true;
            $_SESSION['matchf']=true;
            $_SESSION['pTAB']=true;
            $_SESSION['fTAB']=true;

            $_SESSION['demie_f1A_score']=0;
            $_SESSION['demie_f1B_score']=0;
            $_SESSION['demie_f2A_score']=0;
            $_SESSION['demie_f2B_score']=0;
            $_SESSION['demie_f1A_TAB']=0;
            $_SESSION['demie_f1B_TAB']=0;
            $_SESSION['demie_f2A_TAB']=0;
            $_SESSION['demie_f2B_TAB']=0;
            $_SESSION['sfinal1']=0;
            $_SESSION['pFinal2']=0;

            $_SESSION['scoreFinal1']=0;
            $_SESSION['scoreFinal2']=0;
            
            
            $_SESSION['pFinal1']=0;

        
             
    
            
            
        }
    ?>

</body>
</html>
