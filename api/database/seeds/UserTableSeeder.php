<?php

use Illuminate\Database\Seeder;
use LineXTI\Models\Client;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\LineXTI\Models\User::class, 10)->create()->each(function($u) {
            $u->client()->save(factory(Client::class)->make());
        });
    }
}
