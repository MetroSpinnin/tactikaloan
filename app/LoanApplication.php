<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class LoanApplication extends Model
{
    protected $tableName = "Loan_Applications";
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
