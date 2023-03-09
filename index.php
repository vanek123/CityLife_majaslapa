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
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <script src="js/script.js" defer></script>
</head>
<body>
    <div id="main-bar">
        <div id="topNavigation">
            <a class="citylife2" href="index.php" style="background-color: #00bcd4;">
            <?php echo "CityLife Simulator"?></a>
            <a href="#panel2" class="citylife">About us</a>
            <a href='#panel3' class="citylife">Latest releases</a>
            <a href='#gif-cont' class="citylife">About the game</a>
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

        <div id="gif-cont">
            <div id="gif-border">
                <img id="gif" src="gif/Gameplay.gif"> 
                <div id="about_the_game">
                    <h2>About the game</h2>
                    <p style="color: aliceblue; font-size: 19px;">CityLife Simulator is a city life simulation game where the user has to climb the career and society ladder to reach a high level of life. The plot of the game takes place in several places: the player's home, work, shop and city. At work, the player can earn money, which can then be exchanged for useful resources in the shop, which will be stored in the inventory until an opportunity arises to use them to improve living conditions. The important thing is that the number of places in the inventory can change and it depends on the clothes and accessories that the player is wearing at the given moment. The player can change both the external appearance of his character by buying clothes and accessories, and the interior of his house by adding furniture and decorations that can be purchased in the store. </p>
                </div> 
            </div>

            
            
        </div>

        <div id="images">
            <div id="images-inside">
                    <img class="image" src="img/1picture.png">
                    <img class="image" src="img/2picture.png">
            </div>
            
            
            <div id="panel2">
                <h2 style="margin-left: 20%; color: aliceblue;">About us</h2>
                <div id="inside-panel2">
                    <p>Welcome to our small programming company! We specialize in creating innovative and entertaining games that are sure to captivate players of all ages. Our team is made up of passionate and dedicated developers who are committed to delivering high-quality gaming experiences that are both fun and challenging. We believe that games should be a source of joy and entertainment, which is why we strive to create games that are not only visually stunning, but also engaging and interactive. We take pride in our work and are committed to delivering games that exceed our customers' expectations. Our goal is to create games that provide hours of enjoyment, whether you're playing alone or with friends. Thank you for choosing our company and we look forward to creating exciting games for you to enjoy!</p>
                </div>
            </div>
            
        </div>

            <div id="panel3">
            <h2 id="p3h2" style="margin-left: 20%; color: aliceblue;">Latest Releases</h2>
            <?php
                if (isset($_SESSION['username'])) {
                    if ($_SESSION['role_ID'] == 1) {  
                            ?>
                            <div id='news-panel' style="border: 1px inset black;
                                background-color: rgba(0, 105, 146, 0.5);
                                width: 60%;
                                
                                margin: auto;
                                color: #fff;
                                box-shadow: 0px 5px 15px black;";>
                            <?php echo " 
                                    <form method='POST' action='news.php'>
                                        <div>
                                            <input type='text' value='' placeholder='Title' name='title' id='title' 
                                            style='width: 50%;
                                                padding: 12px 20px;
                                                margin-left:25%;
                                                margin-top:2%;
                                                box-sizing: border-box;
                                                text-align:center;
                                                margin-right: auto;'></input>
                                        </div>
                                            "; ?>
                            <?php echo "
                                            <textarea type='text' value='' placeholder='Description' name='description' 
                                                id='description' style='width: 49.5% ;
                                                margin-top:2%;margin-left:25%;text-align:center;'></textarea>
                                                <div>
                                                <button type='submit' name='submit_news' style='margin-left: 47%;
                                                margin-top:2%;
                                                margin-bottom:2%;
                                                color: black;
                                                background-color: white;
                                                padding: 14px 16px;
                                                text-decoration: none;
                                                font-size: 17px;'>Submit</button>
                                                </div>
                                            
                                        
                                    </form>  
                                  ";
                            ?>
                            </div>   
                <?php                 
                    }
                }
                ?>
            
            <div id="inside-panel3">
            
                <p><?php
                    $i=0;  
                    while($row = $result->fetch()){
                        ?> 
                  
                        <h2 style="margin-left:25%;"><?php echo $row["title"];?></h2> 
                        <p style="margin-left:25%;"><?php echo $row["description"];?></p>
                        <p style="margin-left:25%;"><?php echo $row["date"];?></p>
                        <p><?php
                            if (isset($_SESSION['username'])) {
                                if ($_SESSION['role_ID'] == 1) {  
                                        ?>
                                        <a style="color: red; margin-left: 49%;" href="deleteNews.php?Info_ID=<?php echo $row['Info_ID']; ?>">Delete</a>
                            <?php 
                                } 
                            }
                            ?>
                        <p style="margin-left:35%;">--------------------------------------------------------------------------------------</p>
                        <?php
                        $i++;
                        
                    };  
                ?> 
                    

                </p>
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
            <p> © CityLife Simulator 2023 | All rights reserved | <?php if (isset($_SESSION['username'])) {
                                                                            if ($_SESSION['role_ID'] == 1) {
                                                                                echo "<a class='help' href='../admin_guide.pdf' target='_BLANK'>Help</a>";
                                                                            }
            else {
                echo "<a class='help' href='instrukcija.php'> Help </a>";
            }
            }
            else {
                echo "<a class='help' href='instrukcija.php'> Help </a>";
            }
            ?></p>
        </div>
    </footer>

    <?php include 'message.php'?>

    </div>
</body>
</html>
