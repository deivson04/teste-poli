<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sobrevivente extends Model
{
    use HasFactory;
    
    use HasFactory;

    protected $table = 'sobreviventes';
    protected $primaryKey = 'id';

    protected $fillable = [
            'nome', 
            'idade', 
            'sexo', 
            'number', 
            'lat',
            'lng',
 
    ];

}
