<?php

namespace App\Http\Controllers;

use App\Models\Clip;
use Illuminate\Http\Request;

class ClipController extends Controller
{
    public function index(Request $request, $clipurl){
        $clipurl = $request->clipurl;

        // dd($clipurl);
        $store = Clip::create(['clip' => $clipurl]);


        dd($store);
        // return redirect('/li' . $clip);
    }

    public function viewCreate(){
        // $clipurl = $request->clipurl;
        // dd($clipurl);
        return view('createclip');
    }
        public function viewContent($clip){
            $clip = Clip::where('clip', $clip)->firstOrFail();
            return view('clipcontent');
        }

        public function saveContent(Request $request, $clip){
            dd($clip);
            $textcontent = $request->clipcontent;
            $clip = Clip::where('clip', $clip);

            // dd($clip);
            dd($clip);
        }
}
