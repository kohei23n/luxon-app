<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;
    protected $table = 'luxon_trx_interview';
    protected $primaryKey = 'tin_interview_id';

    const CREATED_AT = 'tin_registration_datetime';
    const UPDATED_AT = 'tin_update_datetime';
    const IS_NOT_COMPLETED = 0;
    const IS_COMPLETED = 1;

    protected $fillable = [
        'tin_interview_id',
        'tin_user_id',
        'tin_mentor_id',
        'tin_datetime',
        'tin_time',
        'tin_is_completed',
        'tin_delete_flag',
        'tin_deletion_datetime',
        'tin_registration_datetime',
        'tin_update_datetime',
        'tin_update_timestamp',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'tin_user_id', 'mus_user_id');
    }

    public function mentor()
    {
        return $this->belongsTo(User::class, 'tin_mentor_id', 'mus_user_id');
    }
}
