<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return '测试方法index';
    }
    public function namess(){
        return route('aaa');
    }

}
