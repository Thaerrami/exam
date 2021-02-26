<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table='options';
    protected $fillable=['option_number','option_title'];


    public function question(){
        $this->belongsTo(Question::class,'ques_id');
    }
}
