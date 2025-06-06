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

        $clip = $store->clip;
        // dd($clip);
        return redirect('/li/' . $clip);
    }

    public function viewCreate(){
        // $clipurl = $request->clipurl;
        // dd($clipurl);
        return view('createclip');
    }
        public function viewContent($clip){
            $clip = Clip::where('clip', $clip)->firstOrFail();
            return view('clipcontent', compact('clip'));
        }

        public function saveContent(Request $request, $clip){
            // dd($clip);
            $textcontent = $request->clipcontent;
            $clip = Clip::where('clip', $clip)->update(['clipcontent' => $textcontent]);

            // dd($clip);
            return 'created';
        }
}
