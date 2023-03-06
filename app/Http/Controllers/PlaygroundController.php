<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playground;

class PlaygroundController extends Controller
{
    //
    public function index(){
        $data = new Playground;
        $data->preferences = [['pending', '2023-03-05 10:30:00', 'authid456'], ['shipped', '2023-03-06 14:20:00', 'authid789']];
        $data->save();

        //save array to DB


        return $data;
    }

    public function fetch(){
        $data=Playground::all();
        // return gettype($data['preferences']);
        // return $data[0]['id'];
        // return $data[0]['preferences'];
        // return $data;
        dd(gettype($data[0]['preferences']), $data[0]['id'], $data[0]['preferences']);
    }
}
