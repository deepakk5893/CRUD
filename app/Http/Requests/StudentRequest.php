<?php

namespace App\Http\Requests;

//use Illuminate\Http\Request;

use App\Http\Requests\Request;

class StudentRequest extends Request
{   

public function rule(){


    return[
        'id'=>'',
        'name'=>'',
        'age'=>'',
        'address'=>''
    ];
}

}