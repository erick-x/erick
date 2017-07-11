<?php
/**
 * \Task
 */

class Task
{
    private $task_queue;
    private static $_instance;
    private function __construct(){
        $this->task_queue=[];
        self::$_instance=null;
    }
    private function __clone(){

    }
    public function __destruct(){
        unset($this->task_queue);
    }
    public static function getInstance(){
        if(! (self::$_instance instanceof self) )
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function register($key,$callback,$timestap,$params=[],$interval=1){

        if (is_array($callback)){
            if ( !class_exists($callback[0])){
                return 1000;
            }
            if ( !method_exists($callback[0],$callback[1])){
                return 10001;
            }
        }
        if ( !is_callable($callback) ){
            return 1001; //该方法不可调用
        }

        if ($interval <= 0 ){
            return 1002;//非法时间间隔
        }
        if ( strlen($timestap) != 10 ){
            return 1003;//非法时间戳
        }
        if ( isset($this->task_queue[$key])){
            return 1004;//定时器已经存在
        }
        $this->task_queue[$key]=['callback'=>$callback,'bTime'=>$timestap,'interval'=>$interval,'params'=>$params];
        return 0;
    }

    public function delete($key){

        if ( !isset($this->task_queue[$key]) ){
            return 1005;//该方法不存在
        }
        unset($this->task_queue[$key]);
        return 0;
    }
    public function run(){

        do{

            if ( empty($this->task_queue)){
                continue;
            }
            $curTime = time();
            foreach ( $this->task_queue as $callback=>&$params){
                if ( $curTime >=$params['bTime'] ){
                    call_user_func($params['callback'],$params['params']);
                    $params['bTime'] = $curTime+$params['interval'];
                }
            }
            usleep(100);
        }while(true );
    }

}

