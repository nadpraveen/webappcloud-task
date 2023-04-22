<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Str;

class StaffController extends Controller
{
    public function index(){
        $allStaff = Staff::get();
        return response()->json($allStaff);
    }

    public function store(Request $request){

        $data['id'] = Str::uuid();
        $data['name'] = $request['name'];
        $data['start_time'] = $request['startTime'];
        $data['end_time'] = $request['endTime'];

        $staff = Staff::create($data);
        return response()->json($staff);
    }
}
