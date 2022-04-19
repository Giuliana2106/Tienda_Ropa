<?php
    function Autoload($clase)
    {
        if(is_file("Controllers/".$clase.".Controller.php"))
        {
            include "Controllers/".$clase.".Controller.php";
        }
        if(is_file("Framework/Smarty/".$clase.".Class.php"))
        {
            include "Framework/Smarty/".$clase.".Class.php";
        }
        if(is_file("Libreria/".$clase.".Lib.php"))
        {
            include "Libreria/".$clase.".Lib.php";
        }
        if(is_file("Model/".$clase.".Model.php"))
        {
            include "Model/".$clase.".Model.php";
        }
    }

    spl_autoload_register("Autoload");
?>