<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\artistlocation;
use DB;

class profileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Auth::user();
        // if ($data->type == 'artist') {
            $data['address'] = artistlocation::where('artist_id', $data->id)->get();
        // }

        return view('dashboard.profile.index', compact('data'));
    }

    public function username(Request $request)
    {
        try{
            $data = $request->except('_token');

            //Validated
            $validateUser = Validator::make($request->all(),
            [
                'password' => 'required',
                'name' => 'required|unique:users,name',
            ],
            [
                'password.required'=> 'Old Password is Required', // custom message
                'name.required'=> 'Name is Required', // custom message
                'name.unique'=> 'Name is already taken', // custom message
            ]);

            //Check the validation
            if ($validateUser->fails()){
                // return back()->with('error_message', $validateUser->errors());
                return response()->json(['error' => $validateUser->errors()], 404);
            }

            if (Hash::check($data['password'], Auth::user()->password)) {

                $data = User::where('id', Auth()->user()->id)->update([
                    'name' => $request->name,
                ]);

                $user = User::where('id', Auth()->user()->id)->first();

                return back()->with('successful_message', 'Username updated successfully');
            }
            else {
                return back()->with('error_message', 'Password is incorrect.');
            }
        } catch (\Throwable $th) {
            return back()->with('error_message', $th->getMessage());
        }
    }

    public function password(Request $request)
    {
        try{
            $data = $request->except('_token');

            //Validated
            $validateUser = Validator::make($request->all(),
            [
                'old_password' => 'required',
                'password' => 'required|string|min:6|confirmed', //password_confirmation
            ],
            [
                'old_password.required'=> 'Old Password is Required', // custom message      
                'password.required'=> 'Password is Required', // custom message
                'password.min:6'=> 'Minimum length should be 6 character', // custom message
                'password.confirmed'=> 'Confirm password does not match', // custom message
            ]);

            //Check the validation
            if ($validateUser->fails()){
                return back()->with('error_message', $validateUser->errors());
            }

            if (Hash::check($data['old_password'], Auth::user()->password)) {

                $data = User::where('id', Auth()->user()->id)->update([
                    'name' => $request->name,
                ]);

                return back()->with('successful_message', 'Password updated successfully.');

            } else {
                return back()->with('error_message', 'Old Password is incorrect.');
            }
        } catch (\Throwable $th) {
            return back()->with('error_message', $th->getMessage());
        }
    }

    public function about(Request $request)
    {
        try{
            //Validated
            $validateUser = Validator::make($request->all(),
            [
                'about' => 'required',
            ]);

            if($validateUser->fails()){
                return back()->with('error_message', 'Validation Error');
            }

            $data = User::where('id', Auth()->user()->id)->update([
                        'about' => $request->about,
                    ]);

            return back()->with('successful_message', 'About Us Added Successfully');

        } catch (\Throwable $th) {
            return back()->with('error_message', $th->getMessage());
        }
    }

    public function profilepic(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make($request->all(), 
            [
                'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:4096',
            ]);

            if($validateUser->fails()){
                return back()->with('error_message', 'Validation Error');
            }

            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->extension();
       
            $destinationPath = public_path('dp');
            $image->move($destinationPath, $input['imagename']);

            $data = User::where('id', Auth()->user()->id)->update([
                        'image' => $input['imagename']
                    ]);

            return back()->with('successful_message', 'Profile Picture Added Successfully');

        } catch (\Throwable $th) {
            return back()->with('error_message', $th->getMessage());
        }
    }

    public function address($id = NULL)
    {
        if($id != Null)
        {
            $locationid = decrypt($id);

            $data['location'] = artistlocation::where('id', $locationid)->first();
        }
        
        $data['country'] = DB::table('countries')->get();

        // echo "<pre>";print_r($data);die;

        return view('dashboard.profile.add_address',compact('data'));
    }

    public function getState(Request $request)
    {
        $data['states'] = DB::table('states')
                    ->where("country_id",$request->country_id)
                    ->get();

        return response()->json($data);
    }

    public function getCity(Request $request)
    {
        $data['cities'] = DB::table('cities')
                    ->where("state_id",$request->state_id)
                    ->get();

        return response()->json($data);
    }

    public function addAddress(Request $request)
    {
        $data = $request->except('_token');
        $data['artist_id'] = Auth()->user()->id;

        $user = artistlocation::create($data);

        // echo "<pre>";print_r($data);die;
        return back()->with('successful_message', 'Address added successfully');
    }

    public function updateAddress(Request $request, $id)
    {
        $data = $request->except('_token');
        $data1 = artistlocation::where('id', $id)
                ->update([
                    'longitude' => $request->longitude,
                    'latitude' => $request->latitude,
                    'locality' => $request->locality,
                    'address' => $request->address,
                    'city_id' => $request->city_id,
                    'country_id' => $request->country_id,
                    'state_id' => $request->state_id,
                    'postcode' => $request->postcode,
                    'artist_id' => Auth()->user()->id,
                ]);

        return back()->with('successfull_message', 'Address Updated Successfully');
    }

    public function destroyAddress($id)
    {
        $address_id = decrypt($id);

        $data = artistlocation::findOrFail($address_id);
        $data->delete();

        return redirect()->route('profilepage')->with('successful_message', 'Address Deleted Successfully.');
    }
}
