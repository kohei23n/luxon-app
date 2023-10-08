<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectionStatus extends Model
{
    use HasFactory;
    protected $table = 'luxon_trx_selection_status';

    const CREATED_AT = 'tss_registration_datetime';
    const UPDATED_AT = 'tss_update_datetime';

    protected $fillable = [
        'tss_user_id',
        'tss_company_name',
        'tss_selection_status',
        'tss_preference_ranking',
        'tss_selection_date',
        'tss_registration_datetime',
        'tss_update_datetime',
    ];
}
