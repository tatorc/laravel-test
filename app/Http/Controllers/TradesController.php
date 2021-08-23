<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TradesService;
use App\Requests\TradesRequest;

class TradesController extends Controller
{
    public function index(Request $request)
    {
        $trades = TradesService::getTrades($request);

        return response()->json($trades);
    }

    public function store(TradesRequest $request)
    {   
        try {
            $trade = TradesService::newTrade($request);

            return response()->json($trade, 201);
        } catch (\Throwable $th) {
            return response()->json("Can't create resource", 404);
        }
    }

    public function show($id)
    {
        $trade = TradesService::getTrade($id);

        if (empty($trade)){
            return response()->json("ID not found", 404);
        }
        return response()->json($$trade);
    }

    public function notAllowed()
    {
        return response()->json("Method not allowed", 404);
    }

}
