<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BotResponsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('botresponses')->insert([
            ['message_id' => 1, 'keyword' => '勤怠', 'reply' => '勤怠に関するメニューになります。', 'link' => '', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['message_id' => 2, 'keyword' => '勤怠報告', 'reply' => 'こちらより勤怠報告をお願いいたします。', 'link' => 'https://jobs.technologies-group.co.jp/users/login?cid=973', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['message_id' => 3, 'keyword' => '欠勤・遅刻・早退', 'reply' => 'こちらより欠勤・早退・遅刻報告をお願いいたします。出向先への欠勤連絡はされましたか？', 'link' => 'https://forms.gle/meLno8XQjvH7JGSu9', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['message_id' => 4, 'keyword' => '連絡済', 'reply' => 'かしこまりました。報告承りました。', 'link' => '', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['message_id' => 5, 'keyword' => '未連絡', 'reply' => 'かしこまりました。欠勤・早退・遅刻報告後、出向先への連絡をお願いいたします。', 'link' => '',  'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['message_id' => 6, 'keyword' => '年末調整', 'reply' => '年末調整に関しては、こちらをご参照ください。', 'link' => 'https://biz.moneyforward.com/support/tax-adjustment/guide/flow/employees-flow01.html#ttl01', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
