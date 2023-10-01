@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="mb-4">トランザクションリスト</h2>
            <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-4">
                <i class="fas fa-plus-circle"></i> 新しいトランザクションを作成
            </a>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>月初MRR</th>
                            <th>拡張MRR</th>
                            <th>ダウングレードMRR</th>
                            <th>解約MRR</th>
                            <th>目標NRR</th>
                            <th>実績NRR</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ $transaction->beginning_mrr }}</td>
                                <td>{{ $transaction->expansion_mrr }}</td>
                                <td>{{ $transaction->downgrade_mrr }}</td>
                                <td>{{ $transaction->churn_mrr }}</td>
                                <td>{{ $transaction->target_nrr }}</td>
                                <td>{{ $transaction->calculateNRRPercentage() }}</td>
                                <td>
                                    <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i> 編集
                                    </a>
                                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i> 削除
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
