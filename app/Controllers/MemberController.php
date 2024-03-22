<?php

namespace App\Controllers;

use App\Models\MemberModel;
use CodeIgniter\Controller;

class MemberController extends Controller
{
    public function fetchMembers()
    {
        $model = new MemberModel();
        $members = $model->findAll();
       // print_r($members);die;
        return $this->response->setJSON($members);
    }
   
    public function saveMember()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[100]',
            'organization' => 'required|min_length[3]|max_length[100]',
            'designation' => 'required|min_length[3]|max_length[50]',
            'mail' => 'required|valid_email|max_length[255]',
            'mobile' => 'required|numeric|exact_length[10]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $validation->getErrors()
            ]);
        }

        $model = new MemberModel();
        $lastUrno = $model->selectMax('urn_no')->first();
        $newUrno = intval($lastUrno['urn_no']) + 1;
        $data = [
            'name' => $this->request->getPost('name'),
            'organization' => $this->request->getPost('organization'),
            'designation' => $this->request->getPost('designation'),
            'email' => $this->request->getPost('mail'),
            'urn_no' => strval($newUrno),
            'password' => '123',
            'mobile' => $this->request->getPost('mobile')
        ];

        $model->insert($data);

        return $this->response->setJSON(['success' => true]);
    }

    public function searchMembers()
    {
        $model = new MemberModel();
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $mobile = $this->request->getPost('mobile');
        $members = $model
            ->like('name', $name)
            ->like('email', $email)
            ->like('mobile', $mobile)
            ->findAll();
        return $this->response->setJSON($members);
    }

    public function updateMembers(){
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'organization' => $this->request->getPost('organization'),
            'designation' => $this->request->getPost('designation'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile')
        ];
        $model = new MemberModel();
        $model->update($id, $data);
        return $this->response->setJSON(['success' => true]);
    }

}

