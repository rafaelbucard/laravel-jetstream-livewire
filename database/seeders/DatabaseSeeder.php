<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('info')->insert([
            'nome'=> "joão",
            'cidade'=> 'Niterói',
            'bairro'=> 'Santa Rosa',
            'endereco'=> 'Rua do Canal 52',
            'cep'=> '21044870',
            'nascimento'=> date('Y-m-d')
        ]);

        DB::table('info')->insert([
            'nome'=> "Fabio",
            'cidade'=> 'Niterói',
            'bairro'=> 'Santa Rosa',
            'endereco'=> 'Rua do Canal 52',
            'cep'=> '21044870',
            'nascimento'=> date('Y-m-d')
        ]);
        DB::table('info')->insert([
            'nome'=> "Sabrina",
            'cidade'=> 'Niterói',
            'bairro'=> 'Santa Rosa',
            'endereco'=> 'Rua do Canal 52',
            'cep'=> '21044870',
            'nascimento'=> date('Y-m-d')
        ]);

        DB::table('info')->insert([
            'nome'=> "Danielle",
            'cidade'=> 'Niterói',
            'bairro'=> 'Santa Rosa',
            'endereco'=> 'Rua do Canal 52',
            'cep'=> '21044870',
            'nascimento'=> date('Y-m-d')
        ]);

        DB::table('info')->insert([
            'nome'=> "Jorge",
            'cidade'=> 'Niterói',
            'bairro'=> 'Santa Rosa',
            'endereco'=> 'Rua do Canal 52',
            'cep'=> '21044870',
            'nascimento'=> date('Y-m-d')
        ]);

        DB::table('contatos')->insert([
            'id_info'=> 3,
            'tipo'=> "E-mail",
            'contato'=> 'user@dominio.com.br',
        ]);
        DB::table('contatos')->insert([
            'id_info'=> 4,
            'tipo'=> "E-mail",
            'contato'=> 'user@dominio.com.br',
        ]);
        DB::table('contatos')->insert([
            'id_info'=> 5,
            'tipo'=> "E-mail",
            'contato'=> 'user@dominio.com.br',
        ]);
        DB::table('contatos')->insert([
            'id_info'=> 6,
            'tipo'=> "E-mail",
            'contato'=> 'user@dominio.com.br',
        ]);
        DB::table('contatos')->insert([
            'id_info'=> 7,
            'tipo'=> "E-mail",
            'contato'=> 'user@dominio.com.br',
        ]);
        DB::table('contatos')->insert([
            'id_info'=> 1,
            'tipo'=> "E-mail",
            'contato'=> 'user@dominio.com.br',
        ]);
        DB::table('contatos')->insert([
            'id_info'=> 2,
            'tipo'=> "E-mail",
            'contato'=> 'user@dominio.com.br',
        ]);
        DB::table('contatos')->insert([
            'id_info'=> 5,
            'tipo'=> "E-mail",
            'contato'=> 'user@dominio.com.br',
        ]);
        DB::table('contatos')->insert([
            'id_info'=> 6,
            'tipo'=> "E-mail",
            'contato'=> 'user@dominio.com.br',
        ]);
        DB::table('contatos')->insert([
            'id_info'=> 7,
            'tipo'=> "E-mail",
            'contato'=> 'user@dominio.com.br',
        ]);
       
    }
}
