<?php
class Controller{

    public $request; 
    private $vars = array(); 
    public $layout = 'default';

    function __construct($request){
        $this->request = $request;
    }

    public function render($view){
        extract($this->vars);
        $view = ROOT.DS.'view'.DS.$this->request->controller.DS.$view.'.php';
        ob_start();
        require($view);
    }

    public function set($key,$value=null){
        if(is_array($key)){
            $this->vars += $key;
        }else{
            $this->vars[$key] = $value;

        }
    }

}