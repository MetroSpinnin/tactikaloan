<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    protected $tableName = "Loan_Applications";
    public $primaryKey = 'id';
    public $timestamps = true;
}
