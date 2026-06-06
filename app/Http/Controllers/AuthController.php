<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    // login page
    public function login()
    {
        return view('admin.auth.login');
    }

    public function edit()
    {
        $admin = Auth::guard('admin')->user();

        return view('admin.profile.edit', compact('admin'));
    }

    public function update(Request $request)
        {

        try {

            $admin = Auth::guard('admin')->user();

            $data = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:admins,email,' . $admin->id,
                'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'password' => 'nullable|min:6|confirmed',
            ]);

            $admin->name = $data['name'];
            $admin->email = $data['email'];

            $imageName = $admin->profile_image;

            if ($request->hasFile('profile_image')) {

                $imageName = time().'.'.$request->profile_image->extension();

                $request->profile_image->move(public_path('uploads/profile_image'), $imageName);

                $admin->profile_image = $imageName;

            }
            
           
            if (!empty($request->password)) {
                $admin->password = Hash::make($request->password);
            }

            $admin->save();

            return back()->with('success', 'Profile updated successfully.');
        }
        catch (\Exception $e) {

              return back()->with('error', $e->getMessage());
        }
    }


    // login submit
    public function loginSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect()->route('admin.dashboard')
                ->with('success', 'Login Success');
        }
        

        return back()->with('error', 'Invalid Credentials');
    }

    // dashboard
    public function dashboard()
      {
        $totalBookings = Booking::count();

        $pendingBookings = Booking::where('status', 'pending')->count();

        $confirmedBookings = Booking::where('status', 'confirmed')->count();

        $cancelledBookings = Booking::where('status', 'cancelled')->count();

       // $totalUsers = User::count();

        $totalContacts = class_exists(Contact::class)
            ? Contact::count()
            : 0;

        $totalPackages = class_exists(TourPackage::class)
            ? TourPackage::count()
            : 0;

        $recentBookings = Booking::latest()->take(10)->get();

        return view('admin.dashboard', compact(
            'totalBookings',
            'pendingBookings',
            'confirmedBookings',
            'cancelledBookings',
            'totalContacts',
            'totalPackages',
            'recentBookings'
        ));
    
    }

    // logout
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}
