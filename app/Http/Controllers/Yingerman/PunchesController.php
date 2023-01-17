<?php

namespace App\Http\Controllers\Yingerman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PunchesController extends Controller
{
    //
    public static function index(){
        $punches = [
            'Monday' => [
                'date' => 'Lesson 81',
                'morning_in' => 'Lesson 82',
                'morning_out' => 'Lesson 83',
                'afternoon_in' => 'Lesson8 4',
                'afternoon_out' => 'Lesson 84',
            ],
            'Monday' => [
                'date' => 'Lesson 1',
                'morning_in' => 'Lesson 92',
                'morning_out' => 'Lesson9 3',
                'afternoon_in' => 'Lesson 94',
                'afternoon_out' => 'Lesson9 4',
            ],
            'Monday' => [
                'date' => 'Lesson 1',
                'morning_in' => 'Lesson 52',
                'morning_out' => 'Lesson5 3',
                'afternoon_in' => 'Lesson5 4',
                'afternoon_out' => 'Lesson 54',
            ]
            
        ];

        return view('yingerman/index', ['punches' => $punches]);
    } 
}
