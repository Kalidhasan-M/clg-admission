<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;

class HomeSeeder extends Seeder
{
    public function run()
    {
        $homes = [
            ['banner_image' => '01JM3YNY9W189QWJ6RQJCAFWVA.png', 'image' => '01JM3YNY9W189QWJ6RQJCAFWVA.png',
            'student_name' => 'Welcome to SKAASC',
            'testimonial' => 'Sri Krishnasamy Arts and Science College affiliated to Madurai Kamaraj University was established in 2014 by Sri Krishnasamy Educational and Charitable Trust, Metttamalai, Sattur.  It is an ISO Certified Educational Institution, Shri K.Raju, an industrialist is the chairman of the college & Thiru.R.Muthukumar the Secretary of the college.  The college is situated at Mettamalai, Sattur. It has a beautiful campus sprawling around 11 acres with an excellent infrastructure. Our institute imparting quality education imbibing scientific and artistic knowledge and our institution focusing on innovation teaching, social responsibility and giving employability skills. Our institution offers 12 UG courses and 5 PG courses. Every year new Course have been brought into an action in this line up a new courses Forensic science & Economics is going to be introduced for the upcoming year 2023 -2024 . The basic motto of the institution is to educate all in this rural area at  lowest cost with highest quality education, more than 500 students from various villages are getting benefitted.'],
        ];

        foreach ($homes as $home) {
            Home::create($home);
        }
    }
}