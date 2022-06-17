<?php
 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;
 class User extends Model{

     public $timestamps = false;

    protected $table = 'tableusers';
    // column sa table
     protected $fillable = [
        'Fullname', 'Age', 'Gender'
     ];

 } 