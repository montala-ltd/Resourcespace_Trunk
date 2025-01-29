<?php


$lang["simpleldap_ldaptype"]='Penyedia Direktori';
$lang["ldapserver"]='Server LDAP';
$lang["ldap_encoding"]='Enkode data yang diterima dari Server LDAP (diatur jika bukan UTF-8 dan data tidak ditampilkan dengan benar - misalnya nama tampilan)';
$lang["domain"]='Domain AD, jika beberapa pisahkan dengan titik koma';
$lang["emailsuffix"]='Akhiran Email - digunakan jika tidak ditemukan data atribut email';
$lang["basedn"]='Base DN. Jika pengguna berada di beberapa DN, pisahkan dengan titik koma';
$lang["loginfield"]='Kolom Login';
$lang["usersuffix"]='Akhiran Pengguna (titik akan ditambahkan di depan akhiran)';
$lang["groupfield"]='Bidang Grup';
$lang["createusers"]='Membuat Pengguna';
$lang["fallbackusergroup"]='Grup Pengguna Cadangan';
$lang["ldaprsgroupmapping"]='Pemetaan Grup LDAP-ResourceSpace';
$lang["ldapvalue"]='Nilai LDAP';
$lang["rsgroup"]='Grup ResourceSpace';
$lang["addrow"]='Tambah Baris';
$lang["email_attribute"]='Atribut yang digunakan untuk alamat email';
$lang["phone_attribute"]='Atribut yang digunakan untuk nomor telepon';
$lang["simpleldap_telephone"]='Telepon';
$lang["simpleldap_unknown"]='tidak diketahui';
$lang["simpleldap_update_group"]='Memperbarui grup pengguna setiap kali masuk. Jika tidak menggunakan grup AD untuk menentukan akses, atur ke false sehingga pengguna dapat dipromosikan secara manual';
$lang["simpleldappriority"]='Prioritas (nomor yang lebih tinggi akan diutamakan)';
$lang["simpleldap_create_new_match_email"]='Email-match: Periksa apakah email LDAP cocok dengan email akun RS yang sudah ada dan gunakan akun tersebut. Akan berfungsi bahkan jika \'Buat pengguna\' dinonaktifkan';
$lang["simpleldap_allow_duplicate_email"]='Izinkan pembuatan akun baru jika ada akun yang sudah ada dengan alamat email yang sama? (ini akan diabaikan jika email-match diatur di atas dan satu kecocokan ditemukan)';
$lang["simpleldap_multiple_email_match_subject"]='ResourceSpace - Upaya masuk login email yang bertentangan';
$lang["simpleldap_multiple_email_match_text"]='Pengguna LDAP baru telah masuk tetapi sudah ada lebih dari satu akun dengan alamat email yang sama:';
$lang["simpleldap_notification_email"]='Alamat pemberitahuan contohnya jika alamat email yang sama terdaftar. Jika kosong, tidak ada yang akan dikirim.';
$lang["simpleldap_duplicate_email_error"]='Ada akun yang sudah ada dengan alamat email yang sama. Silakan hubungi administrator Anda.';
$lang["simpleldap_no_group_match_subject"]='ResourceSpace - pengguna baru tanpa pemetaan grup';
$lang["simpleldap_no_group_match"]='Seorang pengguna baru telah masuk tetapi tidak ada grup ResourceSpace yang dipetakan ke grup direktori mana pun yang mereka miliki.';
$lang["simpleldap_usermemberof"]='Pengguna adalah anggota dari grup direktori berikut: -';
$lang["simpleldap_test"]='Uji konfigurasi LDAP';
$lang["simpleldap_testing"]='Menguji konfigurasi LDAP';
$lang["simpleldap_connection"]='Koneksi ke server LDAP';
$lang["simpleldap_bind"]='Mengikat ke server LDAP';
$lang["simpleldap_username"]='Nama Pengguna/Nama DN Pengguna';
$lang["simpleldap_password"]='Kata sandi';
$lang["simpleldap_test_auth"]='Uji autentikasi';
$lang["simpleldap_displayname"]='Nama tampilan';
$lang["simpleldap_memberof"]='Anggota dari';
$lang["simpleldap_test_title"]='Uji coba';
$lang["simpleldap_result"]='Hasil';
$lang["simpleldap_retrieve_user"]='Mengambil detail pengguna';
$lang["simpleldap_externsion_required"]='Modul PHP LDAP harus diaktifkan agar plugin ini dapat berfungsi';
$lang["simpleldap_usercomment"]='Dibuat oleh plugin SimpleLDAP.';
$lang["simpleldap_usermatchcomment"]='Diperbarui menjadi pengguna LDAP oleh SimpleLDAP.';
$lang["origin_simpleldap"]='Plugin SimpleLDAP';
$lang["simpleldap_LDAPTLS_REQCERT_never_label"]='Jangan periksa FQDN server dengan CN sertifikat';
$lang["port"]='Port';
$lang["simpleldap_domain"]='Domain';
$lang["plugin-simpleldap-title"]='LDAP Sederhana';
$lang["plugin-simpleldap-desc"]='Implementasi lebih sederhana dari autentikasi ldap, ditargetkan pada Active Directory tetapi juga mendukung direktori Oracle';