<?php

use Models\Prestashop;

class PrestashopController extends ControllerBase
{

    public function indexAction()
    {
        $data = Prestashop::find();
        $this->view->setVars([
            'data' => $data
        ]);
    }

    public function createAction($id)
    {
        $OnePs = Prestashop::findFirstByPrestashopId($id);
        // membuat folder modul prestashop
        $this->cfolderutama($OnePs->prestashopNama);
        $this->cfoldercontroller($OnePs->prestashopNama);
        $this->cfolderviews($OnePs->prestashopNama);
        $this->flashSession->success('Berhasil Membuat Module');


        $this->view->setVars([
            'onePs' => $OnePs
        ]);
    }


}

