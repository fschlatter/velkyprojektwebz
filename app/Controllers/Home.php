<?php

namespace App\Controllers;
use App\Models\Typkomponent;
use App\Models\Vyrobce;
use App\Models\Komponent;
use App\CodeIgniter\HTTP\RequestInterface;
use App\CodeIgniter\HTTP\ResponseInterface;
use App\Psr\Log\LoggerInterface;
use Config\PagerConfig;

use function PHPSTORM_META\type;

class Home extends BaseController
{
    var $typkomponent;
    var $vyrobce;
    var $komponenty;
    var $data = [];
    var $config;
    var $itemsPerPage;

    public function __construct()
    {
        // Preload any models, libraries, etc, here.
        $this->config = new PagerConfig();
        $itemsPerPage = $this->config->getItemPerPage();
        $this->typkomponent = new Typkomponent();
        $this->vyrobce = new Vyrobce();
        $this->komponenty = new Komponent();
        $this->data['typkomponent'] = $this->typkomponent->findAll();
        $this->data['vyrobce'] = $this->vyrobce->findAll();
    }
    public function index(): string
    {
        $this->data['page_title'] = 'Home';
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
    public function komponenty($id):string
    {
        if(is_numeric($id)){
            $this->data['komponenty'] = $this->komponenty->join('vyrobce','komponent.vyrobce_id=vyrobce.idVyrobce', 'inner' )->join('typkomponent','komponent.typKomponent_id=typkomponent.idKomponent', 'inner' )->where('vyrobce_id', $id)->paginate($this->itemsPerPage);
            $this->data['page_title'] = $this->data['typkomponent'][0]['typKomponent'];
        }
        else if ($id!='vse'){
            $this->data['komponenty'] = $this->komponenty->join('typkomponent','komponent.typKomponent_id=typkomponent.idKomponent', 'inner' )->join('vyrobce','komponent.vyrobce_id=vyrobce.idVyrobce', 'inner' )->where('url', $id)->paginate($this->itemsPerPage);
            $this->data['page_title'] = $this->typkomponent->where('url', $id)->findAll()[0]['typKomponent'];
        }
        else{
            $this->data['komponenty'] = $this->komponenty->join('vyrobce','komponent.vyrobce_id=vyrobce.idVyrobce', 'inner' )->join('typkomponent','komponent.typKomponent_id=typkomponent.idKomponent', 'inner' )->paginate($this->itemsPerPage);
            $this->data['page_title'] = 'Všechny komponenty';
        }
        $this->data['pager'] = $this->komponenty->pager;
        return view('komponenty', $this->data);
    }
    public function komponenta($id):string{
        $this->data['komponenty'] = $this->komponenty->join('typkomponent','komponent.typKomponent_id=typkomponent.idKomponent', 'inner')->join('vyrobce','komponent.vyrobce_id=vyrobce.idVyrobce', 'inner' )->where('id', $id)->findAll()[0];
        $this->data['page_title'] = $this->data['komponenty']['nazev'];
        return view('komponenta', $this->data);
    }
}
