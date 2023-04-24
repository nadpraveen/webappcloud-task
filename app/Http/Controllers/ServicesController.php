<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Services;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    public function index()
    {
        $allServices =  Services::get();
        return response()->json($allServices);
    }

    public function store(Request $request)
    {
        $data['id'] = Str::uuid();
        $data['name'] = $request['name'];
        $data['duration_in_mins'] = $request['duration'];

        $service = Services::create($data);
        return response()->json($service);
    }


    public function show($id)
    {
        $service = Services::find($id);
        $staffServices = [];
        foreach ($service->staff as $staff) {
            array_push($staffServices, $staff->pivot->created_at);
        }
        return response()->json($service);
    }
}
