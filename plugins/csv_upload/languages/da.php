<?php


$lang["csv_upload_nav_link"]='CSV-upload';
$lang["csv_upload_intro"]='Dette plugin giver dig mulighed for at oprette eller opdatere ressourcer ved at uploade en CSV-fil. Formatet af CSV-filen er vigtigt';
$lang["csv_upload_condition1"]='<li>Sørg for, at CSV-filen er kodet ved hjælp af <b>UTF-8 uden BOM</b>.</li>';
$lang["csv_upload_condition2"]='<li>CSV\'en skal have en overskriftsrække</li>';
$lang["csv_upload_condition3"]='<li>For at kunne uploade ressourcefiler senere ved hjælp af batch-erstatningsfunktionaliteten, skal der være en kolonne med navnet \'Originalt filnavn\', og hver fil skal have et unikt filnavn.</li>';
$lang["csv_upload_condition4"]='<li>Alle obligatoriske felter for nyligt oprettede ressourcer skal være til stede i CSV\'en</li>';
$lang["csv_upload_condition5"]='<li>For kolonner, der har værdier, der indeholder <b>kommaer (,)</b>, skal du sørge for at formatere det som type <b>tekst</b>, så du ikke behøver at tilføje anførselstegn (""). Når du gemmer som en csv-fil, skal du sørge for at markere muligheden for at citere celler af teksttypen</li>';
$lang["csv_upload_condition6"]='Du kan downloade et CSV-fil eksempel ved at klikke på <a href="../downloads/csv_upload_example.csv">csv-upload-example.csv</a>';
$lang["csv_upload_condition7"]='<li>For at opdatere eksisterende ressource data kan du downloade en CSV-fil med den eksisterende metadata ved at klikke på \'CSV-eksport - metadata\' muligheden fra samlingen eller søgeresultaterne handlinger menu</li>';
$lang["csv_upload_condition8"]='Du kan genbruge en tidligere konfigureret CSV-mappingfil ved at klikke på \'Upload CSV konfigurationsfil\'';
$lang["csv_upload_error_no_permission"]='Du har ikke de korrekte tilladelser til at uploade en CSV-fil';
$lang["check_line_count"]='Mindst to rækker fundet i CSV-filen';
$lang["csv_upload_file"]='Vælg CSV-fil';
$lang["csv_upload_default"]='Standard';
$lang["csv_upload_error_no_header"]='Ingen overskriftsrække fundet i filen';
$lang["csv_upload_update_existing"]='Opdater eksisterende ressourcer? Hvis dette ikke er markeret, vil nye ressourcer blive oprettet baseret på CSV-data';
$lang["csv_upload_update_existing_collection"]='Kun opdater ressourcer i en bestemt samling?';
$lang["csv_upload_process"]='Behandling';
$lang["csv_upload_add_to_collection"]='Tilføj nyoprettede ressourcer til nuværende samling?';
$lang["csv_upload_step1"]='Trin 1 - Vælg fil';
$lang["csv_upload_step2"]='Trin 2 - Standardindstillinger for ressourcer';
$lang["csv_upload_step3"]='Trin 3 - Tilordne kolonner til metadatafelter';
$lang["csv_upload_step4"]='Trin 4 - Kontrol af CSV-data';
$lang["csv_upload_step5"]='Trin 5 - Behandling af CSV';
$lang["csv_upload_update_existing_title"]='Opdater eksisterende ressourcer';
$lang["csv_upload_update_existing_notes"]='Vælg de nødvendige indstillinger for at opdatere eksisterende ressourcer';
$lang["csv_upload_create_new_title"]='Opret nye ressourcer';
$lang["csv_upload_create_new_notes"]='Vælg de nødvendige indstillinger for at oprette nye ressourcer';
$lang["csv_upload_map_fields_notes"]='Match kolonnerne i CSV-filen med de krævede metadatafelter. Ved at klikke på \'Næste\' vil CSV-filen blive kontrolleret uden at ændre data';
$lang["csv_upload_map_fields_auto_notes"]='Metadata-felter er blevet forudvalgt baseret på navne eller titler, men venligst tjek at disse er korrekte';
$lang["csv_upload_workflow_column"]='Vælg den kolonne, der indeholder arbejdsgangens tilstands-ID';
$lang["csv_upload_workflow_default"]='Standard arbejdsgangstilstand, hvis ingen kolonne er valgt eller hvis der ikke findes en gyldig tilstand i kolonnen';
$lang["csv_upload_access_column"]='Vælg kolonnen, der indeholder adgangsniveauet (0=Åben, 1=Begrænset, 2=Fortroligt)';
$lang["csv_upload_access_default"]='Standard adgangsniveau, hvis ingen kolonne er valgt eller hvis der ikke er fundet gyldig adgang i kolonnen';
$lang["csv_upload_resource_type_column"]='Vælg kolonnen, der indeholder ressourcetypeidentifikatoren';
$lang["csv_upload_resource_type_default"]='Standard ressourcetype, hvis ingen kolonne er valgt, eller hvis der ikke findes en gyldig type i kolonnen';
$lang["csv_upload_resource_match_column"]='Vælg den kolonne, der indeholder ressourceidentifikatoren';
$lang["csv_upload_match_type"]='Match ressource baseret på ressource-ID eller metadatafeltværdi?';
$lang["csv_upload_multiple_match_action"]='Handling af situationen, hvor der findes flere matchende ressourcer';
$lang["csv_upload_validation_notes"]='Tjek valideringsbeskederne nedenfor, før du fortsætter. Klik på "Behandl" for at gemme ændringerne';
$lang["csv_upload_upload_another"]='Upload en anden CSV';
$lang["csv_upload_mapping config"]='CSV kolonneafbildningsindstillinger';
$lang["csv_upload_download_config"]='Download CSV-mappingindstillinger som fil';
$lang["csv_upload_upload_config"]='Upload CSV-mappingfil';
$lang["csv_upload_upload_config_question"]='Upload CSV-mappingfil? Brug dette, hvis du tidligere har uploadet en lignende CSV og har gemt konfigurationen';
$lang["csv_upload_upload_config_set"]='CSV konfigurationsindstilling';
$lang["csv_upload_upload_config_clear"]='Ryd CSV-mapping konfigurationen';
$lang["csv_upload_mapping_ignore"]='BRUG IKKE';
$lang["csv_upload_mapping_header"]='Kolonneoverskrift';
$lang["csv_upload_mapping_csv_data"]='Eksempeldata fra CSV';
$lang["csv_upload_using_config"]='Brug af eksisterende CSV-konfiguration';
$lang["csv_upload_process_offline"]='Behandl CSV-fil offline? Dette bør bruges til store CSV-filer. Du vil blive underrettet via en ResourceSpace-besked, når behandlingen er fuldført';
$lang["csv_upload_oj_created"]='CSV-uploadopgave oprettet med job-ID # [jobref]. <br/>Du vil modtage en besked fra ResourceSpace-systemet, når opgaven er fuldført';
$lang["csv_upload_oj_complete"]='CSV-uploadjob fuldført. Klik på linket for at se den fulde logfil';
$lang["csv_upload_oj_failed"]='CSV-uploadopgaven mislykkedes';
$lang["csv_upload_processing_x_meta_columns"]='Behandler %count metadatakolonner';
$lang["csv_upload_processing_complete"]='Behandling fuldført kl. [time] ([hours] timer, [minutes] minutter, [seconds] sekunder)';
$lang["csv_upload_error_in_progress"]='Behandling afbrudt - denne CSV-fil bliver allerede behandlet';
$lang["csv_upload_error_file_missing"]='Fejl - CSV-fil mangler: [file]';
$lang["csv_upload_full_messages_link"]='Viser kun de første 1000 linjer. Klik <a href=\'[log_url]\' target=\'_blank\'>her</a> for at downloade hele logfilen';
$lang["csv_upload_ignore_errors"]='Ignorer fejl og behandle filen alligevel';
$lang["csv_upload_process_offline_quick"]='Spring over validering og behandle CSV-fil offline? Dette bør kun bruges til store CSV-filer, når test på mindre filer er afsluttet. Du vil blive underrettet via en ResourceSpace-besked, når upload er fuldført';
$lang["csv_upload_force_offline"]='Denne store CSV-fil kan tage lang tid at behandle, så den vil blive kørt offline. Du vil blive underrettet via en besked i ResourceSpace, når behandlingen er færdig';
$lang["csv_upload_recommend_offline"]='Denne store CSV-fil kan tage meget lang tid at behandle. Det anbefales at aktivere offline-job, hvis du har brug for at behandle store CSV-filer';
$lang["csv_upload_createdfromcsvupload"]='Oprettet fra CSV Upload-plugin';