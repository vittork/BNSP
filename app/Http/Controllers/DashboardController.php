<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\User;
use App\Product;

class DashboardController extends Controller
{
    public function postLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        
        $user = User::where('email', $email)->first();
        if(!$user){
            session('error', 'Email tidak terdaftar');
            return back()->with('error', 'Email tidak terdaftar');
        }

        if(!\Hash::check($password, $user->password)){
            session('error', 'Password salah');
            return back()->with('error', 'Password salah');
        }

        $request->session()->put('user', $user);
        return redirect()->route('dashboard');
    }

    public function index(Request $request){
        $products = Product::all();
        $bookings = Booking::all();

        return view('dashboard.index', [
            'products' => $products,
            'bookings' => $bookings,
        ]);
    }
    public function bookingPost(Request $request){

        if(strlen($request->identitas) != 16){
            return back()->with('error', 'Jumlah No identitas harus 16');
        }

        $user = $request->session()->get('user');

        $booking = new Booking;
        $booking->user_id       = $user->id;
        $booking->product_id    = $request->product;
        $booking->name          = $request->name;
        $booking->gender        = $request->gender;
        $booking->identitas     = $request->identitas;
        $booking->date          = $request->date;
        $booking->duration      = $request->duration;
        $booking->total         = $request->total;
        $booking->breakfast     = $request->breakfast ? 1 : 0;
        $booking->save();

        return redirect()->route('dashboard');
    }
    public function bookingPut(Request $request, $bookingId){
        $user = $request->session()->get('user');
        
        $booking = Booking::find($bookingId);
        $booking->user_id       = $user->id;
        $booking->product_id    = $request->product;
        $booking->name          = $request->name;
        $booking->gender        = $request->gender;
        $booking->identitas     = $request->identitas;
        $booking->date          = $request->date;
        $booking->duration      = $request->duration;
        $booking->total         = $request->total;
        $booking->breakfast     = $request->breakfast ? 1 : 0;
        $booking->save();

        return redirect()->route('dashboard');
    }
    public function bookingDelete(Request $request, $bookingId){
        $booking = Booking::find($bookingId);
        $booking->delete();

        return redirect()->route('dashboard');
    }
}
