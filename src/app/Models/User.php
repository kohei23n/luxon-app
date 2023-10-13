<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'luxon_mst_user';
    protected $primaryKey = 'mus_user_id';

    const CREATED_AT = 'mus_registration_datetime';
    const UPDATED_AT = 'mus_update_datetime';

    protected $fillable = [
        'mus_email_address',
        'mus_user_password',
        'mus_user_first_name',
        'mus_user_last_name',
        'mus_current_university',
        'mus_service_plan',
        'mus_first_industry_preference',
        'mus_second_industry_preference',
        'mus_dedicated_mentor',
        'mus_access_right',
        'mus_delete_flag',
        'mus_deletion_datetime',
        'mus_registration_datetime',
        'mus_update_datetime',
        'mus_update_timestamp',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'mus_user_password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'mus_update_timestamp' => 'datetime',
        'mus_user_password' => 'hashed',
    ];

    public function getAuthPassword()
    {
        return $this->mus_user_password;
    }

    public function servicePlan()
    {
        return $this->belongsTo(ServicePlan::class, 'mus_service_plan_id', 'tsp_service_plan_id');
    }

    public function dedicatedMentor()
    {
        return $this->belongsTo(Mentor::class, 'mus_dedicated_mentor_id', 'mme_mentor_id');
    }

    public function selectionStatuses()
    {
        return $this->hasMany(SelectionStatus::class, 'tss_user_id', 'mus_user_id');
    }

    public function eventParticipants()
    {
        return $this->hasMany(EventParticipant::class, 'tep_user_id', 'mus_user_id');
    }
}
