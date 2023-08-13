<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("location: /loginsystem/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/df1c132024.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Netflix</title>
</head>
<body>
    <header class="showcase">
        <div class="showcase-top">
            <img src="images/logo.png" alt="Netflix">
            <!-- <a href="#" class="btn btn-rounded">Sign In</a> -->
        </div>
        <div class="showcase-content">
            <h1>
                See what's next
            </h1>
            <p>Watch Latest Movies and Web Series only on MOVIEFLIX for free</p>
            <!-- <a href="#" >
                Watch Latest Movies and Web Series only on MOVIEFLIX for free <i class="fas fa-chevron-right btn-icon"></i>
            </a> -->
            <form action="index.php" method="post">
            <button type="submit" class="btn btn-primary btn-xl">Login</button>
            </form>
            <!-- <input type="submit" class="btn btn-primary btn-xl" onClick="myFunction()"/> -->
        </div>
    </header>
    <!-- <hr> -->
    <section class="tabs mt-3" id="tabs">
        <div class="container" >
            <!-- <div id="tab-1" class="tab-item tab-border">
                <i class="fas fa-door-open fa-3x"></i>
                <p class="hide-sm">Cancel anytime</p>
            </div> -->
            <div id="tab-2" class="tab-item mt-3" >
                <i class="fas fa-tablet-alt fa-3x"></i>
                <p class="hide-sm">Watch anywhere</p>
            </div>
            <!-- <div id="tab-3" class="tab-item">
                <i class="fas fa-tags fa-3x"></i>
                <p class="hide-sm">Pick your price</p>
            </div> -->
        </div>
    </section>
    <section class="tab-content">
        <div class="container">
            <!-- Tab Content 1 -->
            <!-- <div id="tab-1-content" class="tab-content-item show">
                <div class="tab-1-content-inner">
                    <div>
                        <p class="text-lg">
                            If you decide Netfix isn't for you - no problem. No commitment.
                            Cancel online anytime.
                        </p>
                        <a href="#" class="btn btn-lg">Watch Free For 30 Days</a>
                    </div>
                    <img src="https://i.ibb.co/J2xDJV7/tab-content-1.png" alt="">
                </div>
            </div> -->
            
            <!-- Tab Content 2 -->
            <div id="tab-2-content" class="tab-content-item">
                <div class="tab-2-content-top">
                    <p class="text-lg">
                        Watch TV shows and movies anytime, anywhere - personalised for you.
                    </p>
                    <!-- <a href="#" class="btn btn-lg">Watch Free For 30 Days</a> -->
                </div>
                <div class="tab-2-content-bottom">
                    <div>
                        <img src="https://i.ibb.co/DpdN7Gn/tab-content-2-1.png" alt="">
                        <p class="text-md">Watch on your TV</p>
                        <p class="text-sm text-dark">Smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</p>
                    </div>
                    <div>
                        <img src="https://i.ibb.co/R3r1SPX/tab-content-2-2.png" alt="">
                        <p class="text-md">Watch instantly or download for later</p>
                        <p class="text-sm text-dark">Available on phone and tablet, wherever you go.</p>
                    </div>
                    <div>
                        <img src="https://i.ibb.co/gDhnwWn/tab-content-2-3.png" alt="">
                        <p class="text-md">Use any computer</p>
                        <p class="text-sm text-dark">Watch right on Netflix.com.</p>
                    </div>
                </div>
            </div>
            
            <!-- Tab Content 3 -->
            <div id="tab-3-content" class="tab-content-item">
                <div class="text-center">
                    <p class="text-lg">Choose one plan and watch everything on Netflix</p>
                    <a href="" class="btn btn-lg">Watch free for 30 days</a>
                </div>
                <table class="table">
                    <thead>
                        <th></th>
                        <th>Basic</th>
                        <th>Standard</th>
                        <th>Premium</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Monthly price after free month ends on 13/08/2020</td>
                            <td>$8.99</td>
                            <td>$12.99</td>
                            <td>$15.99</td>
                        </tr>
                        <tr>
                            <td>HD Available</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Ultra HD Available</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Screens you can watch on at the same time</td>
                            <td>1</td>
                            <td>2</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Watch on your laptop, TV, phone and tablet</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Unlimited movies and TV shows</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Cancel anytime</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>First month free</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <footer class="footer">
  
        <div class="footer-cols">
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Ways To Watch</a></li>
                <li><a href="#">Corporate Information</a></li>
                <li><a href="#">Netflix Originals</a></li>
            </ul>
            <ul>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Terms Of Use</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <ul>
                <li><a href="#">Account</a></li>
                <li><a href="#">Redeem Gift Cards</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Speed Test</a></li>
            </ul>
            <ul>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Buy Gift Cards</a></li>
                <li><a href="#">Cookie Preferences</a></li>
                <li><a href="#">Legal Notices</a></li>
            </ul>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <script>
        function myFunction() {
          window.location.href="http://localhost/loginsystem/login.php";
        }
       </script>
</body>
</html>