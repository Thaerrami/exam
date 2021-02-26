<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Exam extends Model
{
   protected $table='exams';

   protected $fillable = ['exam_name', 'exam_date', 'start_at','end_at','exam_code'];
    
   protected $fillable_relations = ['questions'];

    public function user()
  {
    return $this->belongsTo(User::class, 'user_id','id');
  }

  public function question()
  {
    return $this->hasMany(Question::class, 'exam_id','id');
  }
}
