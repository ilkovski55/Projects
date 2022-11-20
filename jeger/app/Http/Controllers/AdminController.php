<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receipts = DB::table('receipts')
        ->leftJoin('files', 'receipts.file_id', '=', 'files.id' , 'file_path', 'email')
        // ->where('declined',null)
        // ->where('award_id',null)//it was null
        ->get();
        // $receipts = Receipt::where('declined',null)
        // ->get();
    //    $receipts = Receipt::all();
        return view('dashboard',compact('receipts'));
    }


    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function getApproved()
   {
       $receipts = DB::table('receipts')
       ->leftJoin('files', 'receipts.file_id', '=', 'files.id' , 'file_path')
       ->where('declined',null)
       ->where('award_id',null)//it was null
       ->get();
    // $receipts = Receipt::where('declined',null, 'award_id',null)
    //     ->get();
       return view('aproved',compact('receipts'));
   }
   
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function getDeclined()
   {
    //    $receipts = DB::table('receipts')
    //    ->leftJoin('files', 'receipts.file_id', '=', 'files.id')
    //    ->where('declined',1)->get();
    $receipts = Receipt::where('declined','>',0)
    ->get();
       return view('declined',compact('receipts'));
   }
   
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function getAwarded()
   {
    // $receipts = Receipt::where('award_id','>',0)
    // ->get();
    $awarded = DB::table('receipts')
        ->leftJoin('files', 'receipts.file_id', '=', 'files.id', 'file_path')
        ->where('declined',null)
        ->where('award_id','>',0)
        ->get();
       return view('awarded',compact('awarded'));
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
