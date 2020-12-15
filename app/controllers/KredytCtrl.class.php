<?php

// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

namespace app\controllers;
use app\forms\KredytForm;
use app\transfer\KredytResult;
/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class KredytCtrl {

    private $messages;   //wiadomości dla widoku
    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->messages = getMessages();
        $this->form = new KredytForm();
        $this->result = new KredytResult();
    }

    /**
     * Pobranie parametrów
     */
    public function getParams() {
        $this->form->kwota = getFromRequest('kwota');
        $this->form->raty =getFromRequest('raty');
        $this->form->procent = getFromRequest('procent');
        $this->form->operation = getFromRequest('operation');
    }

    public function validate() {
        if (!(isset($this->form->kwota) && isset($this->form->raty) && isset($this->form->procent))) {
            return false;
        } else {
            if (!filter_var($this->form->kwota, FILTER_VALIDATE_FLOAT)) {
                $this->messages->addError('Kwota nie jest liczbą');
            }
            if (!filter_var($this->form->raty, FILTER_VALIDATE_INT)) {
                $this->messages->addError('Ilość rat nie jest liczbą całkowitą');
            }
            if (!filter_var($this->form->procent, FILTER_VALIDATE_FLOAT)) {
                $this->messages->addError('Procent nie jest liczbą');
            }
            return !$this->messages->isError();
        }
    }

    public function process() {
        $this->getParams();

        if ($this->validate()) {

            //konwersja parametrów na int
            $this->form->kwota = floatval($this->form->kwota);
            $this->form->raty = floatval($this->form->raty);
            $this->form->procent = floatval($this->form->procent);
            $this->messages->addInfo('Parametry poprawne.');

            //wykonanie operacji
            switch ($this->form->operation) {
                case 'stale' :
                    $this->result = $this->ratyStale($this->form->kwota, $this->form->procent, $this->form->raty);
                    break;
                case 'zmienne' :
                    $this->result = $this->ratyZmienne($this->form->kwota, $this->form->procent, $this->form->raty);
                    break;
            }

            $this->messages->addInfo('Wykonano obliczenia.');


            $this->generateView();
        }else{
             $this->generateView();
        }
    }

    private function ratyZmienne($kwota, $procent, $raty) {
        
        $ratyZmienneResult=new KredytResult();
        $ratyResult=array();
        $lacznie=null;
        for ($i = 1; $i <= $raty; $i++) {
            $ck = $kwota / $raty;
            $co = ($kwota - $ck * $i) * ($procent / 100) * (30 / 365);
            $ratyResult[$i." rata "]= $ck + $co;
            $lacznie = $lacznie + $ck + $co;
        }
        $ratyZmienneResult->result=$ratyResult;
        $ratyZmienneResult->lacznie = $lacznie;
        return $ratyZmienneResult;
    }

    private function ratyStale($k, $p, $r) {
        (float) $p1 = $p / 100;
        $pow = pow(12 / (12 + $p1), $r);
        $ratyResult = $k * $p1 / (12 * (1 - ($pow)));
        $ratyStaleResult= new KredytResult;
        $ratyStaleResult->result["wysokość raty"] = $ratyResult;
        $ratyStaleResult->lacznie = $ratyResult *$r;
        
        return $ratyStaleResult;
    }

    /**
     * Wygenerowanie widoku
     */
    public function generateView() {
        
        
        getSmarty()->assign('messages', $this->messages);
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('result', $this->result);
        
        
        getSmarty()->display('kredyt.tpl');
    }

}
