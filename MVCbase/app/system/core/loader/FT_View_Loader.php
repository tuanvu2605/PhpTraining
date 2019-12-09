<!-- Doi tuong quan ly va load view -->
<?php
defined('PATH_SYSTEM') or die('Bad requested');

class FT_View_Loader 
{
    protected $__content = [];

    public function load($view, $data = [])
    {
        //Bien key thanh ten bien
        extract($data);

        //Thay doi ten view
        $view = ucfirst($view).'_View.php';

        //Kiem tra xem view co ton tai

        if(file_exists(PATH_APPLICATION.'/view/'.$view))
        {
            ob_start();
            include_once(PATH_APPLICATION.'/view/'.$view);
            $content = ob_get_contents();
            ob_clean();

            //gan view vao danh sach
            $this->__content[] = $content;
        }
    }
    public function show()
    {
        $view = '';
        if(isset($this->__content))
        {
            foreach ($this->__content as $html) {
               $view.= $html;
            }
            return $view;
        }
    }
}







?>