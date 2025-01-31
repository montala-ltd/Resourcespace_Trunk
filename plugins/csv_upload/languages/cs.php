<?php

$lang["csv_upload_nav_link"] = 'Nahrání CSV';
$lang["csv_upload_intro"] = 'Tento plugin vám umožňuje vytvořit nebo aktualizovat zdroje nahráním souboru CSV. Formát CSV je důležitý';
$lang["csv_upload_condition1"] = 'Ujistěte se, že soubor CSV je kódován pomocí <b>UTF-8 bez BOM</b>.';
$lang["csv_upload_condition2"] = 'CSV musí mít řádek záhlaví';
$lang["csv_upload_condition3"] = 'Aby bylo možné později nahrát soubory zdrojů pomocí funkce hromadné náhrady, měl by existovat sloupec s názvem \'Původní název souboru\' a každý soubor by měl mít jedinečný název souboru';
$lang["csv_upload_condition4"] = 'Všechny povinné položky pro nově vytvořené zdroje musí být přítomny v CSV';
$lang["csv_upload_condition5"] = 'Pro sloupec/sloupce, které obsahují hodnoty s <b>čárkami ( , )</b>, ujistěte se, že je formátujete jako typ "text", abyste nemuseli přidávat uvozovky (""). Při ukládání jako soubor csv se ujistěte, že je zaškrtnuta možnost citování buněk typu text.';
$lang["csv_upload_condition6"] = 'Můžete si stáhnout příklad souboru CSV kliknutím na <a href="../downloads/csv_upload_example.csv">csv-upload-example.csv</a>';
$lang["csv_upload_condition7"] = 'Pro aktualizaci stávajících dat zdroje můžete stáhnout CSV se stávajícími metadaty kliknutím na možnost \'CSV export - metadata\' z nabídky akcí kolekce nebo výsledků vyhledávání';
$lang["csv_upload_condition8"] = 'Můžete znovu použít dříve nakonfigurovaný soubor mapování CSV kliknutím na \'Nahrát konfigurační soubor CSV\'';
$lang["csv_upload_error_no_permission"] = 'Nemáte správná oprávnění k nahrání souboru CSV';
$lang["check_line_count"] = 'Byly nalezeny alespoň dva řádky v CSV souboru';
$lang["csv_upload_file"] = 'Vyberte soubor CSV';
$lang["csv_upload_default"] = 'Výchozí';
$lang["csv_upload_error_no_header"] = 'V souboru nebyl nalezen žádný záhlaví řádek';
$lang["csv_upload_update_existing"] = 'Aktualizovat stávající zdroje? Pokud toto není zaškrtnuto, budou na základě dat CSV vytvořeny nové zdroje';
$lang["csv_upload_update_existing_collection"] = 'Aktualizovat pouze zdroje v konkrétní kolekci?';
$lang["csv_upload_process"] = 'Proces';
$lang["csv_upload_add_to_collection"] = 'Přidat nově vytvořené zdroje do aktuální kolekce?';
$lang["csv_upload_step1"] = 'Krok 1 - Vyberte soubor';
$lang["csv_upload_step2"] = 'Krok 2 - Výchozí možnosti zdroje';
$lang["csv_upload_step3"] = 'Krok 3 - Přiřaďte sloupce k metadatovým polím';
$lang["csv_upload_step4"] = 'Krok 4 - Kontrola dat CSV';
$lang["csv_upload_step5"] = 'Krok 5 - Zpracování CSV';
$lang["csv_upload_update_existing_title"] = 'Aktualizovat stávající zdroje';
$lang["csv_upload_update_existing_notes"] = 'Vyberte možnosti potřebné k aktualizaci stávajících zdrojů';
$lang["csv_upload_create_new_title"] = 'Vytvořit nové zdroje';
$lang["csv_upload_create_new_notes"] = 'Vyberte možnosti potřebné k vytvoření nových zdrojů';
$lang["csv_upload_map_fields_notes"] = 'Přiřaďte sloupce v CSV k požadovaným polím metadat. Kliknutím na \'Další\' zkontrolujete CSV bez skutečné změny dat';
$lang["csv_upload_map_fields_auto_notes"] = 'Pole metadat byla předvybrána na základě názvů nebo titulů, ale prosím zkontrolujte, zda jsou správná';
$lang["csv_upload_workflow_column"] = 'Vyberte sloupec, který obsahuje ID stavu pracovního postupu';
$lang["csv_upload_workflow_default"] = 'Výchozí stav pracovního postupu, pokud není vybrán žádný sloupec nebo pokud ve sloupci není nalezen platný stav';
$lang["csv_upload_access_column"] = 'Vyberte sloupec, který obsahuje úroveň přístupu (0=Otevřeno, 1=Omezeno, 2=Důvěrné)';
$lang["csv_upload_access_default"] = 'Výchozí úroveň přístupu, pokud není vybrán žádný sloupec nebo pokud ve sloupci nebyl nalezen žádný platný přístup';
$lang["csv_upload_resource_type_column"] = 'Vyberte sloupec, který obsahuje identifikátor typu zdroje';
$lang["csv_upload_resource_type_default"] = 'Výchozí typ zdroje, pokud není vybrán žádný sloupec nebo pokud ve sloupci není nalezen platný typ';
$lang["csv_upload_resource_match_column"] = 'Vyberte sloupec, který obsahuje identifikátor zdroje';
$lang["csv_upload_match_type"] = 'Porovnat zdroj na základě ID zdroje nebo hodnoty pole metadat?';
$lang["csv_upload_multiple_match_action"] = 'Akce, kterou je třeba provést, pokud je nalezeno více odpovídajících zdrojů';
$lang["csv_upload_validation_notes"] = 'Zkontrolujte níže uvedené validační zprávy před pokračováním. Klikněte na Zpracovat pro potvrzení změn';
$lang["csv_upload_upload_another"] = 'Nahrát další CSV';
$lang["csv_upload_mapping config"] = 'Nastavení mapování sloupců CSV';
$lang["csv_upload_download_config"] = 'Stáhnout nastavení mapování CSV jako soubor';
$lang["csv_upload_upload_config"] = 'Nahrát CSV mapovací soubor';
$lang["csv_upload_upload_config_question"] = 'Nahrát soubor mapování CSV? Použijte to, pokud jste již dříve nahráli podobný CSV a uložili konfiguraci';
$lang["csv_upload_upload_config_set"] = 'Nastavení konfigurace CSV';
$lang["csv_upload_upload_config_clear"] = 'Vymazat konfiguraci mapování CSV';
$lang["csv_upload_mapping_ignore"] = 'NEPOUŽÍVEJTE';
$lang["csv_upload_mapping_header"] = 'Záhlaví sloupce';
$lang["csv_upload_mapping_csv_data"] = 'Ukázková data z CSV';
$lang["csv_upload_using_config"] = 'Použití stávající konfigurace CSV';
$lang["csv_upload_process_offline"] = 'Zpracovat CSV soubor offline? Toto by mělo být použito pro velké CSV soubory. Budete informováni prostřednictvím zprávy v ResourceSpace, jakmile bude zpracování dokončeno';
$lang["csv_upload_oj_created"] = 'CSV nahrávací úloha vytvořena s ID úlohy # [jobref]. <br/>Obdržíte systémovou zprávu ResourceSpace, jakmile bude úloha dokončena';
$lang["csv_upload_oj_complete"] = 'Nahrávání CSV dokončeno. Klikněte na odkaz pro zobrazení celého souboru protokolu';
$lang["csv_upload_oj_failed"] = 'Nahrání CSV se nezdařilo. Klikněte na odkaz pro zobrazení celého souboru protokolu a zkontrolujte chyby';
$lang["csv_upload_processing_x_meta_columns"] = 'Zpracování %count sloupců metadat';
$lang["csv_upload_processing_complete"] = 'Zpracování dokončeno v [time] ([hours] hodin, [minutes] minut, [seconds] sekund';
$lang["csv_upload_error_in_progress"] = 'Zpracování přerušeno - tento CSV soubor je již zpracováván';
$lang["csv_upload_error_file_missing"] = 'Chyba - Chybí soubor CSV: [file]';
$lang["csv_upload_full_messages_link"] = 'Zobrazuje se pouze prvních 1000 řádků, pro stažení celého souboru protokolu klikněte <a href=\'[log_url]\' target=\'_blank\'>zde</a>';
$lang["csv_upload_ignore_errors"] = 'Ignorovat chyby a přesto zpracovat soubor';
$lang["csv_upload_process_offline_quick"] = 'Přeskočit ověření a zpracovat CSV soubor offline? Toto by mělo být použito pouze pro velké CSV soubory, když bylo testování na menších souborech dokončeno. Budete informováni prostřednictvím zprávy v ResourceSpace, jakmile bude nahrávání dokončeno';
$lang["csv_upload_force_offline"] = 'Tento velký CSV může trvat dlouho zpracovat, takže bude spuštěn offline. Po dokončení zpracování budete informováni prostřednictvím zprávy v ResourceSpace.';
$lang["csv_upload_recommend_offline"] = 'Tento velký CSV soubor může trvat velmi dlouho zpracovat. Doporučuje se povolit offline úlohy, pokud potřebujete zpracovávat velké CSV soubory';
$lang["csv_upload_createdfromcsvupload"] = 'Vytvořeno z pluginu pro nahrávání CSV';
$lang["plugin-csv_upload-title"] = 'Nahrání CSV';
$lang["plugin-csv_upload-desc"] = '[Pokročilé] Nahrát metadata pomocí CSV souboru.';
