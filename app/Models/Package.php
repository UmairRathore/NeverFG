<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Package extends Model
{
    use HasFactory;

    protected $table = "packages";
    protected $fillable =
        [
            'account_type_id',
            'memento_images',
            'guestbook_and_tributes',
            'biography_and_obituary',
            'in_memoriam_donation_link',
            'online_forever',
            'unlimited_milestones',
            'share_cemetery_and_grave_location',
            'full_privacy_settings',
            'downloading_images',
            'video_uploading',
            'customizable_url',
            'keeper_administrators',
            'events_pages',
            'family_tree',
            'memorial_pages',
        ];

    public function accountType(){
        
        return $this->belongsTo(AccountType::class);
    }
}
