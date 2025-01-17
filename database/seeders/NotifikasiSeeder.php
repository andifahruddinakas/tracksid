<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notifikasi = array(
            array(
                "id" => 1,
                "kode" => "sambutan",
                "judul" => "Sambutan OpenDesa",
                "jenis" => "pengumuman",
                "isi" => "Selamat menggunakan OpenSID untuk memajukan desa anda. Instalasi OpenSID desa anda telah tercatat di <a href=\"https://pantau.opensid.my.id\" target=\"_blank\">server Pantau OpenSID</a>. Website itu mencatat semua desa yg telah memasang OpenSID, dan dapat anda gunakan untuk mencari desa lain di wilayah anda yang juga memanfaatkan OpenSID.\r\n<br><br>\r\nSesekali server Pantau OpenSID akan mengirim pengumuman terkait OpenSID, misalnya berita adanya fitur baru penting untuk meningkatkan keamanan website desa anda. Mohon pengumuman dari Pantau OpenSID seperti itu diperhatikan dan ditindaklanjuti.\r\n",
                "server" => "TrackSID",
                "frekuensi" => 0,
                "aktif" => 1,
                "created_at" => now(),
            ),
        );

        DB::table('notifikasi')->insert($notifikasi);
    }
}
