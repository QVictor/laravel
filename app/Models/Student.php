<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @mixin \Eloquent
 * @package App
 */
class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password'];
}
