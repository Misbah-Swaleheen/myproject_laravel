<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Data;


class Control extends Controller
{
    public function savee(Request $r)
    {
        $data = new Data;
        $data->name = $r->name;
        $data->city = $r->city;
        $data->save();


    }

     function sel_data()
    {
        # code...
        $data = Data::paginate(5);

        return view('list', ['member' => $data]);
    }

     function del($id)
    {
        # code...
        $data = Data::find($id);
        $data->delete();
        return redirect('list');

    }

    public function up_sel($id)
    {
        # code...
        $data = Data::find($id);
        return view('updata', ['list'=>$data]);

    }

     function up_data(Request $r)
    {
        # code...
        $data = Data::find($r->id);
        var_dump($r->id);
        $data->name = $r->name;
        $data->city = $r->city;
        $data->save();



    }



}
