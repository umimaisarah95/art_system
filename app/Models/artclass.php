<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtClass extends Model
{
    protected $table = 'artclasses';
    protected $primaryKey = 'class_id';
    protected $fillable = [
        'image_path',
        'class_name',
        'description',
        'art_type',
        'mode',
        'link',
        'duration',
        'location',
        'start_date',
        'end_date',
        'price',
    ];

    //TO LINK THE TABLE!!!!!! USER AND ART CLASS//

    public function users()
{
    return $this->belongsToMany(
        User::class,
        'class_user',
        'class_id',
        'user_id'
    );
}
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