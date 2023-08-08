<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            } else {
                $data=appointment::all();
                $user=User::find($id);
                return view('admin.home',compact('data','user'));
            }
        } else {
            return redirect()->back();
        }
    }
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }
    }
    public function register1() {
        return view('auth.register_1');
    }
    public function appointment(Request $request) {
        $data = new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';
        if(Auth::id()){
        $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message','Appointment Request Successful . We will contact with you soon');
    }
    public function myappointment(){
        if (Auth::id()) {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id', $userid)->get();
        return view('user.my_appointment',compact('appoint'));
        }
        else {
            return redirect()->back();
        }
    }
    public function mypet() {
        if (Auth::id()){
            $doctor = doctor::all();
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();
            return view('user.my_pet',compact('appoint','doctor'));
        }
        else{
            return redirect()->back();
        }

    }
    public function about(){
            $doctor = doctor::all();
            return view('user.about', compact('doctor'));
        }

    public function doctors(){
                $doctor = doctor::all();
                return view('user.doctors',compact('doctor'));
    }
    public function blog(){
        return view('user.blog');

    }
    public function cancel_appoint($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
