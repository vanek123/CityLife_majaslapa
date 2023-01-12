<?php
  session_start(); //Start the session.
  require_once 'connection.php'; //Require connection file to connect to database.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityLife Simulator</title>
    <link rel="stylesheet" href="css/index.css"/>
    <script src="js/script.js" defer></script>
</head>
<body>
    <div id="main-bar">
        <div id="topNavigation">
            <a class="citylife2" href="#gif-cont" style="background-color: #00bcd4;">
            <?php echo "CityLife Simulator"?></a>
            <!-- <a href="#" class="logreg" onclick="openRegistration()">Registration</a> -->
            <?php 
            
            if (isset($_SESSION['username'])) {
                echo "<a href='logout.php' class='logreg'>Logout</a>";
            }
            else {
                echo "<a href='#' class='logreg' onclick='openRegistration()'>Registration</a>";
                echo "<a href='#' class='logreg' onclick='openLogin()'>Login</a>";
            }
                
            ?>
            <!-- <a href="#" class="logreg" onclick="openLogin()">Login</a> -->
            
            <a href="pic1.jpeg" download class="download" id="buttonDownload">Download</a>
            <a class="logreg"><?php if (isset($_SESSION['username'])) { echo "Logged in as: ", $_SESSION['username']; }?></a>
        </div>

        <div id="gif-cont">
            <div id="gif-border">
                <img id="gif" src="gif/video-game-pixel-art.gif"> 
                <div id="about_the_game">
                    <h2>About the game</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.</p>
                </div> 
            </div>

            
            
        </div>

        <div id="images">
            <div id="images-inside">
                    <img class="image" src="img/gsgsgs.jpg">
                    <img class="image" src="img/game_image.jpg">
            </div>
            
            
            <div id="panel2">
                <h2 style="margin-left: 20%;">About us</h2>
                <div id="inside-panel2">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium optio libero reprehenderit dolor tenetur iste vel nulla totam, accusamus corrupti, repellendus consectetur error laboriosam! Dolor delectus doloremque quasi earum cum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem dolores magni fugiat earum, aliquam veniam! Itaque temporibus vel porro soluta consequuntur, facilis omnis cupiditate voluptatem dolore quisquam sunt dicta tenetur. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis perspiciatis mollitia, sed nesciunt asperiores impedit numquam error illum! Deleniti mollitia est nisi assumenda temporibus possimus nemo totam animi modi consequatur.</p>
                </div>
            </div>
            
        </div>

        <div id="panel3">
            <h2 id="p3h2" style="margin-left: 20%; color: aliceblue;">Latest Releases</h2>
            <div id="inside-panel3">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione fugit temporibus odio autem. Similique ab quidem beatae corporis earum eum quia eius consectetur quod deleniti omnis, autem tempora, consequatur quasi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur accusantium repellendus distinctio incidunt ducimus consectetur praesentium reprehenderit illum est. Perferendis ipsam iste debitis nihil ad numquam similique rerum quam ratione? Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem velit eaque officiis, a expedita ut ullam iure neque alias iusto earum suscipit ab! Officia similique rerum hic. At, eveniet.

                </p>
            </div>
        </div>

    <!-- LOGIN FORM -->
    <form class="form-container" method="POST" action="login.php" id="js_login">
        <div class="login-block">
            <h1>Login</h1>
            <input type="text" value="" placeholder="Username" name="username" id="username" />
            <input type="password" value="" placeholder="Password" name="password" id="password" />
            <button type="submit">Submit</button>
            <button id="cancel" onclick="closeLogin()">Cancel</button>
        </div>
    </form>

    <!-- REGISTRATION FORM -->

    <form class="form-container" action="registration.php" method="POST" id="jsReg">
        <div class="registration-block">
            <h1>Registration</h1>
            <input type="text" value="" placeholder="Username" name="username" id="username2" />
            <input type="email" value="" placeholder="E-mail" name="email" id="email"/>
            <input type="password" value="" placeholder="Password" name="password" id="password2"/>
            <button type="submit" name="reg_user">Register</button>
            <button id="cancel" onclick="closeRegistration()">Cancel</button>
        </div>
    </form>

    </div>
</body>
</html>
