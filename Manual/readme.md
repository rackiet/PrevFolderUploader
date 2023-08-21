# File Upload ke Folder Spesifik

Proyek ini menyediakan cara sederhana untuk mengunggah file ke folder spesifik pada server. Dalam hal ini, file akan diunggah ke folder yang berada satu tingkat di atas direktori tempat skrip ini berada.

## Bagaimana Cara Kerjanya?

1. **Form Unggah File**: Halaman HTML menyediakan form untuk pengguna memilih dan mengunggah file.
2. **Pengolahan di Server**: Ketika file dikirim, kode PHP akan memproses file tersebut dan menyimpannya di folder target yang ditentukan.

## Penggunaan

Letakkan file PHP ini di direktori yang ingin Anda gunakan sebagai endpoint unggah file. Misalnya, jika Anda meletakkan kode ini di `https://example.com/test/fileupload/forupload/`, file yang diunggah akan disimpan di `https://example.com/test/`.

### Struktur Folder

- `test/`: Folder tempat file yang diunggah akan disimpan.
- `test/fileupload/forupload/`: Direktori tempat skrip ini berada.

### Kode

Kode dalam file ini menggunakan PHP dan HTML sederhana untuk menangani unggah file. Anda dapat melihat kode lengkap di file yang relevan.

## Keamanan

Harap perhatikan bahwa contoh ini tidak memasukkan pemeriksaan keamanan apa pun terhadap file yang diunggah. Dalam penggunaan nyata, Anda harus menambahkan pemeriksaan keamanan untuk memastikan bahwa hanya file yang aman yang dapat diunggah.

## Lisensi

Gunakan kode ini sesuai kebutuhan Anda. Harap pertimbangkan menambahkan pemeriksaan keamanan yang sesuai jika Anda akan menggunakannya dalam produksi.
