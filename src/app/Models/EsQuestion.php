<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EsQuestion extends Model
{
    use HasFactory;
    protected $table = 'luxon_trx_es';
    protected $primaryKey = 'mes_es_id';

    const CREATED_AT = 'mes_registration_datetime';
    const UPDATED_AT = 'mes_update_datetime';

    protected $fillable = [
        'mes_es_id',
        'mes_user_id',
        'mes_company_id',
        'mes_es_url',
        'mes_delete_flag',
        'mes_deletion_datetime',
        'mes_registration_datetime',
        'mes_update_datetime',
        'mes_update_timestamp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'mca_case_user_id', 'mus_user_id');
    }
}
