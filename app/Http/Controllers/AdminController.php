<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\Type;
use App\Models\Device;

class AdminController extends Controller
{

    public function showLogin(){
        return view('login');
    }

    public function login(){

        $username = request()->username;
        $password = request()->password;

        if (Auth::attempt([
            'username' => $username,
            'password' => $password,
            'status' => 'enabled'
        ]))
        {
            request()->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function index(){
        return view('admin.dashboard');
    }

    public function price(){
        return view('admin.price');
    }

    public function room(){
        $room = Room::get();

        return view('admin.room', [
            'rooms' => $room
        ]);
    }

    public function addRoom(){
        $type = Type::get();

        return view('admin.room-add', [
            'types' => $type
        ]);
    }

    public function postRoom(){

        Room::create([
            'hotel' => request()->hotel,
            'name' => request()->room_name,
            'type_id' => request()->type_id,
            'status' => request()->status,
            'dnd' => 'false',
        ]);

        return redirect('room')->with('message', 'Successfully added new room!');
    }

    public function type(){
        $type =  Type::get();

        return view('admin.type', [
            'types' => $type
        ]);
    }

    public function device(Room $room){
        // $rm = Device::with('room')->where('room_id', $room->id)->get();
        $dvc = Device::where('room_id', $room->id)->get();
        // foreach ($dvc as $dvc => $key) {
        //     dd($key->room->name);
        // }

        return view('admin.device', [
            'dvc' => $dvc,
            'rm' => Device::with('room')->where('room_id', $room->id)->get()
        ]);
    }

    public function addDevice(){
        return view('admin.device-add');
    }
}
