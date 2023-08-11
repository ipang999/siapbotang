<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLogin;

class Login extends BaseController
{
    public function CekLogin()
    {
        $data = [
            'judul' => 'Login',
        ];
        $session = session();

        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $ModelLogin = new ModelLogin();
            $user = $ModelLogin->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                // Login berhasil, simpan data user ke session
                $sessionData = [
                    'id_user' => $user['id_user'],
                    'username' => $user['username'],
                    'level_user' => $user['level_user'],
                    'logged_in' => true,
                ];
                $session->set($sessionData);

                // Redirect ke halaman dashboard berdasarkan level_user setelah login berhasil
                if ($user['level_user'] == 1) {
                    return redirect()->to('Dashboard');
                } elseif ($user['level_user'] == 2) {
                    return redirect()->to('Dashboard');
                }
            } else {
                // Login gagal, tampilkan pesan error dan kembalikan data yang dimasukkan sebelumnya
                $data['username'] = $username;
                $session->setFlashdata('error', '');
            }
        }
        return view('login/v_login.php', $data);
    }
   public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('login');
    }
}
