<?php
require_once './model/professoresDAO.class.php';

class ProfessoresController
{
    private $professoresDAO;

    public function __construct()
    {
        $this->professoresDAO = new ProfessoresDAO();
    }

    public function listarProfessores()
    {
        return $this->professoresDAO->listarProfessores();
    }
}

