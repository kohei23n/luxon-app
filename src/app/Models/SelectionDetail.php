<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class SelectionDetail extends Model
{
    use HasFactory;
    protected $table = 'luxon_mst_selection_detail';
    protected $primaryKey = 'msd_selection_detail_id';

    const CREATED_AT = 'msd_registration_datetime';
    const UPDATED_AT = 'msd_update_datetime';

    protected $fillable = [
        'msd_company_id',
        'msd_selection_phase_name',
        'msd_selection_detail',
        'msd_selection_materials_URL',
        'msd_delete_flag',
        'msd_deletion_datetime',
        'msd_registration_datetime',
        'msd_update_datetime',
        'msd_update_timestamp',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'msd_company_id', 'mco_company_id');
    }
}
