<?php

use App\Course;
use App\Lesson;
use App\Test;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');

		$this->command->info('User table seeded!');

		$this->call('CourseTableSeeder');

		$this->command->info('Course table seeded!');

		$this->call('LessonTableSeeder');

		$this->command->info('Lesson table seeded! :)');

		$this->call('TestTableSeeder');

		$this->command->info('Test table seeded!');

	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create([
			'email'     => 'rolands.zeltins@gmail.com',
			'password'  => '123123',
			'name'      => 'Rolands',
			'surename'  => 'Zeltiņš',
			'phone'     => '+37127831183',
			'country'   => 'Latvija',
			'city'      => 'Ogre'
		]);

		User::create([
			'email'     => 'rolands.zeltins@gmail.lv',
			'password'  => '123123',
			'name'      => 'Rolands',
			'surename'  => 'Zeltiņš',
			'phone'     => '+37127831181',
			'country'   => 'Latvija',
			'city'      => 'Lielvārde'
		]);
		User::create([
			'email'     => 'janis.celherts@gmail.com',
			'password'  => '123123',
			'name'      => 'Jānis',
			'surename'  => 'Celherts',
			'phone'     => '+37127831185',
			'country'   => 'Latvija',
			'city'      => 'Liepāja'
		]);
		User::create([
			'email'     => 'toms.tidemanis@gmail.com',
			'password'  => '123123',
			'name'      => 'Toms',
			'surename'  => 'Tīdemanis',
			'phone'     => '+37127831113',
			'country'   => 'Latvija',
			'city'      => 'Rīga'
		]);
		User::create([
			'email'     => 'zane.zelta@gmail.com',
			'password'  => '123123',
			'name'      => 'Zane',
			'surename'  => 'Zeltiņa',
			'phone'     => '+3712721183',
			'country'   => 'Latvija',
			'city'      => 'Ogre'
		]);

	}

}

class CourseTableSeeder extends Seeder {

	public function run()
	{
		DB::table('courses')->delete();

		Course::create([
			'course_title'     => 'New borns',
			'course_body'      => 'Longer description',
			'course_excerpt'   => 'Lessons for newborns'
		]);

		Course::create([
			'course_title'     => 'Prayer & Fasting',
			'course_body'      => 'Longer description',
			'course_excerpt'   => 'Lessons About prayer and fasting'
		]);
		Course::create([
			'course_title'     => 'Managing Gods finances',
			'course_body'      => 'Longer description, Next bonus, Third bonus',
			'course_excerpt'   => 'Lessons for newborns'
		]);
		Course::create([
			'course_title'     => 'Loving marriage',
			'course_body'      => 'Longer description',
			'course_excerpt'   => 'Loving marriage course, before marriage!'
		]);
		Course::create([
			'course_title'     => 'Discipleship',
			'course_body'      => 'Longer description',
			'course_excerpt'   => 'Become true disciple of your Father!'
		]);

	}

}


class LessonTableSeeder extends Seeder {

