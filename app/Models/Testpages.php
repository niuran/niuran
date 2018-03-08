<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testpages extends Model
{
    protected $fillable = [
      'userid', 'name', 'question_ids', 'sort', 'comment',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
