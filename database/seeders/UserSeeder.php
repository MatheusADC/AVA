<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Verificar se o usuário está cadastrado no banco de dados
        if(!User::where('email', 'teste@teste.com')->first()){
            // Cadastrar o usuário
            User::create([
                'name' => 'Teste',
                'email' => 'teste@teste.com',
                'password' => Hash::make('passsword'),
            ]);
        }

        // Se não encontrar o registro com o e-mail, cadastra o registro no BD
        User::firstOrCreate(
            ['email' => 'teste2@teste.com'],
            ['name' => 'Teste2', 'email' => 'teste2@teste.com', 'password' => Hash::make('passsword')]
        );

         User::firstOrCreate(
            ['email' => 'teste3@teste.com'],
            ['name' => 'Teste3', 'email' => 'teste3@teste.com', 'password' => Hash::make('passsword')]
        );

         User::firstOrCreate(
            ['email' => 'teste4@teste.com'],
            ['name' => 'Teste4', 'email' => 'teste4@teste.com', 'password' => Hash::make('passsword')]
        );
    }
}
