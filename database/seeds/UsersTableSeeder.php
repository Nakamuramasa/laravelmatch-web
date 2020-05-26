<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Roger',
            'email' => 'roger@example.com',
            'sex' => '0',
            'self_introduction' => 'I am Roger',
            'img_name' => 'sample001.jpg',
            'password' => Hash::make('rogertest'),
            ],
            ['name' => 'Bobby',
            'email' => 'bobby@example.com',
            'sex' => '1',
            'self_introduction' => 'I am Bobby',
            'img_name' => 'sample002.jpg',
            'password' => Hash::make('bobbytest'),
            ],
            ['name' => 'Kody',
            'email' => 'kody@example.com',
            'sex' => '0',
            'self_introduction' => 'I am Kody',
            'img_name' => 'sample003.jpg',
            'password' => Hash::make('kodytest'),
            ],
            ['name' => 'Joss',
            'email' => 'joss@example.com',
            'sex' => '1',
            'self_introduction' => 'I am Joss',
            'img_name' => 'sample004.jpg',
            'password' => Hash::make('Josstest'),
            ],
        ]);
    }
}
