<?php

namespace App\Http\Controllers;

use App\Models\Clip;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ClipController extends Controller
{
    public function index(Request $request, $clipurl){
        try{
        $clipurl = $request->clipurl;

        $store = Clip::create([
            'clip' => $clipurl
        ]);

        $clip = $store->clip;
        return redirect('/fill/' . $clip);
    }
    catch(QueryException $e){
        if($e->getCode() == 23000){
            return back()->with('errord', "Try another URL");
        }
    }
    }
    public function viewCreate(){
        // dd('Create a clip');
        return view('createclip');
    }
        public function viewContent($clip){
            $clip = Clip::where('clip', $clip)->firstOrFail();
            return view('clipcontent', compact('clip'));
        }

        public function saveContent(Request $request, $clip){
            $textcontent = $request->clipcontent;
            $clip = Clip::where('clip', $clip)->update(['clipcontent' => $textcontent]);
            return view('createdview');
        }
        public function viewClip($clip){
            $clipwhole = Clip::where('clip', $clip)->firstOrFail();
            $clips = $clipwhole->clipcontent;
            $clip = $clipwhole->clip;
            $clipwhole->delete();
            // \DB::table('clips')->where('clip', $clip)->delete();
            return view('viewnotes', compact('clips'));
        }
}