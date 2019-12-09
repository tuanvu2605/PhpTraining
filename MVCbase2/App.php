<?php
namespace Loader;
class Controller_Loader
{
    private function load_controller(string $controller)
    {
        // Thay doi ten controller
        $controller = ucfirst($controller)."_Controller";

        //Kiem tra file controller co ton tai
        file_exists(PATH_SYSTEM."controller/$controller.php")?
        require_once(PATH_SYSTEM."controller/$controller.php"):false;

        //Kiem tra lop controller
        $controllerObject = class_exists($controller)? new $controller():null;

        return $controllerObject;
    }

    public function controller(string $controller)
    {
        return self::load_controller($controller);
    }
    
}
class Model_Loader
{
    private function load_model(string $model)
    {
        // Thay doi ten model
        $model = ucfirst($model)."_Model";

        //Kiem tra file model co ton tai
        file_exists(PATH_SYSTEM."model/$model.php")?
        require_once(PATH_SYSTEM."model/$model.php"):false;

        //Kiem tra lop model
        $modelObject = class_exists($model)? new $model():null;

        return $modelObject;
    }

    public function model(string $model)
    {
        return self::load_model($model);
    }
}
 
class View_Loader
{
    
    private function load_view(string $view, $data=[])
    {
        $__content= null;
        extract($data);
        // Thay doi ten model
        $view = ucfirst($view)."_View";

        //Kiem tra file model co ton tai
        if(file_exists(PATH_SYSTEM."view/$view.php"))
        {
            ob_start();
            require_once(PATH_SYSTEM."view/$view.php");
            $__content = ob_get_contents();
            ob_clean();
        }

        //Kiem tra lop model


        return $__content;
    }

    public function view(string $view,$data=[])
    {
        return self::load_view($view,$data);
    }
}
class App
{
    private $controller_loader;
    private $model_loader;
    private $view_loader;
    function __construct()
    {
        $this->controller_loader = new Controller_Loader();
        $this->model_loader = new Model_Loader();
        $this->view_loader = new View_Loader();
    }

    public function controller(string $controller)
    {
        return $this->controller_loader->controller($controller);
    }

    public function model(string $model)
    {
        return $this->model_loader->model($model);
    }
    public function view(string $view, $data=[])
    {
        return $this->view_loader->view($view,$data);
    }

}
?>