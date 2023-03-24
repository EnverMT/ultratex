<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class LocalizationController extends Controller
{
    public function change_language(Request $request)
    {
        App::setlocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
}
