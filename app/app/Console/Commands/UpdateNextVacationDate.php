<?php

namespace App\Console\Commands;

use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateNextVacationDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:nextvacation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '次回湯汲取得可能日を計算して更新する';

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
        $users = User::all();

        foreach ($users as $user) {
            $joindate = Carbon::parse($user->join_date);
            $nextvacation = $joindate->addMonth(6);
            while ($nextvacation->isPast()) {
                $nextvacation->addYear();
            }
            $user->next_vacation_date = $nextvacation->toDateString();
            $user->save();
        }
        $this->info('次回湯汲取得可能日を更新しました');
    }
}
