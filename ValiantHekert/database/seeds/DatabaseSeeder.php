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
        // create pre-created users for login and stuff
        App\Gebruikers::create([
            'id' => 0,
            'gebruiker' => 'admin',
            'wachtwoord' => bcrypt('toor'),
            'email' => 'administrator@$this->site.nl'
        ]);

        // create filler data
        factory(App\Gebruikers::class, 25)->create();
        factory(App\Berichten::class, 500)->create();
    }
}
