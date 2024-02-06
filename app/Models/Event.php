<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\User;


class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "image",
        "event_date",
        "organizer",
        "available_tickets",
        "location",
        "user_id"
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
