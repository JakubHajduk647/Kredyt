<?php require_once dirname(__FILE__) . '/../config.php'; ?>
<!DOCTYPE HTML>
<!--
        Stellar by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Stellar by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
            <header id="header" class="alt">
                <span class="logo"> </span>
                <h1>Kalkulator kredytowy</h1>
                <p></p></header>

            <!-- Nav -->
            <!--<nav id="nav">
                    <ul>
                            <li><a href="#intro" class="active">Introduction</a></li>
                            <li><a href="#first">First Section</a></li>
                            <li><a href="#second">Second Section</a></li>
                            <li><a href="#cta">Get Started</a></li>
                    </ul>
            </nav>-->

            <!-- Main -->
            <div id="main">

                <!-- Introduction -->
                <section id="intro" class="main">
                    <div class="spotlight">
                        <div class="content">
                            <header class="major">
                                <h2>Oblicz wysokość raty</h2>
                            </header>
                            <section>
                                <h2></h2>
                                <form method="post" action="<?php print(_APP_URL); ?>/app/kredyt.php">
                                    <div class="row gtr-uniform">
                                        <div class="col-6 col-12-xsmall">
                                            <label for= "kowta">Kwota</label>
                                            <input type="text" name="kwota" id="kwota" value="<?php out($kwota); ?>" placeholder="Kwota" />
                                        </div>
                                        <div class="col-6 col-12-xsmall">
                                            <label for= "kowta">Ilość rat</label>
                                            <input type="text" name="raty" id="raty" value="<?php out($raty); ?>" placeholder="Raty" />
                                        </div>
                                        <div class="col-6 col-12-xsmall">
                                            <label for= "kowta">Oprocentowanie</label>
                                            <input type="text" name="procent" id="procent" value="<?php out($procent); ?>" placeholder="Oprocentowanie" />
                                        </div>

                                        <div class="col-4 col-12-small">
                                            <input type="radio" id="zmienne" name="demo-priority" checked>
                                            <label for="zmienne">raty zmienne</label>
                                            <input type="radio" id="stale" name="demo-priority">
                                            <label for="stale">raty stałe</label>
                                        </div>
                                        <div class="col-12">
                                            <ul class="actions">
                                                <input type="submit" value="Oblicz" class="primary" />
                                            </ul>
                                        </div>

                                    </div>
                                </form>
                            </section>
                            


                           <!-- <ul class="actions">
                                <li><a type="submit" class="button">Oblicz</a></li>
                            </ul>-->
                        </div>
                        <span class="image"><img src="images/pic01.jpg" alt="" /></span>
                    </div>
                </section>

                <!-- First Section -->


                <!-- Second Section -->


                <!-- Get Started -->

            </div>

            <!-- Footer -->
            <footer id="footer">

                <section>
                    <!-- Header -->
                    <header id="header" class="alt">
                        <span class="logo"><img src="images/logo.svg" alt="" /></span>
                        <h1>Stellar</h1>
                        <p>Just another free, fully responsive site template<br />
                            built by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a>.</p>
                    </header>
            </footer>

        </div>
        <?php
//wyświeltenie listy błędów, jeśli istnieją
                            if (isset($messages)) {
                                if (count($messages) > 0) {
                                    echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
                                    foreach ($messages as $key => $msg) {
                                        echo '<li>' . $msg . '</li>';
                                    }
                                    echo '</ol>';
                                }
                            }
                            ?>
                            <?php if (isset($result)) { ?>
                                <div style="margin: 20px; padding: 10px; float:left; border-radius: 5px; background-color: #ff0; width:300px;">
                                    <?php
                                    foreach ($result as $value) {

                                        print $value . "<br/>";
                                    }
                                    ?>
                                </div>
                            <?php } ?>

                            <?php if (isset($lacznie)) { ?>
                                <div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: green; width:300px; float:left;">
                                    <?php
                                    echo "Łącznie: " . round($lacznie, 2);
                                    ?>
                                </div>
                            <?php } ?>
                            

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>