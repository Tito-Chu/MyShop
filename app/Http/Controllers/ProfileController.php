<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use DB;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // this function will check if the user is already logged in
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $id = Auth::user()->id;
        $profile = DB::table('profiles')
            ->where('account_id','$id')
            ->get();
        if ($profile->count() > 0)
        {
            # code...
            return view('profile',compact('profile'));
        }
        else
        {
            return view('/unknown');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //dd($request->all());
        $account_id = Auth::user()->id;
        $request->validate([
            'gender' => ['required','max:5'],
            'birthdate' => ['required','date'],
            'address' => ['required'],
            'description' => ['required','min:20'],
            'contactnumber' => ['required','max:11','integer'],
        ]);

        $profile = new Profile([
            'account_id'=>$account_id,
            'gender' => $request->get('gender'),
            'birthdate' => $request->get('birthdate'),
            'description' => $request->get('description'),
            'contactnumber' => $request->get('contactnumber'),
        ]);
        $profile->save();
        return redirect('/home');

       

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
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
