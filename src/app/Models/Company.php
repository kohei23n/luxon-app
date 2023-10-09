<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Industry;

class Company extends Model
{
  use HasFactory;
  protected $table = 'luxon_mst_company';
  protected $primaryKey = 'mco_company_id';

  const CREATED_AT = 'mco_registration_datetime';
  const UPDATED_AT = 'mco_update_datetime';

  protected $fillable = [
    'mco_industry_id',
    'mco_company_name',
    'mco_company_logo_s3_url',
    'mco_company_overview',
    'min_delete_flag',
    'min_deletion_datetime',
    'min_registration_datetime',
    'min_update_datetime',
    'min_update_timestamp',
  ];

  public function industry()
  {
    return $this->belongsTo(Industry::class, 'mco_industry_id', 'min_industry_id');
  }
}
