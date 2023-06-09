<?php

namespace App\Http\Controllers;

use App\Console\Commands\EmailSent;
use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use App\Mail\OrderShiping;
use Illuminate\Http\Request;
use App\Notifications\Reminder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Console\Commands\NotifyUsers;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function AdminDashboard(){
        $id = Auth::user()->id;
        $users = User::findOrFail($id);
        $date = Carbon::now()->format('Y-m-d');
        // Mail::send(new OrderShiping());
        return view('admin.index',compact('users','date'));
    } // End Mehtod


    public function AdminLogin(){
        return view('admin.admin_login');
    } // End Mehtod


public function AdminDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    } // End Mehtod


    public function AdminProfile(){

        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));

    } // End Mehtod

    public function AdminProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->expire_date = Carbon::today()->addDays(30);
        $data->reminder = Carbon::today()->addDays(29);
        $data->address = $request->address;


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // End Mehtod


    public function AdminChangePassword(){
        return view('admin.admin_change_password');
    } // End Mehtod


    public function AdminUpdatePassword(Request $request){
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with("error", "Old Password Doesn't Match!!");
        }

        // Update The new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);
        return back()->with("status", " Password Changed Successfully");

    } // End Mehtod


     ///////////// Admin All Method //////////////


    public function AllAdmin(){
        $alladminuser = User::where('role','user')->latest()->get();

        return view('backend.admin.all_admin',compact('alladminuser',));
    }// End Mehtod


    public function AddAdmin(){
        return view('backend.admin.add_admin');
    }// End Mehtod



    public function AdminUserStore(Request $request){

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // $user->expire_date = Carbon::today()->addDays(29);
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->status = 'active';
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

         $notification = array(
            'message' => 'New Admin User Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);

    }// End Mehtod




    public function EditAdminRole($id){

        $user = User::findOrFail($id);
        return view('backend.admin.edit_admin',compact('user'));
    }// End Mehtod


    public function AdminUserUpdate(Request $request,$id){


        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->expire_date = Carbon::today()->addDays(29);
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->status = 'active';
        $user->save();



         $notification = array(
            'message' => 'New Admin User Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);

    }// End Mehtod


    public function DeleteAdminRole($id){

        $user = User::findOrFail($id);
        if (!is_null($user)) {
            $user->delete();
        }

         $notification = array(
            'message' => 'Admin User Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Mehtod
}