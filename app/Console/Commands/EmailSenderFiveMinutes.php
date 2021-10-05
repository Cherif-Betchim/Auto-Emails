<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Receiver;
use Illuminate\Support\Facades\Mail;

class EmailSenderFiveMinutes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:fiveMinsSender';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Artisan command to send emails to the table Receivers where interval equal to 5 minuntes';

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
        $receivers = Receiver::where('intervalM', '=', 5)
            ->where('satus', '=', 1)
            ->get();

        foreach($receivers as $receiver){
        
            $data = array(
                'name' => "xxx"
            );

            Mail::send('emails.DateInformer', $data, function ($message) use ($receiver) {
               
                
                    $message->from('email@toto.com');
                    $message->to($receiver->email)->subject('D-learning Test');
                
        
            });
            $this->info('The emailis sent successfully!');
             
            }
        
    }
}
