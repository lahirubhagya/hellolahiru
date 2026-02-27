<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;

class Contact extends Model {


    public $fillable = ['name', 'email', 'phone', 'subject', 'message'];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
        parent::boot();

        static::created(function ($item) {
            $adminEmail = "gunawardhanalahiru21@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
