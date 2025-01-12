<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ClientInfo;
use Illuminate\Http\Request;

class ClientInfoCRUDController extends Controller
{
    public function index(){
        $clients = ClientInfo::with('cars')->paginate(10);
        // dd($clientLists);
        return view('backend.client-info.index',compact('clients'));
    }
}
