<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Utils;

class Client extends Model
{
    protected $fillable = [
        'code',
        'name',
        'cpf',
        'email',
        'mobile_phone',
        'cep',
        'address',
        'district',
        'image_url',
        'city_id'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Mutators
    |--------------------------------------------------------------------------
    */

    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = Utils::onlyNumbers($value);
    }

    public function setMobilePhoneAttribute($value)
    {
        $this->attributes['mobile_phone'] = Utils::onlyNumbers($value);
    }

    public function getCpfAttribute($value)
    {
        return Utils::maskFormat($value, '###.###.###-##');
    }

    public function getMobilePhoneAttribute($value)
    {
        return Utils::maskFormat($value, '(##) # ####-####');
    }
}
