<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Futebol',
                'description' => 'Tudo sobre o esporte mais amado no mundo.',
                'active' => 1
            ]
        ]);
    }
}
