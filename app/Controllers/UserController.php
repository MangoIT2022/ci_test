<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->getUsers();

        return view('user/index', $data);
    }

    public function create()
    {
        $validationErrors = session('validation');
        return view('user/create', ['validation' => $validationErrors]);
    }

    public function store()
    {
        $validationRules = [
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
        ];

        if ($this->validate($validationRules)) {
            $model = new UserModel();
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ];

            $model->createUser($data);

            return redirect()->to('/users');
        } else {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->getUser($id);

        $validationErrors = session('validation');
        $data['validation'] = $validationErrors;
        return view('user/edit', $data);
    }

    public function update($id)
    {
        $validationRules = [
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email|is_unique[users.email,id,' . $id . ']',
        ];

        if ($this->validate($validationRules)) {

            $model = new UserModel();
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
            ];

            $model->updateUser($id, $data);

            return redirect()->to('/users');
        } else {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->deleteUser($id);

        return redirect()->to('/users');
    }
}
