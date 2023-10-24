<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Doctor extends Authenticatable
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['name','appointments'];
    public $fillable= ['email','email_verified_at','password','phone','name','section_id','status'];

        /**
     * Get the Doctor's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function section()
    {
        return $this->belongsTo(section::class);
    }

    public function doctorappointments()
    {
        return $this->belongsToMany(Appointment::class,'appointment_doctor');
    }
}