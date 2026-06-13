<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Acá pones la ruta de carpetas donde guardaste la vista del dashboard
        return view('backend.admin.dashboard'); 
    }
}
