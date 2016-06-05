<?php

namespace ProjectNpx;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'data_base_filename',
        'original_file_name',
        'partner',
        'created_by',
        'last_updated_by'
    ];
    
    public function user_created(){
        return $this->belongsTo('ProjectNpx\User', 'created_by');
    }

    public function user_updated(){
        return $this->belongsTo('ProjectNpx\User', 'last_updated_by');
    }

    public function documentHistory(){
        return $this->hasMany('ProjectNpx\DocumentHistory');
    }
}
