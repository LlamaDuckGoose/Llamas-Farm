<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RegistrationToken extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'registration_tokens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token',
    ];

    public function generate(): self
    {
        $this->token = Str::random(6);
        $this->save();

        return $this;
    }
}
