<?php
require ('core/shop.php');
function writeCurve($im, $color, $yzm_width, $yzm_height) {
    $A = mt_rand(1, 13);                                                    // 振幅
    $b = mt_rand(-$yzm_height/4, $yzm_height/4);                            // Y轴方向偏移量
    $f = mt_rand(-$yzm_height/4, $yzm_height/4);                            // X轴方向偏移量
    $T = mt_rand($yzm_height*1.5, $yzm_width*2);                            // 周期
    $w = (4* M_PI)/$T;

    $px1 = rand(0, 20);                                                     // 曲线横坐标起始位置
    $px2 = mt_rand($yzm_width/2, $yzm_width);                               // 曲线横坐标结束位置
    for ($px=$px1; $px<=$px2; $px=$px+ 0.9) {
        if ($w!=0) {
            $py = $A * sin($w*$px + $f)+ $b + 10;                           // y = Asin(ωx+φ) + b
            $i = (int) ((rand(14, 18) - 6)/4);
            while ($i > 0) {
                imagesetpixel($im, $px + $i, $py + $i, $color);             // 这里画像素点比imagettftext和imagestring性能要好很多
                $i--;
            }
        }
    }
}
try{

    //生成验证码图片
    $yzm_len = isset($_REQUEST['len']) || !empty($_REQUEST['len']) ? intval($_REQUEST['len']) : 4;
    $yzm_width = 80;
    $yzm_height = 32;

    $im = imagecreate($yzm_width, $yzm_height);
    $back = ImageColorAllocate($im, 245,245,245);
    imagefill($im,0,0,$back);                                               //背景

    $vcodes ='';

    //生成4位验证码
    $list = array(3,4,6,7,8,9,'a','b','d','e','f','g','h','j','k','m','n','p','q','r','t','u','v','w','x','y');
    $count = 23;
    $left = rand(2, 30);
    $font = G_APPLICATION_BASEPATH . 'resources/georgia.ttf';
    $color = imagecolorallocate($im, rand(100, 255), rand(0, 55), rand(0, 255));
    for($i=0;$i<$yzm_len;$i++) {
        $rand = mt_rand(0, $count);
        $authnum = $list[$rand];
        $vcodes.= $authnum;
        if ($yzm_len == 2)
            imagettftext($im, 13, (rand(0,60)+330)%360, 5+15*$i+rand(0,4), 16, $color, $font, $authnum);
        else {
            imagettftext($im, rand(14, 18), rand(350, 370), 12*$i+$left, 16+rand(0,4), $color, $font, $authnum);
        }
    }

    $G_SHOP->sessionCache_set('yzm', md5(strtolower($vcodes)), G_SHOPPINGIMAGECODER_TIMEOUT);
    Header("Content-type: image/PNG");
    ImagePNG($im);
    ImageDestroy($im);
}catch (Exception $e) {
    error_log('err:生成验证码失败 ' . $e->getMessage());
}


