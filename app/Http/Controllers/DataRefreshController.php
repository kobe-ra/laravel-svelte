<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataRefreshController extends Controller
{
    public function index()
    {
        $randomNumber = rand(0, 1000);
        $randomNumbers = [
            [
                rand(0, 1000),
                rand(0, 1000),
                rand(0, 1000),
            ],
            rand(0, 1000),
            rand(0, 1000),
            rand(0, 1000),
        ];
        return inertia('data-refresh', compact('randomNumber', 'randomNumbers'));
    }

    public function store(Request $request)
    {
        return to_route('data_refresh');
    }
}
