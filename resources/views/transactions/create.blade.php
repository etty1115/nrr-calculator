@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">新しいトランザクションを作成</div>

                <div class="panel-body">
                    <form action="{{ url('transactions') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="beginning_mrr">月初MRR</label>
                            <input type="number" class="form-control" id="beginning_mrr" name="beginning_mrr" required>
                        </div>

                        <div class="form-group">
                            <label for="expansion_mrr">拡張MRR</label>
                            <input type="number" class="form-control" id="expansion_mrr" name="expansion_mrr" required>
                        </div>

                        <div class="form-group">
                            <label for="downgrade_mrr">ダウングレードMRR</label>
                            <input type="number" class="form-control" id="downgrade_mrr" name="downgrade_mrr" required>
                        </div>

                        <div class="form-group">
                            <label for="churn_mrr">解約MRR</label>
                            <input type="number" class="form-control" id="churn_mrr" name="churn_mrr" required>
                        </div>
                        <!-- ... -->
                        <div class="form-group">
                            <label for="target_nrr">目標NRR</label>
                            <input type="number" class="form-control" id="target_nrr" name="target_nrr" step="0.01" required>
                        </div>
                        <button type="submit" class="btn btn-primary">保存</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
