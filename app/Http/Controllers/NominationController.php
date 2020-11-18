<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nomination;

class NominationController extends Controller
{
    public function store(Request $request) {
        $nomination = Nomination::create([
            'اسم_الجهة' => $request->اسم_الجهة,
            'اسم_المشروع_المرشح' => $request->اسم_المشروع_المرشح,
            'الفرع_المراد_الترشح_له' => $request->الفرع_المراد_الترشح_له,
            'سبب_الترشح' => $request->سبب_الترشح,
        ]);
        return view('welcome', ['message'=> 'شكرا على ترشيحك، سنعاود الاتصال بك قريبا']);
    }
}
