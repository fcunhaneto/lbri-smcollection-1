<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            [
                'name' => 'Francisco Cunha Neto',
                'email' => 'fcunhaneto@gmail.com',
                'password' => '$2y$10$Ted4wfCQyyK2oV3UqVBj8.IB5ZhD7P6c7Ehtp/CI13UnO/HlDtw9O',
                'role' => 'admin',
            ],
            [
                'name' => 'Erica Cunha',
                'email' => 'erica@gmail.com',
                'password' => '$2y$10$Ted4wfCQyyK2oV3UqVBj8.IB5ZhD7P6c7Ehtp/CI13UnO/HlDtw9O',
                'role' => 'collaborator',
            ],
            [
                'name' => 'Gil',
                'email' => 'gil@gmail.com',
                'password' => '$2y$10$Ted4wfCQyyK2oV3UqVBj8.IB5ZhD7P6c7Ehtp/CI13UnO/HlDtw9O',
                'role' => 'subscriber',
            ]
        ];

        User::insert($data);
    }
}
