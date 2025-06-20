<?php
require_once './model/piDAO.class.php';

class ProjetosIntegradoresController
{
    private $dao;

    public function __construct()
    {
        $this->dao = new PiDAO();
    }

    public function listarPorSemestre($semestre)
    {
        return $this->dao->listarPorSemestre($semestre);
    }

    public function listarAlunosDoProjeto($idProjeto)
    {
        return $this->dao->listarAlunosDoProjeto($idProjeto);
    }
}
?>
