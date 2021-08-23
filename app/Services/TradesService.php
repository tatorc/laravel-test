<?php

namespace App\Services;

use App\Models\Trades;

class TradesService
{
    public static function getTrades($request)
    {
        $trades = Trades::orderBy('id');

        if ($request->has('type')) {
            $trades->where('type', $request->type);
        }

        if ($request->has('user_id')) {
            $trades->where('user_id', $request->user_id);
        }

        return $trades->get();
    }

    public static function getTrade($id)
    {
        $trade = Trades::find($id);

        return $trade;
    }

    public static function newTrade($request) 
    {
        $trade = new Trades();

        $trade->type    = $request->type;
        $trade->user_id = $request->user_id;
        $trade->symbol  = $request->symbol;
        $trade->shares  = $request->shares;
        $trade->price   = $request->price;

        $trade->save();

        return $trade;

    }
}