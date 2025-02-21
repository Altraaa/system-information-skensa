<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $studentUser = [
        // XII RPL 1
        [
            'name' => 'Achmad Raffa Frans Nadjira',
            'classroom_id' => '1',
            'attendance_number' => 1,
            'nis' => '30598',
            'username' => '30598',
        ],
        [
            'name' => 'Agus Kimura Juniarta',
            'classroom_id' => '1',
            'attendance_number' => 2,
            'nis' => '30599',
            'username' => '30599',
        ],
        [
            'name' => 'Annisa Fitriana',
            'classroom_id' => '1',
            'attendance_number' => 3,
            'nis' => '30600',
            'username' => '30600',
        ],
        [
            'name' => 'Arbrar Raissa Heindra Putra',
            'classroom_id' => '1',
            'attendance_number' => 4,
            'nis' => '30601',
            'username' => '30601',
        ],
        [
            'name' => 'Biodi Rehuel Mark Lakusa',
            'classroom_id' => '1',
            'attendance_number' => 5,
            'nis' => '30602',
            'username' => '30602',
        ],
        [
            'name' => 'I Dewa Made Diandra Restu Dinata Suyadnya',
            'classroom_id' => '1',
            'attendance_number' => 6,
            'nis' => '30603',
            'username' => '30603',
        ],
        [
            'name' => 'I Gede Arya Caitanya Wiharja',
            'classroom_id' => '1',
            'attendance_number' => 7,
            'nis' => '30604',
            'username' => '30604',
        ],
        [
            'name' => 'I Gede Dananjaya Mahotama',
            'classroom_id' => '1',
            'attendance_number' => 8,
            'nis' => '30605',
            'username' => '30605',
        ],
        [
            'name' => 'I Gusti Ngurah Agung Mantra Suyasa',
            'classroom_id' => '1',
            'attendance_number' => 9,
            'nis' => '30606',
            'username' => '30606',
        ],
        [
            'name' => 'I Kadek Rio Saputra',
            'classroom_id' => '1',
            'attendance_number' => 10,
            'nis' => '30607',
            'username' => '30607',
        ],
        [
            'name' => 'I Komang Andika Dhananjaya',
            'classroom_id' => '1',
            'attendance_number' => 11,
            'nis' => '30608',
            'username' => '30608',
        ],
        [
            'name' => 'I Komang Rama Triyana',
            'classroom_id' => '1',
            'attendance_number' => 12,
            'nis' => '30609',
            'username' => '30609',
        ],
        [
            'name' => 'I Made Ade Permana',
            'classroom_id' => '1',
            'attendance_number' => 13,
            'nis' => '30610',
            'username' => '30610',
        ],
        [
            'name' => 'I Made Adi Suwandika',
            'classroom_id' => '1',
            'attendance_number' => 14,
            'nis' => '30611',
            'username' => '30611',
        ],
        [
            'name' => 'I Made Danur Ari Artha',
            'classroom_id' => '1',
            'attendance_number' => 15,
            'nis' => '30612',
            'username' => '30612',
        ],
        [
            'name' => 'I Made Widia Pratama',
            'classroom_id' => '1',
            'attendance_number' => 16,
            'nis' => '30613',
            'username' => '30613',
        ],
        [
            'name' => 'I Nyoman Kesava Mas Dhananjaya Rangkan',
            'classroom_id' => '1',
            'attendance_number' => 17,
            'nis' => '30614',
            'username' => '30614',
        ],
        [
            'name' => 'I Putu Ananda Indraprasetya',
            'classroom_id' => '1',
            'attendance_number' => 18,
            'nis' => '30615',
            'username' => '30615',
        ],
        [
            'name' => 'I Putu Denny Wijaya Kusuma',
            'classroom_id' => '1',
            'attendance_number' => 19,
            'nis' => '30616',
            'username' => '30616',
        ],
        [
            'name' => 'I Putu Devara Cahya Dhika Dinata',
            'classroom_id' => '1',
            'attendance_number' => 20,
            'nis' => '30617',
            'username' => '30617',
        ],
        [
            'name' => 'I Putu Juniarta Pratama',
            'classroom_id' => '1',
            'attendance_number' => 21,
            'nis' => '30618',
            'username' => '30618',
        ],
        [
            'name' => 'I Wayan Kusuma Negara',
            'classroom_id' => '1',
            'attendance_number' => 22,
            'nis' => '30619',
            'username' => '30619',
        ],
        [
            'name' => 'I Wayan Yogi Natya Paramartha',
            'classroom_id' => '1',
            'attendance_number' => 23,
            'nis' => '30620',
            'username' => '30620',
        ],
        [
            'name' => 'Ida Bagus Jiyestha Pradnyana Atmaja',
            'classroom_id' => '1',
            'attendance_number' => 24,
            'nis' => '30621',
            'username' => '30621',
        ],
        [
            'name' => 'Ida Bagus Putu Pradnya Darmika Manuaba',
            'classroom_id' => '1',
            'attendance_number' => 25,
            'nis' => '30622',
            'username' => '30622',
        ],
        [
            'name' => 'Kartika Sari Kinasih',
            'classroom_id' => '1',
            'attendance_number' => 26,
            'nis' => '30623',
            'username' => '30623',
        ],
        [
            'name' => 'Luh Listya Pradnyani',
            'classroom_id' => '1',
            'attendance_number' => 27,
            'nis' => '30624',
            'username' => '30624',
        ],
        [
            'name' => 'Marshaiva Indi Azaria',
            'classroom_id' => '1',
            'attendance_number' => 28,
            'nis' => '30625',
            'username' => '30625',
        ],
        [
            'name' => 'Mohhamad Rizky Herlenda Tiar',
            'classroom_id' => '1',
            'attendance_number' => 29,
            'nis' => '30626',
            'username' => '30626',
        ],
        [
            'name' => 'Muhammad Caisar Rezkhy',
            'classroom_id' => '1',
            'attendance_number' => 30,
            'nis' => '30627',
            'username' => '30627',
        ],
        [
            'name' => 'Ngurah Gde Rheino Darma Tenaya Perean',
            'classroom_id' => '1',
            'attendance_number' => 31,
            'nis' => '30628',
            'username' => '30628',
        ],
        [
            'name' => 'Ni Kadek Eliviana',
            'classroom_id' => '1',
            'attendance_number' => 32,
            'nis' => '30629',
            'username' => '30629',
        ],
        [
            'name' => 'Ni Kadek Liantini',
            'classroom_id' => '1',
            'attendance_number' => 33,
            'nis' => '30630',
            'username' => '30630',
        ],
        [
            'name' => 'Ni Ketut Cecilia Arta Putri',
            'classroom_id' => '1',
            'attendance_number' => 34,
            'nis' => '30631',
            'username' => '30631',
        ],
        [
            'name' => 'Ni Komang Pande Any Prisilia',
            'classroom_id' => '1',
            'attendance_number' => 35,
            'nis' => '30632',
            'username' => '30632',
        ],
        [
            'name' => 'Nyoman Dude Putra Sujaya',
            'classroom_id' => '1',
            'attendance_number' => 36,
            'nis' => '30633',
            'username' => '30633',
        ],
        [
            'name' => 'Putu Suryani Ananda Putri',
            'classroom_id' => '1',
            'attendance_number' => 37,
            'nis' => '30634',
            'username' => '30634',
        ],
        [
            'name' => 'Sulih Muhammad Ragil',
            'classroom_id' => '1',
            'attendance_number' => 38,
            'nis' => '30635',
            'username' => '30635',
        ],
        [
            'name' => 'Wira Rizqullah Ramadhan Kose',
            'classroom_id' => '1',
            'attendance_number' => 39,
            'nis' => '30636',
            'username' => '30636',
        ],

        // XII RPL 2
        [
            'name' => 'Azalea Vidya Kirana',
            'classroom_id' => '2',
            'attendance_number' => 1,
            'nis' => '30637',
            'username' => '30637',
        ],
        [
            'name' => 'Bagus Trinovanda Rahman',
            'classroom_id' => '2',
            'attendance_number' => 2,
            'nis' => '30638',
            'username' => '30638',
        ],
        [
            'name' => 'Briand Aka Yudhistira',
            'classroom_id' => '2',
            'attendance_number' => 3,
            'nis' => '30639',
            'username' => '30639',
        ],
        [
            'name' => 'Candra Made Lintang Rakaheni',
            'classroom_id' => '2',
            'attendance_number' => 4,
            'nis' => '30640',
            'username' => '30640',
        ],
        [
            'name' => 'I Gd. Arindra Krisnanda Aditya Putra',
            'classroom_id' => '2',
            'attendance_number' => 5,
            'nis' => '30641',
            'username' => '30641',
        ],
        [
            'name' => 'I Gede Komang Bayu Andika',
            'classroom_id' => '2',
            'attendance_number' => 6,
            'nis' => '30642',
            'username' => '30642',
        ],
        [
            'name' => 'I Gede Novanda Anggara Putra',
            'classroom_id' => '2',
            'attendance_number' => 7,
            'nis' => '30643',
            'username' => '30643',
        ],
        [
            'name' => 'I Gede Raditya Mahayana Diputra',
            'classroom_id' => '2',
            'attendance_number' => 8,
            'nis' => '30644',
            'username' => '30644',
        ],
        [
            'name' => 'I Gede Raditya Merta Jaya',
            'classroom_id' => '2',
            'attendance_number' => 9,
            'nis' => '30645',
            'username' => '30645',
        ],
        [
            'name' => 'I Gede Ramadeva',
            'classroom_id' => '2',
            'attendance_number' => 10,
            'nis' => '30646',
            'username' => '30646',
        ],
        [
            'name' => 'I Gusti Agung Gde Raditya Pradana',
            'classroom_id' => '2',
            'attendance_number' => 11,
            'nis' => '30647',
            'username' => '30647',
        ],
        [
            'name' => 'I Gusti Agung Panji Dwi Kusuma Wardana',
            'classroom_id' => '2',
            'attendance_number' => 12,
            'nis' => '30648',
            'username' => '30648',
        ],
        [
            'name' => 'I Gusti Lanang Agung Eka Chandra Diva',
            'classroom_id' => '2',
            'attendance_number' => 13,
            'nis' => '30649',
            'username' => '30649',
        ],
        [
            'name' => 'I Kadek Brahadya Praja Nugraha',
            'classroom_id' => '2',
            'attendance_number' => 14,
            'nis' => '30650',
            'username' => '30650',
        ],
        [
            'name' => 'I Kadek Budiarta',
            'classroom_id' => '2',
            'attendance_number' => 15,
            'nis' => '30651',
            'username' => '30651',
        ],
        [
            'name' => 'I Kadek Malvino Sukadana',
            'classroom_id' => '2',
            'attendance_number' => 16,
            'nis' => '30652',
            'username' => '30652',
        ],
        [
            'name' => 'I Kadek Putra Setiawan',
            'classroom_id' => '2',
            'attendance_number' => 17,
            'nis' => '30653',
            'username' => '30653',
        ],
        [
            'name' => 'I Made Ariya Putra',
            'classroom_id' => '2',
            'attendance_number' => 18,
            'nis' => '30654',
            'username' => '30654',
        ],
        [
            'name' => 'I Made Artha Arimbawa',
            'classroom_id' => '2',
            'attendance_number' => 19,
            'nis' => '30655',
            'username' => '30655',
        ],
        [
            'name' => 'I Made Cahya Utama Yuana',
            'classroom_id' => '2',
            'attendance_number' => 20,
            'nis' => '30656',
            'username' => '30656',
        ],
        [
            'name' => 'I Made Rai Adnyana',
            'classroom_id' => '2',
            'attendance_number' => 21,
            'nis' => '30657',
            'username' => '30657',
        ],
        [
            'name' => 'I Nyoman Gede Gata Atmaja',
            'classroom_id' => '2',
            'attendance_number' => 22,
            'nis' => '30658',
            'username' => '30658',
        ],
        [
            'name' => 'I Putu Abi Surya Pratama',
            'classroom_id' => '2',
            'attendance_number' => 23,
            'nis' => '30659',
            'username' => '30659',
        ],
        [
            'name' => 'I Putu Gede Suamba Adi Putra',
            'classroom_id' => '2',
            'attendance_number' => 24,
            'nis' => '30660',
            'username' => '30660',
        ],
        [
            'name' => 'I Putu Gilang Okan Dhewanta',
            'classroom_id' => '2',
            'attendance_number' => 25,
            'nis' => '30661',
            'username' => '30661',
        ],
        [
            'name' => 'I Putu Oceana Pratama Diputra',
            'classroom_id' => '2',
            'attendance_number' => 26,
            'nis' => '30662',
            'username' => '30662',
        ],
        [
            'name' => 'I Wayan Bagus Widia Kusuma',
            'classroom_id' => '2',
            'attendance_number' => 27,
            'nis' => '30663',
            'username' => '30663',
        ],
        [
            'name' => 'I Wayan Wahyu Putra Dinata',
            'classroom_id' => '2',
            'attendance_number' => 28,
            'nis' => '30664',
            'username' => '30664',
        ],
        [
            'name' => 'I.B.Gede Ambara Sindu Negara',
            'classroom_id' => '2',
            'attendance_number' => 29,
            'nis' => '30665',
            'username' => '30665',
        ],
        [
            'name' => 'Ida Bagus Kade Dwiki Adinata',
            'classroom_id' => '2',
            'attendance_number' => 30,
            'nis' => '30666',
            'username' => '30666',
        ],
        [
            'name' => 'Komang Dhita Aprilia',
            'classroom_id' => '2',
            'attendance_number' => 31,
            'nis' => '30667',
            'username' => '30667',
        ],
        [
            'name' => 'Muhammad Bagas Permana Putra',
            'classroom_id' => '2',
            'attendance_number' => 32,
            'nis' => '30668',
            'username' => '30668',
        ],
        [
            'name' => 'Muhammad Izzanurdin Hasan',
            'classroom_id' => '2',
            'attendance_number' => 33,
            'nis' => '30669',
            'username' => '30669',
        ],
        [
            'name' => 'Muhammad Oby Labyqul Umam',
            'classroom_id' => '2',
            'attendance_number' => 34,
            'nis' => '30670',
            'username' => '30670',
        ],
        [
            'name' => 'Ni Komang Tri Purnama Sari',
            'classroom_id' => '2',
            'attendance_number' => 35,
            'nis' => '30671',
            'username' => '30671',
        ],
        [
            'name' => 'Ni Rai Putri Novianti',
            'classroom_id' => '2',
            'attendance_number' => 36,
            'nis' => '30672',
            'username' => '30672',
        ],
        [
            'name' => 'Putu Artha Wiguna',
            'classroom_id' => '2',
            'attendance_number' => 37,
            'nis' => '30673',
            'username' => '30673',
        ],
        [
            'name' => 'Putu Gde Adyatma Putra',
            'classroom_id' => '2',
            'attendance_number' => 38,
            'nis' => '30674',
            'username' => '30674',
        ],
        [
            'name' => 'Reivan Aleindra Darta Putra',
            'classroom_id' => '2',
            'attendance_number' => 39,
            'nis' => '31781',
            'username' => '31781',
        ],

        // XII RPL 3
        [
            'name' => 'Aldiansah Saputra',
            'classroom_id' => '3',
            'attendance_number' => 1,
            'nis' => '30675',
            'username' => '30675',
        ],

        [
            'name' => 'Anak Agung Ngurah Bagus Krisna Pradipta',
            'classroom_id' => '3',
            'attendance_number' => 2,
            'nis' => '30676',
            'username' => '30676',
        ],

        [
            'name' => 'Andhika Adhi Irwansyah',
            'classroom_id' => '3',
            'attendance_number' => 3,
            'nis' => '30677',
            'username' => '30677',
        ],

        [
            'name' => 'Bagaskara Refananda',
            'classroom_id' => '3',
            'attendance_number' => 4,
            'nis' => '30678',
            'username' => '30678',
        ],

        [
            'name' => 'Christyan Mikha Adi Putra',
            'classroom_id' => '3',
            'attendance_number' => 5,
            'nis' => '30679',
            'username' => '30679',
        ],

        [
            'name' => 'Dewa Bagus Putu Prabaswara Suardana',
            'classroom_id' => '3',
            'attendance_number' => 6,
            'nis' => '30680',
            'username' => '30680',
        ],

        [
            'name' => 'I Gusti Lanang Agung Rama Putra Prawira',
            'classroom_id' => '3',
            'attendance_number' => 7,
            'nis' => '30681',
            'username' => '30681',
        ],

        [
            'name' => 'I Gusti Ayu Mas Pratistha Anggraeni',
            'classroom_id' => '3',
            'attendance_number' => 8,
            'nis' => '30682',
            'username' => '30682',
        ],

        [
            'name' => 'I Kadek Pindra Dwi Permana',
            'classroom_id' => '3',
            'attendance_number' => 9,
            'nis' => '30683',
            'username' => '30683',
        ],

        [
            'name' => 'I Kadek Satrya Mahesastika',
            'classroom_id' => '3',
            'attendance_number' => 10,
            'nis' => '30684',
            'username' => '30684',
        ],

        // 11-20
        [
            'name' => 'I Ketut Krisna Putra Sinatria',
            'classroom_id' => '3',
            'attendance_number' => 11,
            'nis' => '30685',
            'username' => '30685',
        ],
        
        [
            'name' => 'I Made Dio Kartianan Putra',
            'classroom_id' => '3',
            'attendance_number' => 12,
            'nis' => '30686',
            'username' => '30686',
        ],
        [
            'name' => 'I Made Gede Segara',
            'classroom_id' => '3',
            'attendance_number' => 13,
            'nis' => '30687',
            'username' => '30687',
        ],
        [
            'name' => 'I Made Gerrald Wahyu Darmawan',
            'classroom_id' => '3',
            'attendance_number' => 14,
            'nis' => '30688',
            'username' => '30688',
        ],
        [
            'name' => 'I Made Rama Dwijaya',
            'classroom_id' => '3',
            'attendance_number' => 15,
            'nis' => '30689',
            'username' => '30689',
        ],
        [
            'name' => 'I Nyoman Aditya Arya Mahendra',
            'classroom_id' => '3',
            'attendance_number' => 16,
            'nis' => '30690',
            'username' => '30690',
        ],
        [
            'name' => 'I Putu Gunartajaya',
            'classroom_id' => '3',
            'attendance_number' => 17,
            'nis' => '30691',
            'username' => '30691',
        ],
        [
            'name' => 'I Putu Nedi Okta Mahendra',
            'classroom_id' => '3',
            'attendance_number' => 18,
            'nis' => '30692',
            'username' => '30692',
        ],
        [
            'name' => 'I Putu Rangga Sanny Saputra',
            'classroom_id' => '3',
            'attendance_number' => 19,
            'nis' => '30693',
            'username' => '30693',
        ],
        [
            'name' => 'I Putu Surya Saputra',
            'classroom_id' => '3',
            'attendance_number' => 20,
            'nis' => '30694',
            'username' => '30694',
        ],

        // 21-30
        [
            'name' => 'I Putu Wika Dinata',
            'classroom_id' => '3',
            'attendance_number' => 21,
            'nis' => '30695',
            'username' => '30695',
        ],
        
        [
            'name' => 'I Wayan Adi Putra Winata',
            'classroom_id' => '3',
            'attendance_number' => 22,
            'nis' => '30696',
            'username' => '30696',
        ],
        [
            'name' => 'I Wayan Sadu Windhuarta',
            'classroom_id' => '3',
            'attendance_number' => 23,
            'nis' => '30697',
            'username' => '30697',
        ],
        [
            'name' => 'I Wayan Yudha Ananta Kusuma',
            'classroom_id' => '3',
            'attendance_number' => 24,
            'nis' => '30698',
            'username' => '30698',
        ],
        [
            'name' => 'Kadek Alvin Kurniawan Putra',
            'classroom_id' => '3',
            'attendance_number' => 25,
            'nis' => '30699',
            'username' => '30699',
        ],
        [
            'name' => 'Kadek Suwiarnaya',
            'classroom_id' => '3',
            'attendance_number' => 26,
            'nis' => '30700',
            'username' => '30700',
        ],
        [
            'name' => 'Made Mikhael Gana Pratama Ukir',
            'classroom_id' => '3',
            'attendance_number' => 27,
            'nis' => '30701',
            'username' => '30701',
        ],
        [
            'name' => 'Marcello Zaviere Frain Huru',
            'classroom_id' => '3',
            'attendance_number' => 28,
            'nis' => '30702',
            'username' => '30702',
        ],
        [
            'name' => 'Ngakan Nyoman Ari Surya Khrisna',
            'classroom_id' => '3',
            'attendance_number' => 29,
            'nis' => '30703',
            'username' => '30703',
        ],
        [
            'name' => 'Ni Kadek Dwi Putri Nova Andini',
            'classroom_id' => '3',
            'attendance_number' => 30,
            'nis' => '30704',
            'username' => '30704',
        ],

        // 31-38
        [
            'name' => 'Ni Made Dwiari Mutia Arthanti ',
            'classroom_id' => '3',
            'attendance_number' => 31,
            'nis' => '30705',
            'username' => '30705',
        ],
        
        [
            'name' => 'Ni Nyoman Dian Ayustya Pujani',
            'classroom_id' => '3',
            'attendance_number' => 32,
            'nis' => '30706',
            'username' => '30706',
        ],
        [
            'name' => 'Ni Putu Minda Amelia Rahmadita',
            'classroom_id' => '3',
            'attendance_number' => 33,
            'nis' => '30707',
            'username' => '30707',
        ],
        [
            'name' => 'Putu Shereen Anindita Reina Putri',
            'classroom_id' => '3',
            'attendance_number' => 34,
            'nis' => '30708',
            'username' => '30708',
        ],
        [
            'name' => 'Robby Akbar Imawan',
            'classroom_id' => '3',
            'attendance_number' => 35,
            'nis' => '30709',
            'username' => '30709',
        ],
        [
            'name' => 'Sebastian Herben Satrio Kristiawan',
            'classroom_id' => '3',
            'attendance_number' => 36,
            'nis' => '30710',
            'username' => '30710',
        ],
        [
            'name' => 'Timothy Hinrich Egllery Maindoka',
            'classroom_id' => '3',
            'attendance_number' => 37,
            'nis' => '30711',
            'username' => '30711',
        ],
        [
            'name' => 'Yosua Antoni Pratama',
            'classroom_id' => '3',
            'attendance_number' => 38,
            'nis' => '30712',
            'username' => '30712',
        ],
        ];

        foreach ($studentUser as $student) {
            $studentUser = User::create([
                'username' => $student['username'],
                'password' => Hash::make('password123'),
                'role' => 'student',
            ]);

            Student::create([
                'user_id' => $studentUser->id,
                'nis' => $student['nis'],
                'name' => $student['name'],
                'classroom_id' => $student['classroom_id'],
                'attendance_number' => $student['attendance_number'],
            ]);
        }

        $teacherUser = [
            [
                'id' => 1,
                'nip' => 'GH27',
                'name' => 'Ida Bagus Redy Santiawan, S.Pd.',
                'subject_id' => 1,
            ],
            [
                'id' => 2,
                'nip' => 'GK28',
                'name' => 'I Made Badrayasa, S.Si ',
                'subject_id' => 2,
            ],
            [
                'id' => 3,
                'nip' => 'GK3',
                'name' => 'Ni Komang Dian Dianasari, ST.',
                'subject_id' => 6,
            ],
            [
                'id' => 4,
                'nip' => 'GK18',
                'name' => 'Dewi Rahmawati, S.Ag.',
                'subject_id' => 7,
            ],
            [
                'id' => 5,
                'nip' => 'GP21',
                'name' => 'I Gusti Ayu Ngurah Artini, S.Pd.',
                'subject_id' => 8,
            ],
            [
                'id' => 6,
                'nip' => 'GP70',
                'name' => 'Ni Made Muliani, S.S.',
                'subject_id' => 9,
            ],
            [
                'id' => 7,
                'nip' => 'GP85',
                'name' => 'Pande Made Mahendri Pramadewi, S.Pd',
                'subject_id' => 10,
            ],
            [
                'id' => 8,
                'nip' => 'GP6',
                'name' => 'Kadek Dewi Marlini,S.Pd. M.Pd.',
                'subject_id' => 11,
            ],
            [
                'id' => 9,
                'nip' => 'GH61',
                'name' => 'I Made Yana Pratyaksa, S.Pd',
                'subject_id' => 4,
            ],
            [
                'id' => 10,
                'nip' => 'GP3K50',
                'name' => 'Ni Putu Khrisna Ajmadewi, S.Pd',
                'subject_id' => 3,
            ],
            [
                'id' => 11,
                'nip' => 'GH57',
                'name' => 'Kadek Unggah Adi Nope, S.Pd',
                'subject_id' => 5,
            ],
            [
                'id' => 12,
                'nip' => 'GP3K52',
                'name' => 'Putu Assri Handayani, S.Pd.,M.Pd',
                'subject_id' => 3,
            ],
            [
                'id' => 13,
                'nip' => 'GP3K24',
                'name' => 'I Made Seiko Murdiasa, S.Pd',
                'subject_id' => 11,
            ],
            [
                'id' => 14,
                'nip' => 'GP69',
                'name' => 'I Gusti Lanang Yudiana, S.Pd',
                'subject_id' => 8,
            ],
            [
                'id' => 15,
                'nip' => 'GP89',
                'name' => 'I Putu Hadi Wiguna, S.Pd',
                'subject_id' => 9,
            ],
            [
                'id' => 16,
                'nip' => 'GP3K18',
                'name' => 'Ida Ayu Gede Agus Mahadewi, S.Ag.,M.Pd',
                'subject_id' => 7,
            ],
            [
                'id' => 17,
                'nip' => 'GP3K31',
                'name' => 'Ida Ayu Kade Ari Suarrini, S.Pd',
                'subject_id' => 11,
            ],
            [
                'id' => 18,
                'nip' => 'GP3K21',
                'name' => 'Ida Ayu Putu Gita Sari, S,Pd., M.Pd',
                'subject_id' => 2,
            ],
            [
                'id' => 19,
                'nip' => 'GP3K78',
                'name' => 'I Wayan Nuryana, S.Pd',
                'subject_id' => 8,
            ],
            [
                'id' => 20,
                'nip' => 'GP77',
                'name' => 'Anom Sri Ayu Sukariani, S.S',
                'subject_id' => 9,
            ],
        ];

        foreach ($teacherUser as $teacher) {
            $teacherUser = User::create([
                'username' => $teacher['nip'],
                'password' => Hash::make('password123'),
                'role' => 'teacher',
            ]);

            Teacher::create([
                'id' => $teacher['id'],
                'user_id' => $teacherUser->id,
                'nip' => $teacher['nip'],
                'name' => $teacher['name'],
                'subject_id' => $teacher['subject_id'],
            ]);
        }
    }
}