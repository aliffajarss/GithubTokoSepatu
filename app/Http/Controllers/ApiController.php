<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Jenis;

class ApiController extends Controller
{
    //

    public function listdata()
    {
    	return Barang::with('Jenis')->get();
    }
}
