<?php
require_once 'model/Usuarios.class.php';
require_once 'model/usuarioDAO.class.php';

class HomeController
{

    public function showHome()
    {
        if (!isset($_SESSION)) {
        
       
        }
        
        require_once 'view/home.php';
    }

    public function showRegisterForm()
    {

        require_once 'view/register_form';
    }

    public function showLogin()
    {
        require_once 'view/login.php';
    }

}
?>