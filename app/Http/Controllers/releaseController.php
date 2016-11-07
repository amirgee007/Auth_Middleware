<?php

namespace App\Http\Controllers;
use App\Http\Requests\createRelease;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use App\release;
class releaseController extends Controller
{
    public  function index()
    {
        return view('release');
    }

    public  function showrealsedelete()
    {

        $realeases=release::all();
        return view('deleteeditrealease',compact('realeases'));
    }


    public  function Store(createRelease $request)
    {
        $request->all();
        if (Auth::check())
        {
            DB::table('releases')->insert(
                array('Rels_name' =>$request->Rels_name, 'Release' => $request->Release,
                    'Rels_Type' => $request->Rels_Type,'Rels_Cover' => $request->image,'Rels_Itunelink' => $request->Rels_Itunelink,'created_by' => Auth::id(),
                    'updated_by' => Auth::id(),'deleted_by' =>0
                )
            );

            Session::flash('flash_message','your Release  has been inserted successfully.');
            return redirect('release');
        }
        else
        {

            return redirect('login');

        }

    }

    public function deleterealease($id)
    {
        DB::delete('delete from releases where Rels_id = ?',[$id]);
        Session::flash('flash_message','your release has been Deleted See below to confirm');
        return back();
    }

    public function editrealease($id)
    {
        $releases= DB::select('select * from releases where Rels_id = ?',[$id]);
        return view('editrealease',compact('releases'));
    }

    public function update( createRelease $request,$id)
    {


     //   dd($request->Rels_id);
        DB::table('releases')
            ->where('Rels_id', $id)
            ->update(['Rels_name' => $request->Rels_name,
                    'Release'=>$request->Release,
                    'Rels_Type'=>$request->Rels_Type,
                    'Rels_Cover' => $request->Rels_Cover,
                    'Rels_Itunelink' => $request->Rels_Itunelink,
                    'updated_by' => Auth::id()
                    ]);
        $realeases=release::all();
        Session::flash('flash_message','your product has been Updated successfully See below to confirm');
        return view('deleteeditrealease',compact('realeases'));
    }


}
