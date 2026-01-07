<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artclass extends Model
{
    protected $primaryKey = 'class_id';
    protected $fillable = [
        'image_path',
        'class_name',
        'description',
        'mode',
        'link',
        'duration',
        'location',
        'start_date',
        'end_date',
        'price',
    ];
}

//             $table->id('class_id');
//             $table->string('image_path');
//             $table->string('class_name');
//             $table->text('description');
//             $table->enum('mode' , ['Online', 'Physical']);
//             $table->string('link')->nullable();
//             $table->string('location')->nullable();
//             $table->date('start_date');
//             $table->date('end_date');
//             $table->decimal('price', 8, 2);
//             $table->timestamps();