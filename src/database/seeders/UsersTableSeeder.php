<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1
        User::create([
            'mus_email_address' => 'admin@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_user_first_name' => '管理用',
            'mus_user_last_name' => 'アドミン',
            'mus_is_admin' => true,
        ]);
        // 2
        User::create([
            'mus_email_address' => 'yhara1189@icloud.com',
            'mus_user_password' => Hash::make('yhara1189@icloud.com'),
            'mus_user_first_name' => 'よし',
            'mus_user_last_name' => 'はら',
        ]);
        // 3
        User::create([
            'mus_email_address' => 'mentor1@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_user_first_name' => 'テスト用',
            'mus_user_last_name' => 'メンター',
            'mus_is_mentor' => true,
        ]);
        // 4
        User::create([
            'mus_email_address' => 'test@gmail.com',
            'mus_user_password' => '$2y$10$sqsdDHcTsjTPQBfBgMAuxew1MoDmyTdJ5vSITDr7wRy1DAiqpKkli',
            'mus_user_first_name' => 'テスト用',
            'mus_user_last_name' => 'ユーザー',
            'mus_dedicated_mentor_id' => 3,
        ]);
        // ここからメンター

        // 5
        User::create([
            'mus_email_address' => 'team.shin.toshi.sky@gmail.com',
            'mus_user_password' => Hash::make('Akkkvoc22'),
            'mus_user_first_name' => '進之介',
            'mus_user_last_name' => '河原',
            'mus_is_mentor' => true,
        ]);
        // 6
        User::create([
            'mus_email_address' => 'kaho.kaho0210@gmail.com',
            'mus_user_password' => Hash::make('kaho0210'),
            'mus_user_first_name' => '花帆',
            'mus_user_last_name' => '家城',
            'mus_is_mentor' => true,
        ]);
        // 7
        User::create([
            'mus_email_address' => 'o.taketo10@gmail.com',
            'mus_user_password' => Hash::make('CQfJXtBbz4raFwz'),
            'mus_user_first_name' => '健登',
            'mus_user_last_name' => '大島',
            'mus_is_mentor' => true,
        ]);
        // 8
        User::create([
            'mus_email_address' => 'ssnaoyass11@gmail.com',
            'mus_user_password' => Hash::make('TachyonNaoya'),
            'mus_user_first_name' => '直矢',
            'mus_user_last_name' => '細見',
            'mus_is_mentor' => true,
        ]);
        // 9
        User::create([
            'mus_email_address' => 'itoatsuhiko0315@gmai.com',
            'mus_user_password' => Hash::make('Atsuhiko15'),
            'mus_user_first_name' => '敦彦',
            'mus_user_last_name' => '伊藤',
            'mus_is_mentor' => true,
        ]);
        // 10
        User::create([
            'mus_email_address' => 'nagisa.moomin0407@icloud.com',
            'mus_user_password' => Hash::make('nagisa.0407'),
            'mus_user_first_name' => '凪沙',
            'mus_user_last_name' => '野村',
            'mus_is_mentor' => true,
        ]);
        // 11
        User::create([
            'mus_email_address' => 'satoayu1122@gmail.com',
            'mus_user_password' => Hash::make('tachyon1122'),
            'mus_user_first_name' => '歩',
            'mus_user_last_name' => '佐藤',
            'mus_is_mentor' => true,
        ]);
        // 12
        User::create([
            'mus_email_address' => 'ha.tokyo20060113@gmail.com',
            'mus_user_password' => Hash::make('kpmg2006'),
            'mus_user_first_name' => '英貴',
            'mus_user_last_name' => '荒川',
            'mus_is_mentor' => true,
        ]);
        // 13 
        User::create([
            'mus_email_address' => 'suicatp303@gmail.com',
            'mus_user_password' => Hash::make('TACHYON007'),
            'mus_user_first_name' => '侑之介',
            'mus_user_last_name' => '岡',
            'mus_is_mentor' => true,
        ]);
        // 14
        User::create([
            'mus_email_address' => 'ryu29072907@gmail.com',
            'mus_user_password' => Hash::make('aush2907'),
            'mus_user_first_name' => '龍',
            'mus_user_last_name' => '濵村',
            'mus_is_mentor' => true,
        ]);
        // 15
        User::create([
            'mus_email_address' => 'ryotaro-nakazawa@keio.jp',
            'mus_user_password' => Hash::make('3150Ryonaka'),
            'mus_user_first_name' => '遼太郎',
            'mus_user_last_name' => '中澤',
            'mus_is_mentor' => true,
        ]);
        // 16
        User::create([
            'mus_email_address' => 'sanakato0117@gmail.com',
            'mus_user_password' => Hash::make('mgapwd'),
            'mus_user_first_name' => '紗那',
            'mus_user_last_name' => '加藤',
            'mus_is_mentor' => true,
        ]);
        // 17
        User::create([
            'mus_email_address' => '20000707kei@gmail.com',
            'mus_user_password' => Hash::make('Detroit1'),
            'mus_user_first_name' => '慶悟',
            'mus_user_last_name' => '鈴木',
            'mus_is_mentor' => true,
        ]);
        // 18
        User::create([
            'mus_email_address' => 'songyuto0118@gmail.com',
            'mus_user_password' => Hash::make('1234abc'),
            'mus_user_first_name' => '侑燦',
            'mus_user_last_name' => '宋',
            'mus_is_mentor' => true,
        ]);
        // 19
        User::create([
            'mus_email_address' => 'kohey.4175299@gmail.com',
            'mus_user_password' => Hash::make('Koyogogogo'),
            'mus_user_first_name' => '晃平',
            'mus_user_last_name' => '堀江',
            'mus_is_mentor' => true,
        ]);
        // 20
        User::create([
            'mus_email_address' => 'kazu.tubaki.1018@gmail.com',
            'mus_user_password' => Hash::make('Tachyon1018'),
            'mus_user_first_name' => '和徳',
            'mus_user_last_name' => '前谷',
            'mus_is_mentor' => true,
        ]);
        // 21
        User::create([
            'mus_email_address' => 'takatani5@icloud.com',
            'mus_user_password' => Hash::make('utyu0165'),
            'mus_user_first_name' => '優香',
            'mus_user_last_name' => '高谷',
            'mus_is_mentor' => true,
        ]);
        // 22
        User::create([
            'mus_email_address' => 'm.yoshikawa1121@gmail.com',
            'mus_user_password' => Hash::make('Yoshikawa7118'),
            'mus_user_first_name' => '未来',
            'mus_user_last_name' => '吉川',
            'mus_is_mentor' => true,
        ]);
        // 23
        User::create([
            'mus_email_address' => 'mentor.kr1783@gmail.com',
            'mus_user_password' => Hash::make('Mentor1783'),
            'mus_user_first_name' => '亮太',
            'mus_user_last_name' => '木村',
            'mus_is_mentor' => true,
        ]);
        // 24
        User::create([
            'mus_email_address' => 'tonjun_10969@icloud.com',
            'mus_user_password' => Hash::make('tonjun10969'),
            'mus_user_first_name' => '俊',
            'mus_user_last_name' => '魏東',
            'mus_is_mentor' => true,
        ]);
        // 25
        User::create([
            'mus_email_address' => 'kenhappy33@gmail.com',
            'mus_user_password' => Hash::make('kenta1031999'),
            'mus_user_first_name' => '謙太',
            'mus_user_last_name' => '松木',
            'mus_is_mentor' => true,
        ]);
        // 26
        User::create([
            'mus_email_address' => 'tapi.maro24@gmail.com',
            'mus_user_password' => Hash::make('Tapimaro24'),
            'mus_user_first_name' => '優香',
            'mus_user_last_name' => '藤﨑',
            'mus_is_mentor' => true,
        ]);
        // 27
        User::create([
            'mus_email_address' => 'jliao11111@gmail.com',
            'mus_user_password' => Hash::make('jamesliao0213'),
            'mus_user_first_name' => 'ジェームス',
            'mus_user_last_name' => 'リアオ',
            'mus_is_mentor' => true,
        ]);
        // 28
        User::create([
            'mus_email_address' => 'tatsukidayo562@icloud.com',
            'mus_user_password' => Hash::make('Kwanseigakuin1889'),
            'mus_user_first_name' => '達基',
            'mus_user_last_name' => '池上',
            'mus_is_mentor' => true,
        ]);
        // 29
        User::create([
            'mus_email_address' => '3941hikaruani@gmail.com',
            'mus_user_password' => Hash::make('hikaruyamashita1'),
            'mus_user_first_name' => '輝',
            'mus_user_last_name' => '山下',
            'mus_is_mentor' => true,
        ]);
        // 30
        User::create([
            'mus_email_address' => 'ryuseima272727@gmail.com',
            'mus_user_password' => Hash::make('muromachi'),
            'mus_user_first_name' => '琉聖',
            'mus_user_last_name' => '松尾',
            'mus_is_mentor' => true,
        ]);
        // 31
        User::create([
            'mus_email_address' => 'hidehide829010@gmail.com',
            'mus_user_password' => Hash::make('0419'),
            'mus_user_first_name' => '秀道',
            'mus_user_last_name' => '神原',
            'mus_is_mentor' => true,
        ]);
        // 32
        User::create([
            'mus_email_address' => 'erika.2421219.w@gmail.com',
            'mus_user_password' => Hash::make('tachyon14'),
            'mus_user_first_name' => '愛里加',
            'mus_user_last_name' => '渡邉',
            'mus_is_mentor' => true,
        ]);
        // 33
        User::create([
            'mus_email_address' => 'souta000211@gmail.com',
            'mus_user_password' => Hash::make('Tachyon0211'),
            'mus_user_first_name' => '聡太',
            'mus_user_last_name' => '柿原',
            'mus_is_mentor' => true,
        ]);
        // 34
        User::create([
            'mus_email_address' => 'shun-shun2-7@docomo.ne.jp',
            'mus_user_password' => Hash::make('Shun1106'),
            'mus_user_first_name' => '舜',
            'mus_user_last_name' => '安達',
            'mus_is_mentor' => true,
        ]);
        // 35
        User::create([
            'mus_email_address' => 'soccer0504@eis.hokudai.ac.jp',
            'mus_user_password' => Hash::make('yuya31223002A!'),
            'mus_user_first_name' => '悠哉',
            'mus_user_last_name' => '新井',
            'mus_is_mentor' => true,
        ]);
        // 36
        User::create([
            'mus_email_address' => 'kabochashiho@gmail.com',
            'mus_user_password' => Hash::make('Kabocha10969'),
            'mus_user_first_name' => '志保',
            'mus_user_last_name' => '笠原',
            'mus_is_mentor' => true,
        ]);
        // 37
        User::create([
            'mus_email_address' => 'smilewater0617@gmail.com',
            'mus_user_password' => Hash::make('Monash20000831'),
            'mus_user_first_name' => '瑞希',
            'mus_user_last_name' => '芝田',
            'mus_is_mentor' => true,
        ]);

        // ここからメンティー
        // 38
        User::create([
            'mus_email_address' => 'yasugi.codegym@gmail.com',
            'mus_user_password' => Hash::make('YasuTach'),
            'mus_user_first_name' => '明日香',
            'mus_user_last_name' => '八杉',
        ]);
        // 39
        User::create([
            'mus_email_address' => 'ryusei12054036@gmail.com',
            'mus_user_password' => Hash::make('w03184015'),
            'mus_user_first_name' => '隆盛',
            'mus_user_last_name' => '森野',
            'mus_dedicated_mentor_id' => 17,
        ]);
        // 40
        User::create([
            'mus_email_address' => 'atsunori.murata2025@gmail.com',
            'mus_user_password' => Hash::make('hiyo2001'),
            'mus_user_first_name' => '篤紀',
            'mus_user_last_name' => '村田',
            'mus_dedicated_mentor_id' => 14,
        ]);
        // 41
        User::create([
            'mus_email_address' => 'daoxiayoudeng@gmail.com',
            'mus_user_password' => Hash::make('hetero533'),
            'mus_user_first_name' => '悠登',
            'mus_user_last_name' => '道下',
            'mus_dedicated_mentor_id' => 6,
        ]);
        // 42
        User::create([
            'mus_email_address' => 'sanshangxiongsheng8@gmail.com',
            'mus_user_password' => Hash::make('Yousay0810'),
            'mus_user_first_name' => '雄聖',
            'mus_user_last_name' => '三上',
            'mus_dedicated_mentor_id' => 13,
        ]);
        // 43
        User::create([
            'mus_email_address' => '21ba076a@rikkyo.ac.jp',
            'mus_user_password' => Hash::make('suzu627'),
            'mus_user_first_name' => '実桜',
            'mus_user_last_name' => '吉田',
            'mus_dedicated_mentor_id' => 26,
        ]);
        // 44
        User::create([
            'mus_email_address' => 'ryosuke1129a@gmail.com',
            'mus_user_password' => Hash::make('risdef1129'),
            'mus_user_first_name' => '良介',
            'mus_user_last_name' => '岩田',
        ]);
        // 45
        User::create([
            'mus_email_address' => 'koseikawasaki0328@gmail.com',
            'mus_user_password' => Hash::make('kosei150328'),
            'mus_user_first_name' => '航聖',
            'mus_user_last_name' => '川崎',
            'mus_dedicated_mentor_id' => 22,
        ]);
        // 46
        User::create([
            'mus_email_address' => 'seiyat1002@gmail.com',
            'mus_user_password' => Hash::make('seiya1002'),
            'mus_user_first_name' => '聖也',
            'mus_user_last_name' => '多田',
            'mus_dedicated_mentor_id' => 23,
        ]);
        // 47
        User::create([
            'mus_email_address' => 'shutakino11@gmail.com',
            'mus_user_password' => Hash::make('2580'),
            'mus_user_first_name' => '秀',
            'mus_user_last_name' => '滝野',
            'mus_dedicated_mentor_id' => 11,
        ]);
        // 48
        User::create([
            'mus_email_address' => 'fukurahagi1996@gmail.com',
            'mus_user_password' => Hash::make('0320mika'),
            'mus_user_first_name' => '美佳',
            'mus_user_last_name' => '杉本',
            'mus_dedicated_mentor_id' => 14,
        ]);
        // 49
        User::create([
            'mus_email_address' => 'm.s.igidhg.m.s@gmail.com',
            'mus_user_password' => Hash::make('m.s.ljhfdlJs1217'),
            'mus_user_first_name' => '茉尋',
            'mus_user_last_name' => '坂林',
            'mus_dedicated_mentor_id' => 22,
        ]);
        // 50
        User::create([
            'mus_email_address' => 'tokomorisue25@gmail.com',
            'mus_user_password' => Hash::make('u.complete.m3'),
            'mus_user_first_name' => '統子',
            'mus_user_last_name' => '森末',
            'mus_dedicated_mentor_id' => 27,
        ]);
        // 51
        User::create([
            'mus_email_address' => 'hagiwarakenta413@gmail.com',
            'mus_user_password' => Hash::make('Kenta413$$'),
            'mus_user_first_name' => '健太',
            'mus_user_last_name' => '萩原',
            'mus_dedicated_mentor_id' => 23,
        ]);
        // 52
        User::create([
            'mus_email_address' => 'keisuke115@keio.jp',
            'mus_user_password' => Hash::make('iwillgetnaitei_'),
            'mus_user_first_name' => '啓介',
            'mus_user_last_name' => '中村',
        ]);
        // 53
        User::create([
            'mus_email_address' => 'ueda.kosuke.syukatsu@gmail.com',
            'mus_user_password' => Hash::make('UedaKosuke0613'),
            'mus_user_first_name' => '晃佑',
            'mus_user_last_name' => '上田',
            'mus_dedicated_mentor_id' => 6,
        ]);
        // 54
        User::create([
            'mus_email_address' => 'ryota.yatagawa2276@gmail.com',
            'mus_user_password' => Hash::make('yatagawa2076'),
            'mus_user_first_name' => '椋大',
            'mus_user_last_name' => '箭田川',
            'mus_dedicated_mentor_id' => 28,
        ]);
        // 55
        User::create([
            'mus_email_address' => 'honokamiki10969@gmail.com',
            'mus_user_password' => Hash::make('Wwx8c8Wv'),
            'mus_user_first_name' => '穂乃香',
            'mus_user_last_name' => '桑原',
            'mus_dedicated_mentor_id' => 26,
        ]);
        // 56
        User::create([
            'mus_email_address' => 'tasnahkau25tokyo@gmail.com',
            'mus_user_password' => Hash::make('Jun71021'),
            'mus_user_first_name' => '柊',
            'mus_user_last_name' => '田中',
        ]);
        // 57
        User::create([
            'mus_email_address' => 'jobworkperson@gmail.com',
            'mus_user_password' => Hash::make('Daiei5747'),
            'mus_user_first_name' => '隼門',
            'mus_user_last_name' => '時田',
            'mus_dedicated_mentor_id' => 23,
        ]);
        // 58
        User::create([
            'mus_email_address' => 't-ryoma2@keio.jp',
            'mus_user_password' => Hash::make('ryt8739'),
            'mus_user_first_name' => '亮真',
            'mus_user_last_name' => '田中',
            'mus_dedicated_mentor_id' => 11,
        ]);
        // 59
        User::create([
            'mus_email_address' => 'vsharataka09@gmail.com',
            'mus_user_password' => Hash::make('harataka0201'),
            'mus_user_first_name' => '貴好',
            'mus_user_last_name' => '原口',
            'mus_dedicated_mentor_id' => 6,
        ]);
        // 60
        User::create([
            'mus_email_address' => '7219001@ed.tus.ac.jp',
            'mus_user_password' => Hash::make('Aizon0518'),
            'mus_user_first_name' => '晃希',
            'mus_user_last_name' => '相園',
        ]);
        // 61
        User::create([
            'mus_email_address' => 'kuuga20010912@gmail.com',
            'mus_user_password' => Hash::make('soradayon'),
            'mus_user_first_name' => '空雅',
            'mus_user_last_name' => '脇坂',
            'mus_dedicated_mentor_id' => 6,
        ]);
        // 62
        User::create([
            'mus_email_address' => 'mikihiro3916uma@gmail.com',
            'mus_user_password' => Hash::make('mikip3916'),
            'mus_user_first_name' => '幹大',
            'mus_user_last_name' => '馬部',
            'mus_dedicated_mentor_id' => 17,
        ]);
        // 63
        User::create([
            'mus_email_address' => 'kouki.recruit.9.19@gmail.com',
            'mus_user_password' => Hash::make('Kouki0919'),
            'mus_user_first_name' => '皓喜',
            'mus_user_last_name' => '鈴木',
            'mus_dedicated_mentor_id' => 11,
        ]);
        // 64
        User::create([
            'mus_email_address' => 'youhuihou71@gmail.com',
            'mus_user_password' => Hash::make('molcook0302'),
            'mus_user_first_name' => '祐輝',
            'mus_user_last_name' => '侯',
            'mus_dedicated_mentor_id' => 14,
        ]);
        // 65
        User::create([
            'mus_email_address' => 'seisakamoto0517@keio.jp',
            'mus_user_password' => Hash::make('seisakamoto0517'),
            'mus_user_first_name' => '静',
            'mus_user_last_name' => '坂本',
            'mus_dedicated_mentor_id' => 6,
        ]);
        // 66
        User::create([
            'mus_email_address' => 'ayuteru7@gmail.com',
            'mus_user_password' => Hash::make('davis2020'),
            'mus_user_first_name' => 'てるみ',
            'mus_user_last_name' => '中西',
            'mus_dedicated_mentor_id' => 23,
        ]);
        // 67
        User::create([
            'mus_email_address' => 'ryotasanyo@gmail.com',
            'mus_user_password' => Hash::make('TRyota1024'),
            'mus_user_first_name' => '綾汰',
            'mus_user_last_name' => '牧戸',
        ]);
        // 68
        User::create([
            'mus_email_address' => 'takuto.nori@gmail.com',
            'mus_user_password' => Hash::make('yyydddttt45678'),
            'mus_user_first_name' => '卓杜',
            'mus_user_last_name' => '乗物',
            'mus_dedicated_mentor_id' => 11,
        ]);
        // 69
        User::create([
            'mus_email_address' => 'hayao14782580@gmail.com',
            'mus_user_password' => Hash::make('toyo8810'),
            'mus_user_first_name' => '颯斗',
            'mus_user_last_name' => '豊島',
            'mus_dedicated_mentor_id' => 32,
        ]);
        // 70
        User::create([
            'mus_email_address' => 'endou0206haruka@gmail.com',
            'mus_user_password' => Hash::make('Tkdh0708ei'),
            'mus_user_first_name' => '遥',
            'mus_user_last_name' => '遠藤',
            'mus_dedicated_mentor_id' => 9,
        ]);
        // 71
        User::create([
            'mus_email_address' => 'yudai.yudai9230@gmail.com',
            'mus_user_password' => Hash::make('brilliant'),
            'mus_user_first_name' => '雄大',
            'mus_user_last_name' => '久保',
            'mus_dedicated_mentor_id' => 6,
        ]);
        // 72
        User::create([
            'mus_email_address' => 'atsuro31415ito@gmail.com',
            'mus_user_password' => Hash::make('99sc0101xp'),
            'mus_user_first_name' => '敦郎',
            'mus_user_last_name' => '伊藤',
        ]);
        // 73
        User::create([
            'mus_email_address' => 'tnk.jnuhb@gmail.com',
            'mus_user_password' => Hash::make('Plmn0567'),
            'mus_user_first_name' => '莉空',
            'mus_user_last_name' => '田中',
        ]);
        // 74
        User::create([
            'mus_email_address' => 'gaoshizinaisui@gmail.com',
            'mus_user_password' => Hash::make('19750507Ntt'),
            'mus_user_first_name' => '奈穂',
            'mus_user_last_name' => '高実子',
            'mus_dedicated_mentor_id' => 8,
        ]);
        // 75
        User::create([
            'mus_email_address' => 'yusuke.miura7@gmail.com',
            'mus_user_password' => Hash::make('password_miura'),
            'mus_user_first_name' => '悠輔',
            'mus_user_last_name' => '三浦',
        ]);
        // 76
        User::create([
            'mus_email_address' => 'leom1024@g.ecc.u-tokyo.ac.jp',
            'mus_user_password' => Hash::make('Harrypotter1024'),
            'mus_user_first_name' => '伶王',
            'mus_user_last_name' => '三浦',
        ]);
        // 77
        User::create([
            'mus_email_address' => 'cgdh3202@mail2.doshisha.ac.jp',
            'mus_user_password' => Hash::make('ayumi3010'),
            'mus_user_first_name' => '歩美',
            'mus_user_last_name' => '山中',
            'mus_dedicated_mentor_id' => 33,
        ]);
        // 78
        User::create([
            'mus_email_address' => 'nakajimaaa0725@gmail.com',
            'mus_user_password' => Hash::make('onakasuita'),
            'mus_user_first_name' => '将',
            'mus_user_last_name' => '中島',
        ]);
        // 79
        User::create([
            'mus_email_address' => 'kanyamamoto0120@keio.jp',
            'mus_user_password' => Hash::make('kankeiopass120'),
            'mus_user_first_name' => '漢',
            'mus_user_last_name' => '山本',
        ]);
        // 80
        User::create([
            'mus_email_address' => 'yuu12hyky@keio.jp',
            'mus_user_password' => Hash::make('hyky2718'),
            'mus_user_first_name' => '悠斗',
            'mus_user_last_name' => '渡邉',
            'mus_dedicated_mentor_id' => 30,
        ]);
        // 81
        User::create([
            'mus_email_address' => 'vous9011@gmail.com',
            'mus_user_password' => Hash::make('rw0727'),
            'mus_user_first_name' => '崇史',
            'mus_user_last_name' => '岩永',
        ]);
        // 82
        User::create([
            'mus_email_address' => 'norihiro@toki.waseda.jp',
            'mus_user_password' => Hash::make('fsncae412jh'),
            'mus_user_first_name' => '快弘',
            'mus_user_last_name' => '権田',
        ]);
        // 83
        User::create([
            'mus_email_address' => 'shiori.kanno0123@gmail.com',
            'mus_user_password' => Hash::make('noel2003'),
            'mus_user_first_name' => 'しおり',
            'mus_user_last_name' => '神野',
            'mus_dedicated_mentor_id' => 21,
        ]);
        // 84
        User::create([
            'mus_email_address' => 'halhal627@icloud.com',
            'mus_user_password' => Hash::make('74678610Gh'),
            'mus_user_first_name' => '陽斗',
            'mus_user_last_name' => '日比',
            'mus_dedicated_mentor_id' => 17,
        ]);
        // 85
        User::create([
            'mus_email_address' => 'tasakihiroyuki1433@gmail.com',
            'mus_user_password' => Hash::make('Hiroyuki@0407@'),
            'mus_user_first_name' => '裕之',
            'mus_user_last_name' => '田﨑',
            'mus_dedicated_mentor_id' => 30,
        ]);
        // 86
        User::create([
            'mus_email_address' => 'nishizawayusuke0501@keio.jp',
            'mus_user_password' => Hash::make('Kc141712'),
            'mus_user_first_name' => '雄介',
            'mus_user_last_name' => '西澤',
        ]);
        // 87
        User::create([
            'mus_email_address' => 'soutaro2077k@gmail.com',
            'mus_user_password' => Hash::make('soutarotachyon'),
            'mus_user_first_name' => '宗太郎',
            'mus_user_last_name' => '嶋田',
        ]);
        // 88
        User::create([
            'mus_email_address' => 'komedakeijiro@keio.jp',
            'mus_user_password' => Hash::make('Tach0726'),
            'mus_user_first_name' => '慶二郎',
            'mus_user_last_name' => '米田',
            'mus_dedicated_mentor_id' => 19,
        ]);
        // 89
        User::create([
            'mus_email_address' => 'iisaka.takuma@gmail.com',
            'mus_user_password' => Hash::make('Takumaro1221'),
            'mus_user_first_name' => '琢磨',
            'mus_user_last_name' => '飯阪',
        ]);
        // 90
        User::create([
            'mus_email_address' => 'jo.kakunaga@gmail.com',
            'mus_user_password' => Hash::make('dn64md0ZT77'),
            'mus_user_first_name' => '丈',
            'mus_user_last_name' => '角永',
            'mus_dedicated_mentor_id' => 34,
        ]);
        // 91
        User::create([
            'mus_email_address' => 'jokudo13@gmail.com',
            'mus_user_password' => Hash::make('Jk3131231'),
            'mus_user_first_name' => '丈',
            'mus_user_last_name' => '工藤',
        ]);
        // 92
        User::create([
            'mus_email_address' => 'marumaru8734@gmail.com',
            'mus_user_password' => Hash::make('itemae8989'),
            'mus_user_first_name' => '瑠星',
            'mus_user_last_name' => '黒川',
        ]);
        // 93
        User::create([
            'mus_email_address' => 'k.nishihata.w@gmail.com',
            'mus_user_password' => Hash::make('k0204y1104'),
            'mus_user_first_name' => '快',
            'mus_user_last_name' => '西畠',
            'mus_dedicated_mentor_id' => 7,
        ]);
        // 94
        User::create([
            'mus_email_address' => 'hasakuno.25@gmail.com',
            'mus_user_password' => Hash::make('assa0822'),
            'mus_user_first_name' => '颯翔',
            'mus_user_last_name' => '朝来野',
            'mus_dedicated_mentor_id' => 32,
        ]);
        // 95
        User::create([
            'mus_email_address' => 'suuei.hawk04@gmail.com',
            'mus_user_password' => Hash::make('big4'),
            'mus_user_first_name' => '崇英',
            'mus_user_last_name' => '長峰',
            'mus_dedicated_mentor_id' => 24,
        ]);
        // 96
        User::create([
            'mus_email_address' => 'sfb02109@st.osakafu-u.ac.jp',
            'mus_user_password' => Hash::make('hachibee0808'),
            'mus_user_first_name' => '悠',
            'mus_user_last_name' => '平田',
            'mus_dedicated_mentor_id' => 34,
        ]);
        // 97
        User::create([
            'mus_email_address' => 'toma_2000@icloud.com',
            'mus_user_password' => Hash::make('1220mato'),
            'mus_user_first_name' => '東磨',
            'mus_user_last_name' => '松下',
        ]);
        // 98
        User::create([
            'mus_email_address' => 'kairiyamanaka61@gmail.com',
            'mus_user_password' => Hash::make('1110200193'),
            'mus_user_first_name' => '開理',
            'mus_user_last_name' => '山中',
            'mus_dedicated_mentor_id' => 26,
        ]);
        // 99
        User::create([
            'mus_email_address' => 'kitagawa-hanime608@g.ecc.u-tokyo.ac.jp',
            'mus_user_password' => Hash::make('hajimeneymar11'),
            'mus_user_first_name' => '孟',
            'mus_user_last_name' => '北川',
        ]);
        // 100
        User::create([
            'mus_email_address' => 'asuka.i030517@gmail.com',
            'mus_user_password' => Hash::make('Luxon1131'),
            'mus_user_first_name' => '明日翔',
            'mus_user_last_name' => '石川',
            'mus_dedicated_mentor_id' => 32,
        ]);
        // 101
        User::create([
            'mus_email_address' => 'sazanami378@gmail.com',
            'mus_user_password' => Hash::make('aJmDg@329'),
            'mus_user_first_name' => '慎',
            'mus_user_last_name' => '松本',
            'mus_dedicated_mentor_id' => 21,
        ]);
        // 102
        User::create([
            'mus_email_address' => 'k.k.0123jh@gmail.com',
            'mus_user_password' => Hash::make('kakumoto0123'),
            'mus_user_first_name' => '憲祐',
            'mus_user_last_name' => '角本',
        ]);
        // 103
        User::create([
            'mus_email_address' => 'ayumi.y3367@gmail.com',
            'mus_user_password' => Hash::make('Ayumi33670907'),
            'mus_user_first_name' => '歩実',
            'mus_user_last_name' => '矢部',
            'mus_dedicated_mentor_id' => 14,
        ]);
        // 104
        User::create([
            'mus_email_address' => 'i.riko140410@gmail.com',
            'mus_user_password' => Hash::make('Rikorin.1404'),
            'mus_user_first_name' => '璃子',
            'mus_user_last_name' => '池田',
            'mus_dedicated_mentor_id' => 26,
        ]);
        // 105
        User::create([
            'mus_email_address' => 'u624928g@ecs.osaka-u.ac.jp',
            'mus_user_password' => Hash::make('ryota0924WAO!'),
            'mus_user_first_name' => '亮太',
            'mus_user_last_name' => '森村',
        ]);
        // 106
        User::create([
            'mus_email_address' => 'kim-bumjin-mp@ynu.jp',
            'mus_user_password' => Hash::make('kj3285'),
            'mus_user_first_name' => 'BUMJIN',
            'mus_user_last_name' => 'KIM',
        ]);
        // 107
        User::create([
            'mus_email_address' => 'senkosho0@gmail.com',
            'mus_user_password' => Hash::make('Abcd1234'),
            'mus_user_first_name' => '翔',
            'mus_user_last_name' => '詹合',
        ]);
        // 108
        User::create([
            'mus_email_address' => 'masaokaseiyu@icloud.com',
            'mus_user_password' => Hash::make('seiyu215'),
            'mus_user_first_name' => '誠悠',
            'mus_user_last_name' => '正岡',
            'mus_dedicated_mentor_id' => 32,
        ]);
        // 109
        User::create([
            'mus_email_address' => 's.miki0204@gmail.com',
            'mus_user_password' => Hash::make('miki0204'),
            'mus_user_first_name' => '美輝',
            'mus_user_last_name' => '鹿倉',
        ]);
        // 110
        User::create([
            'mus_email_address' => '08takane08tus@gmail.com',
            'mus_user_password' => Hash::make('Kawai0405'),
            'mus_user_first_name' => '高嶺',
            'mus_user_last_name' => '國立',
            'mus_dedicated_mentor_id' => 11,
        ]);
        // 111
        User::create([
            'mus_email_address' => 'doudoupeiyujob311@gmail.com',
            'mus_user_password' => Hash::make('doudoupeiyu311'),
            'mus_user_first_name' => '沛羽',
            'mus_user_last_name' => '周',
            'mus_dedicated_mentor_id' => 19,
        ]);
        // 112
        User::create([
            'mus_email_address' => 'atsushi.kishina0706@gmail.com',
            'mus_user_password' => Hash::make('alphaheighzzz'),
            'mus_user_first_name' => '敦司',
            'mus_user_last_name' => '岸名',
        ]);
        // 113
        User::create([
            'mus_email_address' => 'hk.syuukatsu@gmail.com',
            'mus_user_password' => Hash::make('ouvb0309'),
            'mus_user_first_name' => '薫',
            'mus_user_last_name' => '本田',
            'mus_dedicated_mentor_id' => 31,
        ]);
        // 114
        User::create([
            'mus_email_address' => 'yugomaedatokushin@gmail.com',
            'mus_user_password' => Hash::make('yugo2000'),
            'mus_user_first_name' => '雄冴',
            'mus_user_last_name' => '前田',
            'mus_dedicated_mentor_id' => 11,
        ]);
        // 115
        User::create([
            'mus_email_address' => 'takahiroimanishi2025@gmail.com',
            'mus_user_password' => Hash::make('yuz5sh'),
            'mus_user_first_name' => '隆裕',
            'mus_user_last_name' => '今西',
            'mus_dedicated_mentor_id' => 14,
        ]);
        // 116
        User::create([
            'mus_email_address' => 'kida012012@gmail.com',
            'mus_user_password' => Hash::make('kida01212'),
            'mus_user_first_name' => '貴文',
            'mus_user_last_name' => '木田',
            'mus_dedicated_mentor_id' => 29,
        ]);
        // 117
        User::create([
            'mus_email_address' => 'kinoshita.kaisei.465@s.kyushu-u.ac.jp',
            'mus_user_password' => Hash::make('kaisei0419'),
            'mus_user_first_name' => '海征',
            'mus_user_last_name' => '木下',
        ]);
        // 118
        User::create([
            'mus_email_address' => 'tnk48_kenta1127@icloud.com',
            'mus_user_password' => Hash::make('Tkenta1127'),
            'mus_user_first_name' => '健太',
            'mus_user_last_name' => '田中',
        ]);
        // 119
        User::create([
            'mus_email_address' => 'masamasa-onoono0417@g.ecc.u-tokyo.ac.jp',
            'mus_user_password' => Hash::make('0417@@@Masashi'),
            'mus_user_first_name' => '眞史',
            'mus_user_last_name' => '小野',
            'mus_dedicated_mentor_id' => 6,
        ]);
        // 120
        User::create([
            'mus_email_address' => 'bump1979nozomi@gmail.com',
            'mus_user_password' => Hash::make('1024nozomi'),
            'mus_user_first_name' => '希海',
            'mus_user_last_name' => '石井',
            'mus_dedicated_mentor_id' => 17,
        ]);
        // 121
        User::create([
            'mus_email_address' => 'yuri.mitsumura@gmail.com',
            'mus_user_password' => Hash::make('yurimitsumura'),
            'mus_user_first_name' => '友里',
            'mus_user_last_name' => '三ツ村',
        ]);
        // 122
        User::create([
            'mus_email_address' => 'shunsakuyamanaka14102@gmail.com',
            'mus_user_password' => Hash::make('Deutschland1'),
            'mus_user_first_name' => '俊作',
            'mus_user_last_name' => '山中',
        ]);
        // 123
        User::create([
            'mus_email_address' => '1120102y@g.hit-u.ac.jp',
            'mus_user_password' => Hash::make('Izumi117'),
            'mus_user_first_name' => '改',
            'mus_user_last_name' => '近藤',
        ]);
        // 124
        User::create([
            'mus_email_address' => 'syuta0909@gmail.com',
            'mus_user_password' => Hash::make('0611'),
            'mus_user_first_name' => '秀太',
            'mus_user_last_name' => '藤井',
        ]);
        // 125
        User::create([
            'mus_email_address' => 'kajitani.1578@gmail.com',
            'mus_user_password' => Hash::make('Kaji_22768'),
            'mus_user_first_name' => '颯太',
            'mus_user_last_name' => '梶谷',
            'mus_dedicated_mentor_id' => 31,
        ]);
        // 126
        User::create([
            'mus_email_address' => 'Nagasuke.job.search@gmail.com',
            'mus_user_password' => Hash::make('Sukemaru0710'),
            'mus_user_first_name' => '健太',
            'mus_user_last_name' => '長山',
        ]);
        // 127
        User::create([
            'mus_email_address' => 'g3.yuichi.hi@gmail.com',
            'mus_user_password' => Hash::make('shushi2003'),
            'mus_user_first_name' => '雄一',
            'mus_user_last_name' => '福田',
        ]);
        // 128
        User::create([
            'mus_email_address' => 'hoshinoaiyoasobi@gmail.com',
            'mus_user_password' => Hash::make('Monchi315'),
            'mus_user_first_name' => '拓海',
            'mus_user_last_name' => '望月',
            'mus_dedicated_mentor_id' => 26,
        ]);
        // 129
        User::create([
            'mus_email_address' => 'justplease70@docomo.ne.jp',
            'mus_user_password' => Hash::make('youji007'),
            'mus_user_first_name' => '洋司',
            'mus_user_last_name' => '石井',
            'mus_dedicated_mentor_id' => 13,
        ]);
        // 130
        User::create([
            'mus_email_address' => 'kameo0261@gmail.com',
            'mus_user_password' => Hash::make('Tachyon3'),
            'mus_user_first_name' => '慶',
            'mus_user_last_name' => '横山',
            'mus_dedicated_mentor_id' => 6,
        ]);
        // 131
        User::create([
            'mus_email_address' => 'sayo34@g.ecc.u-tokyo.ac.jp',
            'mus_user_password' => Hash::make('sayo3434'),
            'mus_user_first_name' => '沙予',
            'mus_user_last_name' => '大野',
        ]);
        // 132
        User::create([
            'mus_email_address' => 'k.shibasaki0517@gmail.com',
            'mus_user_password' => Hash::make('Baseball0517'),
            'mus_user_first_name' => '航一',
            'mus_user_last_name' => '柴崎',
        ]);
        // 133
        User::create([
            'mus_email_address' => 'soh336699@gmail.com',
            'mus_user_password' => Hash::make('Qwer1234'),
            'mus_user_first_name' => '壮甫',
            'mus_user_last_name' => '今村',
        ]);
        // 134
        User::create([
            'mus_email_address' => 'rakupika1001@gmail.com',
            'mus_user_password' => Hash::make('rakupika1001'),
            'mus_user_first_name' => '駿佑',
            'mus_user_last_name' => '毛利',
            'mus_dedicated_mentor_id' => 9,
        ]);
        // 135
        User::create([
            'mus_email_address' => 'shionkido1212@gmail.com',
            'mus_user_password' => Hash::make('Kidoshion1212'),
            'mus_user_first_name' => '志遠',
            'mus_user_last_name' => '木戸',
            'mus_dedicated_mentor_id' => 32,
        ]);
        // 136
        User::create([
            'mus_email_address' => 'makitanipon7531@gmail.com',
            'mus_user_password' => Hash::make('Makitanipon7531'),
            'mus_user_first_name' => '正大',
            'mus_user_last_name' => '牧谷',
        ]);
        // 137
        User::create([
            'mus_email_address' => 'yuzu1222dog@gmail.com',
            'mus_user_password' => Hash::make('Yy19990423'),
            'mus_user_first_name' => '直寛',
            'mus_user_last_name' => '山形',
            'mus_dedicated_mentor_id' => 33,
        ]);
        // 138
        User::create([
            'mus_email_address' => 'yumapon0408@gmail.com',
            'mus_user_password' => Hash::make('yumapons'),
            'mus_user_first_name' => '悠馬',
            'mus_user_last_name' => '藤田',
            'mus_dedicated_mentor_id' => 10,
        ]);
        // 139
        User::create([
            'mus_email_address' => 'qbt7nana@gmail.com',
            'mus_user_password' => Hash::make('nana1121'),
            'mus_user_first_name' => '奈那',
            'mus_user_last_name' => '窪田',
            'mus_dedicated_mentor_id' => 8,
        ]);
        // 140
        User::create([
            'mus_email_address' => 'z8794b01@icloud.com',
            'mus_user_password' => Hash::make('3B59d012'),
            'mus_user_first_name' => '宏太',
            'mus_user_last_name' => '髙橋',
        ]);
        // 141
        User::create([
            'mus_email_address' => 'lengzhendalu5@gmail.com',
            'mus_user_password' => Hash::make('Ma225Ryo29'),
            'mus_user_first_name' => '稜真',
            'mus_user_last_name' => '大鹿',
            'mus_dedicated_mentor_id' => 11,
        ]);
        // 142
        User::create([
            'mus_email_address' => 'kousuke31yama@gmail.com',
            'mus_user_password' => Hash::make('qwer4321'),
            'mus_user_first_name' => '皓介',
            'mus_user_last_name' => '山本',
            'mus_dedicated_mentor_id' => 23,
        ]);
        // 143
        User::create([
            'mus_email_address' => 'hiromu.ipad@gmail.com',
            'mus_user_password' => Hash::make('hiromu1227'),
            'mus_user_first_name' => '宏武',
            'mus_user_last_name' => '石井',
            'mus_dedicated_mentor_id' => 25,
        ]);
        // 144
        User::create([
            'mus_email_address' => 'baske.mayu6298@gmail.com',
            'mus_user_password' => Hash::make('Baske6298'),
            'mus_user_first_name' => '真由',
            'mus_user_last_name' => '大山',
        ]);
        // 145
        User::create([
            'mus_email_address' => 'leemyeongeun@gmail.com',
            'mus_user_password' => Hash::make('zk2tmxmrkwk'),
            'mus_user_first_name' => '明恩',
            'mus_user_last_name' => '酒井(李)',
        ]);
        // 146
        User::create([
            'mus_email_address' => 'masaya512@icloud.com',
            'mus_user_password' => Hash::make('Masaya0512'),
            'mus_user_first_name' => '雅也',
            'mus_user_last_name' => '上田',
            'mus_dedicated_mentor_id' => 7,
        ]);
        // 147
        User::create([
            'mus_email_address' => 'maiko20001126@icloud.com',
            'mus_user_password' => Hash::make('Sho.s0125'),
            'mus_user_first_name' => '茉以子',
            'mus_user_last_name' => '北川',
            'mus_dedicated_mentor_id' => 6,
        ]);
        // 148
        User::create([
            'mus_email_address' => 'misafuku811@gmail.com',
            'mus_user_password' => Hash::make('mf013014'),
            'mus_user_first_name' => '美岬',
            'mus_user_last_name' => '福嶋',
        ]);
        // 149
        User::create([
            'mus_email_address' => 'gi21118@hannan-u.ac.jp',
            'mus_user_password' => Hash::make('marumaro'),
            'mus_user_first_name' => '晴輝',
            'mus_user_last_name' => '住野',
            'mus_dedicated_mentor_id' => 22,
        ]);
        // 150
        User::create([
            'mus_email_address' => 'shirin.ryu@gmail.com',
            'mus_user_password' => Hash::make('79089797979'),
            'mus_user_first_name' => '之琳',
            'mus_user_last_name' => '劉',
        ]);
        // 151
        User::create([
            'mus_email_address' => 'yuseisako@gmail.com',
            'mus_user_password' => Hash::make('sakosako'),
            'mus_user_first_name' => '祐成',
            'mus_user_last_name' => '迫口',
        ]);
        // 152
        User::create([
            'mus_email_address' => 'nodoka24_g124@icloud.com',
            'mus_user_password' => Hash::make('nodoka24'),
            'mus_user_first_name' => '和',
            'mus_user_last_name' => '上原',
        ]);
        // 153
        User::create([
            'mus_email_address' => 'takuto.skzoor@gmail.com',
            'mus_user_password' => Hash::make('Skzoor0918'),
            'mus_user_first_name' => '拓人',
            'mus_user_last_name' => '岡垣',
        ]);
        // 154
        User::create([
            'mus_email_address' => 'reinahishi@gmail.com',
            'mus_user_password' => Hash::make('Hellolol'),
            'mus_user_first_name' => 'れいな',
            'mus_user_last_name' => '菱沼',
            'mus_dedicated_mentor_id' => 18,
        ]);
        // 155
        User::create([
            'mus_email_address' => 'tsubsa2017@gmail.com',
            'mus_user_password' => Hash::make('tokau17'),
            'mus_user_first_name' => '翼',
            'mus_user_last_name' => '大槻',
            'mus_dedicated_mentor_id' => 31,
        ]);
        // 156
        User::create([
            'mus_email_address' => '2002soeim@gmail.com',
            'mus_user_password' => Hash::make('1484'),
            'mus_user_first_name' => '壮英',
            'mus_user_last_name' => '松本',
            'mus_dedicated_mentor_id' => 21,
        ]);
        // 157
        User::create([
            'mus_email_address' => 'marialoha831@gmail.com',
            'mus_user_password' => Hash::make('marika0831'),
            'mus_user_first_name' => '真理佳',
            'mus_user_last_name' => '鈴木',
        ]);
    }
}
