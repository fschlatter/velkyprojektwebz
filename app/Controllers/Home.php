<?php

namespace App\Controllers;
use App\Models\Typkomponent;
use App\Models\Vyrobce;
use App\Models\Komponent;
use App\CodeIgniter\HTTP\RequestInterface;
use App\CodeIgniter\HTTP\ResponseInterface;
use App\Psr\Log\LoggerInterface;

class Home extends BaseController
{
    var $typkomponent;
    var $vyrobce;
    var $komponenty;
    var $data = [];

    public function __construct()
    {
        // Preload any models, libraries, etc, here.
        $this->typkomponent = new Typkomponent();
        $this->vyrobce = new Vyrobce();
        $this->komponenty = new Komponent();
        $this->data['typkomponent'] = $this->typkomponent->findAll();
        $this->data['vyrobce'] = $this->vyrobce->findAll();
    }
    public function index(): string
    {
        $this->data['page_title'] = "Home";
        return view('index', $this->data);
    }

    public function typkomponent($id):string
    {
        $this->data['page_title'] = $this->data['typkomponent'][$id-1]['typKomponent'];
        return view('typkomponent', $this->data);
    }
    public function vyrobce($id):string
    {
        $this->data['page_title'] = $this->data['vyrobce'][$id-1]['vyrobce'];
        return view('vyrobce', $this->data);
    }
    public function komponenty($typ, $id):string
    {
        if($typ == 'vyrobce'){
            $this->data['komponenty'] = $this->komponenty->join('vyrobce','komponent.vyrobce_id=vyrobce.idVyrobce', 'inner' )->where('vyrobce_id', $id)->findAll();
            $this->data['page_title'] = $this->data['vyrobce'][$id-1]['vyrobce'];
        }
        else if ($typ == 'typkomponent'){
            $this->data['komponenty'] = $this->komponenty->join('typkomponent','komponent.typKomponent_id=typkomponent.idKomponent', 'inner' )->where('typKomponent_id', $id)->findAll();
            $this->data['page_title'] = $this->data['typkomponent'][$id-1]['typKomponent'];
        }
        else{
            throw new \Exception('Neplatný filtr komponent');
        }
        
        return view('komponenty', $this->data);
    }
}
