<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index(){

        $session = session();

        if ($session->get('isLoggedIn')) {
            // Redirect to the login page if the user is not logged in
            return redirect()->to('/dash');
        }
        return view('login_page');
    }

    public function login(){
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]'
        ];

        if(!$this->validate($rules)) {
            return view('login_page', [
                'validation' => $this->validator
            ]);
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();

        if($user === null || !password_verify($password, $user['password'])) { 
            return view('login_page', [
                'validation' => $this->validator,
                'error' => 'Invalid email or password'
            ]);
        }

        $session = session();
        $session->set([
            'id' => $user['id'],
            'email' => $user['email'],
            'name' => $user['name'],
            'isLoggedIn' => true
        ]);

        return redirect()->to('dash');
    }

    public function signup(){
        $session = session();

        if ($session->get('isLoggedIn')) {
            // Redirect to the login page if the user is not logged in
            return redirect()->to('/dash');
        }
        return view('signup');
    }

    public function createUser(){
        $rules = [
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'name' => 'required'
        ];

        if(!$this->validate($rules)) {
            return view('signup', [
                'validation' => $this->validator
            ]);
        }

        $userModel = new \App\Models\UserModel();
        $userModel->save([
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'name' => $this->request->getPost('name')
        ]);

        return redirect()->to('/login');
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

}
