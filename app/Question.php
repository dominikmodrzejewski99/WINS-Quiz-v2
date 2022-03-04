<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
//    protected  $table = 'questions';
    protected  $fillable = [
        'question',
        'answer_a',
        'answer_b',
        'answer_c',
        'answer_d',
        'answer_correct',
        'quiz_name' => 'WINS-Quiz'
        ];
}
