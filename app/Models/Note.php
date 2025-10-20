<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    // Tell Laravel which table this model represents
    protected $table = 'notes';

    // Columns you want to be able to insert or update
    protected $fillable = [
        'title',
        'descriptive_text',
        'date_of_creation',
        'last_modified'
    ];

    // Tell Laravel your table already has an 'id' primary key
    protected $primaryKey = 'id';

    // Disable Laravel's automatic timestamps
    public $timestamps = false;
}