<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    protected $transaction;

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
        $amount = ['label' => 'Amount', 'name' => 'amount',
            'title' => 'Amount', 'placeholder' => 'VND', 'required' => true];

        $description = ['label' => 'Description', 'name' => 'description',
            'title' => 'Description', 'placeholder' => 'Description', 'required' => false];

        $categories = ['label' => 'Category', 'name' => 'category_id', 'title' => 'Category',
            'placholder' => 'Category', 'required' => true];
        $options = [
            ['name' => 'Morning', 'value' => 1],
            ['name' => 'Middle noon', 'value' => 2],
            ['name' => 'Evening', 'value' => 3],
            ['name' => 'Other', 'value' => 4]
        ];
        $categories['options'] = $options;
        $transactions = Transaction::all();
        $data = compact('amount', 'description', 'categories', 'transactions');

        return view('transaction.home', $data);
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
        $transaction = new Transaction($request->all());
        $transaction->save();

        return redirect('/');
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
