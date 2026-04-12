<?php

namespace Database\Seeders;

use App\Models\CurriculumCourse;
use App\Models\CurriculumCreditComponent;
use App\Models\Event;
use App\Models\Lecturer;
use App\Models\NewsPost;
use App\Models\SiteSetting;
use App\Models\StudentHighlight;
use Illuminate\Database\Seeder;

class DummyContentSeeder extends Seeder
{
    /**
     * Seed dummy content that mirrors the current Blade page copy.
     */
    public function run(): void
    {
        $this->seedNewsPosts();
        $this->seedEvents();
        $this->seedLecturers();
        $this->seedSiteSettings();
        $this->seedCurriculumCourses();
        $this->seedCurriculumCreditComponents();
        $this->seedStudentHighlights();
    }

    /**
     * Seed the news cards/featured item from the News page.
     */
    private function seedNewsPosts(): void
    {
        NewsPost::query()->upsert([
            [
                'title' => 'UNIJI Software Engineering Program Achieves National Accreditation Excellence',
                'slug' => 'national-accreditation-excellence',
                'excerpt' => 'The National Accreditation Board awarded the program the highest rating after reviewing curriculum quality, research output, and alumni impact.',
                'body' => 'Following a rigorous evaluation of our curriculum, faculty research output, and alumni success rates, the National Accreditation Board has awarded our program the highest possible rating, opening new doors for global partnerships.',
                'image_url' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1000&q=80',
                'category' => 'program-update',
                'published_at' => '2026-10-15 09:00:00',
                'is_featured' => true,
            ],
            [
                'title' => 'Student Team Wins 1st Place at National Cybersecurity Hackathon',
                'slug' => 'cybersecurity-hackathon-first-place',
                'excerpt' => 'Senior capstone students secured first place after defending against live penetration tests.',
                'body' => 'Our senior capstone team successfully defended against live penetration tests to secure the top spot at the annual national defense competition.',
                'image_url' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80',
                'category' => 'achievement',
                'published_at' => '2026-09-28 09:00:00',
                'is_featured' => false,
            ],
            [
                'title' => 'New Cloud Computing Curriculum Designed with Industry Leaders',
                'slug' => 'cloud-curriculum-industry-partnership',
                'excerpt' => 'The updated cloud track was designed with major cloud providers and industry mentors.',
                'body' => 'We have officially partnered with major cloud providers to revamp our distributed systems courses, granting students access to enterprise-grade tools.',
                'image_url' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80',
                'category' => 'partnership',
                'published_at' => '2026-09-15 09:00:00',
                'is_featured' => false,
            ],
            [
                'title' => 'Alumni Spotlight: Engineering Scalable Infrastructure at Global Fintechs',
                'slug' => 'alumni-spotlight-global-fintech',
                'excerpt' => 'A profile of graduates building high-scale financial systems in global companies.',
                'body' => 'Read about how our 2022 graduates are currently architecting systems that process millions of transactions per day in the modern financial sector.',
                'image_url' => 'https://images.unsplash.com/photo-1515162816999-a0c47dc192f7?auto=format&fit=crop&w=600&q=80',
                'category' => 'alumni',
                'published_at' => '2026-08-30 09:00:00',
                'is_featured' => false,
            ],
        ], ['slug'], [
            'title',
            'excerpt',
            'body',
            'image_url',
            'category',
            'published_at',
            'is_featured',
            'updated_at',
        ]);
    }

