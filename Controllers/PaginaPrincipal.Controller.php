<?php
    class PaginaPrincipal
    {
        public $smarty;
        function __construct()
        {
            $this->smarty = new Smarty();
        }
        function Inicio()
        {
            $this->smarty->assign('title', 'Pagina Principal');
            $this->smarty->display("PaginaPrincipal.tpl");
        }
    }
?>