<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventParticipant;

class Event extends Model
{
    use HasFactory;
    protected $table = 'luxon_mst_event';
    protected $primaryKey = 'mev_event_id';

    const CREATED_AT = 'mev_registration_datetime';
    const UPDATED_AT = 'mev_update_datetime';

    protected $fillable = [
        'mev_industry_id',
        'mev_company_id',
        'mev_event_name',
        'mev_event_overview',
        'mev_event_description',
        'mev_event_datetime',
        'mev_event_participate_url',
        'mev_event_materials_url',
        'mev_delete_flag',
        'mev_deletion_datetime',
        'mev_registration_datetime',
        'mev_update_datetime',
        'mev_update_timestamp',
    ];

    public function eventParticipants()
    {
        return $this->hasMany(EventParticipant::class, 'tep_event_id', 'mev_event_id');
    }
}
