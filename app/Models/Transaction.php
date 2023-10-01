<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'beginning_mrr', 'expansion_mrr', 'downgrade_mrr', 'churn_mrr', 'target_nrr',
    ];

    public function calculateNRR()
    {
        $beginning_mrr = $this->beginning_mrr;
        return ($beginning_mrr + $this->expansion_mrr - $this->downgrade_mrr - $this->churn_mrr) / $beginning_mrr;
    }
    public function calculateNRRPercentage()
    {
        $nrr = $this->calculateNRR();  // assuming calculateNRR returns a value between 0 and 1
        return number_format($nrr * 100, 2) . '%';  // convert to percentage and format
    }
}
