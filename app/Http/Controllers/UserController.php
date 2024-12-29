<?php
// filepath: /c:/xampp/htdocs/EjercicioWelldex/app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
}