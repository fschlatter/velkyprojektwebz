<?php

namespace App\Controllers;
use App\Models\Typkomponent;
use App\Models\Vyrobce;
use App\CodeIgniter\HTTP\RequestInterface;
use App\CodeIgniter\HTTP\ResponseInterface;
use App\Psr\Log\LoggerInterface;

class Home extends BaseController
{
    var $typkomponent;
    var $vyrobce;
    var $data = [];

    public function __construct()
    {
        // Preload any models, libraries, etc, here.
        $this->typkomponent = new Typkomponent();
        $this->vyrobce = new Vyrobce();
        $this->data['typkomponent'] = $this->typkomponent->findAll();
        $this->data['vyrobce'] = $this->vyrobce->findAll();
    }
    public function index(): string
    {
        $this->data['page_title'] = "Home";
        return view('index', $this->data);
    }

    public function komponent():string
    {
        return view('komponent', $this->data);
    }
}
