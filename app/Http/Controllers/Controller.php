<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()  //show all products for sale
    {
        $productconnection = new Product;
        $products_1 = $productconnection->setConnection('mysql');
        $products_1 = $productconnection->where('available','=',1)
                ->select('id','name','description','type','price')
                ->get();
        $products_2 = $productconnection->setConnection('mysql_2');
        $products_2 = $productconnection->where('available','=',1)
                ->select('id','name','description','type','price')
                ->get();

        return response()->json([$products_1,$products_2]);
        // return 'hiiiiiiiiiiii controller';
    }

}
