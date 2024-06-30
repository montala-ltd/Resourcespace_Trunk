<?php


$lang["tms_link_configuration"]='Konfiguracija TMS poveznice';
$lang["tms_link_dsn_name"]='Naziv lokalnog DSN-a za povezivanje s TMS bazom podataka. Na Windowsu se to konfigurira putem Administrativnih alata -> Izvori podataka (ODBC). Provjerite je li konfigurirana ispravna veza (32/64 bita)';
$lang["tms_link_table_name"]='Naziv TMS tablice ili prikaza korištenog za dohvaćanje TMS podataka';
$lang["tms_link_user"]='Korisničko ime za TMS bazu podataka povezivanja';
$lang["tms_link_password"]='Lozinka za korisnika baze podataka TMS';
$lang["tms_link_resource_types"]='Odaberite vrste resursa povezane s TMS-om';
$lang["tms_link_object_id_field"]='Polje koje se koristi za pohranu TMS ID objekta';
$lang["tms_link_checksum_field"]='Polje metapodataka za pohranjivanje kontrolnih zbrojeva. Ovo je kako bi se spriječila nepotrebna ažuriranja ako se podaci nisu promijenili';
$lang["tms_link_checksum_column_name"]='Stupac vraćen iz TMS tablice za upotrebu u kontrolnom zbroju vraćenom iz TMS baze podataka.';
$lang["tms_link_tms_data"]='Živi TMS podaci';
$lang["tms_link_database_setup"]='TMS baza podataka veza';
$lang["tms_link_metadata_setup"]='Konfiguracija TMS metapodataka';
$lang["tms_link_tms_link_success"]='Uspješna veza';
$lang["tms_link_tms_link_failure"]='Veza nije uspjela. Molimo provjerite svoje podatke.';
$lang["tms_link_test_link"]='Testni link za TMS';
$lang["tms_link_tms_resources"]='TMS Resursi';
$lang["tms_link_no_tms_resources"]='Nisu pronađeni TMS resursi. Molimo provjerite jeste li ispravno konfigurirali dodatak i mapirali odgovarajuća polja metapodataka ObjectID i kontrolne zbrojeve';
$lang["tms_link_no_resource"]='Nije određen resurs';
$lang["tms_link_resource_id"]='Identifikator resursa';
$lang["tms_link_object_id"]='Identifikator objekta';
$lang["tms_link_checksum"]='Kontrolna suma';
$lang["tms_link_no_tms_data"]='Nema podataka vraćenih iz TMS-a';
$lang["tms_link_field_mappings"]='Mapiranje polja TMS-a na polja u ResourceSpace-u';
$lang["tms_link_resourcespace_field"]='Polje ResourceSpace-a';
$lang["tms_link_column_name"]='Stupac TMS';
$lang["tms_link_add_mapping"]='Dodaj mapiranje';
$lang["tms_link_performance_options"]='Postavke TMS skripte - ove postavke će utjecati na zakazani zadatak koji ažurira podatke resursa iz TMS-a';
$lang["tms_link_query_chunk_size"]='Broj zapisa za dohvat iz TMS-a u svakom dijelu. Ovo se može prilagoditi kako bi se pronašao optimalni postav.';
$lang["tms_link_test_mode"]='Testni način rada - Postavite na "true" i skripta će se izvršiti, ali neće ažurirati resurse';
$lang["tms_link_email_notify"]='Adresa e-pošte na koju će skripta slati obavijesti. Ako ostane prazno, koristit će se zadana adresa sustava za obavijesti';
$lang["tms_link_test_count"]='Broj zapisa za testiranje skripte - može se postaviti na niži broj kako bi se testirala skripta i performanse';
$lang["tms_link_last_run_date"]='<strong>Zadnje pokretanje skripte:</strong>';
$lang["tms_link_script_failure_notify_days"]='Broj dana nakon kojih će se prikazati upozorenje i poslati e-pošta ako skripta nije dovršena';
$lang["tms_link_script_problem"]='UPOZORENJE - TMS skripta nije uspješno dovršena u posljednjih %days% dana. Vrijeme posljednjeg pokretanja:';
$lang["tms_link_upload_tms_field"]='TMS Identifikator objekta';
$lang["tms_link_upload_nodata"]='Nisu pronađeni TMS podaci za ovaj ObjectID:';
$lang["tms_link_confirm_upload_nodata"]='Molimo označite okvir kako biste potvrdili da želite nastaviti s prijenosom';
$lang["tms_link_enable_update_script"]='Omogući skriptu za ažuriranje TMS-a';
$lang["tms_link_enable_update_script_info"]='Omogućite skriptu koja će automatski ažurirati TMS podatke kada se pokrene zakazani zadatak ResourceSpace-a (cron_copy_hitcount.php).';
$lang["tms_link_log_directory"]='Mapa za pohranu zapisa skripti. Ako se ostavi prazno ili je neispravno, neće se vršiti nikakvo evidentiranje.';
$lang["tms_link_log_expiry"]='Broj dana za pohranu zapisa skripti. Svi TMS zapisi u ovom direktoriju koji su stariji bit će izbrisani';
$lang["tms_link_column_type_required"]='<strong>NAPOMENA</strong>: Ako dodajete novi stupac, molimo dodajte naziv stupca u odgovarajuću listu ispod kako biste naznačili sadrži li novi stupac numeričke ili tekstualne podatke.';
$lang["tms_link_numeric_columns"]='Popis stupaca koji bi se trebali dohvatiti kao UTF-8';
$lang["tms_link_text_columns"]='Popis stupaca koji bi se trebali dohvatiti kao UTF-16';
$lang["tms_link_bidirectional_options"]='Dvostrana sinkronizacija (dodavanje RS slika u TMS)';
$lang["tms_link_push_condition"]='Kriteriji metapodataka koji moraju biti ispunjeni da bi se slike dodale u TMS';
$lang["tms_link_tms_loginid"]='TMS identifikacijska oznaka za prijavu koju će ResourceSpace koristiti za unos zapisa. Za ovaj ID mora biti stvoren ili već postojati TMS račun';
$lang["tms_link_push_image"]='Pritisnite sliku na TMS nakon stvaranja pregleda? (Ovo će stvoriti novi medijski zapis u TMS-u)';
$lang["tms_link_push_image_sizes"]='Preferirana veličina pregleda za slanje u TMS. Odvojeno zarezom po redoslijedu preferencije tako da će se koristiti prva dostupna veličina';
$lang["tms_link_mediatypeid"]='MediaTypeID za korištenje u umetnutim zapisima medija';
$lang["tms_link_formatid"]='FormatID za korištenje u unesenim medijskim zapisima';
$lang["tms_link_colordepthid"]='Identifikator dubine boje za korištenje u unesenim medijskim zapisima';
$lang["tms_link_media_path"]='Korijenska putanja do spremišta datoteka koja će biti pohranjena u TMS-u, npr. \\RS_SERVER\\filestore\\. Obavezno uključite završnu kosu crtu. Naziv datoteke pohranjene u TMS-u uključivat će relativnu putanju od korijenskog spremišta datoteka.';
$lang["tms_link_module"]='Modul';
$lang["tms_link_tms_uid_field"]='Polje TMS UID';
$lang["tms_link_rs_uid_field"]='Polje UID u ResourceSpace-u';
$lang["tms_link_applicable_rt"]='Primjenjivi tip(ovi) resursa';
$lang["tms_link_modules_mappings_tools"]='Alati';
$lang["tms_link_add_new_tms_module"]='Dodaj novi dodatni TMS modul';
$lang["tms_link_tms_module_configuration"]='Konfiguracija TMS modula';
$lang["tms_link_tms_module_name"]='Naziv modula TMS';
$lang["tms_link_encoding"]='kodiranje';
$lang["tms_link_not_found_error_title"]='Nije pronađeno';
$lang["tms_link_not_deleted_error_detail"]='Nije moguće izbrisati traženu konfiguraciju modula.';
$lang["tms_link_uid_field"]='TMS %module_name %tms_uid_field

TMS %module_name %tms_uid_field (TMS %naziv_modula %TMS_UID_polje)';
$lang["tms_link_confirm_delete_module_config"]='Jeste li sigurni da želite izbrisati konfiguraciju ovog modula? Ova radnja se ne može poništiti!';
$lang["tms_link_modules_mappings"]='Sinkronizacija iz dodatnih modula (tablica/prikaza)';
$lang["tms_link_mediapaths_resource_reference_column"]='Stupac za korištenje u MediaMaster tablici za pohranu ID-a resursa. Ovo je opcionalno i koristi se kako bi se izbjeglo korištenje istog Media Master ID-a za više resursa.';
$lang["tms_link_write_to_debug_log"]='Uključi napredak skripte u sistemski debug zapisnik (zahtijeva zasebno konfigurirano debug zapisivanje). Oprez: Uzrokovat će brzo povećanje debug zapisnika.';