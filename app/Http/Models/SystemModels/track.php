<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class track extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tracks';
    protected $fillable = array('Track_Id');

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



    public function artist()
    {
        return $this->belongsTo('artist','Arts_id','Arts_id');
    }

    public function release() {
        return $this->belongsto('release','item_id','item_id');
    }
}
