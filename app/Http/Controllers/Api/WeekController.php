<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeekController extends Controller
{

   public function encypt()
    {
        $char=$_GET['str'];
        $length=strlen($char);

        $pass="";
        for ($i=0;$i<$length;$i++)
        {
            echo $char[$i].'>>>'.ord($char[$i]);echo'</br>';
            $ord=ord($char[$i])+4;
            $chr=chr($ord);
            echo $char[$i].'>>>'.$ord.'>>>'.$chr;echo'</br>';
            $pass .=$chr;
        }
        echo '加密:'.$pass;  echo '</br>';
        echo '</br>';


    }
    public function decypt(){
        $char=$_GET['str'];
        $length=strlen($char);

        $str="";
        for ($i=0;$i<$length;$i++)
        {

            $ord=ord($char[$i])-4;
            $chr=chr($ord);
            echo $ord.'>>>'.$chr;echo'</br>';
            $str .=$chr;
        }

        echo '解密：'.$str;
    }
}
