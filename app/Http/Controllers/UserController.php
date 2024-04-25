<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\UserModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
//     public function index()
//     {
//     //  $data = [
//     //     'nama' => 'Pelanggan Pertama',
//     //  ];
//     //  UserModel::where('username', 'customer-1')->update($data);

//     //  $user = UserModel::all();
//     //  return view('user', ['data' => $user]);

//         // $data = [
//         //     'level_id' => 2,
//         //     'username' => 'manager_dua',
//         //     'nama' => 'Manager 2',
//         //     'password' => Hash::make("12345")
//         // ];
//         // UserModel::create($data);

//         // $user = UserModel::all();
//         // return view('user', ['data' => $user]);

//             // $user = UserModel::find(1);
//             // return view ('user', ['data' => $user]);

//         // $user = UserModel::where('level_id', 1)->first();
//         // return view ('user', ['data' => $user]);

//         // $user = UserModel::findOr (1, ['username', 'nama'], function (){
//         //     abort(404);
//         // });
//         // return view ('user', ['data' => $user]);

//         // $user = UserModel::findOr (20, ['username', 'nama'], function (){
//         //     abort(404);
//         // });
//         // return view ('user', ['data' => $user]);

//         // $user = UserModel::findOrFail(1);
//         // return view('user', ['data' => $user]);

//         // $user = UserModel::where('username', 'manager9')-> firstOrFail();
//         // return view ('user', ['data' => $user]);

//         // $user = UserModel::where('level_id', 2)->count();
//         // dd($user);
//         // return view ('user', ['data' => $user]);

//         // $user = UserModel::firstOrCreate(
//         //     [
//         //         'username' => 'manager22',
//         //         'nama' => 'Manager Dua Dua',
//         //         'password' => Hash::make('12345'),
//         //         'level_id' => 2
//         //     ]
//         // );
//         // return view ('user', ['data' => $user]);

//         // $user = UserModel::firstOrNew(
//         //     [
//         //         'username' => 'manager34',
//         //         'nama' => 'Manager Tiga Tiga',
//         //         'password' => Hash::make('12345'),
//         //         'level_id' => 2
//         //     ],
//         // );
//         // $user->save();

//         // return view('user', ['data' => $user]);




// //         $user = UserModel::find(1, ['username', 'nama']); // Use find instead of find0r

// // if (!$user) {
// //     abort(404, 'User not found'); // Abort with a specific message
// // }

// // return view('m_user', ['data' => $user]);

//     // $user = UserModel::create(
//     //         [
//     //             'username' => 'manager55',
//     //             'nama' => "Manager55",
//     //             'password' => Hash::make('12345'),
//     //             'level_id' => 2,
//     //         ]
//     //         );

//     //         $user->username = 'manager12';
//     //         $user->save();

//     //         $user->wasChanged();
//     //         $user->wasChanged();
//     //         $user->wasChanged();
//     //         $user->wasChanged();
//     //         dd($user->wasChanged(['nama', 'username']));
//     /////////////////////////////////////////////////////////
//         $user = UserModel::all();
//         return view('user', ['data' => $user]);





    public function tambah()
    {
        return view('user_tambah');
    }

    public  function tambah_simpan(Request $request){
        UserModel::create([
            'username' => $request ->username,
            'nama' => $request ->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);
        return redirect('/user');
    }
    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    // public function ubah_simpan($id, Request $request)
    // {
    //     $user = UserModel::find($id);

    //     $user->username = $request->username;
    //     $user->nama = $request->nama;
    //     $user->level_id = $request->level_id;

    //     $user->save();
    //     return redirect('/user');
    // }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }


    public function index()
    {
        $user = UserModel::with('level')->get();
        return view('user', ['data'=> $user]);
    }

    public function ubah_simpan(StorePostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $validated = $request->safe()->only(['username', 'nama', 'password', 'level_id']);
        $validated = $request->safe()->except(['username', 'nama', 'password', 'level_id']);

        return redirect('/user');
    }

}

