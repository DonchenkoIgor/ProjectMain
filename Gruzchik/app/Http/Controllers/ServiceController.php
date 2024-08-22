<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function moving()
    {
        return view('pages.moving');
    }
    public function transportation()
    {
        return view('pages.transportation');
    }
    public function removal()
    {
        return view('pages.removal');
    }
    public function loadingUnloading()
    {
        return view('pages.loadingUnloading');
    }
    public function cargoTaxi()
    {
        return view('pages.cargoTaxi');
    }
    public function warehouseWork()
    {
        return view('pages.warehouseWork');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function international()
    {
        return view('pages.international');
    }
}
