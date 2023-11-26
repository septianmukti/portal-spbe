<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewprofile()
    {
        return view('pages.profile');
    }

    public function viewchangepassword()
    {
        return view('pages.change-password');
    }

    public function updateprofile(Request $request)
    {
        $messages = [
            'required' => 'Nama tidak boleh kosong.',
            'regex'    => 'Nama tidak boleh menggunakan simbol dan angka.',
            'min'      => 'Nama harus memiliki minimal 5 karakter.'
        ];

        $this->validate($request, [
            'name'     => 'required|regex:/^[A-Za-z .]+$/|min:5'
        ], $messages);

        $user =Auth::user();
        $user->name = $request['name'];
        /** @var \App\Models\User $user **/
        $user->save();

        return redirect()->route('profile')->with(['success' => 'Data Berhasil Diperbarui!']);
    }

    public function updatePassword(Request $request)
    {
        $messages = [
            'min' => 'Password baru minimal berjumlah 8 karakter.',
            'required_with' => ':attribute harus diisi, tidak boleh kosong.',
            'same' => 'Konfirmasi Password harus sama dengan Password yang baru.'
        ];

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|required_with:new_confirm_password|same:new_confirm_password',
        ], $messages);

        #Matching Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return redirect()->route('change-password')->with('error', 'Password lama yang anda masukkan salah!');
        }

        #Update new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('change-password')->with('success', 'Password berhasil diganti!');
    }

}
