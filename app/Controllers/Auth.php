<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
  public function login()
  {
    $session = session();
    $model = new UsuarioModel();

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $usuario = $model->where('email', $email)->first();

    if ($usuario && password_verify($password, $usuario['password'])) {
      $session->set([
        'id' => $usuario['id'],
        'nombre' => $usuario['nombre'],
        'email' => $usuario['email'],
        'isLoggedIn' => true
      ]);
      return redirect()->to('/');
    }

    return redirect()->back()->with('error', 'Credenciales inválidas');
  }

  public function register()
  {
    $model = new UsuarioModel();

    $data = [
      'nombre' => $this->request->getPost('nombre'),
      'email' => $this->request->getPost('email'),
      'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
    ];

    $model->save($data);
    return redirect()->to('/')->with('success', 'Registro exitoso. Ya puedes iniciar sesión.');
  }

  public function logout()
  {
    session()->destroy();
    return redirect()->to('/');
  }
}
