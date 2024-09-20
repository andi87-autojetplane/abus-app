<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'su_admin']);
        Role::create(['name' => 'adminpus']);
        Role::create(['name' => 'adminprov']);
        Role::create(['name' => 'adminkab']);
        Role::create(['name' => 'adminpkm']);
        Role::create(['name' => 'kasir']);
        Role::create(['name' => 'kapus']);
        Role::create(['name' => 'katu']);
        Role::create(['name' => 'staftu']);
        Role::create(['name' => 'medis']);
        Role::create(['name' => 'paramedis']);
        Role::create(['name' => 'pendaftaran']);
        Role::create(['name' => 'farmasi']);
        Role::create(['name' => 'laboratorium']);
        Role::create(['name' => 'kader']);
        Role::create(['name' => 'pasien']);
        Role::create(['name' => 'forkompimcam']);
    }
}
