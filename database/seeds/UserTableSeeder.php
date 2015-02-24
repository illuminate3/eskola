<?php


use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
