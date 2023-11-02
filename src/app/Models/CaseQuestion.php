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
    const IS_NOT_RETURNED = 0;
    const IS_RETURNED = 1;

    protected $fillable = [
        'tca_case_id',
        'tca_user_id',
        'tca_mentor_id',
        'tca_case_content',
        'tca_case_time',
        'tca_case_url',
        'tca_is_returned',
        'tca_delete_flag',
        'tca_deletion_datetime',
        'tca_registration_datetime',
        'tca_update_datetime',
        'tca_update_timestamp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'tca_user_id', 'mus_user_id');
    }

    public function mentor()
    {
        return $this->belongsTo(User::class, 'tca_mentor_id', 'mus_user_id');
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
