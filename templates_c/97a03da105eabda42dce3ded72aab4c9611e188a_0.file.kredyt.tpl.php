<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-11 14:27:07
  from 'C:\xampp\htdocs\kredyt.\templates\kredyt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd373abd60e74_34403929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97a03da105eabda42dce3ded72aab4c9611e188a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kredyt.\\templates\\kredyt.tpl',
      1 => 1607693217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.tpl' => 1,
    'file:bottom.tpl' => 1,
  ),
),false)) {
function content_5fd373abd60e74_34403929 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Wrapper -->
<?php $_smarty_tpl->_subTemplateRender("file:top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/kredyt.php">
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <label for= "kowta">Kwota</label>
                                <input type="text" name="kwota" id="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" placeholder="Kwota" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for= "kowta">Ilość rat</label>
                                <input type="text" name="raty" id="raty" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->raty;?>
" placeholder="Raty" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for= "kowta">Oprocentowanie</label>
                                <input type="text" name="procent" id="procent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
" placeholder="Oprocentowanie" />
                            </div>

                            <div class="col-4 col-12-small">
                                <input type="radio" id="zmienne" name="operation" value="zmienne" checked>
                                <label for="zmienne">raty zmienne</label>
                                <input type="radio" id="stale" name="operation" value="stale">
                                <label for="stale">raty stałe</label>
                            </div>
                            <div class="col-12">

                                <input type="submit" value="Oblicz" class="primary" />

                            </div>

                        </div>
                    </form>
                </section>



                <!-- <ul class="actions">
                     <li><a type="submit" class="button">Oblicz</a></li>
                 </ul>-->
            </div>
            <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/pic01.jpg" alt="" /></span>
        </div>
    </section>

    <!-- First Section -->


    <!-- Second Section -->


    <!-- Get Started -->

</div>

<!-- Footer -->
<!---->
</div>
<div><!--wynik-->
    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
        <h4>Wynik</h4>
        <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

        </p>
    <?php }?>

</div>


<!-- <?php echo '<?php
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

-->


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
<?php $_smarty_tpl->_subTemplateRender("file:bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
