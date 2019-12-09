<!-- Controller chinh -->
<?php
// kiem tra su ton tai cua duong dan 
defined('PATH_SYSTEM') or  die('Bad Requested');

//
class FT_Controller
{
    //Doi tuong view
    protected $view = NULL;

    //Doi tuong model
    protected $model = NULL;

    //Doi tuong library
    protected $library = NULL;

    //Doi tuong helper
    protected $helper = NULL;

    //Doi tuong config
    protected $config = NULL;

    //Khoi tao
    public function __construct()
    {
        // Loader cho config
        require_once(PATH_SYSTEM . '/core/loader/FT_Config_Loader.php');
        $this->config   = new FT_Config_Loader();
        $this->config->load('config');

        //loader view 
        require_once(PATH_SYSTEM.'/core/loader/FT_View_Loader.php');
        $this->view = new FT_View_Loader();

        //Loader model
        require_once(PATH_SYSTEM.'/core/loader/FT_Model_Loader.php');
        $this->model = new FT_Model_Loader();
    }
}
?>