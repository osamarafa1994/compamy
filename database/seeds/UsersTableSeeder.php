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
      $json = file_get_contents(__DIR__ . '\json-dump\users.json');

      $userr = json_decode($json);

      foreach ((array)$userr as $user){
          DB::table('users')->insert([
              'id' => $user->id,
              'name' => $user->name,
              'role_id' => $user->role_id,
              'company_id' => $user->company_id,
              'address' => $user->address,
              'phone' => $user->phone,
              'email' => $user->email,
              'password' => $user->password,
              'remember_token' => $user->remember_token,
              'created_at' => $user->created_at,
              'updated_at' => $user->updated_at
          ]);
      }

    }
}
