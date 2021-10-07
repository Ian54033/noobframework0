<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;

class UserController extends Controller
{

       public function cadastro() {
              $this->view('cadastro');
       }

       public function perfil(Request $request) {
              $username = $request->post('nome');
              $email = $request->post('email');
              $this->view('perfil', ['nome' => $username, 'email' => $email]);
       }

       public function login() {
              $this->view('login');
       }
}
