<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class artistController extends Controller
{
    public function artist()
    {
        $data = User::where('type', '2')->get();

        // echo "<pre>";print_r($data);die;
        return view('dashboard.admin.artist', compact('data'));
    }

    public function artistdata($id)
    {
        $userid = decrypt($id);
        $data = User::find($userid);

        return response()->json($data);
    }

    public function editartist($id = NULL)
    {
        if($id != NULL){
            $userid = decrypt($id);

            $data = User::where('id', $userid)->first();

            return view('dashboard.admin.edit_artist',compact('data'));
        }else{
            return view('dashboard.admin.add_artist');
        }  
    }

    public function basicdetail(Request $request, $id)
    {
        $userid = decrypt($id);
        return back()->with('successful_message', 'Details Updated Successfully');
    }

    public function userdp($id)
    {
        $userid = decrypt($id);
        return back()->with('successful_message', 'Profile Pic Updated Successfully');
    }

    public function userpwd($id)
    {
        $userid = decrypt($id);
        return back()->with('successful_message', 'Password Updated Successfully');
    }

    public function verifyuser($id)
    {
        $userid = decrypt($id);
        return back()->with('successful_message', 'Password Updated Successfully');
    }
}
