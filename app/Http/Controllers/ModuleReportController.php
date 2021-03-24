<?php

namespace App\Http\Controllers;

use App\ModuleReport;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ModuleReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = ModuleReport::all();

        return Inertia::render('Reports/Index', [
            'reports' => $reports,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Reports/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([]);
        ModuleReport::create([]);

        ## Success Msg ##
        return redirect()->route('reports.index')->with('successMsg','Report successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ModuleReport $report)
    {
        return Inertia::render('Reports/Edit', [
            'report' => $report,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModuleReport $report)
    {
        $request->validate([]);
        $report->update([]);

        ## success msg ##
        return redirect()->route('reports.index')->with('successMsg', 'Report successfully modified');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModuleReport $report)
    {
        $report->delete();

        ## success msg ##
        return redirect()->route('reports.index')->with('successMsg', 'Report successfully deleted.');
   
    }
}
