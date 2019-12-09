<?php
namespace controller;
use Loader\App;

abstract class Controller extends App
{
    function __construct()
    {
        App::__construct();
    }
    public abstract function index();
    public abstract function store();
    public abstract function show($id);
    public abstract function update($id);
    public abstract function create();
}
?>