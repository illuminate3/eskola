<?php


use App\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder {

        public function run()
        {
            DB::table('Courses')->delete();

            Course::create([
                'title'     => 'New borns',
                'body'      => 'Longer description',
                'excerpt'   => 'Lessons for newborns'
            ]);

            Course::create([
                'title'     => 'Prayer & Fasting',
                'body'      => 'Longer description',
                'excerpt'   => 'Lessons About prayer and fasting'
            ]);
            Course::create([
                'title'     => 'Managing Gods finances',
                'body'      => 'Longer description, Next bonus, Third bonus',
                'excerpt'   => 'Lessons for newborns'
            ]);
            Course::create([
                'title'     => 'Loving marriage',
                'body'      => 'Longer description',
                'excerpt'   => 'Loving marriage course, before marriage!'
            ]);
            Course::create([
                'title'     => 'Discipleship',
                'body'      => 'Longer description',
                'excerpt'   => 'Become true disciple of your Father!'
            ]);

        }

}
