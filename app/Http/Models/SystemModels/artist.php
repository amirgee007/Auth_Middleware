<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artisits';

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


    public function getcreated_atAttribute($value)
    {
        return Carbon::parse($value)->format('dd/mm/yyyy HH:MM');
    }

    public function setcreated_atAttribute($value)
    {
        $this->attributes['created_at'] = Carbon::createFromFormat('dd/mm/yyyy HH:MM', $value)->toDateString();
    }



    public function track()
    {
        return $this->hasMany('track','Rels_id','Rels_id');
    }

}
