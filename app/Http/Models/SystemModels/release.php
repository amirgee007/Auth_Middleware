<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class release extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'releases';


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
protected  $fillable=[


    'created_at',
'created_by',
'deleted_at',
'deleted_by',
'CRelease',
'Rels_Cover',
'Rels_id',
'Rels_Itunelink',
'Rels_name',
'Rels_Type',
'updated_at',
'updated_by'
];
    public function getcreated_atAttribute($value)
    {
        return Carbon::parse($value)->format('dd/mm/yyyy HH:MM');
    }

    public function setcreated_atAttribute($value)
    {
        $this->attributes['created_at'] = Carbon::createFromFormat('dd/mm/yyyy HH:MM', $value)->toDateString();
    }

}
