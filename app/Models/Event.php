<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "image",
        "event_date",
        "organizer",
        "available_tickets"
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
