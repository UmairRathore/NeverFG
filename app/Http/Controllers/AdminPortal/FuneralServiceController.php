<?php

namespace App\Http\Controllers\AdminPortal;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\FuneralService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FuneralServiceController extends Controller
{
    //

    public function index()
    {
        $features = Feature::select('features.*','services.service as service_name','services.id as service_id')->join('services','services.id','features.service_id')
            ->whereNotNull('title_id')
        ->get();
        $services = Service::all();

        return view('backend.feature.list-feature',compact('features','services'));


    }

    public function create()
    {
        $services = Service::all();
        $titles = Feature::select('features.title','features.id')->get();
        return view('backend.feature.create-feature',compact('services','titles'));
    }
    public function store(Request $request)
    {
//        dd($request);
        $validator = Validator::make($request->all(), [
            'topic' => 'required',
            'question' => 'require',
            'answer' => 'require',
            'topic_id' => 'require',
        ]);

        if($request->service && !$request->title)
        {
            $feature = new Service();
            $feature->service = $request->service;
            $check = $feature->save();
            $checkMessage = 2;
        }
        elseif($request->title && !$request->feature)
        {
            $feature = new Feature();
            $feature->title = $request->title;
            $check = $feature->save();
            $checkMessage = 1;
        }
        else
        {
            $titlename = Feature::select('features.title as name')->where('id',$request->title_id)->first();
            $title_name = $titlename->name;
            $feature = new Feature();
            $feature->title = $title_name;
            $feature->feature =$request->feature;
            $feature->permission =$request->answer;
            $feature->title_id =$request->title_id;
            $feature->service_id =$request->service_id;
            $check = $feature->save();
            $checkMessage = 0;
        }

        if ($check) {
            if($checkMessage == 2)
            {
                $msg = "Service added successfully.";
                Session::flash('service', $msg);

            }elseif($checkMessage==1)
            {
                $msg = "Title added successfully.";
                Session::flash('title', $msg);

            }
            else{
                $msg = "Feature added successfully.";
                Session::flash('feature', $msg);

            }
        } else {
            if($checkMessage == 2)
            {
                $msg = "Service not added successfully.";
                Session::flash('service_failed', $msg);
            }elseif($checkMessage==1)
            {
                $msg = "Title not added successfully.";
                Session::flash('title_failed', $msg);
            }
            else{
                $msg = "Feature not added successfully.";
                Session::flash('feature_failed', $msg);
            }

        }
        return redirect()->back();
    }
    public function destroy($id)
    {
        $feature = Feature::find($id);
        $check = $feature->delete();
    }

    public function changepermission(Request $request, $id)
    {
        $feature = Feature::find($id);
        dd($feature);

        if (!$feature) {
            return response()->json(['error' => 'Feature not found'], 404);
        }

        $feature->permission = $request->input('permission');
        $feature->save();

        return response()->json(['message' => 'Feature status updated successfully']);
    }
}
