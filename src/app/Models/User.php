<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Mentor;
use App\Models\SelectionStatus;
use App\Models\EventParticipant;
use App\Models\CaseQuestion;
use App\Models\EsQuestion;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    const IS_ADMIN = 1;
    const IS_MENTOR = 1;

    protected $table = 'luxon_mst_user';
    protected $primaryKey = 'mus_user_id';

    const CREATED_AT = 'mus_registration_datetime';
    const UPDATED_AT = 'mus_update_datetime';

    protected $fillable = [
        'mus_email_address',
        'mus_user_password',
        'mus_user_first_name',
        'mus_user_last_name',
        'mus_dedicated_mentor_id',
        'mus_is_admin',
        'mus_is_mentor',
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

    public function userDetail()
    {
        return $this->hasOne(UserDetail::class, 'tud_user_id', 'mus_user_id');
    }

    // ユーザーが持つ専属メンター
    public function dedicatedMentor()
    {
        return $this->belongsTo(User::class, 'mus_dedicated_mentor_id');
    }

    // ユーザーがメンターである場合のメンター詳細
    public function mentorProfile()
    {
        return $this->hasOne(Mentor::class, 'mme_user_id');
    }

    public function selectionStatuses()
    {
        return $this->hasMany(SelectionStatus::class, 'tss_user_id', 'mus_user_id');
    }

    public function eventParticipants()
    {
        return $this->hasMany(EventParticipant::class, 'tep_user_id', 'mus_user_id');
    }

    public function caseQuestions()
    {
        return $this->hasMany(CaseQuestion::class, 'tca_user_id', 'mus_user_id');
    }

    public function esQuestions()
    {
        return $this->hasMany(EsQuestion::class, 'mes_case_user_id', 'mus_user_id');
    }

    public function getIsMentorAttribute()
    {
        return $this->mus_is_mentor;
    }
}
