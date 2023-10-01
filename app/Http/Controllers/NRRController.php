<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class NRRController extends Controller
{
    public function calculateNRR(Request $request)
    {
        $transaction = Transaction::create($request->all());

        $nrr = ($transaction->beginning_mrr + $transaction->expansion_mrr - $transaction->downgrade_mrr - $transaction->churn_mrr) / $transaction->beginning_mrr;

        return response()->json(['nrr' => $nrr]);
    }
}
