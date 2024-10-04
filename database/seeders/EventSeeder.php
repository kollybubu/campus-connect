<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'user_id' => 1,
                'title' => 'Requirement Analysis Workshop',
                'description' => 'Analyzing current and future requirements for the Campus Connect platform with key stakeholders.',
                'date' => '2024-10-05 09:00:00',
                'image' => 'requirement_analysis_workshop.jpg',
            ],
            [
                'user_id' => 2,
                'title' => 'System & Database Design Session',
                'description' => 'Designing the system architecture, program list, and ERD for the Campus Connect platform.',
                'date' => '2024-10-10 11:00:00',
                'image' => 'system_database_design_session.jpg',
            ],
            [
                'user_id' => 3,
                'title' => 'UI Design Workshop with Figma',
                'description' => 'Creating modern and user-friendly UI designs for the Campus Connect platform using Figma.',
                'date' => '2024-10-15 14:00:00',
                'image' => 'ui_design_workshop_figma.jpg',
            ],
            [
                'user_id' => 4,
                'title' => 'Development Sprint (Frontend, Backend, API)',
                'description' => 'Developing the frontend, backend, and API for the Campus Connect platform using Agile sprints.',
                'date' => '2024-10-20 09:00:00',
                'image' => 'development_sprint.jpg',
            ],
            [
                'user_id' => 5,
                'title' => 'Testing & QA Session',
                'description' => 'Conducting comprehensive testing of the Campus Connect platform, ensuring functionality and performance.',
                'date' => '2024-10-25 10:00:00',
                'image' => 'testing_qa_session.jpg',
            ],
        ];        

        foreach($events as $event)
        {
            Event::create($event);
        }
    }
}
