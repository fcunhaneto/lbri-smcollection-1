<?php

namespace Database\Seeders;

use App\Models\UserList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'list' => 'Interessado',
            ],
            [
                'user_id' => 1,
                'list' => 'Acompanhando',
            ],
            [
                'user_id' => 1,
                'list' => 'Aguardando nova temporada',
            ],
            [
                'user_id' => 1,
                'list' => 'Pausado',
            ],
        ];

        UserList::insert($data);
    }
}
