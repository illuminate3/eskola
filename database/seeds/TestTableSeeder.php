<?php


use App\Test;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestTableSeeder extends Seeder {

        public function run()
        {
            DB::table('tests')->delete();

            Test::create([
                'lesson_id' => '1',
                'title' => 'Fist test',
                'body' => '1. Test questions'
            ]);

            Test::create([
                'lesson_id' => '2',
                'title' => 'Second test',
                'body' => '1. Test questions'
            ]);
            Test::create([
                'lesson_id' => '3',
                'title' => 'Fist test',
                'body' => '1. Test questions'
            ]);
            Test::create([
                'lesson_id' => '4',
                'title' => 'Fist test',
                'body' => '1. Test questions'
            ]);
            Test::create([
                'lesson_id' => '5',
                'title' => 'Fist test',
                'body' => '1. Test questions'
            ]);
            Test::create([
                'lesson_id' => '6',
                'title' => 'Fist test',
                'body' => '1. Test questions'
            ]);
            Test::create([
                'lesson_id' => '7',
                'title' => 'Fist test',
                'body' => '1. Test questions'
            ]);


            Test::create([
                'lesson_id' => '8',
                'title' => 'Fist test',
                'body' => '1. Test questions'
            ]);

            Test::create([
                'lesson_id' => '9',
                'title' => 'Second test',
                'body' => '1. Test questions'
            ]);
            Test::create([
                'lesson_id' => '10',
                'title' => 'Third test',
                'body' => '1. Test questions'
            ]);
            Test::create([
                'lesson_id' => '11',
                'title' => 'Forth test',
                'body' => '1. Test questions'
            ]);
            Test::create([
                'lesson_id' => '12',
                'title' => 'Fist test',
                'body' => '1. Test questions'
            ]);
            Test::create([
                'lesson_id' => '13',
                'title' => 'Second test',
                'body' => '1. Test questions'
            ]);
            Test::create([
                'lesson_id'     => '14',
                'title'         => 'Fist test',
                'body'          => 'Test questions'

            ]);
            Test::create([
                'lesson_id'     => '15',
                'title'         => 'Fist test',
                'body'          => 'Test questions'

            ]);
            Test::create([
                'lesson_id'     => '16',
                'title'         => 'Fist test',
                'body'          => 'Test questions'

            ]);
            Test::create([
                'lesson_id'     => '17',
                'title'         => 'Fist test',
                'body'          => 'Test questions'

            ]);
            Test::create([
                'lesson_id'     => '18',
                'title'         => 'Fist test',
                'body'          => 'Test questions'

            ]);
            Test::create([
                'lesson_id'     => '19',
                'title'         => 'Fist test',
                'body'          => 'Test questions'

            ]);
            Test::create([
                'lesson_id'     => '20',
                'title'         => 'Fist test',
                'body'          => 'Test questions'

            ]);
            Test::create([
                'lesson_id'     => '21',
                'title'         => 'Fist test',
                'body'          => 'Test questions'

            ]);

            Test::create([
                'lesson_id'     => '22',
                'title'         => 'Fist test',
                'body'          => 'Test questions'
            ]);

            Test::create([
                'lesson_id'     => '23',
                'title'         => 'Fist test',
                'body'          => 'Test questions'
            ]);
            Test::create([
                'lesson_id'     => '24',
                'title'         => 'Fist test',
                'body'          => 'Test questions'
            ]);
            Test::create([
                'lesson_id'     => '25',
                'title'         => 'Fist test',
                'body'          => 'Test questions'
            ]);
            Test::create([
                'lesson_id'     => '26',
                'title'         => 'Fist test',
                'body'          => 'Test questions'
            ]);
            Test::create([
                'lesson_id'     => '27',
                'title'         => 'Fist test',
                'body'          => 'Test questions'
            ]);
            Test::create([
                'lesson_id'     => '28',
                'title'         => 'Fist test',
                'body'          => 'Test questions'
            ]);
            Test::create([
                'lesson_id'     => '29',
                'title'         => 'Fist test',
                'body'          => 'Test questions'
            ]);
            Test::create([
                'lesson_id'     => '30',
                'title'         => 'Fist test',
                'body'          => 'Test questions'
            ]);
            Test::create([
                'lesson_id'     => '31',
                'title'         => 'Fist test',
                'body'          => 'Test questions'
            ]);
            Test::create([
                'lesson_id'     => '32',
                'title'         => 'Fist test',
                'body'          => 'Test questions'
            ]);

        }

}
