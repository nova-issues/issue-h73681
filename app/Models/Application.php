<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
{
    use HasFactory;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ec_id';

    public function questionResponses(): HasMany
    {
        return $this->hasMany(QuestionResponse::class, 'application_ec_id', 'ec_id');
    }
}
