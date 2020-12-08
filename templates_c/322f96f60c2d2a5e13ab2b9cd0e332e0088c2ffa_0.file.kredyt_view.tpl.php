<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-08 00:46:13
  from 'C:\xampp\htdocs\kredyt\templates\kredyt_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fcebec5256ae9_59477132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '322f96f60c2d2a5e13ab2b9cd0e332e0088c2ffa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kredyt\\templates\\kredyt_view.tpl',
      1 => 1607384732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fcebec5256ae9_59477132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

        
-->
    <?php echo '<?php ';?>
$smarty_>display('top.tpl') <?php echo '?>';?>


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
                                <form method="post" action="<?php echo '<?php ';?>
print(_APP_URL); <?php echo '?>';?>
/app/kredyt.php">
                                    <div class="row gtr-uniform">
                                        <div class="col-6 col-12-xsmall">
                                            <label for= "kowta">Kwota</label>
                                            <input type="text" name="kwota" id="kwota" value="<?php echo '<?php ';?>
out($kwota); <?php echo '?>';?>
" placeholder="Kwota" />
                                        </div>
                                        <div class="col-6 col-12-xsmall">
                                            <label for= "kowta">Ilość rat</label>
                                            <input type="text" name="raty" id="raty" value="<?php echo '<?php ';?>
out($raty); <?php echo '?>';?>
" placeholder="Raty" />
                                        </div>
                                        <div class="col-6 col-12-xsmall">
                                            <label for= "kowta">Oprocentowanie</label>
                                            <input type="text" name="procent" id="procent" value="<?php echo '<?php ';?>
out($procent); <?php echo '?>';?>
" placeholder="Oprocentowanie" />
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
            <!---->
        </div>
            
        <?php echo '<?php
';?>
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
                            <?php echo '?>';?>

                            <?php echo '<?php ';?>
if (isset($result)) { <?php echo '?>';?>

                                <div style="margin: 20px; padding: 10px; float:left; border-radius: 5px; background-color: #ff0; width:300px;">
                                    <?php echo '<?php
                                    ';?>
foreach ($result as $value) {

                                        print $value . "<br/>";
                                    }
                                    <?php echo '?>';?>

                                </div>
                            <?php echo '<?php ';?>
} <?php echo '?>';?>


                            <?php echo '<?php ';?>
if (isset($lacznie)) { <?php echo '?>';?>

                                <div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: green; width:300px; float:left;">
                                    <?php echo '<?php
                                    ';?>
echo "Łącznie: " . round($lacznie, 2);
                                    <?php echo '?>';?>

                                </div>
                            <?php echo '<?php ';?>
} <?php echo '?>';?>

                            

        <!-- Scripts -->
        <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

   <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'main.tpl');
}
}
