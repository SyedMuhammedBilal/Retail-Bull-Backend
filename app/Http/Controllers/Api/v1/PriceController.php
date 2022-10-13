<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\v1\BaseController as BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\PricesResource;
use App\Models\Prices;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PriceController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Prices::all();

        return $this->sendResponse(PricesResource::collection($prices), 'Prices retrieved successfully.');

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
        $validator = Validator::make($request->all(), [
            'product_sku' => 'required',
            'price_level_code' => 'required|in:B2B,B2C',
            'price' => 'required',
            'starting_date' => 'required',
            'ending_date' => 'required'
        ]);

        if ($validator->fails())
        {
            $errors = $validator->errors()->all();
            return $this->sendError($errors);
        }
    
        $price = Prices::create($request->all());

        return $this->sendResponse($price,"Price Created Successfully");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $today = Carbon::today()->toDateString();
        $prices = Prices::where(['product_sku' => $id , 'starting_date' => $today])->get();
        return $this->sendResponse($prices , 'Prices retrieved for today');
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
