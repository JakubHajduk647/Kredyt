<?php

require_once dirname(__FILE__) . '/../config.php';

// 1. pobranie parametrów
include _ROOT_PATH . '/app/security/check.php';

function getParams(&$kwota, &$raty, &$procent, &$operation) {
    if (filter_has_var(INPUT_POST, 'kwota')) {
        $kwota = $_REQUEST['kwota'];
    }
    if (filter_has_var(INPUT_POST, 'raty')) {
        $raty = $_REQUEST['raty'];
    }
    if (filter_has_var(INPUT_POST, 'procent')) {
        $procent = $_REQUEST['procent'];
    }
    if (filter_has_var(INPUT_POST, 'op')) {
        $operation = $_REQUEST['op'];
    }
}

function validate(&$kwota, &$raty, &$procent, &$messages) {
    if (!(isset($kwota) && isset($raty) && isset($procent))) {
        return false;
    } else {
        if (!filter_var($kwota, FILTER_VALIDATE_FLOAT)) {
            $messages [] = 'Kwota nie jest liczbą';
        }
        if (!filter_var($raty, FILTER_VALIDATE_INT)) {
            $messages [] = 'Ilość rat nie jest liczbą całkowitą';
        }
        if (!filter_var($procent, FILTER_VALIDATE_FLOAT)) {
            $messages [] = 'Procent nie jest liczbą';
        }
        return true;
    }
}

$kwota = null;
$raty = null;
$procent = null;
$operation = null;
$result = null;
$messages = array();

getParams($kwota, $raty, $procent, $operation);
validate($kwota, $raty, $procent, $messages);

if (empty($messages)) { // gdy brak błędów
//wykonanie operacji
    global $role;
    switch ($operation) {
        case 'stale' :
            $result[] = ratyStale($kwota, $procent, $raty);
            $lacznie = $result[0] * $raty;
            break;
        case 'male' :
            if ($role != 'admin') {
                $messages[] = 'dostęp tylko dla admina';
            } else {

                $result[] = "";
                $lacznie = 0;
                for ($i = 0; $i < $raty; $i++) {
                    $ck = $kwota / $raty;
                    $co = ($kwota - $ck * $i) * ($procent / 100) * (30 / 365);
                    $result[] = + ($i + 1) . " rata: " . round($ck + $co, 2) . "<br/>";
                    $lacznie = $lacznie + $ck + $co;
                }
                break;
            }
    }
}

function ratyStale($k, $p, $r) {
    (float) $p1 = $p / 100;
    $pow = pow(12 / (12 + $p1), $r);
    $result = $k * $p1 / (12 * (1 - ($pow)));
    return round($result, 2);
}

//definicja zmiennych kontrolera

include 'kredyt_view.php';