    /**
     * Seed both upcoming and past/exhibition event entries used across Home/News.
     */
    private function seedEvents(): void
    {
        Event::query()->upsert([
            [
                'title' => 'International Conference',
                'slug' => 'international-conference-2026',
                'summary' => 'Annual international conference for software engineering students and partners.',
                'description' => 'A full-day conference with invited speakers, student showcases, and networking sessions.',
                'image_url' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=1000&q=80',
                'event_date' => '2026-01-01',
                'start_time' => '09:00:00',
                'end_time' => '16:00:00',
                'location' => 'JIT Campus, Main Hall',
                'event_type' => 'upcoming',
                'is_featured' => true,
            ],
            [
                'title' => 'Tech Hackathon 2026',
                'slug' => 'tech-hackathon-2026',
                'summary' => 'Campus-wide hackathon focused on practical software solutions.',
                'description' => 'Teams collaborate intensively to design and build functional prototypes in one day.',
                'image_url' => '/style/images/newspage/hackathon.jpg',
                'event_date' => '2026-02-15',
                'start_time' => '08:00:00',
                'end_time' => '20:00:00',
                'location' => 'Innovation Hall, Block B',
                'event_type' => 'upcoming',
                'is_featured' => false,
            ],
            [
                'title' => 'Guest Lecture: AI Ethics',
                'slug' => 'guest-lecture-ai-ethics-2026',
                'summary' => 'Guest lecture discussing AI governance, fairness, and responsible system design.',
                'description' => 'An academic session on AI ethics frameworks and real-world policy implications.',
                'image_url' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80',
                'event_date' => '2026-03-24',
                'start_time' => '13:00:00',
                'end_time' => '15:00:00',
                'location' => 'Room 402, Building A',
                'event_type' => 'upcoming',
                'is_featured' => false,
            ],
            [
                'title' => 'Final Project Exhibition',
                'slug' => 'final-project-exhibition-2026',
                'summary' => 'Final-year project showcase for industry and campus visitors.',
                'description' => 'Students present capstone software products and demo outcomes to the public.',
                'image_url' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=800&q=80',
                'event_date' => '2026-04-10',
                'start_time' => '10:00:00',
                'end_time' => '18:00:00',
                'location' => 'Campus Courtyard',
                'event_type' => 'upcoming',
                'is_featured' => false,
            ],
            [
                'title' => 'Digital Dreams: Turning Ideas into Reality with Information Technology',
                'slug' => 'digital-dreams-major-it-exhibition-2025',
                'summary' => 'Major annual IT exhibition with student prototypes and partner attendance.',
                'description' => 'Last year\'s annual student showcase was a massive success, with over 500 attendees from the tech industry. Final-year students demonstrated software prototypes, interactive games, and IoT solutions.',
                'image_url' => '/style/images/newspage/itexhibition.png',
                'event_date' => '2025-10-20',
                'start_time' => '09:00:00',
                'end_time' => '17:00:00',
                'location' => 'Main Exhibition Hall',
                'event_type' => 'exhibition',
                'is_featured' => true,
            ],
            [
                'title' => '48-Hour Hackathon',
                'slug' => '48-hour-hackathon-2025',
                'summary' => 'Student showcase event where teams build sustainable tech solutions.',
                'description' => 'Over 50 teams competed to build sustainable tech solutions in 48 hours, supported by local startups and mentors.',
                'image_url' => '/style/images/newspage/hackathon.jpg',
                'event_date' => '2025-07-12',
                'start_time' => '09:00:00',
                'end_time' => '18:00:00',
                'location' => 'Innovation Hall, Block B',
                'event_type' => 'past',
                'is_featured' => false,
            ],
            [
                'title' => 'Guest Lecture: AWS Microservices',
                'slug' => 'guest-lecture-aws-microservices-2025',
                'summary' => 'A deep dive session on scalable cloud architecture and microservices.',
                'description' => 'Hosted by a lead architect from AWS, this session covered migration from monoliths to resilient microservice platforms.',
                'image_url' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80',
                'event_date' => '2025-12-05',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
                'location' => 'Auditorium A',
                'event_type' => 'past',
                'is_featured' => false,
            ],
            [
                'title' => 'Winter React & Node.js Bootcamp',
                'slug' => 'winter-react-nodejs-bootcamp-2026',
                'summary' => 'Weekend intensive where students built full-stack web applications.',
                'description' => 'Over 100 first and second-year students joined a practical full-stack bootcamp guided by mentors and alumni.',
                'image_url' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=800&q=80',
                'event_date' => '2026-01-20',
                'start_time' => '09:00:00',
                'end_time' => '17:00:00',
                'location' => 'Lab Complex',
                'event_type' => 'past',
                'is_featured' => false,
            ],
        ], ['slug'], [
            'title',
            'summary',
            'description',
            'image_url',
            'event_date',
            'start_time',
            'end_time',
            'location',
            'event_type',
            'is_featured',
            'updated_at',
        ]);
    }

