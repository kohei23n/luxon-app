<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseQuestion extends Model
{
    use HasFactory;
    protected $table = 'luxon_trx_case';
    protected $primaryKey = 'mca_case_id';

    const CREATED_AT = 'mca_registration_datetime';
    const UPDATED_AT = 'mca_update_datetime';

    protected $fillable = [
        'mes_es_id',
        'mes_user_id',
        'mes_industry_id',
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

    public function industry()
    {
        return $this->belongsTo(Industry::class, 'mca_industry_id', 'min_industry_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'mca_company_id', 'mco_company_id');
    }
}
