<?php

namespace ProjectNpx;

use Illuminate\Database\Eloquent\Model;

class DocumentHistory extends Model
{
    protected $fillable = [
        'action_id',
        'created_by',
        'document_id'
    ];

    public function user_created(){
        return $this->belongsTo('ProjectNpx\User', 'created_by');
    }
    
    public function document()
    {
        return $this->belongsTo('ProjectNpx\Document', 'document_id');
    }
    
    public function action_code()
    {
        return $this->belongsTo('ProjectNpx\ActionHistoryCode', 'action_id');
    }
}
