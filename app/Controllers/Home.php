<?php

namespace App\Controllers;

class Home extends BaseController
{
    var $data = [];
    public function index(): string
    {
        $data['page_title'] = "Home";
        return view('index', $this->data);
    }
}
