<?php

use Illuminate\Database\Seeder;

class ThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
            [
            'id' => '1',
            'title' => '少しだけ嘘をついてください。',
            'created_at' => now(),
            'updated_at' => now(),
                ],
                [
            'id' => '2',
            'name' => '例2',
            'created_at' => now(),
            'updated_at' => now(),
                ],
                [
            'id' => '3',
            'name' => '例3aaaaaaaaaaaaaa',
            'created_at' => now(),
            'updated_at' => now(),
                ]
            ]);
    }
}
