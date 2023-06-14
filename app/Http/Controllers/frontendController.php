<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\artistservices;
use App\Models\contact;

class frontendController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function contactus()
    {
        return view('contact');
    }

    public function contactfill(Request $request)
    {
        $data = $request->except(['_token']);

        $user = contact::create($data);

        return back()->with('successful_message', 'Contact form submitted successfully.');
    }

    public function artistlist($type = NULL)
    {
        $data = [];

        if($type){
            $key = artistservices::where('type', $type)
                    ->distinct('artist_id')->pluck('artist_id');
        }else{
            $key = artistservices::distinct('artist_id')->pluck('artist_id');
        }

        foreach ($key as $value) {
            $data = User::where('id', $value)->first();
        }

        // echo "<pre>";print_r($data);die;
        
        return view('artist',compact('data'));
    }

    public function artistdetail($id)
    {
        $data = User::where('id', $id)->first();

        return view('artistdetail', compact('data'));
    }

    public function services()
    {
        $type = 'Men';
        $data = artistservices::where('type', $type)->with('servicecat')->with('serviceartist')->with('serviceloc')->get();

        echo "<pre>";print_r($data);die;

        return view('services');
    }
}
