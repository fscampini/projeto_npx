<?php

namespace ProjectNpx;

use Illuminate\Database\Eloquent\Model;

class ActionCode extends Model
{
    protected $fillable = [
        'description',
        'font_awesome_description',
        'status_label',
        'created_by',
        'last_updated_by'
    ];

    public function document_history(){
        return $this->hasMany('ProjectNpx\DocumentHistory');
    }

    public function documents(){
        return $this->hasMany('ProjectNpx\Document');
    }

    public function user_created(){
        return $this->belongsTo('ProjectNpx\User', 'created_by');
    }

    public function user_updated(){
        return $this->belongsTo('ProjectNpx\User', 'last_updated_by');
    }
}
