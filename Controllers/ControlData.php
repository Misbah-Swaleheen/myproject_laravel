<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelData;

class ControlData extends Controller
{
    //
    public function savee(Request $r)
    {
        $data = new ModelData;
        $data->name = $r->name;
        $data->email = $r->email;
        $data->phone = $r->phone;
        $data->comment = $r->message;

        $data->save();


    }

    public function sel_data()
    {
        # code...
        $data = ModelData::paginate(5);

        return view('list', ['member' => $data]);
    }
}
