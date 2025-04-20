<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = ['name', 'mobile', 'date', 'doctor', 'department', 'photo'];
    public $timestamps = false; // Disable created_at/updated_at
}