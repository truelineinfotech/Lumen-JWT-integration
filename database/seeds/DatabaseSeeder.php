<?php
use Illuminate\Database\Eloquent\Model;
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
    	 Model::unguard();
        // $this->call('UsersTableSeeder');
        // create 50 users using the user factory
        factory(App\User::class, 50)->create();
        Model::reguard();
    }
}
