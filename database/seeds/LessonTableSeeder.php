<?php


use App\Lesson;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonTableSeeder extends Seeder {

        public function run()
        {
            DB::table('lessons')->delete();

            Lesson::create([
                'course_id'     => '1',
                'title'         => 'Title about lesson One',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about first part',
                'order'         => '1'
            ]);

            Lesson::create([
                'course_id'     => '1',
                'title'         => 'Title about lesson Two',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about second part',
                'order'         => '2'
            ]);
            Lesson::create([
                'course_id'     => '1',
                'title'         => 'Title about lesson Three',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about third part',
                'order'         => '3'
            ]);
            Lesson::create([
                'course_id'     => '1',
                'title'         => 'Title about lesson Fourth',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about fourth part',
                'order'         => '4'
            ]);
            Lesson::create([
                'course_id'     => '1',
                'title'         => 'Title about lesson Fifth',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about fifth part',
                'order'         => '5'
            ]);
            Lesson::create([
                'course_id'     => '1',
                'title'         => 'Title about lesson Sixth',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about sixth part',
                'order'         => '6'
            ]);
            Lesson::create([
                'course_id'     => '1',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '7'
            ]);


            Lesson::create([
                'course_id'     => '2',
                'title'         => 'Title about lesson One',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about first part',
                'order'         => '1'
            ]);

            Lesson::create([
                'course_id'     => '2',
                'title'         => 'Title about lesson Two',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about second part',
                'order'         => '2'
            ]);
            Lesson::create([
                'course_id'     => '2',
                'title'         => 'Title about lesson Three',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about third part',
                'order'         => '2'
            ]);
            Lesson::create([
                'course_id'     => '2',
                'title'         => 'Title about lesson Fourth',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about fourth part',
                'order'         => '4'
            ]);
            Lesson::create([
                'course_id'     => '3',
                'title'         => 'Title about lesson Fifth',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about fifth part',
                'order'         => '1'
            ]);
            Lesson::create([
                'course_id'     => '3',
                'title'         => 'Title about lesson Sixth',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about sixth part',
                'order'         => '2'
            ]);
            Lesson::create([
                'course_id'     => '3',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '4'

            ]);
            Lesson::create([
                'course_id'     => '3',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '5'

            ]);
            Lesson::create([
                'course_id'     => '4',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '1'

            ]);
            Lesson::create([
                'course_id'     => '4',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '2'

            ]);
            Lesson::create([
                'course_id'     => '4',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '3'

            ]);
            Lesson::create([
                'course_id'     => '4',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '4'

            ]);
            Lesson::create([
                'course_id'     => '4',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '5'

            ]);
            Lesson::create([
                'course_id'     => '4',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '6'

            ]);

            Lesson::create([
                'course_id'     => '5',
                'title'         => 'Title about lesson One',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about first part',
                'order'         => '1'
            ]);

            Lesson::create([
                'course_id'     => '5',
                'title'         => 'Title about lesson Two',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about second part',
                'order'         => '2'
            ]);
            Lesson::create([
                'course_id'     => '5',
                'title'         => 'Title about lesson Three',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about third part',
                'order'         => '3'
            ]);
            Lesson::create([
                'course_id'     => '5',
                'title'         => 'Title about lesson Fourth',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about fourth part',
                'order'         => '4'
            ]);
            Lesson::create([
                'course_id'     => '5',
                'title'         => 'Title about lesson Fifth',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about fifth part',
                'order'         => '5'
            ]);
            Lesson::create([
                'course_id'     => '5',
                'title'         => 'Title about lesson Sixth',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about sixth part',
                'order'         => '6'
            ]);
            Lesson::create([
                'course_id'     => '5',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '7'
            ]);
            Lesson::create([
                'course_id'     => '5',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '8'
            ]);
            Lesson::create([
                'course_id'     => '5',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '9'
            ]);
            Lesson::create([
                'course_id'     => '5',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '10'
            ]);
            Lesson::create([
                'course_id'     => '5',
                'title'         => 'Title about lesson Seventh',
                'body'          => 'Long text',
                'excerpt'       => 'This lesson is about seventh part',
                'order'         => '11'
            ]);

        }

}
