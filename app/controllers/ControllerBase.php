<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function ubahnama($namapayment)
    {
        $nama = trim($namapayment);
        $nama = strtolower($nama);
        $namapayment = str_replace(' ', '', $nama);
        return $namapayment;
    }

    //prestashop folder utama
    public function cfolderutama($namapayment)
    {
        $nama = $this->ubahnama($namapayment);
        $path = "prestashop/" . "sprint" . $nama;
        mkdir($path, 0777);
    }

    //prestashop folder controller
    public function cfoldercontroller($folderutama)
    {
        $nama = $this->ubahnama($folderutama);

        $controller = "controllers";

        $front = 'front';

        $pathcontroller = "prestashop/" . "sprint" . $nama . "/" . $controller;

        mkdir($pathcontroller, 0777);

        $pathfront = "prestashop/" . "sprint" . $nama . "/" . $controller . "/" . $front;

        //membuat file

        mkdir($pathfront, 0777);

    }

    //prestashop folder view
    public function cfolderviews($folderutama)
    {
        $nama = $this->ubahnama($folderutama);


        $views = "views";
        $template = 'template';

        $pathcontroller = "prestashop/" . "sprint" . $nama . "/" . $views;
        mkdir($pathcontroller, 0777);

        $pathfront = "prestashop/" . "sprint" . $nama . "/" . $views . "/" . $template;
        mkdir($pathfront, 0777);
    }

    // membuat file di controller
    public function cbuatfilecontroller()
    {
        $file = fopen("confirm.php", 'w');
        echo fwrite($file, 'classs');
        fclose($file);
    }
}
