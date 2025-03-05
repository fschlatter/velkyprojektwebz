<?php namespace Config;
use CodeIgniter\Config\BaseConfig;

class PagerConfig extends BaseConfig 
{
    private $itemPerPage = 9;
    public function getItemPerPage()
    {
        return $this->itemPerPage;
    }
}
?>