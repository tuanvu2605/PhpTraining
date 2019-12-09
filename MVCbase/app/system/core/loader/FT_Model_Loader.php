<!-- Doi tuong quan ly va load model -->
<?php
defined('PATH_SYSTEM') or die('Bad requested');
require_once(PATH_SYSTEM.'/core/FT_Model.php');

class FT_Model_Loader
{
    public function load($model)
    {
        $model = ucfirst($model)."_Model";
        if(file_exists(PATH_APPLICATION."/model/$model.php")){
            require_once(PATH_APPLICATION."/model/$model.php");
            if(class_exists($model)){
                return new $model();
            }  
        }
    }
}
?>