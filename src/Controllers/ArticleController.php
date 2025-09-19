<?php

namespace App\Controllers;

use App\DB;
use App\Models\Article;
use App\Models\User;

class ArticleController
{
    public function index()
    {
        $db = new DB();
        dump(Article::all());
        dump(User::all());
    }
}
