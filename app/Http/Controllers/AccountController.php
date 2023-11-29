<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewAccountManagement()
    {
        $users = User::where('id', '!=', auth()->id())->orderBy('id', 'desc')->get();
        return view('pages.account-management', compact('users'));
    }

    public function showAccount($id)
    {
        $users = User::find($id);
        return response()->json($users);
    }

    public function changeAccountPassword(Request $request)
    {
        $messages = [
            'min' => 'Password baru minimal berjumlah 8 karakter.',
            'required_with' => ':attribute harus diisi, tidak boleh kosong.',
            'same' => 'Konfirmasi Password harus sama dengan Password yang baru.'
        ];

        $request->validate([
            'new_password' => 'required|min:8|required_with:new_confirm_password|same:new_confirm_password',
        ], $messages);

        #Update new Password
        User::where('id', $request->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('account-management')->with('success', 'Password berhasil diganti!');
    }

    /**
     * Store a new user account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerAccount(Request $request)
    {
        $messages = [
            'regex'    => 'Nama tidak boleh menggunakan simbol dan angka.',
            'password.min' => 'Password minimal berjumlah 8 karakter.',
            'name.min' => 'Nama minimal berjumlah 5 karakter.',
            'max' => ':attribute maksimal berjumlah 250 karakter.',
            'required_with' => ':attribute harus diisi, tidak boleh kosong.',
            'same' => 'Konfirmasi Password harus sama dengan Password.',
            'unique' => 'Email yang dimasukkan sudah terdaftar.',
            'email' => 'Email yang didaftarkan harus sesuai dan menggunakan @.'
        ];

        $request->validate([
            'name' => 'required|regex:/^[A-Za-z .]+$/|min:5|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|required_with:confirm_password|same:confirm_password'
        ], $messages);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('account-management')
            ->withSuccess('User baru telah berhasil ditambahkan!');
    }

    public function deleteAccount($id)
    {
        // fix this
        $users = User::find($id);
        return response()->json($users);
    }
}
