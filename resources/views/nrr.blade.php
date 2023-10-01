<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NRR Calculator</title>
</head>
<body>

<h1>NRR 計算ツール</h1>

<form action="/calculate-nrr" method="post">
    @csrf  <!-- CSRF token for security -->
    <label for="beginning_mrr">月初のMRR (Monthly Recurring Revenue):</label><br>
    <input type="number" id="beginning_mrr" name="beginning_mrr" required><br><br>

    <label for="expansion_mrr">Expansion MRR (アップグレードや追加購入による収益):</label><br>
    <input type="number" id="expansion_mrr" name="expansion_mrr" required><br><br>

    <label for="downgrade_mrr">Downgrade MRR (ダウングレードによる損失額):</label><br>
    <input type="number" id="downgrade_mrr" name="downgrade_mrr" required><br><br>

    <label for="churn_mrr">Churn MRR (解約による損失額):</label><br>
    <input type="number" id="churn_mrr" name="churn_mrr" required><br><br>

    <input type="submit" value="NRR 計算">
</form>

</body>
</html>
