<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $table = 'luxon_trx_user_detail';
    protected $primaryKey = 'tud_detail_id';

    const CREATED_AT = 'tud_registration_datetime';
    const UPDATED_AT = 'tud_update_datetime';

    protected $fillable = [
        'tud_user_id',
        'tud_current_university',
        'tud_first_industry_preference',
        'tud_second_industry_preference',
        'tud_service_plan_id',
        'tud_event_attendance_remaining',
        'tud_interview_count_remaining',
        'tud_case_study_count_remaining',
        'tud_es_count_remaining',
        'tud_delete_flag',
        'tud_deletion_datetime',
        'tud_registration_datetime',
        'tud_update_datetime',
        'tud_update_timestamp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'tud_user_id', 'mus_user_id');
    }

    public function servicePlan()
    {
        return $this->belongsTo(ServicePlan::class, 'tud_service_plan_id', 'tsp_service_plan_id');
    }
}
