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
}
