<?php
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer as EscposPrinter;

class Printer {
    private $printer;
    private $ready;

    public function __construct() {
        try {
            $connector = @new FilePrintConnector('/dev/usb/lp0');
            $this->printer = new EscposPrinter($connector);
            $this->ready = true;
        } catch (Exception $e) {
            $this->ready = false;
        }
    }

    public function isReady() {
        return $this->ready;
    }

    public function print($text) {
        if ($this->ready) {
            $this->printer->text(wordwrap($text, 48, "\n", true));
            return true;
        } else {
            return false;
        }
    }

    public function feed($lines = 1) {
        if ($this->ready) {
            $this->printer->feed($lines);
            return true;
        } else {
            return false;
        }
    }

    public function cut() {
        if ($this->ready) {
            $this->printer->feed();
            $this->printer->cut(EscposPrinter::CUT_FULL, 150);
            return true;
        } else {
            return false;
        }
    }

    public function close() {
        if ($this->ready) {
            $this->printer->close();
            return true;
        } else {
            return false;
        }
    }
}