<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store()
    {
        Report::create( request(['cause', 'comment', 'object_id', 'object_type']) + [
            'user_id' => auth()->id()
        ]);
    }

    public function show(Report $report)
    {
        //
    }

    public function edit(Report $report)
    {
        //
    }

    public function update(Request $request, Report $report)
    {
        //
    }

    public function destroy(Report $report)
    {
        $report->delete();

        return back();
    }
}
