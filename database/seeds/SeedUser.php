<?php

use Illuminate\Database\Seeder;

class SeedUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class)->create([
            'name' => 'free dareen',
            'password' => bcrypt('frituur')
        ]);
    }
}
