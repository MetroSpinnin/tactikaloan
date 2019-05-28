<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanApplication;

class LoansApplicationController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loanApps = LoanApplication::orderBy('id','desc')->whereUserId(auth()->user()->id)->paginate(5);
        return view('loanapplication.index')->with('loanApps', $loanApps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('loanapplication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'employmentstatus' => 'required',
            'occupation' => 'required',
            'BusinessName' => 'required',
            'BusinessAddress' => 'required',
            'phoneNumber' => 'required',
            'loanAmount' => 'required'
        ]);

        //create Loans
        $loan  = new LoanApplication;
        $loan->employmentstatus = $request->input('employmentstatus');
        $loan->occupation = $request->input('occupation');
        $loan->BusinessName = $request->input('BusinessName');
        $loan->BusinessAddress = $request->input('BusinessAddress');
        $loan->phoneNumber = $request->input('phoneNumber');
        $loan->loanAmount = $request->input('loanAmount');
        $loan->user_id = auth()->user()->id;
        $loan->save();

        //return redirects after saving to Database

        return redirect('/loanapplication')->with('success', 'Loan request successful');
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
        $loanApp = LoanApplication::find($id);
        return view('LoanApplication.show')->with('loanApp',$loanApp);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loanApp = LoanApplication::find($id);

        //check for correct user
        if(auth()->user()->id !== $loanApp->user_id){
            return redirect('loanapplication');
        }
        return view('LoanApplication.edit')->with('loanApp', $loanApp);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $this->validate($request, [
            'employmentstatus' => 'required',
            'occupation' => 'required',
            'BusinessName' => 'required',
            'BusinessAddress' => 'required',
            'phoneNumber' => 'required',
            'loanAmount' => 'required'
        ]);

        //create Loans
        $loan  = LoanApplication::find($id);
        $loan->employmentstatus = $request->input('employmentstatus');
        $loan->occupation = $request->input('occupation');
        $loan->BusinessName = $request->input('BusinessName');
        $loan->BusinessAddress = $request->input('BusinessAddress');
        $loan->phoneNumber = $request->input('phoneNumber');
        $loan->loanAmount = $request->input('loanAmount');
        $loan->save();

        //return redirects after saving to Database

        return redirect('/loanapplication')->with('success', 'Loan request update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loanApp = LoanApplication::find($id);

        //check for correct user
        if(auth()->user()->id !== $loanApp->user_id){
            return redirect('loanapplication');
        }
        $loanApp->delete();
        return redirect('/loanapplication');
    }
}
