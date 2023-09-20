<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamayat extends Model
{
    use HasFactory;
    protected $fillable = [
        'tasmia',
        'email',
        'rakm-itimad',
        'tarikh-tassiss',
        'halat-elmilef',
        'tarikh-tajdid1',
        'tarikh-tajdid2',
        'tarikh-tajdid3',
        'tarikh-tajdid4',
        'tarikh-tajdid5',
        'tabaa',
        'kitaa',
        'rakm-itimad',
        'nom-president',
        'prenom-president',
        'nachta',
        'adresse',
        'phone',
        'baladia',
        'description',
        'user_id'
         
    ];
    protected $nullable = [
        'tasmia',
        'email',
        'rakm-itimad',
        'tarikh-tassiss',
        'halat-elmilef',
        'tarikh-tajdid1',
        'tarikh-tajdid2',
        'tarikh-tajdid3',
        'tarikh-tajdid4',
        'tarikh-tajdid5',
        'tabaa',
        'kitaa',
        'rakm-itimad',
        'nom-president',
        'prenom-president',
        'nachta',
        'adresse',
        'phone',
        'baladia',
        'description',
         
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

}
