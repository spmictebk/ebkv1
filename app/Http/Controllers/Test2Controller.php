<?php

namespace App\Http\Controllers;

use App\Models\test2;
use Illuminate\Http\Request;
use App\Models\Test;
use Auth;
use DB;
use App\Models\Role;
use App\Models\User;
use Laratrust\Models\LaratrustRole;

class Test2Controller extends Controller
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
    public function createtest2($id)
    {
        $data = Test::find($id);
        
        $data->save();
        
        return view('/test/createtest2', ['data'=>$data]);
    }

    public function createtest3($id)
    {
        $data = Test::find($id);
        
        $data->save();
        
        return view('/test/createtest3', ['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storetest2(Request $request, Test $test)
    {
        $user = Auth::user();
        
        $count = count($request->bidang_tugas);

        for ($i=0; $i < $count; $i++) { 
        //$test = new Test();
        
        $data = Test::find($request->id)->replicate(['ext2_id', 'ext1_id']); // sgt power
        $data['user_id'] = auth()->id();
        $data['ext2_id'] = $request['ext2_id'];
        $data['ext1_id'] = $request['ext1_id'];
        $data['sektor_id'] = auth()->user()->sektor;
        $data['unit_id'] = auth()->user()->unit;
        $data['avatar_id'] = auth()->user()->avatar;
        $data['pyd'] = auth()->user()->name;
        $data['ic'] = auth()->user()->ic;
        $data['jawatan'] = auth()->user()->jawatan;
        $data['gred'] = auth()->user()->gred;
        $data['penyemak1'] = auth()->user()->ext1;
        $data['penyemak2'] = auth()->user()->ext2;      
        $data->bidang_tugas = $request->bidang_tugas[$i];
        //$data->penilaian_1 = $request->penilaian_1[$i];
        $data->sasaran = $request->sasaran[$i];
        $data->pencapaian_1 = $request->pencapaian_1[$i];
        $data->bil = $request->bil[$i];
        //$data->status_sasaran = $request->status_sasaran[$i];
        //$data->total_all = $request->total_all;
        //$data->purata = $request->purata;
        //$data->jumlah_input = $request->jumlah_input;

        $data->save();
        }

        return redirect()->route('list.test', $data->ext2_id)->with('success', ' Maklumat Keberhasilan Berjaya Disimpan !');
    }

    public function storetest3(Request $request, Test $test)
    {
        $user = Auth::user();
        
        $count = count($request->bidang_tugas1);

        for ($i=0; $i < $count; $i++) { 
        //$test = new Test();
        
        $data = Test::find($request->id)->replicate(['ext2_id', 'ext1_id']); // sgt power
        $data['user_id'] = auth()->id();
        $data['ext2_id'] = $request['ext2_id'];
        $data['ext1_id'] = $request['ext1_id'];
        $data['sektor_id'] = auth()->user()->sektor;
        $data['unit_id'] = auth()->user()->unit;
        $data['avatar_id'] = auth()->user()->avatar;
        $data['pyd'] = auth()->user()->name;
        $data['ic'] = auth()->user()->ic;
        $data['jawatan'] = auth()->user()->jawatan;
        $data['gred'] = auth()->user()->gred;
        $data['penyemak1'] = auth()->user()->ext1;
        $data['penyemak2'] = auth()->user()->ext2;   
        $data->bidang_tugas1 = $request->bidang_tugas1[$i];
        $data->bil2 = $request->bil2[$i];
        //$data->penilaian_1 = $request->penilaian_1[$i];
        $data->sasaran1 = $request->sasaran1[$i];
        $data->pencapaian_2 = $request->pencapaian_2[$i];
        $data->status_sasaran = $request->status_sasaran[$i];
        //$data->total_all = $request->total_all;
        //$data->purata = $request->purata;
        //$data->jumlah_input = $request->jumlah_input;

        $data->save();
        }

        return redirect()->route('list.test', $data->ext2_id)->with('success', ' Maklumat Keberhasilan Berjaya Disimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\test2  $test2
     * @return \Illuminate\Http\Response
     */
    public function show(test2 $test2)
    {
        $user = Auth::user();
        
        
        if ($user->hasRole( 'pp1') )  {
            $tests = Test::with('children')->where('ext2_id'=='ext1_id')->where('sektor_id', $user->sektor)
            ->orderBy('created_at', 'asc')
            ->get();
		
        }
       
        elseif ($user->hasRole( 'pp2') )  {
            $tests = Test::with('children')->where('ext2_id'=='ext1_id')->where('sektor_id', $user->sektor)
            ->orderBy('created_at', 'asc')
            ->get();
		
        }

        elseif ($user->hasRole( 'pengarah') )  {
            $tests = Test::select('tahun')->with('children')
            ->orderBy('id', 'asc')
            ->get();
        }

        elseif ($user->hasRole( 'admin') )  {
            $tests = Test::select('tahun')->with('children')
            ->orderBy('id', 'asc')
            ->get();
        }
        else {
        
        $tests = Test::where('user_id', $user->id)
        ->with('children')
        
        ->orderBy('created_at', 'asc')
        ->get();
        //$posts = Post::all();
        }
        return view ('/test/listtest2', compact('user', 'tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\test2  $test2
     * @return \Illuminate\Http\Response
     */
    public function edittest2($id)
    {
        $data = Test::find($id); 
        return view ('/test/edittest2', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\test2  $test2
     * @return \Illuminate\Http\Response
     */
    public function updatetest2(Request $request, test2 $test2)
    {
        $data = Test::find($request->id);
        $data->user_id = auth()->id();
        $data->bil = $request->bil;
        $data->bidang_tugas = $request->bidang_tugas;
        $data->bidang_tugas1 = $request->bidang_tugas1;
        $data->sasaran = $request->sasaran;
        $data->sasaran1 = $request->sasaran1;
        $data->pencapaian_1 = $request->pencapaian_1;
        $data->status_sasaran = $request->status_sasaran;
        $data->status_sasaran1 = $request->status_sasaran1;
        $data->save();
        return redirect()->route('list.test')->with('success', ' Kemaskini Berjaya !');

    }

    public function edittest3($id)
    {
        $data = Test::find($id); 
        return view ('/test/edittest3', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\test2  $test2
     * @return \Illuminate\Http\Response
     */
    public function updatetest3(Request $request, test2 $test2)
    {
        $data = Test::find($request->id);
        $data->user_id = auth()->id();
        //$data->bil = $request->bil;
        $data->bil2 = $request->bil2;
        $data->bidang_tugas = $request->bidang_tugas;
        $data->bidang_tugas1 = $request->bidang_tugas1;
        $data->sasaran = $request->sasaran;
        $data->sasaran1 = $request->sasaran1;
        $data->pencapaian_1 = $request->pencapaian_1;
        $data->pencapaian_2 = $request->pencapaian_2;
        $data->status_sasaran = $request->status_sasaran;
        $data->status_sasaran1 = $request->status_sasaran1;
        $data->save();
        return redirect()->route('list.test')->with('success', ' Kemaskini Berjaya !');

    }

    public function kekaltest2($id)
    {
        $data = Test::find($id); 
        return view ('/test/kekal', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\test2  $test2
     * @return \Illuminate\Http\Response
     */
    public function kekal1test2(Request $request, test2 $test2)
    {
        $data = Test::find($request->id);
        $data->user_id = auth()->id();
        $data->bidang_tugas1 = $request->bidang_tugas1;
        $data->bil2 = $request->bil2;
        $data->sasaran1 = $request->sasaran1;
        $data->pencapaian_2 = $request->pencapaian_2;
        $data->status_sasaran = $request->status_sasaran;
        $data->save();
        return redirect()->route('list.test')->with('success', ' Kekal Bidang Tugas Berjaya !');

    }

    public function pindatest2($id)
    {
        $data = Test::find($id); 
        return view ('/test/pinda', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\test2  $test2
     * @return \Illuminate\Http\Response
     */
    public function pinda1test2(Request $request, test2 $test2)
    {
        $data = Test::find($request->id);
        $data->user_id = auth()->id();
        $data->bidang_tugas1 = $request->bidang_tugas1;
        $data->bil2 = $request->bil2;
        $data->sasaran1 = $request->sasaran1;
        $data->pencapaian_2 = $request->pencapaian_2;
        $data->status_sasaran = $request->status_sasaran;
        $data->save();
        return redirect()->route('list.test')->with('success', ' Pinda Bidang Tugas Berjaya !');

    }

    public function gugurtest2($id)
    {
        $data = Test::find($id); 
        return view ('/test/gugur', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\test2  $test2
     * @return \Illuminate\Http\Response
     */
    public function gugur1test2(Request $request, test2 $test2)
    {
        $data = Test::find($request->id);
        $data->user_id = auth()->id();
        $data->bidang_tugas1 = $request->bidang_tugas1;
        $data->bil2 = $request->bil2;
        $data->sasaran1 = $request->sasaran1;
        $data->pencapaian_2 = $request->pencapaian_2;
        $data->status_sasaran = $request->status_sasaran;
        $data->save();
        return redirect()->route('list.test')->with('success', ' Gugur Bidang Tugas Berjaya !');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\test2  $test2
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tests = Test::find($id);
        $tests != null;
        $tests->delete();
        return redirect()->back()->with('warning', ' Maklumat telah dihapuskan !');
    }

    
    
}
