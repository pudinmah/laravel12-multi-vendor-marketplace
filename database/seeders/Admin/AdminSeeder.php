<?php

namespace Database\Seeders\Admin;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Super Admin
        $admin = new Admin();
        $admin->name = 'Super Admin';
        $admin->email = 'admin@app.com';
        $admin->password = bcrypt('12345678');
        $admin->save();

        // Reviewer
        $reviewer = new Admin();
        $reviewer->name = 'Reviewer';
        $reviewer->email = 'reviewer@app.com';
        $reviewer->password = bcrypt('12345678');
        $reviewer->save();

    }
}
