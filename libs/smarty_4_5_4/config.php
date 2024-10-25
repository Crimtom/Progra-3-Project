<?php

require_once "libs/smarty_4_5_4/Smarty.class.php";

class config{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->setRutas();
    }

    public function setRutas(){
        $this->smarty->template_dir = 'view/templates/';
        $this->smarty->compile_dir = 'view/templates_c/';
        $this->smarty->config_dir = 'control/configs/';
        $this->smarty->cache_dir = 'control/cache/';
    }

    public function setAssign($nombre_variable,$valor_variable){
        $this->smarty->assign($nombre_variable,$valor_variable);
    }

    public function setDisplay($nombre_archivo){
        $this->smarty->display($nombre_archivo);
    }


}


?>