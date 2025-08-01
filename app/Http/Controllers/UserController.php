<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login() {
        return view("users.login");
    }
    public function logon() {
        return view("users.logon");
    }
    public function auth_login(Request $request) {
        $request_data = $request->validate([
            "email" => ["required", "exists:users,email"],
            "password" => ["required"],
        ]);
        $user = User::where("email", $request_data["email"])->first();
        if (empty($user)) {
            return redirect()->route("login")->withErrors([
                "Login" => "We did not find a user with this address"
            ])->withInput([
                        "email" => $request_data["email"],
                        "password" => $request_data["password"],
                    ]);
        }
        if (!Hash::check($request_data["password"], $user["password"])) {
            return redirect()->route("login")->withErrors([
                "Password" => "Password incorrect"
            ])->withInput([
                        "email" => $request_data["email"],
                        "password" => $request_data["password"],
                    ]);
        }
        if (Auth::attempt(["email" => $request_data["email"], "password" => $request_data["password"]])) {
            $request->session()->regenerate();
        }
        return redirect()->route("index");
    }
    public function auth_logon(UserRequest $request) {
        $request_data = $request->validated();
        $request_data["password"] = Hash::make($request_data["password"]);
        $user = User::create($request_data);
        Auth::login($user);
        return redirect()->route("index");
    }
    public function logout() {
        Auth::logout();
        return redirect()->route("index");
    }
    public function color_mode($dark_mode = 0) {
        $user = User::find(Auth::user()->id);
        $user["dark_mode"] = ($dark_mode == 1);
        $user->save();
        Auth::login($user);
    }
    public function index() {
    }
    public function create() {
    }
    public function store(Request $request) {
    }
    public function show(string $id) {
    }
    public function edit(string $id) {
    }
    public function update(Request $request, string $id) {
    }
    public function destroy(string $id) {
    }
}
