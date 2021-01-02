<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work;
class workcontroller extends Controller
{
    public function iskaydet(request $request) {
        work::create($request->all());
    }
    public function islistele() {
        return response(work::all()->jsonSerialize());
    }
}