    /**
     * Seed head-of-program and lecturer records used by About page.
     */
    private function seedLecturers(): void
    {
        $lecturers = [
            [
                'full_name' => 'Lawrence Adi Supriyono M.Pd',
                'role_title' => 'Head of Program',
                'photo_url' => '/style/images/home/mrlawtemp.jpeg',
                'bio' => 'Leads curriculum planning, academic quality, and strategic collaboration for the Software Engineering program.',
                'is_head_of_program' => true,
                'display_order' => 1,
            ],
            [
                'full_name' => 'Nicholas Kenny',
                'role_title' => 'Lecturer',
                'photo_url' => '/style/images/about/kenny.png',
                'bio' => 'Focuses on software architecture and backend engineering.',
                'is_head_of_program' => false,
                'display_order' => 1,
            ],
            [
                'full_name' => 'Stella Putri',
                'role_title' => 'Lecturer',
                'photo_url' => '/style/images/about/kenny.png',
                'bio' => 'Teaches secure software development and cloud operations.',
                'is_head_of_program' => false,
                'display_order' => 2,
            ],
            [
                'full_name' => 'Adrian Wijaya',
                'role_title' => 'Lecturer',
                'photo_url' => '/style/images/about/kenny.png',
                'bio' => 'Guides students in data engineering and analytics projects.',
                'is_head_of_program' => false,
                'display_order' => 3,
            ],
            [
                'full_name' => 'Farah Nabila',
                'role_title' => 'Lecturer',
                'photo_url' => '/style/images/about/kenny.png',
                'bio' => 'Specializes in UX engineering and human-centered product design.',
                'is_head_of_program' => false,
                'display_order' => 4,
            ],
            [
                'full_name' => 'Daniel Pratama',
                'role_title' => 'Lecturer',
                'photo_url' => '/style/images/about/kenny.png',
                'bio' => 'Mentors capstone teams in distributed systems and platform design.',
                'is_head_of_program' => false,
                'display_order' => 5,
            ],
            [
                'full_name' => 'Grace Felicia',
                'role_title' => 'Lecturer',
                'photo_url' => '/style/images/about/kenny.png',
                'bio' => 'Supports applied AI and machine learning initiatives.',
                'is_head_of_program' => false,
                'display_order' => 6,
            ],
            [
                'full_name' => 'Kevin Santoso',
                'role_title' => 'Lecturer',
                'photo_url' => '/style/images/about/kenny.png',
                'bio' => 'Focuses on DevOps, CI/CD, and software quality engineering.',
                'is_head_of_program' => false,
                'display_order' => 7,
            ],
            [
                'full_name' => 'Maya Kartika',
                'role_title' => 'Lecturer',
                'photo_url' => '/style/images/about/kenny.png',
                'bio' => 'Coordinates software project management and agile practices.',
                'is_head_of_program' => false,
                'display_order' => 8,
            ],
        ];

        foreach ($lecturers as $lecturer) {
            Lecturer::query()->updateOrCreate(
                [
                    'full_name' => $lecturer['full_name'],
                    'is_head_of_program' => $lecturer['is_head_of_program'],
                ],
                $lecturer
            );
        }
    }

    /**
     * Seed simple global settings for future dynamic usage.
     */
    private function seedSiteSettings(): void
    {
        $settings = [
            'program_name' => 'Software Engineering',
            'program_short_name' => 'SE UNIJI',
            'contact_email' => 'se@uniji.ac.id',
            'contact_phone' => '+62-21-555-0101',
            'campus_location' => 'JIT Campus, Main Hall',
        ];

        foreach ($settings as $key => $value) {
            SiteSetting::query()->updateOrCreate(
                ['setting_key' => $key],
                ['setting_value' => $value]
            );
        }
    }

