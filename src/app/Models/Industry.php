<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\EsQuestion;

class Industry extends Model
{
    use HasFactory;
    protected $table = 'luxon_mst_industry';
    protected $primaryKey = 'min_industry_id';

    const CREATED_AT = 'min_registration_datetime';
    const UPDATED_AT = 'min_update_datetime';

    protected $fillable = [
        'min_industry_id',
        'min_industry_name',
        'min_company_id',
        'min_event_id',
        'min_delete_flag',
        'min_deletion_datetime',
        'min_registration_datetime',
        'min_update_datetime',
        'min_update_timestamp',
    ];

    public function companies()
    {
        return $this->hasMany(Company::class, 'mco_company_id', 'min_company_id');
    }

    public function esQuestions() {
        return $this->hasMany(EsQuestion::class, 'mes_industry_id', 'min_industry_id');
    }
}
