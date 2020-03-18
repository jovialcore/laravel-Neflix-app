<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Show;

class showController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows =  Show::all(); // this Show::all() is refering to the list of columns we have in our database. 
        // So i gues thats why it is necessary to loop through them using the foreach loop

        return view('index', compact('shows'));

            // return here means that the code block should push all the contents of view to the index.balde.php file and let us use the shows variable by compacting it with the laravel comapct function. so we can manipulate the Show::all varaible in our main edit.blade.php

        //to return an index view with data fetched from a database.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            //Store method has $request object as the parameter which will be used to access form data. 
            'show_name' => 'required|max:225',
            'genre'=> 'required|max:225',
            'imdb_rating'=> 'required|numeric',
            'lead_actor' => 'required|max:255'

            //“unique:table, column” will see if the same value does not exists in the database

            //Key is the field_name and value with being the validation rules. 
        ]);
        $show = Show::create($validator);
        //create is the same thing as storing(STORE)data inside our file

        return redirect('/shows')->with('success', 'Show was succesfully saved');

         //When you redirect something without specifying the route method, it automatically goes to the index method or uses the INDEX METHOD 

        //If incoming data fail any of the rules, then it will directly go to the form with the error messages.
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
        $shower = Show::findOrFail($id);
        //Show::findOrFail($id); points specifically to the row with that ID so technically since it already points to the ID there is no need to loop through them using forEACH because i believe the function Show::findOrFail($id); does that already..
       

        return view('edit', compact('shower'));

        //here emphasis on the route (url) with the ID fetched from the database
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
        //so to update we have to make sure th
       $validator = $request->validate([
            'show_name' => 'required|max:255',
            'genre' => 'required|max:255',
            'imdb_rating'=> 'required|max:255',

       ]);
       Show::whereId($id)->update($validator);

       return redirect('/shows')->with('success', 'show was succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = Show::findOrFail($id);
        $show->delete();

        return redirect('/shows')->with('success', 'Show was successfully deleted');


    }
}
