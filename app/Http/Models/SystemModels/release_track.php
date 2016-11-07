<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class release_track extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'release_track';


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


    public function track()
    {
        return $this->belongsToMany('track', 'release_track', 'Rels_id', 'track_id');
    }
}
