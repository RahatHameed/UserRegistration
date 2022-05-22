<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
        /**
     * @inheritdoc
     */
    protected $table = 'customers';

    protected $fillable = [
        'firstName', 'lastName', 'telephone', 'streetNo', 'houseNo', 'zipcode', 'city', 'owner', 'iban', 'paymentDataId'
    ];    
}
