<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Rempah extends Model
{
    /** @use HasFactory<\Database\Factories\RempahFactory> */
    use HasFactory;
    use Sluggable;


    protected $guarded =['id'];

    public function getRouteKeyName(): string
{
    return 'slug';
}

public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'namaRempah'
            ]
        ];
    }

}


