<?php
/**
 * \View
 */
class View
{
    public $view;

    public function __construct()
    {

    }

    public function init($view)
    {
        $this->view = $view;
    }
    public  function make($viewName = null)
    {
        if ( ! $viewName ) {
            throw new InvalidArgumentException("视图名称不能为空！");
        } else {

            $viewFilePath = self::getFilePath($viewName);
            if ( is_file($viewFilePath) ) {
                $this->init($viewFilePath);
            } else {
                throw new UnexpectedValueException("视图文件不存在！".$viewFilePath);
            }
        }
    }


    private static function getFilePath($viewName)
    {
        $filePath = str_replace('.', '/', $viewName);
        return APPS_PATH.'/views/'.$filePath.'.phtml';
    }

}