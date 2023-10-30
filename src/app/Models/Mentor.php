<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthAuthenticatable;

class Mentor extends Authenticatable
{
    use Notifiable, AuthAuthenticatable;
    protected $table = 'luxon_mst_mentor';

    const CREATED_AT = 'mme_registration_datetime';
    const UPDATED_AT = 'mme_update_datetime';

    protected $fillable = [
        'mme_email_address',
        'mme_password',
        'mme_first_name',
        'mme_last_name',
        'mme_interview_salary',
        'mme_lecture_create_salary',
        'mme_lecture_salary',
        'mme_access_right',
        'mme_delete_flag',
        'mme_deletion_datetime',
        'mme_registration_datetime',
        'mme_update_datetime',
        'mme_update_timestamp',
        'mme_line_url'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'mme_password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'mme_update_timestamp' => 'datetime',
        'mme_password' => 'hashed',
    ];

    public function getAuthPassword()
    {
        return $this->mme_password;
    }

    public function users()
    {
        return $this->hasMany(User::class, 'mus_service_plan_id', 'tsp_service_plan_id');
    }

    public function caseQuestions()
    {
        return $this->hasMany(CaseQuestion::class, 'tca_mentor_id', 'mme_mentor_id');
    }

    public function esQuestions()
    {
        return $this->hasMany(EsQuestion::class, 'tes_mentor_id', 'mme_mentor_id');
    }
}
