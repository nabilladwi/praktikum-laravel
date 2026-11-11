# P4 — CRUD dan Validasi Surat Masuk (Laravel)

## Yang ditambahkan
- `routes/web.php` — resource route `surat-masuk` (parameter `{id}`)
- `app/Models/IncomingLetter.php` — model + `$fillable`
- `app/Http/Controllers/SuratMasukController.php` — CRUD lengkap + validasi
- `resources/views/surat-masuk/{index,create,edit,show}.blade.php`
- `database/migrations/2026_10_01_000000_create_incoming_letters_table.php` (dilewati jika tabel sudah ada)
- `database/seeders/IncomingLetterSeeder.php` (3 data contoh, tidak menggandakan)

## Menjalankan
```
php artisan migrate
php artisan db:seed --class=IncomingLetterSeeder
php artisan route:list --path=surat-masuk
php artisan serve
```
Buka http://127.0.0.1:8000/surat-masuk

> Jangan jalankan `migrate:fresh` (menghapus data). Pastikan `DB_DATABASE` di `.env` sudah dibuat di MySQL.

## Checklist pengujian
| No | Pengujian | Hasil |
|----|-----------|-------|
| 1 | Buka daftar | Data tampil |
| 2 | Buka form tambah | Form tampil |
| 3 | Simpan data valid | Data bertambah |
| 4 | Nomor surat kosong | Pesan validasi; tidak tersimpan |
| 5 | Buka detail | Data sesuai ID |
| 6 | Edit data | Perubahan tersimpan |
| 7 | Hapus data uji | Data terhapus |
| 8 | `/surat-masuk/999999` | 404 |

## Git
```
git add .
git commit -m "P4: CRUD dan validasi surat masuk"
git push
```
