<!-- Chua cac ham bo tro he thong -->
<?php
defined('PATH_SYSTEM') or die('Bad requested');

//Ham chay ung dung
function FT_Load()
{
    //Lay phan config khoi tao ban dau
    $confic  = include_once(PATH_APPLICATION . '/config/init.php');

    //Neu khong truyen controller thi lay controller default
    $controller = $confic['default_controller'] ?: $_GET['c'];

    //Neu khong truyen action thi lay action default
    $action = empty($_GET['a']) ? $confic['default_action'] : $_GET['a'];

    //Require controller
    require_once PATH_SYSTEM . '/core/FT_Controller.php';

    // Load Base_Controller
    if (file_exists(PATH_APPLICATION . '/core/Base_Controller.php')) {
        include_once(PATH_APPLICATION . '/core/Base_Controller.php');
    }

    // chuyen doi ten controller
    $controller = ucfirst(strtolower($controller)) . "_Controller";

    // chuyen doi ten action
    $action = strtolower($action) . "Action";

    //Kiem tra xem file controller co ton tai
    file_exists(PATH_APPLICATION . "/controller/" . $controller . ".php") or die('file khong ton tai');

    //Neu file ton tai ta require file de su dung 
    require_once(PATH_APPLICATION . "/controller/" . $controller . ".php");

    // kiem tra class co ton tai
    class_exists($controller) or die('Controller khong ton tai');

    //Khoi tao controller object
    $controllerObject = new $controller();

    //kiem tra action co ton tai hay khong
    method_exists($controllerObject, $action) or die('Action khong ton tai');

    //Neu action ton tai, ta thuc hien action
    $controllerObject->{$action}();
}
