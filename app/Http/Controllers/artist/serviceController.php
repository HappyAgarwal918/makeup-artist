<?php

namespace App\Http\Controllers\artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\artistlocation;
use App\Models\artistservices;
use App\Models\packages;
use DB;

class serviceController extends Controller
{
    public function artistservice()
    {
        $data = artistservices::get();

        // echo "<pre>";print_r($data);die;

        return view('dashboard.artist.add_services', compact('data'));
    }

    public function newservices($id = NULL)
    {
        if($id != NULL)
        {
            $serviceid = decrypt($id);

            $data['artist'] = artistservices::where('id', $serviceid)
                    ->with('servicecat')
                    ->with('serviceartist')
                    ->with('serviceloc')
                    ->first();
        }

        $data['categories'] = categories::get();
        $data['location'] = artistlocation::where('artist_id', Auth()->user()->id)->get();

        return view('dashboard.artist.new_services', compact('data'));
    }

    public function addservices(Request $request)
    {
        $data = $request->except('_token');
        $data['artist_id'] = Auth()->user()->id;

        $user = artistservices::create($data);

        return back()->with('successful_message', 'Service added successfully');
    }

    public function editservice(Request $request, $id)
    {
        $serviceid = decrypt($id);
        $data = $request->except('_token');

        $user = artistservices::where('id', $serviceid)->update([
                    'name' =>  $request->name,
                    'type' => $request->type,
                    'category_id' => $request->category_id,
                    'price' => $request->price,
                    'location_id' => $request->location_id,
                    'artist_id' => Auth()->user()->id
        ]);

        return back()->with("successful_message", 'Service Updated Successfully.');
    }

    public function servcicedetails($id)
    {
        $serviceid = decrypt($id);
        $data = artistservices::find($serviceid);

        $data = artistservices::where('id', $serviceid)
                ->with('servicecat')
                ->with('serviceartist')
                ->with('serviceloc')
                ->first();

        return response()->json($data);
    }

    public function destroyservice($id)
    {
        $serviceid = decrypt($id);

        $data = artistservices::findOrFail($serviceid);
        $data->delete();

        return back()->with("successful_message", 'Service Deleted Successfully.');
    }

    public function packages()
    {
        $data = packages::where('artist_id', Auth()->user()->id)->get();

        foreach ($data as $key => $value)
        {
            $serviceid = explode(",", $value->services);
            $data[$key]['services'] = DB::table('artist_services')
                                    ->whereIn('id', $serviceid)
                                    ->get();
        }

        // echo "<pre>";print_r($data);die;

        return view('dashboard.artist.packages', compact('data'));
    }

    public function servicepackages($id = NULL)
    {
        $data = [];

        if($id != NULL)
        {
            $packageid = decrypt($id);

            $data = packages::where('id', $packageid)->first();


            $serviceid = explode("," , $data->services); 
             // echo "<pre>";print_r($serviceid);die; 

            $data['services'] = DB::table('artist_services')
                                ->whereIn('id', $serviceid)
                                ->get();

        }

            // echo "<pre>";print_r($data);die;    
        $services = artistservices::get();

        return view('dashboard.artist.add_packages', compact('data', 'services'));
    }

    public function addpackages(Request $request)
    {
        $data = $request->except('_token');
        $data['artist_id'] = Auth()->user()->id;
        $data['services'] = implode(', ', $request->services);

        // echo "<pre>";print_r($data);die;
        $user = packages::create($data);

        // dd($user->data);

        return back()->with("successful_message", "Package added successfully");

    }

    public function editpackages(Request $request, $id)
    {
        $packageid = decrypt($id);

        $data = $request->except('_token');
        $data['services'] = implode(', ', $request->services);

        // echo "<pre>"; print_r($packageid);die;


        $user = packages::where('id', $packageid)->update([
                    'services' => $data['services'],
                    'offer' => $request->offer,
                    'offer_type' => $request->offer_type,
                    'artist_id' => Auth()->user()->id
                ]);
        // echo "<pre>"; print_r($data);die;


        return back()->with("successful_message", "Packages updated successfully");

    }

    public function packagedetail($id)
    {
        $packageid = decrypt($id);

        $data = packages::where('id', $packageid)
                       ->first();
        $total = 0;
        $allservice = [];

        $serviceid = explode(',', $data->services);
        $data['services'] = DB::table('artist_services')
                             ->whereIn('id', $serviceid)
                             ->get(); 

        foreach($data['services'] as $services){
            $total += $services->price;   
        }

        // echo "<pre>";print_r($data);die;
 
        if($data->offer_type == 'value'){
            $data['total_price'] = $total - $data->offer;
        }elseif($data->offer_type == 'percent'){
            $data['total_price'] = $total - ($data->offer/100 * $total);
        }

        return response()->json($data); 
    }

    public function destroypackages($id)
    {
        $packageid = decrypt($id);

        $data = packages::findOrFail($packageid);
        $data->delete();

        return back()->with("successful_message", "Package Deleted Successfully");
    }
}
