<?php
class FT_Config_Loader
{
    //Danh sach config
    protected $config = array();

    //Ham load helper, tham so truyen vao la ten cua config
    public function load($config)
    {
        if (file_exists(PATH_APPLICATION . '/config/' . $config . '.php')){
            $config = include_once PATH_APPLICATION . '/config/' . $config . '.php';
            if ( !empty($config) ){
                foreach ((array)$config as $key => $item){
                    $this->config[$key] = $item;
                }
            }
            return true;
        }
        return FALSE;
    }

    //Ham get config item
    public function get_item($key, $defailt_val = '')
    {
        return isset($this->config)?$this->config[$key]:$defailt_val;
    }

    //Ham set config item
    public function set_item($key,$val)
    {
        if (isset($this->config))
        {
            $this->config[$key]=$val;
        }
        return false;
    }
}