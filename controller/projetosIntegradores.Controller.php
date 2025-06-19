<?php
require_once './model/projetosIntegradoresDAO.class.php';

class ProjetosIntegradoresController
{
    private $dao;

    public function __construct()
    {
        $this->dao = new ProjetosIntegradoresDAO();
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
