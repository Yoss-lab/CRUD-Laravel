<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use LaravelLocalisation;
class CrudController extends Controller
{
    public function __construct()
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create(){   
        return view('offers.create');
    }

    
    public function store(OfferRequest $request){
            /* الكود الي هني هزيناه ل OfferRequest */

        //Validate data before insert to database
       /*  $rules=$this->getRules();
        $messages=$this->getMessages();
        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator -> fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all()) ;

        } */

       //insert to database
       Offer::create([
        'name' => $request->name,
        'price'=>$request->price,
       ]);

       return redirect()->back()->with(['success'=>'Success']);
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


  /*   protected function getRules(){
        return $rules=[
            'name'=>'required|max:20|unique:offers,name',
            'price'=>'required|numeric',
        ];
    } */
    //cette fonction pour traduire les messages affiché  
   /*  protected function getMessages(){
        return $messages=[
            'name.required' => __('validation.required'),
            //'name.unique'=>__('validation.offernameunique'),
        ];
    } */
}
