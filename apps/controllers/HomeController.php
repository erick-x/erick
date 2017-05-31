<?php

/**
 * \HomeController
 */
class HomeController extends BaseController
{
    public function home()
    {
        $article = Article::first();
        $this->assign('article',$article);
        $this->assign('title','首页');
        $this->display('home/home');
    }
}