	public function run()
	{
		DB::table('lessons')->delete();

		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson One',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about first part',
			'lesson_order'         => '1'
		]);

		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Two',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about second part',
			'lesson_order'         => '2'
		]);
		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Three',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about third part',
			'lesson_order'         => '3'
		]);
		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Fourth',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about fourth part',
			'lesson_order'         => '4'
		]);
		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Fifth',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about fifth part',
			'lesson_order'         => '5'
		]);
		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Sixth',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about sixth part',
			'lesson_order'         => '6'
		]);
		Lesson::create([
			'course_id'     => '1',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '7'
		]);


		Lesson::create([
			'course_id'     => '2',
			'lesson_title'         => 'Title about lesson One',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about first part',
			'lesson_order'         => '1'
		]);

		Lesson::create([
			'course_id'     => '2',
			'lesson_title'         => 'Title about lesson Two',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about second part',
			'lesson_order'         => '2'
		]);
		Lesson::create([
			'course_id'     => '2',
			'lesson_title'         => 'Title about lesson Three',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about third part',
			'lesson_order'         => '2'
		]);
		Lesson::create([
			'course_id'     => '2',
			'lesson_title'         => 'Title about lesson Fourth',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about fourth part',
			'lesson_order'         => '4'
		]);
		Lesson::create([
			'course_id'     => '3',
			'lesson_title'         => 'Title about lesson Fifth',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about fifth part',
			'lesson_order'         => '1'
		]);
		Lesson::create([
			'course_id'     => '3',
			'lesson_title'         => 'Title about lesson Sixth',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about sixth part',
			'lesson_order'         => '2'
		]);
		Lesson::create([
			'course_id'     => '3',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '4'

		]);
		Lesson::create([
			'course_id'     => '3',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '5'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '1'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '2'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '3'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '4'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '5'

		]);
		Lesson::create([
			'course_id'     => '4',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '6'

		]);

		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson One',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about first part',
			'lesson_order'         => '1'
		]);

		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Two',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about second part',
			'lesson_order'         => '2'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Three',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about third part',
			'lesson_order'         => '3'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Fourth',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about fourth part',
			'lesson_order'         => '4'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Fifth',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about fifth part',
			'lesson_order'         => '5'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Sixth',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about sixth part',
			'lesson_order'         => '6'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '7'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '8'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '9'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '10'
		]);
		Lesson::create([
			'course_id'     => '5',
			'lesson_title'         => 'Title about lesson Seventh',
			'lesson_body'          => 'Long text',
			'lesson_excerpt'       => 'This lesson is about seventh part',
			'lesson_order'         => '11'
		]);

	}

}




class TestTableSeeder extends Seeder {

	public function run()
	{
		DB::table('tests')->delete();

		Test::create([
			'lesson_id' => '1',
			'test_title' => '1 Fist test',
			'test_body' => '1. Test questions'
		]);

		Test::create([
			'lesson_id' => '2',
			'test_title' => '2 Second test',
			'test_body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '3',
			'test_title' => '3 Fist test',
			'test_body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '4',
			'test_title' => '4 Fist test',
			'test_body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '5',
			'test_title' => '5 Fist test',
			'test_body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '6',
			'test_title' => '6 Fist test',
			'test_body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '7',
			'test_title' => '7 Fist test',
			'test_body' => '1. Test questions'
		]);


		Test::create([
			'lesson_id' => '8',
			'test_title' => '8 Fist test',
			'test_body' => '1. Test questions'
		]);

		Test::create([
			'lesson_id' => '9',
			'test_title' => '9 Second test',
			'test_body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '10',
			'test_title' => '10 Third test',
			'test_body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '11',
			'test_title' => '11 Forth test',
			'test_body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '12',
			'test_title' => '12 ist test',
			'test_body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '13',
			'test_title' => '13 Second test',
			'test_body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '14',
			'test_title' => '14 Fist test',
			'test_body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '15',
			'test_title' => '15 Fist test',
			'test_body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '16',
			'test_title' => '16 Fist test',
			'test_body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '17',
			'test_title' => '17 Fist test',
			'test_body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '18',
			'test_title' => '18 Fist test',
			'test_body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '19',
			'test_title' => '19 Fist test',
			'test_body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '20',
			'test_title' => '20 Fist test',
			'test_body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '21',
			'test_title' => '21 Fist test',
			'test_body' => 'Test questions'

		]);

		Test::create([
			'lesson_id' => '22',
			'test_title' => '22  Fist test',
			'test_body' => 'Test questions'
		]);

		Test::create([
			'lesson_id' => '23',
			'test_title' => '23 Fist test',
			'test_body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '24',
			'test_title' => '24 Fist test',
			'test_body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '25',
			'test_title' => '25 Fist test',
			'test_body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '26',
			'test_title' => '26Fist test',
			'test_body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '27',
			'test_title' => '27 Fist test',
			'test_body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '28',
			'test_title' => '28 Fist test',
			'test_body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '29',
			'test_title' => '29 Fist test',
			'test_body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '30',
			'test_title' => '30 Fist test',
			'test_body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '31',
			'test_title' => '31 Fist test',
			'test_body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '32',
			'test_title' => '32 Fist test',
			'test_body' => 'Test questions'
		]);

	}

}