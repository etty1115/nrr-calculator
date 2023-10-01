@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Transaction Details</h1>
            <table class="table">
                <tr>
                    <th>Beginning MRR</th>
                    <td>{{ $transaction->beginning_mrr }}</td>
                </tr>
                <tr>
                    <th>Expansion MRR</th>
                    <td>{{ $transaction->expansion_mrr }}</td>
                </tr>
                <tr>
                    <th>Downgrade MRR</th>
                    <td>{{ $transaction->downgrade_mrr }}</td>
                </tr>
                <tr>
                    <th>Churn MRR</th>
                    <td>{{ $transaction->churn_mrr }}</td>
                </tr>
                <!-- 実績NRRの表示 -->
                <tr>
                    <th>実績NRR</th>
                    <td>{{ $transaction->calculateNRRPercentage() }}</td>
                </tr>
                <!-- 目標NRRの表示 (仮に目標NRRがプロパティとして存在すると仮定) -->
                <tr>
                    <th>目標NRR</th>
                    <td>{{ number_format($transaction->target_nrr * 100, 2) }}%</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
