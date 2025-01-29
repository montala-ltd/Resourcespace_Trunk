<?php


$lang["csv_upload_nav_link"]='Nahrávanie CSV súboru';
$lang["csv_upload_intro"]='Tento plugin umožňuje vytvárať alebo aktualizovať zdroje nahratím súboru CSV. Formát CSV súboru je dôležitý';
$lang["csv_upload_condition1"]='Uistite sa, že CSV súbor je zakódovaný pomocou <b>UTF-8 bez BOM</b>.';
$lang["csv_upload_condition2"]='CSV musí obsahovať riadok s hlavičkou';
$lang["csv_upload_condition3"]='Aby bolo možné neskôr nahrať súbory zdrojov pomocou funkcie hromadnej náhrady, musí byť stĺpec s názvom "Pôvodný názov súboru" a každý súbor musí mať jedinečný názov.';
$lang["csv_upload_condition4"]='V CSV súbore pre novovytvorené zdroje musia byť prítomné všetky povinné polia';
$lang["csv_upload_condition5"]='Pre stĺpce, ktoré obsahujú hodnoty s <b>čiarkami (,)</b>, uistite sa, že ich formátujete ako typ <b>text</b>, aby ste nemuseli pridávať úvodzovky (""). Pri ukladaní ako súbor csv sa uistite, že ste zvolili možnosť citovania buniek typu text';
$lang["csv_upload_condition6"]='Lahko prenesete primer datoteke CSV tako, da kliknete na <a href="../downloads/csv_upload_example.csv">csv-upload-example.csv</a>';
$lang["csv_upload_condition7"]='Ak chcete aktualizovať existujúce údaje o zdroji, môžete si stiahnuť CSV s existujúcimi metadátami kliknutím na možnosť "CSV export - metadata" v ponuke akcií v kolekcii alebo výsledkoch vyhľadávania.';
$lang["csv_upload_condition8"]='Môžete opätovne použiť predtým nakonfigurovaný súbor mapovania CSV kliknutím na "Nahrať súbor konfigurácie CSV"';
$lang["csv_upload_error_no_permission"]='Nemáte správne oprávnenia na nahrávanie súboru CSV';
$lang["check_line_count"]='Nájdené sú aspoň dva riadky v súbore CSV';
$lang["csv_upload_file"]='Vyberte CSV súbor';
$lang["csv_upload_default"]='Predvolené';
$lang["csv_upload_error_no_header"]='V súboru sa nenašiel riadok s hlavičkou';
$lang["csv_upload_update_existing"]='Aktualizovať existujúce zdroje? Ak to nie je zaškrtnuté, potom sa nové zdroje vytvoria na základe údajov v CSV súbore';
$lang["csv_upload_update_existing_collection"]='Aktualizovať iba zdroje v konkrétnej kolekcii?';
$lang["csv_upload_process"]='Spracovanie';
$lang["csv_upload_add_to_collection"]='Pridať novovytvorené zdroje do aktuálnej kolekcie?';
$lang["csv_upload_step1"]='Krok 1 - Vyberte súbor';
$lang["csv_upload_step2"]='Krok 2 - Predvolené možnosti zdrojových súborov';
$lang["csv_upload_step3"]='Krok 3 - Mapovanie stĺpcov na polia metadát';
$lang["csv_upload_step4"]='Krok 4 - Kontrola dát v CSV súbore';
$lang["csv_upload_step5"]='Krok 5 - Spracovanie CSV súboru';
$lang["csv_upload_update_existing_title"]='Aktualizovať existujúce zdroje';
$lang["csv_upload_update_existing_notes"]='Vyberte požadované možnosti pro aktualizáciu existujúcich zdrojov';
$lang["csv_upload_create_new_title"]='Vytvoriť nové zdroje';
$lang["csv_upload_create_new_notes"]='Vyberte požadované možnosti pro vytvoření nových zdrojů';
$lang["csv_upload_map_fields_notes"]='Zarovnajte stĺpce v CSV s požadovanými metadátovými poliami. Kliknutím na tlačidlo "Ďalej" sa CSV skontroluje bez akýchkoľvek zmien v dátach';
$lang["csv_upload_map_fields_auto_notes"]='Metadatové polia boli predom vybrané na základe názvov alebo titulov, ale prosím skontrolujte, či sú správne';
$lang["csv_upload_workflow_column"]='Vyberte stĺpec, ktorý obsahuje ID stavu pracovného postupu';
$lang["csv_upload_workflow_default"]='Predvolený stav toku práce, ak nie je vybraný žiadny stĺpec alebo ak v stĺpci nie je nájdený žiadny platný stav';
$lang["csv_upload_access_column"]='Vyberte stĺpec, ktorý obsahuje úroveň prístupu (0=Otvorené, 1=Obmedzené, 2=Dôverné)';
$lang["csv_upload_access_default"]='Predvolená úroveň prístupu, ak nie je vybraný žiadny stĺpec alebo ak v stĺpci nie je nájdený platný prístup';
$lang["csv_upload_resource_type_column"]='Vyberte stĺpec, ktorý obsahuje identifikátor typu zdroja';
$lang["csv_upload_resource_type_default"]='Predvolený typ zdroja, ak nie je vybraný žiadny stĺpec alebo ak v stĺpci nie je nájdený žiadny platný typ';
$lang["csv_upload_resource_match_column"]='Vyberte stĺpec, ktorý obsahuje identifikátor zdroja';
$lang["csv_upload_match_type"]='Zhoda zdroja na základe ID zdroja alebo hodnoty pola metadát?';
$lang["csv_upload_multiple_match_action"]='Akcie, ktoré sa majú vykonať, ak sa nájde viacero zhodných zdrojov';
$lang["csv_upload_validation_notes"]='Skontrolujte validačné správy nižšie pred pokračovaním. Kliknite na Proces, aby ste uložili zmeny';
$lang["csv_upload_upload_another"]='Nahrajte ďalší CSV súbor';
$lang["csv_upload_mapping config"]='Nastavitve preslikave stolpcev CSV datoteke';
$lang["csv_upload_download_config"]='Stiahnuť nastavenia mapovania CSV ako súbor';
$lang["csv_upload_upload_config"]='Nahrajte súbor mapovania CSV';
$lang["csv_upload_upload_config_question"]='Nahrajte súbor mapovania CSV? Použite to, ak ste už predtým nahrali podobný súbor CSV a uložili ste konfiguráciu';
$lang["csv_upload_upload_config_set"]='Nastavitev konfiguracije CSV datoteke';
$lang["csv_upload_upload_config_clear"]='Vyčistiť konfiguráciu mapovania CSV súboru';
$lang["csv_upload_mapping_ignore"]='NEPOUŽÍVAJTE';
$lang["csv_upload_mapping_header"]='Hlavička stĺpca';
$lang["csv_upload_mapping_csv_data"]='Vzorčni podatki iz CSV-ja';
$lang["csv_upload_using_config"]='Použitie existujúcej konfigurácie CSV súboru';
$lang["csv_upload_process_offline"]='Spracovať CSV súbor offline? Toto by malo byť použité pre veľké CSV súbory. Budete upozornení cez správu v ResourceSpace, keď bude spracovanie dokončené';
$lang["csv_upload_oj_created"]='CSV nahrávací úloha vytvorená s ID úlohy # [jobref]. <br/>Dostanete systémovú správu od ResourceSpace, keď úloha skončí';
$lang["csv_upload_oj_complete"]='CSV nahrávanie úlohy dokončené. Kliknite na odkaz pre zobrazenie celého protokolu';
$lang["csv_upload_oj_failed"]='Zlyhalo nahrávanie CSV súboru';
$lang["csv_upload_processing_x_meta_columns"]='Spracovanie %count stĺpcov metadát';
$lang["csv_upload_processing_complete"]='Spracovanie dokončené o [time] ([hours] hodín, [minutes] minút, [seconds] sekúnd)';
$lang["csv_upload_error_in_progress"]='Spracovanie zrušené - tento súbor CSV sa už spracováva';
$lang["csv_upload_error_file_missing"]='Chyba - chýba CSV súbor: [file]';
$lang["csv_upload_full_messages_link"]='Zobrazujem iba prvých 1000 riadkov. Pre stiahnutie celého súboru s protokolom kliknite <a href=\'[log_url]\' target=\'_blank\'>sem</a>';
$lang["csv_upload_ignore_errors"]='Ignorovať chyby a spracovať súbor napriek nim';
$lang["csv_upload_process_offline_quick"]='Preskočiť overovanie a spracovať CSV súbor offline? Toto by malo byť použité iba pre veľké CSV súbory, keď testovanie na menších súboroch bolo dokončené. Budete upozornení cez správu v ResourceSpace, keď nahrávanie bude dokončené';
$lang["csv_upload_force_offline"]='Tento veľký CSV súbor môže trvať dlhú dobu na spracovanie, preto sa bude spracovávať offline. Budete informovaní správou z ResourceSpace, keď bude spracovanie dokončené';
$lang["csv_upload_recommend_offline"]='Tento veľký CSV súbor môže trvať veľmi dlho na spracovanie. Ak potrebujete spracovať veľké CSV súbory, odporúča sa povoliť offline úlohy';
$lang["csv_upload_createdfromcsvupload"]='Vytvorené pomocou doplnku pre nahrávanie CSV súborov';
$lang["plugin-csv_upload-title"]='Nalaganje CSV';
$lang["plugin-csv_upload-desc"]='Naloži meta podatke z uporabo CSV datoteke.';