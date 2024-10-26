<?php

namespace App\Http\Controllers\greeting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class greeting extends Controller
{
    public function greeting(){
        $nama= "ikhlasul amal mawardi";
        $background="computer sains";
        $prodi="S1";
        $data =['nama'=>$nama,'background'=>$background,'prodi'=>$prodi];
        return view('greetinng.greeting',$data) ;
    }
}
