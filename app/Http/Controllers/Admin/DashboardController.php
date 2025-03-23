<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $annonces = Annonce::latest()->paginate(10);
        return view('admin.dashboard', compact('annonces'));
    }
}
