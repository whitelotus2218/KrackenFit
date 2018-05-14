<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Pablo Contreras', 
            'email' => 'pablo_contreras_1997@outlook.com', 
            'password' => bcrypt('Lapatita9'),
        ]);
        /*DB::table('atletas')->insert([
            factory(App\Atletum::class)->create();
        ]);*/
    }
}
