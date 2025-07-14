<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBonusPointRequest;
use App\Http\Requests\UpdateBonusPointRequest;
use App\Models\BonusPoint;
use App\Traits\HasApiResponse;

class BonusPointController extends Controller
{
    use HasApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBonusPointRequest $request)
    {
        //
        $request->merge([
            'current_points' => $request->input('offer_points',0),
            'status'         => BonusPoint::STATUS_ACTIVE
        ]);
        // return $request->all();
        $bonus = BonusPoint::create($request->all());
        return $this->apiCreated('商家點數新增成功',$bonus);
    }

    /**
     * Display the specified resource.
     */
    public function show(BonusPoint $bonusPoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BonusPoint $bonusPoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBonusPointRequest $request, BonusPoint $bonusPoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BonusPoint $bonusPoint)
    {
        //
    }
}
