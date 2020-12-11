

<!-- Wrapper -->
{include file="top.tpl"}

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
                    <form method="post" action="{$app_url}/app/kredyt.php">
                        <div class="row gtr-uniform">
                            <div class="col-6 col-12-xsmall">
                                <label for= "kowta">Kwota</label>
                                <input type="text" name="kwota" id="kwota" value="{$form->kwota}" placeholder="Kwota" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for= "kowta">Ilość rat</label>
                                <input type="text" name="raty" id="raty" value="{$form->raty}" placeholder="Raty" />
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for= "kowta">Oprocentowanie</label>
                                <input type="text" name="procent" id="procent" value="{$form->procent}" placeholder="Oprocentowanie" />
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
            <span class="image"><img src="{$app_url}/images/pic01.jpg" alt="" /></span>
        </div>


        <div class="table-wrapper"><!--wynik-->
            <table style="font-weight: 300 ;color: #636363" >

                {if isset($result)}
                    <h4>Wynik:</h4>
                    <tr><td>Łącznie:</td> <td>{$result->lacznie|string_format:"%.2f"}</td></tr>
                    {foreach from=$result->result key=k item=r}
                        <tr><td>{$k}</td> <td>{$r}</td></tr>
                    {/foreach}

                {/if}
            </table>
        </div>
        <div class="messages">
            <div>
                {* wyświeltenie listy błędów, jeśli istnieją *}
                {if $messages->isError()}
                    <h4>Wystąpiły błędy: </h4>
                    <ol class="error">
                        {foreach $messages->getErrors() as $err}
                            {strip}
                                <li>{$err}</li>
                                {/strip}
                            {/foreach}
                    </ol>
                {/if}
            </div>
            {* wyświeltenie listy informacji, jeśli istnieją *}
            <div>
                {if $messages->isInfo()}
                    <h4>Informacje: </h4>
                    <ol class="info">
                        {foreach $messages->getInfos() as $inf}
                            {strip}
                                <li>{$inf}</li>
                                {/strip}
                            {/foreach}
                    </ol>
                {/if}
            </div>

        </div>

    </section>

    <!-- First Section -->


    <!-- Second Section -->


    <!-- Get Started -->

</div>

<!-- Footer -->
<!---->



<!-- <?php
style="background-color:rgba(204,114,135,0.3);">
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
-->


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
{include file="bottom.tpl"}

