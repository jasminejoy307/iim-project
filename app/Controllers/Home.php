<?php

namespace App\Controllers;
use App\Models\MemberModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function dashboard(){
        return view('dashboard_page');
    }

    public function offline_registration(){
        $model = new MemberModel();
        
        // Fetch all members
        $data['members'] = $model->findAll();
        return view('offline_registration',$data);
    }
    public function add_registration(){
        return view('add_registraion');
    }
    public function member_import()
    {
      return view ('member_import');
    }
}
