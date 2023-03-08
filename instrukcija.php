<?php
  session_start(); //Start the session.
  require_once 'connection.php'; //Require connection file to connect to database.

  $sql = "SELECT Info_ID, title, description, date, img, User_ID FROM info ORDER BY Info_ID DESC";
  $result = $DBconnection->query($sql);
  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityLife Simulator</title>
    <link rel="stylesheet" type="text/css" href="css/instrukcija.css"/>
    <script src="js/script.js" defer></script>
</head>
<body>
    <div id="main-bar">
        <div id="topNavigation">
            <a class="citylife2" href="#manual" style="background-color: #00bcd4;">
            <?php echo "CityLife Simulator"?></a>
            <a href="index.php" class="citylife">Back</a>
            <!-- <a href="#" class="logreg" onclick="openRegistration()">Registration</a> -->
            <?php 
            
            if (isset($_SESSION['username'])) {
                echo "<a href='logout.php' class='logreg'>Logout</a>";
                echo "<a href='game_image.jpg' download class='download' id='buttonDownload'>Download</a>";
                
            }
            else {
                echo "<a href='#' class='logreg' onclick='openRegistration()'>Registration</a>";
                echo "<a href='#' class='logreg' onclick='openLogin()'>Login</a>";
            }
                
            ?>
            <!-- <a href="#" class="logreg" onclick="openLogin()">Login</a> -->
            
            <!-- <a href="pic1.jpeg" download class="download" id="buttonDownload">Download</a> -->
            <a class="loggedin"><?php if (isset($_SESSION['username'])) { echo "Logged in as: ", $_SESSION['username']; }?></a>
        </div>

        <div id="manual">  
            <div id="panel2">
                <h2 style="margin-left: 20%; color: aliceblue;">Manual</h2>
                <div id="inside-panel2">
                    <h3>Lietotāja instrukcija mājaslapai</h3>
                    <p>Dotajā mājaslapā lietotājs var reģistrēties, ielogoties, lejupielādēt spēli. Administrators var pievienot un dzēst jaunumus. Navigācijā var spiest uz pogām, lai pārietu uz noteikto sadaļu.</p>
                    <h3>Navigācija (pogas)</h3>
                    <p>Navigācijā ir 5 pogas. Atkarībā no tā, vai lietotājs ir ielogots, vienas parādās un citas slēpjas.</p>
                    <p>Ja lietotājs nav ielogots, tad rādās pogas About us, Latest releases, About the game, Login, Registration.</p>
                    <p>Ja lietotājs ir ielogots, tad rādās pogas About us, Latest releases, About the game, Download, Logout.</p>
                    <p>Pogas About us, Latest releases, About the game atbild par pāriešanu uz noteiktu sadaļu (sīkāk sadaļā Sadaļas).</p>
                    <p>Poga Login nepieciešama, lai ielogotos (sīkāk sadaļā Login).</p>
                    <p>Poga Registration nepieciešama, lai piereģistrētos (sīkāk sadaļā Reģistrācija).</p>
                    <p>Lejupielādēt spēli var izmantojot pogu Download (sīkāk sadaļā Download).</p>
                    <p>Lai izietu no profila, jāuzspied Logout.</p>
                    <h3>Sadaļas</h3>
                    <p>Mājaslapā var parvietoties ritinot no augšas uz leju un no lejas uz augšu, bet ja gribas pāriet uz sadaļu ātrāk, var uzspiest uz pogām, kuras atrodas navigācijā:</p>
                    <ul>
                        <li>Lai pārietu uz sadaļu About us, jāuzspied poga About us</li>
                        <li>Lai pārietu uz sadaļu Latest releases, jāuzspied poga Latest releases</li>
                        <li>Lai pārietu uz sadaļu About the game, jāuzspied poga About the game</li>
                    </ul>
                    <h3>Reģistrācija</h3>
                    <p>Piereģistrēties var 3 soļos:</p>
                    <ul>
                        <li>Augšējā labajā stūrī, navigācijā ir jāuzspied poga Registration.</li>
                        <li>Parādās reģistrācijas forma, kura ir jāaizpild:</li>
                            <ul>
                                <li>Laukā username jāievada lietotāvārds garumā no 5 līdz 32 simboliem, tas nedrīkst sākties ar cipariem un nedrīkst saturēt simbolus kā !@#$% utt.</li>
                                <li>Laukā email jāievada korekts e-pasts (nedrīkst būt tukšs pēc @ un tam jāsatur domena paplašinājums, piemēram: .ru, .com, .lv un citi).</li>
                                <li>Laukā password jāievada parole</li>
                            </ul>
                        <li>Kad ierakstījāt visus nepieciešamos datus, jānospied poga Register un ja nav kļūdu, tad izveidosies jūsu profils un tiks paziņots, ka veiksmīgi piereģistrējaties.</li>
                    </ul>
                    <p>Piereģistrējoties, būs iespēja lejupielādēt spēli CityLife Simulator.</p>
                    <p>Lai atceltu reģistrāciju, uzspiediet pogu Cancel.</p>
                    <h3>Login</h3>
                    <p>Ielogoties var 3 soļos:</p>
                    <ul>
                        <li>Augšējā labajā stūrī, navigācijā ir jāuzspied poga Login</li>
                        <li>Parādās logina forma,  kura ir jāaizpild:</li>
                        <ul>
                            <li>Laukā username jāievada lietotājvārds, kuru izvēlējaties reģistrācijas laikā</li>
                            <li>Laukā password jāievada parole, kuru izvēlējaties reģistrācijas laikā</li>
                        </ul>
                        <li>Pec formas aizpildīšanas, jānospied poga Login un ja kļūdu nav, tad jūs ieiesiet savā profilā un parādīsies paziņojums, ka veiksmīgi ielogojaties.</li>
                    </ul>
                    <p>Lai atceltu ielogošanu, uzspiediet pogu Cancel.</p>
                    <h3>Download</h3>
                    <p>Lejupielādēt spēli var uzklikšķinot pogu Download augšējā labajā stūri. Savukārt poga Download parādās tikai tad, kad esat ienācis savā profilā. Uzkliķškinot pogu Download, pārmet uz citu vietni, kur glabājās spēle, Japatin uz leju un jāuzklikšķina Download un spēle sāks lejupielādēties.</p>
                    <h3>Logout</h3>
                    <p>Ja gribas iziet no sava profila, jāuzspied poga Logout augšējā labajā stūrī.</p>
                </div>
            </div>
            
        </div>



    <!-- LOGIN FORM -->

    <form class="form-container" method="POST" action="login.php" id="js_login">
        <div class="login-block" id="js_login" >
            <h1>Login</h1>
            <input type="text" value="" placeholder="Username" name="username" id="username" />
            <input type="password" value="" placeholder="Password" name="password" id="password" />
            <button type="submit" name="login">Submit</button>
            <button class="cancel" onclick="closeLogin()">Cancel</button>
        </div>
    </form>

    <!-- REGISTRATION FORM -->

    <form class="form-container"  method="POST" action="registration.php" id="jsReg">
        <div class="registration-block">
            <h1>Registration</h1>
            <input type="text" value="" placeholder="Username" name="username" id="username2" />
            <input type="email" value="" placeholder="E-mail" name="email" id="email"/>
            <input type="password" value="" placeholder="Password" name="password" id="password2"/>
            <button type="submit" name="reg_user">Register</button>
            <button class="cancel" onclick="closeRegistration()">Cancel</button>
        </div>
    </form>
    

    <footer>
        <div id="footer">
            <p> © CityLife Simulator 2023 | All rights reserved</p>
        </div>
    </footer>

    </div>
</body>
</html>