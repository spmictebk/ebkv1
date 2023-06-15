<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Auth;
use App\Models\Role;
use App\Models\User;
use Laratrust\Models\LaratrustRole;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createtest()
    {
        
        return view('/test/createtest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storetest(Request $request, Test $tests)
    {
        $user = Auth::user();
        $error = Test::where('user_id', $user->id)
        ->where('tahun', '=', $request->tahun)->exists();
        
        if ($error) {
            return redirect()->back()->with('warning', ' Maklumat Tahun Telah Wujud !');
        }

        
        else {
            $data =  test::create([
                'user_id' => auth()->id(),
                'sektor_id' => auth()->user()->sektor,
                'unit_id' => auth()->user()->unit,
                'avatar_id' => auth()->user()->avatar,
                'gred' => auth()->user()->gred,
                'pp' => auth()->user()->name,
                'ic' => auth()->user()->ic,
                'jawatan' => auth()->user()->jawatan,
                'penyemak1' => auth()->user()->ext1,
                'penyemak2' => auth()->user()->ext2,
                'penyemak3' => auth()->user()->ext3,
                'tahun' => $request['tahun'],
                'pyd' => $request['pyd'],
                'pp1' => $request['pp1'],
                'pp2' => $request['pp2'],
            ]);
            
           
            return redirect()->route('list.test')->with('success', ' Borang Keberhasilan Telah Dicipta.');
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        $user = Auth::user();
        
        $tests = Test::where('user_id', $user->id)
        ->with('children')
        ->whereNull('ext2_id')
        ->orderBy('id', 'desc')
        ->paginate(3);
        //$posts = Post::all();
        
        return view ('/test/listtest', compact('user', 'tests'))->with('i', (request()->input('page', 1) - 1) * 3);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroyAll($id)
    {
        $tests = Test::find($id);
        $tests != null;
        $tests->children()->delete();
        $tests->delete();
        return redirect()->back()->with('warning', ' Maklumat Telah Dihapuskan !');
      
    }

    
    public function cetak($id)
    {
        $tests = Test::find($id);
        $tests->children()->get();
        return view ('/test/cetak', ['test'=>$tests]);
    }

}
