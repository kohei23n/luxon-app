<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EsQuestion extends Model
{
    use HasFactory;
    protected $table = 'luxon_trx_es';
    protected $primaryKey = 'tes_es_id';

    const CREATED_AT = 'tes_registration_datetime';
    const UPDATED_AT = 'tes_update_datetime';

    protected $fillable = [
        'tes_es_id',
        'tes_user_id',
        'tes_mentor_id',
        'tes_company_id',
        'tes_es_url',
        'tes_delete_flag',
        'tes_deletion_datetime',
        'tes_registration_datetime',
        'tes_update_datetime',
        'tes_update_timestamp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'tes_user_id', 'mus_user_id');
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'tes_mentor_id', 'mme_mentor_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'tes_company_id', 'mco_company_id');
    }
}
