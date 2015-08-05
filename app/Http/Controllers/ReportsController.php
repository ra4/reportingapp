<?php

namespace App\Http\Controllers;


use App\Report;
use App\Http\Requests\CreateReportRequest;
use App\Http\Controllers\Controller;

use Auth;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $reports=Report::with('user')->paginate( config('app.pagination_limit') );
        return view('frontend.index',compact('reports'));
        
    }

    /**
     * Show the form for creating a new .
     *
     * @return Response
     */
    public function create()
    {
        return view ('frontend.create');
    }

    /**
     * Store a newly created report in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateReportRequest $request)
    {
        $input=$request->all();
        $input['user_id']=Auth::user()->id;
        Report::create($input);
        
        return redirect('/users');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
