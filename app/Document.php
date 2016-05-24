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
    
    public function user(){
        return $this->belongsTo('ProjectNpx\User');
    }
}
