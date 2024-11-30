<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index(){
        // Check if the user is logged in
        $session = session();

        if (!$session->get('isLoggedIn')) {
            // Redirect to the login page if the user is not logged in
            return redirect()->to('/login');
        }

        $data = ['email' => $session->get('email'),
                 'name' => $session->get('name')];

        // User is logged in, show the dashboard
        return view('dashboard', $data);
    }
}
