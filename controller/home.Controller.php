<?php

require_once 'model/usuarios.class.php';
require_once 'model/user.dao.php';

class HomeController
{

    public function showHome()
    {
        require_once 'view/home.php';
    }

    public function showRegisterForm()
    {

        require_once 'view/register_form';
    }

}
?>