<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->toArray());

        $user = User::find(1);
        $user->name = "Tandy";
        $user->email = "lx1986tao16@gmail.com";
        $user->password = bcrypt('admin123');
        $user->is_admin = true;
        $user->save();
    }
}
