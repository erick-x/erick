<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/6
 * Time: 14:51
 */
class BaseView
{
    protected $view;
    protected $data;
    public function __construct()
    {

    }


    public function display($viewname)
    {
        $this->view = new View();;
        $this->view->make($viewname);
        if (  $this->view instanceof View ) {
            if (isset($this->data))
            {
                extract( $this->data);
            }
            require  $this->view->view;

        }
    }

    public function assign($key,$value)
    {
        $this->data[$key] = $value;
    }
}