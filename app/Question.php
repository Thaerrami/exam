<?php

namespace App;

use Carbon\Traits\Options;
use Illuminate\Database\Eloquent\Model;
use PhpOption\Option;

class Question extends Model
{
    protected $table='questions';
    protected $fillable = ['title','answer_option','options'];
    protected $fillable_relations = ['options'];


    public function option(){
        return $this->hasMany(Option::class,'ques_id');
    }


}
