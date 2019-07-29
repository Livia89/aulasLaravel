<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'name'=> 'Lívia3',
          'email'=> 'admin@mail.com',
          'password'=> bcrypt('123456')
        ];

        if(User::where('email', '=', $data['email'])->count()){
          $user = User::where('email', '=', $data['email'])->first();
          $user->update($data);
          echo "Usuario alterado";
        }else{
            User::create($data);
          echo "Usuario Criado";
        }
    }
}
