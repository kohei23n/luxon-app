<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class SelectionPhase extends Model
{
    use HasFactory;
    protected $table = 'luxon_mst_selection_phase';
    protected $primaryKey = 'msp_phase_id';

    const CREATED_AT = 'msp_registration_datetime';
    const UPDATED_AT = 'msp_update_datetime';

    protected $fillable = [
        'msp_phase_id',
        'msp_phase_name',
        'msp_delete_flag',
        'msp_deletion_datetime',
        'msp_registration_datetime',
        'msp_update_datetime',
        'msp_update_timestamp',
    ];

    public function selectionDetail()
    {
        return $this->hasMany(SelectionDetail::class, 'msd_selection_phase_id', 'msp_phase_id');
    }
}