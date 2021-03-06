<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/6
 * Time: 15:23
 */
Class IndexController extends BaseController
{
    const PRICE_BUTTER  = 1.00;
    const PRICE_MILK    = 3.00;
    const PRICE_EGGS    = 6.95;

    protected $products= array();
    public function index()
    {
        // 往购物车里添加条目
        $this->add_product('butter', 1);
        $this->add_product('milk', 3);
        $this->add_product('eggs', 6);

       // $this->assign('title','正文');
        $this->assign('total', $this->get_total_price(0.05) );
        $this->display('index/index');
    }

    public function add_product($product,$quantity)
    {
        $this->products[$product] = $quantity;
    }

    public function get_total_price($tax)
    {
        $total = 0.00;
        $callback = function ($quantity,$product) use($tax,&$total)
        {
            $pricePerItem = constant(__CLASS__ . "::PRICE_" .
                strtoupper($product));
            $total += ($pricePerItem * $quantity) * ($tax + 1.0);
        };
        array_walk($this->products,$callback);

        return round($total,2);
    }

    public function task()
    {
        $task = Task::getInstance();
        $cur = time(0);
        $task->register('first',array('IndexController','test'),$cur,'测试');
        $task->register('second',array('IndexController','test'),$cur,'测试1');
        $task->run();

    }

    public static function test($params)
    {
        elog($params);
    }
}