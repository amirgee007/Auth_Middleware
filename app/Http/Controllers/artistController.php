<?php

namespace App\Http\Controllers;

use App\Http\Requests\createArtist;
use App\track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class artistController extends Controller
{public  function index()
{
    $Tracks= track::pluck('track_id');
    return View('artist', compact('Tracks'));
}

    public  function Store(createArtist $request)
    {
$request->all();
        if (Auth::check())
        {
            DB::table('artisits')->insert(
                array('Arts_name' =>$request->Art_name,
                    'track_id' =>$request->Track_Id,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id(),'deleted_by' =>0
                )
            );

            Session::flash('flash_message','your Artist has been inserted successfully.');
            return redirect('artist');
        }
        else
        {
            return redirect('login');
        }
    }



}
