# Laravel E-Ticaret Sitesi

Laravel öğrenirken video dersleri takip ederek geliştirdiğim e-ticaret sitesi çalışması. Ziyaretçi sayfaları, üyelik sistemi ve yönetici paneli arayüzü içerir. Proje tamamlanmamıştır.

## İçerik

- **Site arayüzü:** Ana sayfa ve hakkımızda sayfası; başlık, menü, slider ve kategori alanları ayrı Blade parçalarıdır.
- **Üyelik:** Jetstream ve Fortify ile kayıt, giriş, şifre sıfırlama, profil ve iki adımlı doğrulama.
- **Yönetici girişi:** Ayrı giriş sayfası ve oturum kontrolü.
- **Yönetici paneli:** Panel şablonu ve kategori yönetimi için tanımlanmış rotalar.

## Kullanılan teknolojiler

| Katman | Araç |
| --- | --- |
| Backend | PHP 8.2+, Laravel 11 |
| Kimlik doğrulama | Jetstream 5, Fortify, Sanctum |
| Arayüz | Blade, Livewire 3, Tailwind CSS, Vite |
| Veritabanı | MySQL |
| Test | Pest |

## Kurulum

Önce MySQL'de `laravel1j` adlı bir veritabanı oluşturun.

```bash
git clone https://github.com/traldo44/Laravel1j-e-commerce.git
cd Laravel1j-e-commerce
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run build
php artisan serve
```

Site `http://127.0.0.1:8000/home` adresinde açılır. Veritabanı bilgilerinizi `.env` dosyasından değiştirebilirsiniz.

## Mevcut durum

Yönetici paneli ve kategori rotalarının kullandığı `App\Http\Controllers\Admin` sınıfları bu depoda yer almıyor. Bu yüzden `/admin` altındaki sayfalardan yalnızca giriş sayfası kullanılabilir.
