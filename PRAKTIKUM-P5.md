# P5 — Autentikasi dan Otorisasi (Laravel)

## Yang ditambahkan / diubah
- Migration `add_role_to_users_table` (kolom `role`, default `pembaca`)
- `User.php` — `role` masuk `$fillable`
- `Auth/LoginController.php` + `resources/views/auth/login.blade.php`
- `AppServiceProvider.php` — Gate `manage-letters` (hanya role `petugas`)
- `routes/web.php` — group `guest` / `auth` + `can:manage-letters`
- `layouts/app.blade.php` — nama user + tombol Keluar (`@auth`)
- `surat-masuk/index.blade.php` — Tambah/Edit/Hapus dibungkus `@can`
- `RouteServiceProvider::HOME` diubah ke `/` (redirect setelah login/guest)
- `UserSeeder` — akun uji (lokal saja)

## Menjalankan
```
php artisan migrate
php artisan db:seed --class=UserSeeder
php artisan route:list --path=surat-masuk
php artisan serve
```
Akun uji (password sama): `petugas@example.test` dan `pembaca@example.test` / `PraktikumP5!2026`

## Checklist pengujian
| No | Skenario | Hasil |
|----|----------|-------|
| 1 | Buka /surat-masuk tanpa login | Redirect ke /login |
| 2 | Login petugas | Masuk dashboard |
| 3 | Password salah | Pesan error, tetap di login |
| 4 | Petugas tambah/edit/hapus | Berhasil |
| 5 | Pembaca buka daftar & detail | Berhasil |
| 6 | Pembaca buka /surat-masuk/create | 403 |
| 7 | Pembaca POST/PUT/DELETE langsung | 403 |
| 8 | Logout lalu buka /surat-masuk | Kembali ke login |
| 10 | ID tidak ada setelah login | 404 |

## Git
```
git add .
git commit -m "P5: autentikasi dan otorisasi SIM-Surat"
git push
```
