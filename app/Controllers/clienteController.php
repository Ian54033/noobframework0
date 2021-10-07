<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;
use App\Models\Cliente;


class UserController extends Controller
{

       public function index() {
           $cliente = new Cliente();
           $clientes = $clienteModel->getAll();

              $this->view('clientelist', ['clientes' => $clientes]);
       }

       public function perfil(Request $request) {
              $clienteName = $request->get();
              $clienteModel = new Cliente();
              $clientes = $clienteModel->getBy('first_name'=> $clienteName);
              
              $this->view('cliente-list', ['clientes' => $clientes , 'email' => $email]);
       }

       public function login() {
              $this->view('login');
       }
}
