<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // 2. Obtén solo los banners activos y ordénalos
        $banners = Banner::where('is_active', true)
                         ->orderBy('display_order', 'asc')
                         ->get();

        // 3. Retorna la vista y pásale la variable $banners
        return view('home.index', ['banners' => $banners]);
    }
}
