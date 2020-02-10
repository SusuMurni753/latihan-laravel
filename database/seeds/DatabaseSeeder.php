<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(buku::class);
        // $this->call(Perpus::class);
        // $this->call(Gaji::class);
        $this->call('SeederRelasi');

        // $this->command-info('SeederRelasi Berhasil.');
    }
}
