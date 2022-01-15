<?php

namespace App\Http\Controllers;

use App\Helpers\CustomCheck;
use App\Helpers\Message;
use App\Models\MWebsite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
// use Laravel\Socialite\Facades\Socialite;

class MWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {
        return view('auth.login');
    }

    public function doLogin()
    {
        $request->validate([
            'emailUser' => 'required',
            'passwordUser' => 'required',
        ], Message::error());

        /* $checkUsername = CustomCheck::Username($request->username_admin);

        if (!$checkUsername->status) {
            return response((array)$checkUsername, 422);
        }

        $user = MWebsite::whereHas('student', function($student) use($request) {
            $student->where('npm', $request->npm);
        })->first();

        if (!$user) {
            return response([
                'status' => false,
                'message' => 'User Tidak ditemukan'
            ], 404);
        }

        if (!Hash::check($request->password, $user->password)) {
            $message = 'Password Salah';
            if ($user->role->level == 1) {
                $message = 'User Tidak ditemukan';
            }

            return response([
                'status' => false,
                'message' => $message
            ], 404);
        } */

        Auth::login($request->rememberMe);

        return [
            'status' => true,
            'message' => 'Login Berhasil'
        ];
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }

    public function index()
    {
        return view('master.dashboard');
    }

    public function account()
    {
        return view('master.account');
    }

    public function history()
    {
        return view('master.history');
    }

    public function setting()
    {
        return view('master.setting');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MWebsite  $mWebsite
     * @return \Illuminate\Http\Response
     */
    public function show(MWebsite $mWebsite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MWebsite  $mWebsite
     * @return \Illuminate\Http\Response
     */
    public function edit(MWebsite $mWebsite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MWebsite  $mWebsite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MWebsite $mWebsite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MWebsite  $mWebsite
     * @return \Illuminate\Http\Response
     */
    public function destroy(MWebsite $mWebsite)
    {
        //
    }
}
