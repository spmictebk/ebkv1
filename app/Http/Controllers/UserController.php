<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Role;
use App\Models\User;
use Laratrust\Models\LaratrustRole;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Rules\MatchOldPassword;


class UserController extends Controller
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
    public function create()
    {
        return view('/pengguna/daftarpengguna');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'sektor' => ['required', 'string', 'max:255'],
            
            'jawatan' => ['required', 'string', 'max:255'],
            'gred' => ['required', 'string', 'max:255'],
            'ic' => ['required', 'string', 'max:255'],
        ]);

        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'sektor' => $request->sektor,
            'unit' => $request->unit,
            'jawatan' => $request->jawatan,
            'gred' => $request->gred,
            'ic' => $request->ic,
        ]);
        $users->attachRole($request->role_id);

        event(new Registered($users));

        //Auth::login($users);
        return redirect('/pengguna/listpengguna');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $users = Auth::user();
       
        if ($users->hasRole('admin') )  {
            
            $users = User::orderBy('id', 'desc')
            ->paginate(20);
        
        }
        
        else {
        
        $users = User::orderBy('id', 'desc')
        ->paginate(20);
        //$posts = Post::all();
        }

        return view ('/pengguna/listpengguna', compact('user', 'users'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function show2(User $user)
    {
        $users = Auth::user();
       
        if ($users->hasRole('admin') )  {
            
            $users = User::orderBy('id', 'desc')
            ->paginate(20);
        
        }
        
        else {
        
        $users = User::orderBy('id', 'desc')
        ->paginate(20);
        //$posts = Post::all();
        }

        return view ('/pengguna/listpengguna2', compact('user', 'users'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function editPengguna($id)
    {
        $data = User::find($id); 
        return view ('/pengguna/editpengguna', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updatePengguna(Request $request, User $user)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
        return redirect('/pengguna/listpengguna');
    }

    public function editPengguna2($id)
    {
        $data = User::find($id); 
        return view ('/pengguna/editpengguna2', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updatePengguna2(Request $request, User $user)
    {
       
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->sektor = $request->sektor;
        $data->unit = $request->unit;
        $data->jawatan = $request->jawatan;
        $data->gred = $request->gred;
        $data->ic = $request->ic;
        $data->ext1 = $request->ext1;
        $data->ext2 = $request->ext2;
        $data->ext3 = $request->ext3;
        $data->roles()->detach();
        
        $data->save();
        
        $data->attachRole($request->role_id);

        return redirect('/pengguna/listpengguna');
    }
    
    public function profile()
    {
        return view('/pengguna/profile');
    }
    
    public function profile1(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image',
        ]);
  
        $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('storage/ebk/avatar'), $avatarName);
  
        Auth()->user()->update(['avatar'=>$avatarName]);
  
        return back()->with('success', 'Avatar updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users != null;
        $users->delete();

        return redirect('/pengguna/listpengguna');
    }
}