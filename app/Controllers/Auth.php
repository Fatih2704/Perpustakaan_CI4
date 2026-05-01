<?php

namespace App\Controllers;

class Auth extends BaseController
{
    protected $helpers = ['url'];

    public function login()
    {
        // Cek jika ada pengiriman form (POST)
        if ($this->request->getPost()) {
            $db = \Config\Database::connect();
            
            $nisn = $this->request->getPost('nisn');
            $password = $this->request->getPost('password');

            // Query cek user menggunakan Query Builder (Lebih Aman)
            $user = $db->table('member')
                       ->where(['nisn' => $nisn, 'password' => $password])
                       ->get()
                       ->getRowArray();

            if ($user) {
                // Set Session ala CodeIgniter
                session()->set([
                    'nama' => $user['nama'],
                    'nisn' => $user['nisn'],
                    'logged_in' => true
                ]);

                return "
                <script>
                    alert('Login Sukses!');
                    window.location='" . base_url('/') . "';
                </script>";
            } else {
                return "
                <script>
                    alert('NISN atau Password Salah. Silahkan coba lagi!');
                    window.location='" . base_url('login') . "';
                </script>";
            }
        }

        // Tampilkan halaman login
        return view('login');
    }
    public function register()
    {
        // Tampilkan halaman register
        return view('register');
    }

    public function admin()
    {
        // Cek jika ada pengiriman form (POST)
        if ($this->request->getPost()) {
            $db = \Config\Database::connect();
            
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Query cek admin menggunakan Query Builder (Lebih Aman)
            $admin = $db->table('admin')
                       ->where(['username' => $username, 'password' => $password])
                       ->get()
                       ->getRowArray();

            if ($admin) {
                // Set Session ala CodeIgniter
                session()->set([
                    'username' => $admin['username'],
                    'logged_in_admin' => true
                ]);

                return "
                <script>
                    alert('Login Admin Sukses!');
                    window.location='" . base_url('/dashboardAdmin') . "';
                </script>";
            } else {
                return "
                <script>
                    alert('Username atau Password Salah. Silahkan coba lagi!');
                    window.location='" . base_url('admin') . "';
                </script>";
            }
        }

        // Tampilkan halaman login admin
        return view('admin');
    }
    
}