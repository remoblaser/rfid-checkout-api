<?php

namespace RFIDCheckout;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'rfid_id'];
}
