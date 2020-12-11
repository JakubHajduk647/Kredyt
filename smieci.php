<?php
<div class="messages">

   {* wyświeltenie listy błędów, jeśli istnieją *}
    {if $messages->isError()}
        <h4>Wystąpiły błędy: </h4>
        <ol class="err">
            {foreach $messages->getErrors() as $err}
                {strip}
                    <li>{$err}</li>
                    {/strip}
                {/foreach}
        </ol>
    {/if}

    {* wyświeltenie listy informacji, jeśli istnieją *}
    {if $messages->isInfo()}
        <h4>Informacje: </h4>
        <ol class="inf">
            {foreach $messages->getInfos() as $inf}
                {strip}
                    <li>{$inf}</li>
                    {/strip}
                {/foreach}
        </ol>
    {/if}-->

    
</div>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

