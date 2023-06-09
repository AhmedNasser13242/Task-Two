<?php

namespace App\Console\Commands;

use queue;
use App\Models\User;
use App\Mail\OrderShiping;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class EmailSent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:sent';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::whereYear('reminder', '=' , date('Y'))->whereMonth('reminder', '=', date('m'))->whereDay('reminder', '=', date('d'))->get();

    foreach($users as $user) {

        // Send the email to user
        Mail::send(new OrderShiping());

    }

    $this->info('Birthday messages sent successfully!');
    }
}