<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model{
public $timestamps=false;
    protected $table = 'customers';

// column sa table
protected $fillable = [
'CustomerName', 'City','Country'
];
}