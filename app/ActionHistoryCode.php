<?php

namespace ProjectNpx;

use Illuminate\Database\Eloquent\Model;

class ActionHistoryCode extends Model
{
    protected $fillable = [
        'description',
        'font_awesome_description',
        'created_by'
    ];

    public function document_history(){
        return $this->hasMany('ProjectNpx\DocumentHistory');
    }
}
