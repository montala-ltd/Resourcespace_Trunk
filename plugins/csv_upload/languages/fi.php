<?php

$lang["csv_upload_nav_link"] = 'CSV-tiedoston lataus';
$lang["csv_upload_intro"] = 'Tämä liitännäinen mahdollistaa resurssien luomisen tai päivittämisen CSV-tiedoston lataamalla. CSV-tiedoston muoto on tärkeä';
$lang["csv_upload_condition1"] = 'Varmista, että CSV-tiedosto on koodattu käyttäen <b>UTF-8 ilman BOM-merkkiä</b>';
$lang["csv_upload_condition2"] = 'CSV-tiedoston ensimmäisellä rivillä on oltava otsikkorivi';
$lang["csv_upload_condition3"] = 'Jotta voit ladata resurssitiedostoja myöhemmin käyttäen eräkorvaustoimintoa, tulee olla sarakkeen nimi \'Alkuperäinen tiedostonimi\' ja jokaisella tiedostolla tulee olla uniikki tiedostonimi';
$lang["csv_upload_condition4"] = 'Kaikki pakolliset kentät uusille resursseille on oltava läsnä CSV-tiedostossa';
$lang["csv_upload_condition5"] = 'Sarakkeille, joiden arvot sisältävät <b>pilkkuja (,)</b>, varmista, että muotoilet sen tyypiksi <b>teksti</b>, jotta sinun ei tarvitse lisätä lainausmerkkejä (""). Tallentaessasi tiedostoa csv-muodossa, varmista, että valitset vaihtoehdon lainata tekstityypin soluja';
$lang["csv_upload_condition6"] = 'Voit ladata CSV-tiedoston esimerkin napsauttamalla <a href="../downloads/csv_upload_example.csv">csv-upload-example.csv</a>';
$lang["csv_upload_condition7"] = 'Jotta voit päivittää olemassa olevan resurssin tietoja, voit ladata CSV-tiedoston olemassa olevalla metatiedolla napsauttamalla "CSV-vienti - metatiedot" -vaihtoehtoa kokoelman tai hakutulosten toimintovalikosta.';
$lang["csv_upload_condition8"] = 'Voit käyttää uudelleen aiemmin määritetyn CSV-määritystiedoston napsauttamalla \'Lataa CSV-määritystiedosto\'';
$lang["csv_upload_error_no_permission"] = 'Sinulla ei ole oikeutta ladata CSV-tiedostoa';
$lang["check_line_count"] = 'Löytyi vähintään kaksi riviä CSV-tiedostosta';
$lang["csv_upload_file"] = 'Valitse CSV-tiedosto';
$lang["csv_upload_default"] = 'Oletusarvo';
$lang["csv_upload_error_no_header"] = 'Tiedostosta ei löytynyt otsikkoriviä';
$lang["csv_upload_update_existing"] = 'Päivitetäänkö olemassa olevia resursseja? Jos tätä ei ole valittu, uusia resursseja luodaan CSV-tietojen perusteella';
$lang["csv_upload_update_existing_collection"] = 'Vain päivitä resursseja tietyn kokoelman sisällä?';
$lang["csv_upload_process"] = 'Prosessi';
$lang["csv_upload_add_to_collection"] = 'Lisätäänkö vasta luodut resurssit nykyiseen kokoelmaan?';
$lang["csv_upload_step1"] = 'Vaihe 1 - Valitse tiedosto';
$lang["csv_upload_step2"] = 'Vaihe 2 - Oletusresurssien asetukset';
$lang["csv_upload_step3"] = 'Vaihe 3 - Kartuta sarakkeet metatietokentiksi';
$lang["csv_upload_step4"] = 'Vaihe 4 - Tarkista CSV-tiedot';
$lang["csv_upload_step5"] = 'Vaihe 5 - CSV:n käsittely';
$lang["csv_upload_update_existing_title"] = 'Päivitä olemassa olevat resurssit';
$lang["csv_upload_update_existing_notes"] = 'Valitse tarvittavat vaihtoehdot päivittääksesi olemassa olevia resursseja';
$lang["csv_upload_create_new_title"] = 'Luo uusia resursseja';
$lang["csv_upload_create_new_notes"] = 'Valitse tarvittavat vaihtoehdot uusien resurssien luomiseksi';
$lang["csv_upload_map_fields_notes"] = 'Yhdistä CSV-tiedoston sarakkeet vaadittuihin metatietokenttiin. Painamalla "Seuraava" tarkistetaan CSV-tiedosto muuttamatta tietoja';
$lang["csv_upload_map_fields_auto_notes"] = 'Metatietokentät on esivalittu nimien tai otsikoiden perusteella, mutta tarkista, että ne ovat oikein';
$lang["csv_upload_workflow_column"] = 'Valitse sarake, joka sisältää työnkulun tilan tunnisteen';
$lang["csv_upload_workflow_default"] = 'Oletusarvoisen työnkulun tila, jos saraketta ei ole valittu tai jos sarakkeesta ei löydy kelvollista tilaa';
$lang["csv_upload_access_column"] = 'Valitse sarake, joka sisältää käyttöoikeustason (0=Avoin, 1=Rajoitettu, 2=Luottamuksellinen)';
$lang["csv_upload_access_default"] = 'Oletusarvo käyttötasolle, jos saraketta ei ole valittu tai jos sarakkeesta ei löydy kelvollista käyttötasoa';
$lang["csv_upload_resource_type_column"] = 'Valitse sarake, joka sisältää resurssityypin tunnisteen';
$lang["csv_upload_resource_type_default"] = 'Oletusarvoinen resurssityyppi, jos saraketta ei ole valittu tai jos sarakkeessa ei ole löydetty kelvollista tyyppiä';
$lang["csv_upload_resource_match_column"] = 'Valitse sarake, joka sisältää resurssin tunnisteen';
$lang["csv_upload_match_type"] = 'Vastaako resurssi resurssitunnusta tai metatietokentän arvoa?';
$lang["csv_upload_multiple_match_action"] = 'Toimenpide, jos useita vastaavia resursseja löytyy';
$lang["csv_upload_validation_notes"] = 'Tarkista alla olevat validointiviestit ennen jatkamista. Klikkaa Käsittele-painiketta tallentaaksesi muutokset';
$lang["csv_upload_upload_another"] = 'Lataa toinen CSV-tiedosto';
$lang["csv_upload_mapping config"] = 'CSV-sarakkeen kartoitusasetukset';
$lang["csv_upload_download_config"] = 'Lataa CSV-määritykset tiedostona';
$lang["csv_upload_upload_config"] = 'Lataa CSV-määritystiedosto';
$lang["csv_upload_upload_config_question"] = 'Lataa CSV-määritystiedosto? Käytä tätä, jos olet ladannut samanlaisen CSV-tiedoston aiemmin ja tallentanut määrityksen';
$lang["csv_upload_upload_config_set"] = 'CSV-muotoilun asetukset';
$lang["csv_upload_upload_config_clear"] = 'Selkeä CSV-määrityskonfiguraatio';
$lang["csv_upload_mapping_ignore"] = 'ÄLÄ KÄYTÄ';
$lang["csv_upload_mapping_header"] = 'Sarakkeen otsikko';
$lang["csv_upload_mapping_csv_data"] = 'Esimerkkidata CSV-tiedostosta';
$lang["csv_upload_using_config"] = 'Käytetään olemassa olevaa CSV-määritystä';
$lang["csv_upload_process_offline"] = 'Käsitelläänkö CSV-tiedosto offline-tilassa? Tätä tulisi käyttää suurille CSV-tiedostoille. Sinulle ilmoitetaan ResourceSpace-viestillä, kun käsittely on valmis';
$lang["csv_upload_oj_created"] = 'CSV-tiedoston lataustehtävä luotu tehtävänumerolla # [jobref]. <br/>Saat ResourceSpace-järjestelmän viestin, kun tehtävä on suoritettu';
$lang["csv_upload_oj_complete"] = 'CSV-tiedoston lataustehtävä on valmis. Klikkaa linkkiä nähdäksesi koko lokitiedoston';
$lang["csv_upload_oj_failed"] = 'CSV-tiedoston lataus epäonnistui';
$lang["csv_upload_processing_x_meta_columns"] = 'Käsitellään %count metatietosaraketta';
$lang["csv_upload_processing_complete"] = 'Käsittely valmistui [time] ([hours] tuntia, [minutes] minuuttia, [seconds] sekuntia)';
$lang["csv_upload_error_in_progress"] = 'Käsittely keskeytetty - tätä CSV-tiedostoa käsitellään jo';
$lang["csv_upload_error_file_missing"] = 'Virhe - CSV-tiedostoa ei löydy: [file]';
$lang["csv_upload_full_messages_link"] = 'Näytetään vain ensimmäiset 1000 riviä. Lataa koko lokitiedosto napsauttamalla <a href=\'[log_url]\' target=\'_blank\'>tästä</a>';
$lang["csv_upload_ignore_errors"] = 'Ohita virheet ja käsittele tiedosto joka tapauksessa';
$lang["csv_upload_process_offline_quick"] = 'Ohita validointi ja käsittele CSV-tiedosto offline-tilassa? Tätä tulisi käyttää vain suurille CSV-tiedostoille, kun testaus pienemmillä tiedostoilla on suoritettu. Sinulle ilmoitetaan ResourceSpace-viestillä, kun lataus on valmis';
$lang["csv_upload_force_offline"] = 'Tämä suuri CSV-tiedosto saattaa kestää kauan käsitellä, joten se käsitellään offline-tilassa. Sinulle ilmoitetaan ResourceSpace-viestillä, kun käsittely on valmis';
$lang["csv_upload_recommend_offline"] = 'Tämän suuren CSV-tiedoston käsittely voi kestää hyvin pitkään. Suosittelemme offline-tehtävien käyttöä, jos sinun tarvitsee käsitellä suuria CSV-tiedostoja';
$lang["csv_upload_createdfromcsvupload"] = 'Luotu CSV-latausliitännäisestä';
$lang["plugin-csv_upload-title"] = 'CSV-lataus';
$lang["plugin-csv_upload-desc"] = '[Lisäasetukset] Lataa metatiedot CSV-tiedostolla.';
