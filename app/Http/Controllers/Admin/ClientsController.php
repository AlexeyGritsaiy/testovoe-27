<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use App\Models\Company;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Company $company)
    {
        $test = Company::first();
        $clients = Clients::get();;
       $company1 = $test->clients();
//       $company2 = $company1->title;
        return view('admin.clients.index',compact('clients','company1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companys = Company::get();
        return view('admin.clients.create',compact('companys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $client = $request->all();
        $client = Clients::create([
            'companies_id' => $request['companies_id'],
            'firstName' => $request['firstName'],
            'secondName' => $request['secondName'],
            'lastName' => $request['lastName'],
            'email' => $request['email'],
            'phone' => $request['phone'],

        ]);


        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $clients)
    {
        return view('clients.index' ,compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clients  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Clients $client)
    {
        //
        return view('admin.clients.create' ,compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clients  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clients $client)
    {
//        $client = Clients::update($request->all());
        $params = $request->all();
//        $params['id'] = $request->client->id;
        $client->update($params);
//        $skus->propertyOptions()->sync($request->property_id);
        return redirect()->route('clients.index');
        //return redirect()->route('skus.index', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clients $clients)
    {
        //
    }
}
