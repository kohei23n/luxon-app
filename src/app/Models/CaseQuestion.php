<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseQuestion extends Model
{
    use HasFactory;
    protected $table = 'luxon_trx_case';
    protected $primaryKey = 'tca_case_id';

    const CREATED_AT = 'tca_registration_datetime';
    const UPDATED_AT = 'tca_update_datetime';

    protected $fillable = [
        'tes_es_id',
        'tes_user_id',
        'tes_industry_id',
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
        return $this->belongsTo(User::class, 'tca_case_user_id', 'mus_user_id');
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
