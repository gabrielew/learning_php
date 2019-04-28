<?php

    class Language {

        private $langNow;
        private $ini;
        private $bd;

        public function __construct() {
            $this->langNow = 'pt-br'; 

            if(!empty($_SESSION['lang']) && file_exists('lang/'.$_SESSION['lang'].'.ini')) {
                $this->langNow = $_SESSION['lang'];
            }

            $this->ini = parse_ini_file('lang/'.$this->langNow.'.ini');

            global $pdo;
            $sql = "SELECT * FROM language WHERE lang = :lang";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":lang", $this->langNow);
            $sql->execute();

            if($sql->rowCount() > 0){
                foreach ($sql->fetchAll() as $item) {
                    $this->bd[$item['nome']] = $item['valor'];
                }
            }
        }

        public function getLanguage() {
            return $this->langNow;
        }

        public function get($word, $return = false) {
            $text = $word;

            if(isset($this->ini[$word])){
                $text = $this->ini[$word];
            } elseif(isset($this->bd[$word])) {
                $text = $this->bd[$word];
            }

            if($return) {
                return $text;
            }
            else {
                echo $text;
            }
        }
    }