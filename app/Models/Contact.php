<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;
use App\Mail\ContactConfirmationMail;

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

            // Notify admin
            Mail::to($adminEmail)->send(new ContactMail($item));

            // Send confirmation to the user
            Mail::to($item->email)->send(new ContactConfirmationMail($item));
        });
    }
}
