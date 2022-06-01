<?php

namespace App\Console\Commands;

use App\Models\User;
use Str;
use Illuminate\Console\Command;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:createAdmin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a Admin for Website';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $fName = Str::random(8);
        $lName = Str::random(8);
        $email = 'Admin'.random_int(1,99).'@mail.com';


        User::create([
            'firstname' => $fName,
            'lastname' => $lName,
            'email' => $email,
            'password' => 'MADMAN123'
        ]);

        $this->info('Successfully create Admin:'.$email.' Password: MADMAN123');

        return Command::SUCCESS;
    }
}
