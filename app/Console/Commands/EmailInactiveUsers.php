<?php

namespace App\Console\Commands;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class EmailInactiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:inactive-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email to inactive users';

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
     * @return mixed
     */
    public function handle()
    {
        $limit= now()->subDay(5);
        $inactiveUsers=User::where('last_login', '<', $limit)->get();

        foreach($inactiveUsers as $user)
        {
            $user->notify(new NotifyInactiveUsers());
            $this->info('Email to '. $user->email);
        }
    }
}
