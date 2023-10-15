<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePlan extends Model
{
    use HasFactory;
    protected $table = 'luxon_trx_service_plan';
    protected $primaryKey = 'tsp_service_plan_id';

    const CREATED_AT = 'tsp_registration_datetime';
    const UPDATED_AT = 'tsp_update_datetime';

    protected $fillable = [
        'tsp_user_id',
        'tsp_service_plan_name',
        'tsp_subscribe_price',
        'tsp_event_attendance',
        'tsp_interview_count',
        'tsp_es_count',
        'tsp_case_study_count',
        'tsp_service_plan_month',
        'tsp_delete_flag',
        'tsp_deletion_datetime',
        'tsp_registration_datetime',
        'tsp_update_datetime',
        'tsp_update_timestamp',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'mus_service_plan_id', 'tsp_service_plan_id');
    }
}