    /**
     * Seed curriculum course rows used in the Curriculum course list panel.
     */
    private function seedCurriculumCourses(): void
    {
        CurriculumCourse::query()->delete();

        $semesterData = [
            [
                'year_label' => 'Year 1 (48 SKS)',
                'year_order' => 1,
                'semester_label' => 'Semester 1A',
                'semester_order' => 1,
                'courses' => [
                    ['name' => 'Religions of the World', 'credits' => 2, 'category' => 'university'],
                    ['name' => 'Introduction to Computing', 'credits' => 3, 'category' => 'university'],
                    ['name' => 'Applied Mathematics', 'credits' => 3, 'category' => 'university'],
                    ['name' => 'Academic Writing in English', 'credits' => 3, 'category' => 'university'],
                ],
            ],
            [
                'year_label' => 'Year 1 (48 SKS)',
                'year_order' => 1,
                'semester_label' => 'Semester 1B',
                'semester_order' => 2,
                'courses' => [
                    ['name' => 'Database Systems', 'credits' => 3, 'category' => 'it'],
                    ['name' => 'Programming Fundamentals', 'credits' => 3, 'category' => 'it'],
                    ['name' => 'Computer Networks', 'credits' => 3, 'category' => 'it'],
                ],
            ],
            [
                'year_label' => 'Year 1 (48 SKS)',
                'year_order' => 1,
                'semester_label' => 'Semester 2A',
                'semester_order' => 3,
                'courses' => [
                    ['name' => 'Statistics', 'credits' => 3, 'category' => 'university'],
                    ['name' => 'Indonesian Way of Life/Pancasila', 'credits' => 2, 'category' => 'university'],
                    ['name' => 'Object Oriented Programming', 'credits' => 3, 'category' => 'it'],
                    ['name' => 'Computer Architecture', 'credits' => 3, 'category' => 'it'],
                ],
            ],
            [
                'year_label' => 'Year 1 (48 SKS)',
                'year_order' => 1,
                'semester_label' => 'Semester 2B',
                'semester_order' => 4,
                'courses' => [
                    ['name' => 'Discrete Structure', 'credits' => 3, 'category' => 'it'],
                    ['name' => 'Data Structures & Algorithms', 'credits' => 3, 'category' => 'it'],
                    ['name' => 'Design Thinking & Innovation', 'credits' => 2, 'category' => 'university'],
                ],
            ],
            [
                'year_label' => 'Year 1 (48 SKS)',
                'year_order' => 1,
                'semester_label' => 'Semester 3',
                'semester_order' => 5,
                'courses' => [
                    ['name' => 'Intro to Business World', 'credits' => 0, 'category' => 'university'],
                    ['name' => 'Business Communication', 'credits' => 3, 'category' => 'university'],
                    ['name' => 'Software Engineering', 'credits' => 3, 'category' => 'software'],
                    ['name' => 'Software Project Management', 'credits' => 3, 'category' => 'software'],
                ],
            ],
            [
                'year_label' => 'Year 2 (53 SKS)',
                'year_order' => 2,
                'semester_label' => 'Semester 4A',
                'semester_order' => 6,
                'courses' => [
                    ['name' => 'Research Methodology & Journal Reading', 'credits' => 3, 'category' => 'university'],
                    ['name' => 'Software Requirements Engineering', 'credits' => 3, 'category' => 'software'],
                    ['name' => 'Software Quality', 'credits' => 3, 'category' => 'software'],
                    ['name' => 'Security Policy & Management', 'credits' => 3, 'category' => 'software'],
                ],
            ],
            [
                'year_label' => 'Year 2 (53 SKS)',
                'year_order' => 2,
                'semester_label' => 'Semester 4B',
                'semester_order' => 7,
                'courses' => [
                    ['name' => 'Applied Indonesian Language', 'credits' => 2, 'category' => 'university'],
                    ['name' => 'Software Engineering: Architecture & Design', 'credits' => 3, 'category' => 'software'],
                    ['name' => '3D Fundamentals', 'credits' => 3, 'category' => 'software'],
                    ['name' => 'Operating Systems', 'credits' => 3, 'category' => 'software'],
                ],
            ],
            [
                'year_label' => 'Year 2 (53 SKS)',
                'year_order' => 2,
                'semester_label' => 'Semester 5A',
                'semester_order' => 8,
                'courses' => [
                    ['name' => 'Civics', 'credits' => 2, 'category' => 'university'],
                    ['name' => 'Software Construction and Development', 'credits' => 3, 'category' => 'software'],
                    ['name' => 'Software Testing', 'credits' => 3, 'category' => 'software'],
                    ['name' => 'Information Security', 'credits' => 3, 'category' => 'software'],
                ],
            ],
            [
                'year_label' => 'Year 2 (53 SKS)',
                'year_order' => 2,
                'semester_label' => 'Semester 5B',
                'semester_order' => 9,
                'courses' => [
                    ['name' => 'Specialization Course 1', 'credits' => 3, 'category' => 'specialization'],
                    ['name' => 'Specialization Course 2', 'credits' => 3, 'category' => 'specialization'],
                    ['name' => 'Specialization Course 3', 'credits' => 3, 'category' => 'specialization'],
                    ['name' => 'Specialization Course 4', 'credits' => 2, 'category' => 'specialization'],
                ],
            ],
            [
                'year_label' => 'Year 2 (53 SKS)',
                'year_order' => 2,
                'semester_label' => 'Semester 6',
                'semester_order' => 10,
                'courses' => [
                    ['name' => 'Innovation and Entrepreneurship Boot Camp', 'credits' => 3, 'category' => 'university'],
                    ['name' => 'Good Corporate Governance and Anti Corruption', 'credits' => 3, 'category' => 'university'],
                    ['name' => 'Specialization Course', 'credits' => 2, 'category' => 'specialization'],
                ],
            ],
            [
                'year_label' => 'Year 3 (43 SKS + Extension)',
                'year_order' => 3,
                'semester_label' => 'Semester 7',
                'semester_order' => 11,
                'courses' => [
                    ['name' => 'MBKM Program I', 'credits' => 20, 'category' => 'mbkm'],
                    ['name' => 'Reporting and Consulting', 'credits' => 2, 'category' => 'mbkm'],
                ],
            ],
            [
                'year_label' => 'Year 3 (43 SKS + Extension)',
                'year_order' => 3,
                'semester_label' => 'Semester 8',
                'semester_order' => 12,
                'courses' => [
                    ['name' => 'MBKM Program II', 'credits' => 15, 'category' => 'mbkm'],
                    ['name' => 'Final Year Project Qualification', 'credits' => 6, 'category' => 'finalyear'],
                ],
            ],
            [
                'year_label' => 'Year 3 (43 SKS + Extension)',
                'year_order' => 3,
                'semester_label' => 'Semester 9',
                'semester_order' => 13,
                'courses' => [
                    ['name' => 'Other Certification / Class Retake', 'credits' => null, 'category' => 'finalyear'],
                    ['name' => 'Thesis / Prototype / Capstone / Other', 'credits' => null, 'category' => 'finalyear'],
                ],
            ],
        ];

        foreach ($semesterData as $semester) {
            foreach ($semester['courses'] as $courseOrder => $course) {
                CurriculumCourse::query()->create([
                    'year_label' => $semester['year_label'],
                    'year_order' => $semester['year_order'],
                    'semester_label' => $semester['semester_label'],
                    'semester_order' => $semester['semester_order'],
                    'course_name' => $course['name'],
                    'course_order' => $courseOrder + 1,
                    'credits' => $course['credits'],
                    'component_category' => $course['category'],
                ]);
            }
        }
    }

