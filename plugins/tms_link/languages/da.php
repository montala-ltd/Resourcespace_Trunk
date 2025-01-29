<?php


$lang["tms_link_configuration"]='TMS Link Konfiguration';
$lang["tms_link_dsn_name"]='Navn på lokal DSN til at forbinde til TMS-databasen. På Windows konfigureres dette via Administrative værktøjer -> Datakilder (ODBC). Sørg for, at den korrekte forbindelse er konfigureret (32/64 bit)';
$lang["tms_link_table_name"]='Navn på TMS-tabel eller -visning, der anvendes til at hente TMS-data';
$lang["tms_link_user"]='Brugernavn til TMS databaseforbindelse';
$lang["tms_link_password"]='Adgangskode til TMS databasebruger';
$lang["tms_link_resource_types"]='Vælg ressourcetyper, der er linket til TMS';
$lang["tms_link_object_id_field"]='Felt der bruges til at gemme TMS objekt ID';
$lang["tms_link_checksum_field"]='Metadatafelt til brug for opbevaring af checksums. Dette er for at forhindre unødvendige opdateringer, hvis data ikke har ændret sig';
$lang["tms_link_checksum_column_name"]='Kolonne returneret fra TMS-tabel til brug for checksum returneret fra TMS-databasen.';
$lang["tms_link_tms_data"]='Levende TMS-data';
$lang["tms_link_database_setup"]='TMS database forbindelse';
$lang["tms_link_metadata_setup"]='TMS metadata konfiguration';
$lang["tms_link_tms_link_success"]='Forbindelse oprettet';
$lang["tms_link_tms_link_failure"]='Forbindelsen mislykkedes. Venligst tjek dine detaljer.';
$lang["tms_link_test_link"]='Test link til TMS';
$lang["tms_link_tms_resources"]='TMS Ressourcer';
$lang["tms_link_no_tms_resources"]='Ingen TMS-ressourcer fundet. Kontroller venligst, om du har konfigureret plugin\'et korrekt, og om du har mappet de korrekte metadata- og checksum-felter for ObjectID';
$lang["tms_link_no_resource"]='Ingen ressource angivet';
$lang["tms_link_resource_id"]='Ressource ID';
$lang["tms_link_object_id"]='Objekt-ID';
$lang["tms_link_checksum"]='Checksum kan oversættes til "kontrolsum"';
$lang["tms_link_no_tms_data"]='Ingen data returneret fra TMS';
$lang["tms_link_field_mappings"]='Oversættelse: TMS-felt til ResourceSpace-feltmappning';
$lang["tms_link_resourcespace_field"]='ResourceSpace felt';
$lang["tms_link_column_name"]='TMS Kolonne';
$lang["tms_link_add_mapping"]='Tilføj kortlægning';
$lang["tms_link_performance_options"]='TMS Script indstillinger - disse indstillinger vil påvirke den planlagte opgave, der opdaterer ressource data fra TMS';
$lang["tms_link_query_chunk_size"]='Antal poster der skal hentes fra TMS i hver del. Dette kan justeres for at finde den optimale indstilling.';
$lang["tms_link_test_mode"]='Testtilstand - Sæt til sandt, og scriptet vil køre, men ikke opdatere ressourcer';
$lang["tms_link_email_notify"]='E-mailadresse, som scriptet vil sende meddelelser til. Vil som standard bruge systemets meddelelsesadresse, hvis den er tom';
$lang["tms_link_test_count"]='Antal poster til at teste script på - kan sættes til et lavere tal for at teste scriptet og ydeevnen';
$lang["tms_link_last_run_date"]='<strong>Seneste kørsel af script:</strong>';
$lang["tms_link_script_failure_notify_days"]='Antal dage efter hvilke en advarsel skal vises og en e-mail skal sendes, hvis scriptet ikke er fuldført';
$lang["tms_link_script_problem"]='ADVARSEL - TMS-scriptet er ikke blevet fuldført med succes inden for de sidste %days% dage. Sidste kørselstidspunkt:';
$lang["tms_link_upload_tms_field"]='TMS Objekt-ID';
$lang["tms_link_upload_nodata"]='Ingen TMS-data fundet for dette ObjectID:';
$lang["tms_link_confirm_upload_nodata"]='Venligst markér afkrydsningsfeltet for at bekræfte, at du ønsker at fortsætte med uploaden';
$lang["tms_link_enable_update_script"]='Aktivér TMS opdateringsskriptet';
$lang["tms_link_enable_update_script_info"]='Aktivér scriptet, som automatisk opdaterer TMS-dataene, når den planlagte opgave i ResourceSpace (cron_copy_hitcount.php) køres.';
$lang["tms_link_log_directory"]='Mappe til at gemme scriptlogs i. Hvis dette efterlades tomt eller er ugyldigt, vil der ikke blive logget noget.';
$lang["tms_link_log_expiry"]='Antal dage til at gemme scriptlogs i. Alle TMS-logs i denne mappe, som er ældre, vil blive slettet';
$lang["tms_link_column_type_required"]='BEMÆRK: Hvis du tilføjer en ny kolonne, skal du tilføje kolonnens navn til den passende liste nedenfor for at angive, om den nye kolonne indeholder numeriske eller tekstdata.';
$lang["tms_link_numeric_columns"]='Liste over kolonner, der skal hentes som UTF-8';
$lang["tms_link_text_columns"]='Liste over kolonner, der skal hentes som UTF-16';
$lang["tms_link_bidirectional_options"]='To-vejs synkronisering (tilføjelse af RS-billeder til TMS)';
$lang["tms_link_push_condition"]='Metadata-kriterier, der skal opfyldes, for at billeder kan tilføjes til TMS';
$lang["tms_link_tms_loginid"]='TMS-login-ID, som vil blive brugt af ResourceSpace til at indsætte poster. En TMS-konto skal oprettes eller eksistere med denne ID';
$lang["tms_link_push_image"]='Skal billedet sendes til TMS efter forhåndsvisning er oprettet? (Dette vil oprette en ny medierekord i TMS)';
$lang["tms_link_push_image_sizes"]='Foretrukken forhåndsvisningsstørrelse til at sende til TMS. Komma-separeret i rækkefølge af præference, så den første tilgængelige størrelse vil blive brugt';
$lang["tms_link_mediatypeid"]='MediaTypeID til brug for indsatte medieregistreringer';
$lang["tms_link_formatid"]='FormatID til brug for indsatte medieregistreringer';
$lang["tms_link_colordepthid"]='Farvedybde-ID til brug for indsatte medieregistreringer';
$lang["tms_link_media_path"]='Rodsti til filopbevaring, der vil blive gemt i TMS, f.eks. \\RS_SERVER\\filestore\\. Sørg for, at den afsluttende skråstreg er inkluderet. Filnavnet, der er gemt i TMS, vil inkludere den relative sti fra filopbevaringsroden.';
$lang["tms_link_modules_mappings"]='Synkronisering fra ekstra moduler (tabeller / visninger)';
$lang["tms_link_module"]='Modul';
$lang["tms_link_tms_uid_field"]='TMS UID felt';
$lang["tms_link_rs_uid_field"]='ResourceSpace UID felt';
$lang["tms_link_applicable_rt"]='Anvendelige ressourcetyper';
$lang["tms_link_modules_mappings_tools"]='Værktøjer';
$lang["tms_link_add_new_tms_module"]='Tilføj ny ekstra TMS-modul';
$lang["tms_link_tms_module_configuration"]='Konfiguration af TMS-modul';
$lang["tms_link_tms_module_name"]='Modulnavn for TMS';
$lang["tms_link_encoding"]='Kodning';
$lang["tms_link_not_found_error_title"]='Ikke fundet';
$lang["tms_link_not_deleted_error_detail"]='Kan ikke slette den ønskede modulkonfiguration.';
$lang["tms_link_uid_field"]='TMS %module_name %tms_uid_field oversættes til: TMS %module_navn %tms_uid_felt';
$lang["tms_link_confirm_delete_module_config"]='Er du sikker på, at du vil slette denne modulkonfiguration? Denne handling kan ikke fortrydes!';
$lang["tms_link_mediapaths_resource_reference_column"]='Kolonne til brug i MediaMaster-tabellen til at gemme Resource ID. Dette er valgfrit og bruges til at undgå, at flere ressourcer bruger det samme Media Master ID.';
$lang["tms_link_write_to_debug_log"]='Inkluder scriptfremskridt i systemets fejlfinding log (kræver fejlfinding log konfigureret separat). Forsigtighed: Vil forårsage hurtig vækst af fejlfinding logfilen.';
$lang["plugin-tms_link-title"]='TMS Link';
$lang["plugin-tms_link-desc"]='Tillader udtrækning af ressource-metadata fra TMS-database.';
$lang["tms_link_uid_field_int"]='TMS Integer UIDs. Indstil til falsk for at tillade ikke-integer UIDs.';