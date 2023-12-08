<?php
namespace App\Filters;
use Illuminate\Http\Request;
class ActivityFilter extends ApiFilter {

    protected $safeParams = [
        'name' => ['eq'],
        'objective' => ['eq'],
        'competence' => ['eq'],
        'syllabus' => ['eq'],
        'authorized' => ['eq'],
        'activity' => ['eq'],
        'credits' => ['eq'],
        'period_id' => ['eq'],
        'staff_id' => ['eq'],
        'user_id' => ['eq'],
    ];
    protected $columnMap = [
        
    ];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];

    
}
