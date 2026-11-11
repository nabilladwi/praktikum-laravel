<?php

namespace Database\Seeders;

use App\Models\IncomingLetter;
use Illuminate\Database\Seeder;

class IncomingLetterSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['001/FT/X/2026',   '2026-10-01', 'Fakultas Teknik', 'Undangan Rapat',         'Undangan rapat koordinasi Fakultas Teknik'],
            ['002/BAA/X/2026',  '2026-10-02', 'BAA',             'Pemberitahuan Akademik', 'Pemberitahuan kegiatan akademik'],
            ['003/LPPM/X/2026', '2026-10-03', 'LPPM',            'Undangan Sosialisasi',   'Undangan kegiatan sosialisasi penelitian'],
        ];

        foreach ($data as [$nomor, $tanggal, $pengirim, $perihal, $ket]) {
            IncomingLetter::firstOrCreate(
                ['nomor_surat' => $nomor],
                ['tanggal' => $tanggal, 'pengirim' => $pengirim, 'perihal' => $perihal, 'keterangan' => $ket]
            );
        }
    }
}
