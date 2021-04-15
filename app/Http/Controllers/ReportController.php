<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Project;
use App\Models\ProjectDetail;
use App\Models\ModuleReport;
use App\Models\ModuleDataCard;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\ModuleReporting\BU2BUIController;
use App\Http\Controllers\ModuleReporting\EN2BUIController;
use App\Http\Controllers\ModuleReporting\ES2BUIController;
use App\Http\Controllers\ModuleReporting\TR2BUIController;

class ReportController extends Controller {
    /**
     * Display a listing of all reports.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $reports = DB::table('reports')
                ->join('projects', 'project.project_key', '=', 'reports.project_key')
                ->select()
                ->get();

        return Inertia::render('Reports/Index', [
            'reports' => $reports,
        ]);
    }

    /**
     * Show the form for generating a report
     * @param  App\Models\Report $Report
     * @return \Illuminate\Http\Response
     */
    public function generate(Report $report) {
        return Inertia::render('Reports/Generate');   
    }

    /**
     * Store a newly generated report in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  App\Models\Project $Project
     * @param  App\Models\ProjectDetail $ProjectDetail
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project) {
        $uuid = Uuid::generate();

        $projectData = Project::all();
        $projectDetails = ProjectDetail::all();
        
        $useBU2BI = ($request->BU2BI==true) ? 
                    // Call BU2BI
                    : false ;  
        $useES2BI = ($request->ES2BI==true) ? true 
                    // Call EN2BI
                    : false ;
        $useEN2BI = ($request->EN2BI==true) ? true 
                    // Call EN2BI            
                    : false ;
        $useTR2BI = ($request->TR2BI==true) ? true 
                    // Call TR2BI
                    : false ;

        $compiledJsonData = String;

        Report::create([
            'report_key' => $uuid,
            'data' => $compiledJsonData
        ]);

        ## Success Msg ##
        return redirect()->route('reports.index')->with('successMsg','Report successfully generated.');
    }

    /**
     * Export the specified report to PDF format.
     * @param App\Models\Report $Report
     * @return \Illuminate\Http\Response
     */
    public function exportToPDF(Report $report) {
        $data = Report::all();

        view()->share('report',$data);
        $pdf = PDF::loadView('pdf_view', $data);

        return $pdf->download($data->project_title.'.pdf');
    }

}
