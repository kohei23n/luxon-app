<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $table = 'luxon_mst_mentor';

    const CREATED_AT = 'mme_registration_datetime';
    const UPDATED_AT = 'mme_update_datetime';

    protected $fillable = [
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

    // メンター詳細が属するユーザー
    public function user()
    {
        return $this->belongsTo(User::class, 'mme_user_id');
    }

    // このメンターが担当するユーザー
    public function mentees()
    {
        return $this->hasMany(User::class, 'mus_dedicated_mentor_id');
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
