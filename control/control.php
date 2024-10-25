<?php
require_once "libs/smarty_4_5_4/config.php";

class control
{

    private $model;
    private $view;


    public function __construct()
    {
        $this->model = null;
        $this->view = new config();
     
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($new_model)
    {
        $this->model = $new_model;
    }

    public function getView()
    {
        return $this->view;
    }
    public function setView($new_view)
    {
        $this->view = $new_view;
    }



    public function gestor_procesos(){

        if(isset($_REQUEST['accion'])){

            /* aquí estaran todas llamados a funciones */


        }else{
            // llamaremos al menu,  pues a este nivel no hay nada en pantalla
            $this->view->setDisplay('login.tpl');
        }
    
    }

}



?>