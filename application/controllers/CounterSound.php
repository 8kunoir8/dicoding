<?php
defined('BASEPATH') or exit('No direct script are allowed');

class CounterSound extends CI_Controller
{
    public function index()
    {
        $this->load->view('soundCounter/sound');
        
        // $this->load->model("SoundCounterModel");
        // $data = $this->SoundCounterModel->getNext()->row_array();
        // print_r($data);
        
    }
    public function PrintCard()
    {
        $this->load->library("Escpos.php");

        try {
            $profile = Escpos\CapabilityProfile::load("simple");
            $connector = new Escpos\PrintConnectors\WindowsPrintConnector("XP-80");
            $printer = new Escpos\Printer($connector, $profile);


            /* Reset left */
            $printer->setPrintLeftMargin(0);

            $printer->setJustification(Escpos\Printer::JUSTIFY_CENTER);
            $printer->setEmphasis(true);

            $printer->setTextSize(5, 5);
            $printer->text("SK-II\n");
            $printer->setEmphasis(false);

            $printer->selectPrintMode();

            $printer->text("\n\n");
            $printer->setTextSize(1, 1);
            $printer->text("Emporium, 22 - 28 April 2018");
            $printer->text("\n\n");

            $printer->selectPrintMode();

            $printer->setEmphasis(false);
            $printer->setTextSize(2, 2);
            $printer->text("NEW USER");
            $printer->text("\n\n\n");

            $printer->selectPrintMode();

            $printer->setEmphasis(true);
            $printer->setTextSize(4, 4);
            $printer->text("106");
            $printer->text("\n\n");

            $printer->selectPrintMode();

            $printer->setEmphasis(true);
            $printer->setTextSize(1, 1);
            $printer->text("KEVIEN");
            $printer->text("\n\n");

            $printer->selectPrintMode();
            $printer->text("Silahkan tunggu untuk dilayani");
            $printer->text("\n\n\n\n\n");

            
            $printer->cut();
            $printer->close();
        } catch (Exception $e) {
            echo "Couldn't print to this printer: " . $e->getMessage() . "\n";
        }
    }
}
