<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Repositories\Event\EventRepository;
use App\Repositories\Event\EventRepositoryInterface;
use Illuminate\Http\Request;

class EventController extends BaseController
{

    private EventRepositoryInterface $eventRepository;

    public function __construct(EventRepositoryInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    public function index()
    {
        $events = $this->eventRepository->index();
        $events = EventResource::collection($events);
        return $this->sendResponse($events, 'Event Retrived Successfully!');
    }
}
