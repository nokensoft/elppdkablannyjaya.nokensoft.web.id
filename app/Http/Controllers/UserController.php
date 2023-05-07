<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // INDEX
    public function index(Request $request)
    {
        $datas = User::with('roles')->whereHas('roles',function($q){
            $q->where('name','supervisor');
        })->orWhereHas('roles', function ( $query ) {
            $query->where('name', 'administrator' );
        })->orderBy('id','Desc')->paginate(3);

        return view('admin.users.index',compact('datas'));
    }

    // CREATE
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create',compact('roles'));
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:confirm-password',
                'role_id' => 'required',
            ]);

        if ($validator->fails() ) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $account = new User();
                $account->name = $request->name;
                $account->email = $request->email;
                $account->password = bcrypt($request->password);
                $account->slug = Str::slug($request->name);
                $account->save();
                $account->assignRole($request->role_id);
                Alert::toast('Pengguna Berhasil dibuat!', 'success');
                return redirect()->route('pengguna.index');
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }

    }

    // SHOW
    public function show($id)
    {
        $user = User::where('slug',$id)->first();
        return view('admin.users.show',compact('user'));
    }

    // EDIT
    public function edit($id)
    {
        $user = User::where('slug',$id)->first();
        $roles = Role::where('name','administrator')->get();
        return view('admin.users.edit',compact('user','roles'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'role_id' => 'required',
        ]);

    if ($validator->fails() ) {
        return redirect()->back()->withInput($request->all())->withErrors($validator);
    } else {
        try {
            $account = User::find($id);
            $account->name = $request->name;
            $account->email = $request->email;
            $account->slug = Str::slug($request->name);
            if ($request->password) {
                $account->password = Hash::make($request->password);
            }
            $account->update();
            $account->syncRoles(explode(',', $request->role_id));
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
            return redirect()->route('pengguna.index');
        } catch (\Throwable $th) {
            alert()->error('Gagal', 'Gagal!!')->autoclose(1100);
            return redirect()->back();
        }
    }
    }

    // DESTROY
    public function delete($id)
    {
        $data = User::where('slug',$id)->first();
        return view('admin.users.delete',compact('data'));
    }

    public function destroy($id)
    {
        try {
            $user = User::find($id);

            $user->delete();
            Alert::toast('Pengguna Berhasil dihapus!', 'success');
            return redirect()->route('pengguna.index');
        } catch (\Throwable $e) {
            Alert::toast('Gagal', ['error' => $e->getMessage()], 'error');
            return redirect()->back();
        }

    }


}
