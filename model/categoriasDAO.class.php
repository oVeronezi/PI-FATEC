<?php
require_once 'conexao.class.php';

class CategoriasDAO extends Conexao {
    public function __construct() {
        parent::__construct();
    }

    // public function listarCategorias() {
    //     $sql = "SELECT id_categoria, nome FROM Categorias";
    //     $stm = $this->db->prepare($sql);
    //     $stm->execute();
    //     return $stm->fetchAll(PDO::FETCH_OBJ);
    // }
}
