<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Success;

class SuccessController extends Controller
{
    public function index(Request $request)
    {
        $studentsSuccess = Success::all();
        $request->validate([
            'searchFromDate'=>'date|before:tomorrow'
        ]);
        if($request->filled('searchFromDate')){
            $searchFromDate = $request->input('searchFromDate');
            $studentsSuccess = Success::whereDate('assessment_date','>=', $searchFromDate)->get();
        }

        return view('success.index', compact('studentsSuccess'));
    }
}
