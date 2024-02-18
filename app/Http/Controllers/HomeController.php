<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\TranslateTextHelper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function translate()
    {
        return view('translate.translate');
    }

    public function translated(Request $request)
    {
        $sourceText = $request->get('source');
        TranslateTextHelper::setSource('en')->setTarget('fa');
        $translatedText = TranslateTextHelper::translate($sourceText);
        return view('translate.translate', compact('translatedText', 'sourceText'));
    }
}
