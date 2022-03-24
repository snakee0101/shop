<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.reports.index', [
            'reports' => Report::all()
        ]);
    }

    public function store()
    {
        Report::create( request(['cause', 'comment', 'object_id', 'object_type']) + [
            'user_id' => auth()->id()
        ]);
    }

    public function destroy(Report $report)
    {
        $report->delete();

        return back();
    }
}
