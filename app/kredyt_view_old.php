<?php require_once dirname(__FILE__) . '/../config.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" /> 
    <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <div >
            <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
        </div>

        <div class="container">
            <form  class="pure-form pure-form-stacked" style=" float: left;" action="<?php print(_APP_URL); ?>/app/kredyt.php" method="post"> 
                <label  for="id_kwota" >Kwota kredytu: </label>
                <input  id="id_kwota" type="text" name="kwota" value="<?php out($kwota); ?>"/>
                <br/>
                <label for="id_raty">Ilość rat: </label>
                <input id="id_raty" type="text" name="raty" value="<?php out($raty); ?>" />
                <br/>
                <label for="id_procent" >Oprocentowanie: </label>
                <input  type="text"   name="procent" value="<?php out($procent); ?>"/>
                <br/>
                <select name="op">
                    <option value="stale">raty stałe</option>
                    <option value="male">raty malejące(symulacja)</option>
                </select> 
                <input class="pure-button pure-button-primary" type="submit" value="Oblicz"/>   
            </form>
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
    </body>

</html>
