<?php
namespace App\Controllers;

class User extends BaseController {
    public function index() {
        return view('dashboardUser'); // Buat file ini di folder Views
    }
}