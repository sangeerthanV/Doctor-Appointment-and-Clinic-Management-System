<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'specialization', 'bio', 'clinic_location'];

    // A doctor can have many appointments
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
