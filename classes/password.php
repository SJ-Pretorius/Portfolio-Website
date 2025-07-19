<?php
class Password extends Table {
    protected $TABLE = 'password';

    public function getCMSPassword() {
        return $GLOBALS['database']->runQuery("SELECT `cms` FROM $this->TABLE");
    }

    public function getAccessPassword() {
        return $GLOBALS['database']->runQuery("SELECT `access` FROM $this->TABLE");
    }
}