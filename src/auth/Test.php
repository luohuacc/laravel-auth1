<?php


namespace Veda\Auth\auth;


use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;
use Veda\Auth\model\Admin;

class Test
{
    protected $session;
    protected $config;
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config  = $config;
    }


    public function test_rtn($msg = ''){

        $config_arr = $this->config->get('menu.a');
        $a = Admin::get();
        dd($a->toArray());

        return $msg.' <strong>from your custom develop package!</strong>>';

    }
}
