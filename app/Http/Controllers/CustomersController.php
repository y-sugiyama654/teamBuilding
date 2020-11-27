<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customer = ['id' => '1', 'name' => 'Yuta'];

        return $customer;
    }
}
