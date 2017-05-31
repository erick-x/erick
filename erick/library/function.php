<?php
/**
 * 全局公用函数
 */

/**
 * 重写error_log 无参数时自动记录日志索引
 * 若要输出SQL 请在SQL方法执行前调用 elog('psql');
 * @param $obj   输出内容 或 null
 * @param $path 'D:/test.log' 或 null
 */
function elog ($obj = null, $path = null)
{
    //SQL日志
    if($obj == 'psql') {
        $GLOBALS["LOG_SQL_ON"] = 1;
        return;
    }

    if(is_array($obj) || is_object($obj))
        $obj = print_r($obj,1);
    elseif($obj === null) {
        if(!isset($GLOBALS["logIndex"])) $GLOBALS["logIndex"] = 1;
        $obj = 'LOG--------------- '.$GLOBALS["logIndex"];
        $GLOBALS["logIndex"]++;
    }
    $path ? error_log($obj, 3, $path) : error_log($obj);
}

/**
 * 生成UUID
 * @param string $prefix 前缀
 * @return string UUID
 */
function create_uuid($prefix = "")
{    //可以指定前缀
    $str = md5(uniqid(mt_rand(), true));
    $uuid = substr($str, 0, 8);
    $uuid .= substr($str, 8, 4);
    $uuid .= substr($str, 12, 4);
    $uuid .= substr($str, 16, 4);
    $uuid .= substr($str, 20, 12);
    return $prefix . $uuid;
}



/**
 * 将数据集转换成Tree
 * @param $list 数据集
 * @param string $pk 主键字段
 * @param string $pid 父级字段
 * @param string $child 子级属性名
 * @param int $root 父级ID
 * @return array
 */
function list_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_child', $root = 0)
{
    // 创建Tree
    $tree = array();
    if (is_array($list)) {
        // 创建基于主键的数组引用
        $refer = array();
        foreach ($list as $key => $data) {
            $refer[$data[$pk]] =& $list[$key];
        }
        foreach ($list as $key => $data) {
            // 判断是否存在parent
            $parentId = $data[$pid];
            if ($root == $parentId) {
                $tree[] =& $list[$key];
            } else {
                if (isset($refer[$parentId])) {
                    $parent =& $refer[$parentId];
                    $parent[$child][] =& $list[$key];
                }
            }
        }
    }
    return $tree;
}

/**
 * 将list_to_tree的树还原成列表
 * @param  array $tree 树
 * @param  string $child 子节点的键
 * @param  string $order 排序显示的键，一般是主键 升序排列
 * @param  array $list 过渡用的中间数组，
 * @return array        返回排过序的列表数组
 */
function tree_to_list($tree, $child = '_child', $order = 'id', &$list = array())
{
    if (is_array($tree)) {
        $refer = array();
        foreach ($tree as $key => $value) {
            $reffer = $value;
            if (isset($reffer[$child])) {
                unset($reffer[$child]);
                tree_to_list($value[$child], $child, $order, $list);
            }
            $list[] = $reffer;
        }
        $list = list_sort_by($list, $order, $sortby = 'asc');
    }
    return $list;
}


function get_server_name()
{
    $pageURL = 'http';

    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")
    {
        $pageURL .= "s";
    }
    $pageURL .= "://";

    if ($_SERVER["SERVER_PORT"] != "80")
    {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"];
    }
    else
    {
        $pageURL .= $_SERVER["SERVER_NAME"];
    }
    return $pageURL;
}
/**
 * 随机生成6位密码
 * @param int $len
 * @param string $format
 * @return string
 */
 function randStr($len = 6, $format = 'ALL')
{
    switch ($format) {
        case 'ALL':
            $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            break;
        case 'CHAR':
            $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            break;
        case 'NUMBER':
            $chars = '0123456789';
            break;
        default :
            $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            break;
    }
    mt_srand((double)microtime() * 1000000 * getmypid());
    $password = "";
    while (strlen($password) < $len)
        $password .= substr($chars, (mt_rand() % strlen($chars)), 1);
    return $password;
}

//日期相差天数
function diffDay($date1, $date2){
    $d1=strtotime($date1);
    $d2=strtotime($date2);
    return round(($d2-$d1)/3600/24);
}

//获取客户端IP
function getIp(){
    $ip = getenv("HTTP_CLIENT_IP");
    if(!$ip) $ip = getenv("HTTP_X_FORWARDED_FOR");
    if(!$ip) $ip = getenv("REMOTE_ADDR");
    else $ip = "Unknow";
    return $ip;
}
