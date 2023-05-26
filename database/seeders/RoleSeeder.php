<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $roles = [
            [
                "slug" => Str::slug(Str::random(10)),
                "name" => "Administrator",
            ],
            [
                "slug" => Str::slug(Str::random(10)),
                "name" => "Manager"
            ],
            [
                "slug" => Str::slug(Str::random(10)),
                "name" => "Student"
            ],
            [
                "slug" => Str::slug(Str::random(10)),
                "name" => "Mentor"
            ]
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
