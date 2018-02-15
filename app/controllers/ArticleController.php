<?php

namespace app\controllers;

class ArticleController
{
    public function index()
    {
        echo 'all articles';
    }

    public function show($id)
    {
        echo 'show ' . $id;
    }
}
