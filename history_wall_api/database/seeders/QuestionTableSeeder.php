<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'name' => '田中角栄',
            'period' => '昭和',
            'question_text_1_1' => '何か名言を残しましたか？',
            'answer_text_1_1' => '「功は焦らなくても良い。自分に実力がありさえすれば、運は必ず回って来る。」さ',
            'question_text_1_2' => '実は〇〇な話教えて？',
            'answer_text_1_2' => 'ワシは悪人のイメージが強いが、実は礼儀正しく心優しいんだ。ワシのいい人エピソードを聞いてくれるか？',
            'question_text_1_3' => '',
            'answer_text_1_3' => '',
            'question_text_1_4' => '',
            'answer_text_1_4' => '',
            'question_text_2_1' => '若い頃は何をやっていましたか？',
            'answer_text_2_1' => '土木会社を設立し、成功を納めたわい。もしかしたら人生軌道に乗り始めたのは、この頃からかもしれないな。',
            'question_text_2_2' => '尊敬している人は？',
            'answer_text_2_2' => '吉田茂先生であるな。とてもお世話になったから、本当に感謝しているな。',
            'question_text_2_3' => '',
            'answer_text_2_3' => '',
            'question_text_2_4' => '',
            'answer_text_2_4' => '',
            'question_text_3_1' => '何か自慢できることある？',
            'answer_text_3_1' => '自慢というほどでもないが、逮捕された経験が豊富な人間じゃ。',
            'question_text_3_2' => '逮捕歴以外の経歴はありますか？',
            'answer_text_3_2' => '郵政大臣、国務大臣、大蔵大臣、通商産業大臣を勤めた経験もあるな。これも自慢じゃな',
            'question_text_3_3' => '人生最高の成功体験はありますか？',
            'answer_text_3_3' => '貧相な家庭出身のワシが、最年少で総理大臣になった。支持率70%越えのかっこいい総理をしていたな。',
            'question_text_3_4' => '何か成し遂げたことはありますか？',
            'answer_text_3_4' => '総理になった時、日中国交正常化をすると決め、それを成し遂げたな。',
            'question_text_4_1' => '西暦何年生まれですか？',
            'answer_text_4_1' => 'ワシは1918年生まれだ。',
            'question_text_4_2' => '異名はありますか？',
            'answer_text_4_2' => '皆ワシを今太閤や闇将軍と呼んでおった。これらの異名からもわかると思うが、ワシはかなり影響力を持っていたということだな。',
            'question_text_4_3' => 'あなたは社会にどのような影響を与えましたか？',
            'answer_text_4_3' => '影響力を持っていたワシは日本列島改造論を発表し、国民の関心を引きつけたな。',
            'question_text_4_4' => 'あなたが関わる大きな出来事はなんですか？',
            'answer_text_4_4' => 'やはりワシと言ったらロッキード事件じゃ。ロッキード社の旅客機受注をめぐる汚職事件で世間を騒がせてしまったな...',
            'image_path' => 'https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_821/https://free.nigaoe.work/wp-content/uploads/2020/01/tanaka-kakuei-portrait-821x1024.png',
            'dialogue' => 'わしの名前は田中角栄じゃ。',
            'position' => '第64、65代内閣総理大臣',
            'explanation' => '第一次政権では『日本列島改造論』を掲げ、1972年日中共同声明にて、中国との国交が正式に開かれた。第二次政権では第四次中東戦争からの第一次石油危機【オイルショック】が発生。'
        ]);
    }
}
