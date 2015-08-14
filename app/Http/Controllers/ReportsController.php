<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateReportRequest;
use App\Http\Requests\EditReportRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Route;
use App\Report;
use App\WorkType;
use App\Attendence;

class ReportsController extends Controller {

    public function __construct() {

        $this->middleware('auth');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        
        $users_list = User::all();
        $reports = Report::latest()->with(['user','attendence.work_type'])->paginate(config('app.pagination_limit'));
        return view('reports.index', compact(['users_list', 'reports']));
    }

    /**
     * Show the form for creating a new .
     *
     * @return Response
     */
    public function create() {
        return view('reports.create');
    }

    /**
     * Store a newly created report in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateReportRequest $request) {
        $input = $request->all();
        $attendence['user_id'] = $input['user_id'] = Auth::user()->id;
        $work_type = $input['work_type_id'];
        unset($input['work_type_id']);
        $report_id = Report::create($input);
        if ($report_id) {
            $attendence['report_id'] = $report_id->id;
            $attendence['work_type_id'] = $work_type;
            Attendence::create($attendence);
//            echo $report_id->id; exit;
        }
         \Session::flash('message', 'Your Report has been submitted successfully.!'); 
         \Session::flash('message-type', 'success'); 
        return redirect('/reports/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $user = Report::with('user')
                ->where('user_id', '=', $id)
//                ->where('user_id', '=', $id)
                ->get();

        return view('reports.show', compact(['user']));
    }

    /**
     * Display the specified filter records.
     *
     * 
     * @return Response
     */
    public function filter(Request $request) {
        extract($request->all());
        $user = Report::latest()->with(['user','attendence.work_type']);
        if ($user_id) {
            $user = $user->where('user_id', '=', $user_id);
        }
        if ($filter_from && $filter_to) {
            $user = $user->where('worked_on', '>=', $filter_from)
                    ->where('worked_on', '<=', $filter_to);
        }
        $user = $user->get();
        return view('reports.show', compact(['user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id, EditUserRequest $request) {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        Report::destroy($id);
        return redirect('/reports');
    }

}