    /**
     * Seed credit distribution summary used by the curriculum credit panel.
     */
    private function seedCurriculumCreditComponents(): void
    {
        CurriculumCreditComponent::query()->delete();

        $components = [
            ['component_name' => 'University Course', 'total_credits' => 34, 'percentage' => 24, 'color_key' => 'university', 'display_order' => 1],
            ['component_name' => 'IT Course', 'total_credits' => 21, 'percentage' => 15, 'color_key' => 'it', 'display_order' => 2],
            ['component_name' => 'Software Engineering Course', 'total_credits' => 33, 'percentage' => 23, 'color_key' => 'software', 'display_order' => 3],
            ['component_name' => 'Specialization Course', 'total_credits' => 13, 'percentage' => 9, 'color_key' => 'specialization', 'display_order' => 4],
            ['component_name' => 'MBKM Program', 'total_credits' => 35, 'percentage' => 24, 'color_key' => 'mbkm', 'display_order' => 5],
            ['component_name' => 'Final Year Project', 'total_credits' => 8, 'percentage' => 6, 'color_key' => 'finalyear', 'display_order' => 6],
        ];

        foreach ($components as $component) {
            CurriculumCreditComponent::query()->create($component);
        }
    }

    /**
     * Seed all cards used by the Home student tabs.
     */
    private function seedStudentHighlights(): void
    {
        StudentHighlight::query()->delete();

        $rows = [
            ['tab_key' => 'orgs', 'title' => 'Dance Club', 'badge' => 'Arts & Culture', 'image_url' => '/style/images/home/danceclub.jpg', 'page_number' => 1, 'display_order' => 1],
            ['tab_key' => 'orgs', 'title' => 'Philanthropy', 'badge' => 'Social', 'image_url' => '/style/images/home/philanthropy.jpg', 'page_number' => 1, 'display_order' => 2],
            ['tab_key' => 'orgs', 'title' => 'Mandarin', 'badge' => 'Language', 'image_url' => '/style/images/home/mandarinclub.jpg', 'page_number' => 1, 'display_order' => 3],
            ['tab_key' => 'orgs', 'title' => 'MUN Club', 'badge' => 'Academic', 'image_url' => '/style/images/home/munclub.jpg', 'page_number' => 1, 'display_order' => 4],
            ['tab_key' => 'orgs', 'title' => 'Futsal Club', 'badge' => 'Sports', 'image_url' => '/style/images/home/futsalclub.jpg', 'page_number' => 2, 'display_order' => 5],
            ['tab_key' => 'orgs', 'title' => 'Media Club', 'badge' => 'Creative', 'image_url' => '/style/images/home/mediaclub.png', 'page_number' => 2, 'display_order' => 6],
            ['tab_key' => 'orgs', 'title' => 'Music Club', 'badge' => 'Arts & Culture', 'image_url' => '/style/images/home/musicclub.jpg', 'page_number' => 2, 'display_order' => 7],
            ['tab_key' => 'orgs', 'title' => 'Art Club', 'badge' => 'Creative', 'image_url' => '/style/images/home/artclub.jpg', 'page_number' => 2, 'display_order' => 8],

            ['tab_key' => 'achieve', 'title' => 'CodeFest 2026 Grand Champions', 'badge' => 'International Hackathon', 'description' => 'Our team developed a revolutionary AI-powered Sign Language Translator, securing first place among 50 international universities. The program now helps over 1,000 users.', 'image_url' => 'https://images.unsplash.com/photo-1542626991-cbc4e32524cc?auto=format&fit=crop&w=800&q=80', 'display_order' => 101],
            ['tab_key' => 'achieve', 'title' => 'ACM Paper Best Paper Award', 'badge' => 'Academic Excellence', 'description' => 'Our research paper, Machine Learning in Agriculture: A Predictive Model for Optimizing Crop Yield, received the best paper award and was published in the ACM Digital Library.', 'image_url' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=800&q=80', 'display_order' => 102],
            ['tab_key' => 'achieve', 'title' => 'Dean\'s List 2026 Winner', 'badge' => 'Consistent Excellence', 'description' => 'Maintained a GPA of 3.9/4.0 throughout the academic year in the Software Engineering Department.', 'image_url' => 'https://images.unsplash.com/photo-1568992688065-536aad8a12f6?auto=format&fit=crop&w=800&q=80', 'display_order' => 103],
            ['tab_key' => 'achieve', 'title' => 'National Data Science 1st Place Winner', 'badge' => 'Predictive Analytics Challenge', 'description' => 'Our team, DataWizards, secured first place for developing a predictive model with 95% accuracy.', 'image_url' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80', 'display_order' => 104],

            ['tab_key' => 'acts', 'title' => '48-Hour Hackathon', 'badge' => 'Student Activity Showcase', 'description' => 'Over 50 teams competed to build sustainable tech solutions in just 48 hours. Students created prototypes ranging from carbon-tracking apps to smart-grid energy monitors.', 'image_url' => '/style/images/newspage/hackathon.jpg', 'display_order' => 201],
            ['tab_key' => 'acts', 'title' => 'Winter React & Node.js Bootcamp', 'badge' => 'Student Activity Showcase', 'description' => 'A weekend intensive where more than 100 first and second-year students built full-stack web applications, guided by senior mentors and alumni.', 'image_url' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=800&q=80', 'display_order' => 202],

            ['tab_key' => 'projs', 'title' => 'Optimizing Face Recognition Attendance Systems in High-Density Campus Environments', 'badge' => 'Student Presentation', 'meta_label' => 'Mar 2026', 'secondary_meta' => 'Dr. Nicholas Kenny', 'description' => 'Presented at the 14th IEEE International Conference on Smart Education. The paper explores the H1a hypothesis regarding user acceptance rates among university students.', 'display_order' => 301],
            ['tab_key' => 'projs', 'title' => 'NIST Cybersecurity Framework 2.0: A Case Study on GitLab Infrastructure', 'badge' => 'Student Presentation', 'meta_label' => 'Apr 2026', 'secondary_meta' => 'Dr. Stella Putri', 'description' => 'A keynote seminar dissecting the cloud migration and compliance audit strategies for modern DevOps platforms, referencing GDPR and Indonesian privacy laws.', 'display_order' => 302],
        ];

        foreach ($rows as $row) {
            StudentHighlight::query()->create($row);
        }
    }
}
