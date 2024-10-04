<?php

namespace App\Repositories\Event;

use App\Models\Event;

class EventRepository implements EventRepositoryInterface
{
    public function index()
    {
        $events = Event::all();
        return $events;
    }

    public function getBanner()
    {
        $banner = Event::lastest();
        return $banner->image;
    }
}