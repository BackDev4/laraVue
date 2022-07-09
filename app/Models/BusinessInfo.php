<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property string $inn
 * @property string $fullName
 * @property string $dateReg
 * @property string $ogrnip
 * @property string $okved
 * @property string $address
 * @property string $nameOfServ
 * @property string $oktmo
 * @property string $taxCode
 * @property int $user_id
 */
class BusinessInfo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];
}
