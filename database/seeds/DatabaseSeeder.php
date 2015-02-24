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




class TestTableSeeder extends Seeder {

	public function run()
	{
		DB::table('tests')->delete();

		Test::create([
			'lesson_id' => '1',
			'title' => '1 Fist test',
			'body' => '1. Test questions'
		]);

		Test::create([
			'lesson_id' => '2',
			'title' => '2 Second test',
			'body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '3',
			'title' => '3 Fist test',
			'body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '4',
			'title' => '4 Fist test',
			'body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '5',
			'title' => '5 Fist test',
			'body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '6',
			'title' => '6 Fist test',
			'body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '7',
			'title' => '7 Fist test',
			'body' => '1. Test questions'
		]);


		Test::create([
			'lesson_id' => '8',
			'title' => '8 Fist test',
			'body' => '1. Test questions'
		]);

		Test::create([
			'lesson_id' => '9',
			'title' => '9 Second test',
			'body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '10',
			'title' => '10 Third test',
			'body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '11',
			'title' => '11 Forth test',
			'body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '12',
			'title' => '12 ist test',
			'body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '13',
			'title' => '13 Second test',
			'body' => '1. Test questions'
		]);
		Test::create([
			'lesson_id' => '14',
			'title' => '14 Fist test',
			'body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '15',
			'title' => '15 Fist test',
			'body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '16',
			'title' => '16 Fist test',
			'body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '17',
			'title' => '17 Fist test',
			'body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '18',
			'title' => '18 Fist test',
			'body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '19',
			'title' => '19 Fist test',
			'body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '20',
			'title' => '20 Fist test',
			'body' => 'Test questions'

		]);
		Test::create([
			'lesson_id' => '21',
			'title' => '21 Fist test',
			'body' => 'Test questions'

		]);

		Test::create([
			'lesson_id' => '22',
			'title' => '22  Fist test',
			'body' => 'Test questions'
		]);

		Test::create([
			'lesson_id' => '23',
			'title' => '23 Fist test',
			'body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '24',
			'title' => '24 Fist test',
			'body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '25',
			'title' => '25 Fist test',
			'body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '26',
			'title' => '26Fist test',
			'body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '27',
			'title' => '27 Fist test',
			'body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '28',
			'title' => '28 Fist test',
			'body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '29',
			'title' => '29 Fist test',
			'body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '30',
			'title' => '30 Fist test',
			'body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '31',
			'title' => '31 Fist test',
			'body' => 'Test questions'
		]);
		Test::create([
			'lesson_id' => '32',
			'title' => '32 Fist test',
			'body' => 'Test questions'
		]);

	}

}