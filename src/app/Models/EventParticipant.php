<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    use HasFactory;
    protected $table = 'luxon_trx_event_participate';
    protected $primaryKey = 'tep_participant_id';

    const CREATED_AT = 'tep_registration_datetime';
    const UPDATED_AT = 'tep_update_datetime';

    protected $fillable = [
        'tep_event_id',
        'tep_user_id',
        'tep_delete_flag',
        'tep_deletion_datetime',
        'tep_registration_datetime',
        'tep_update_datetime',
        'tep_update_timestamp',
    ];
}