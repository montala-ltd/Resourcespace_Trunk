<?php


$lang["simplesaml_configuration"]='Konfiguration af SimpleSAML';
$lang["simplesaml_main_options"]='Brugsmuligheder';
$lang["simplesaml_site_block"]='Brug SAML til at blokere adgang til webstedet fuldstændigt. Hvis denne indstilling er sat til sand, kan ingen få adgang til webstedet, selv ikke anonymt, uden at godkende sig';
$lang["simplesaml_allow_public_shares"]='Hvis blokering af websted, tillad offentlige delinger at omgå SAML-autentificering?';
$lang["simplesaml_allowedpaths"]='Liste over yderligere tilladte stier, der kan omgå SAML-kravet';
$lang["simplesaml_allow_standard_login"]='Tillad brugere at logge ind med standardkonti samt ved hjælp af SAML SSO? ADVARSEL: Hvis SAML-godkendelse mislykkes, kan deaktivering af denne funktion risikere at låse alle brugere ude af systemet';
$lang["simplesaml_use_sso"]='Brug SSO til at logge ind';
$lang["simplesaml_idp_configuration"]='IdP konfiguration';
$lang["simplesaml_idp_configuration_description"]='Brug følgende til at konfigurere plugin\'en til at fungere med din IdP';
$lang["simplesaml_username_attribute"]='Attribut(er) til brug for brugernavn. Hvis dette er en sammenkædning af to attributter, skal de adskilles med et komma';
$lang["simplesaml_username_separator"]='Hvis du slår dig sammen med felter for brugernavn, skal du bruge dette tegn som adskiller';
$lang["simplesaml_fullname_attribute"]='Attribut(er) til brug for fulde navn. Hvis dette er en sammenkædning af to attributter, skal de adskilles med et komma';
$lang["simplesaml_fullname_separator"]='Hvis du slår sammen felterne for fulde navn, skal du bruge dette tegn som adskiller';
$lang["simplesaml_email_attribute"]='Attribut til brug for e-mailadresse';
$lang["simplesaml_group_attribute"]='Attribut til brug for at bestemme gruppetilhørsforhold';
$lang["simplesaml_username_suffix"]='Endelse tilføjet til oprettede brugernavne for at adskille dem fra standard ResourceSpace-konti';
$lang["simplesaml_update_group"]='Opdater brugergruppe ved hver logon. Hvis SSO-gruppeattribut ikke bruges til at bestemme adgang, så sæt dette til falsk, så brugere kan flyttes manuelt mellem grupper';
$lang["simplesaml_groupmapping"]='SAML - RessourceSpace Gruppemapping';
$lang["simplesaml_fallback_group"]='Standard brugergruppe, som vil blive anvendt til nyligt oprettede brugere';
$lang["simplesaml_samlgroup"]='SAML gruppe';
$lang["simplesaml_rsgroup"]='ResourceSpace Gruppe';
$lang["simplesaml_priority"]='Prioritet (højere tal vil have forrang)';
$lang["simplesaml_addrow"]='Tilføj kortlægning';
$lang["simplesaml_service_provider"]='Navn på lokal serviceudbyder (SP)';
$lang["simplesaml_prefer_standard_login"]='Foretræk standard login (omdiriger til login-side som standard)';
$lang["simplesaml_sp_configuration"]='Simplesaml SP-konfigurationen skal fuldføres for at bruge dette plugin. Se venligst artiklen i vidensbasen for mere information';
$lang["simplesaml_custom_attributes"]='Tilpasningsbare attributter til at registrere på brugerens profil';
$lang["simplesaml_custom_attribute_label"]='SSO-attribut';
$lang["simplesaml_usercomment"]='Oprettet af SimpleSAML-plugin';
$lang["origin_simplesaml"]='SimpleSAML-plugin';
$lang["simplesaml_lib_path_label"]='SAML lib sti (angiv venligst fuld serversti)';
$lang["simplesaml_login"]='Brug SAML-legitimationsoplysninger til at logge ind på ResourceSpace? (Dette er kun relevant, hvis ovenstående indstilling er aktiveret)';
$lang["simplesaml_create_new_match_email"]='E-mail-match: Inden der oprettes nye brugere, skal du kontrollere, om SAML-brugerens e-mail matcher en eksisterende RS-konto-e-mail. Hvis der findes et match, vil SAML-brugeren \'overtage\' den konto';
$lang["simplesaml_allow_duplicate_email"]='Tillad oprettelse af nye konti, hvis der allerede eksisterer ResourceSpace-konti med den samme e-mailadresse? (dette tilsidesættes, hvis e-mail-match er angivet ovenfor, og der findes et match)';
$lang["simplesaml_multiple_email_match_subject"]='ResourceSpace SAML - konfliktende e-mail login forsøg';
$lang["simplesaml_multiple_email_match_text"]='En ny SAML-bruger har fået adgang til systemet, men der er allerede mere end én konto med den samme e-mailadresse.';
$lang["simplesaml_multiple_email_notify"]='E-mailadresse til at underrette, hvis der opstår en e-mailkonflikt';
$lang["simplesaml_duplicate_email_error"]='Der findes allerede en konto med den samme e-mailadresse. Kontakt venligst din administrator.';
$lang["simplesaml_usermatchcomment"]='Opdateret til SAML-bruger af SimpleSAML-plugin';
$lang["simplesaml_usercreated"]='Oprettede ny SAML-bruger';
$lang["simplesaml_duplicate_email_behaviour"]='Administrering af duplikerede konti';
$lang["simplesaml_duplicate_email_behaviour_description"]='Denne sektion styrer, hvad der sker, hvis en ny SAML-bruger, der logger ind, er i konflikt med en eksisterende konto';
$lang["simplesaml_authorisation_rules_header"]='Autorisationsregel';
$lang["simplesaml_authorisation_rules_description"]='Aktivér ResourceSpace til at blive konfigureret med yderligere lokal godkendelse af brugere baseret på en ekstra attribut (dvs. påstand/erklæring) i svaret fra IdP\'en. Denne påstand vil blive brugt af plugin\'et til at afgøre, om brugeren har tilladelse til at logge ind på ResourceSpace eller ej.';
$lang["simplesaml_authorisation_claim_name_label"]='Attributnavn (udsagn/ påstand)';
$lang["simplesaml_authorisation_claim_value_label"]='Attribut (udsagn/værdi) værdi';
$lang["simplesaml_authorisation_login_error"]='Du har ikke adgang til denne applikation! Kontakt venligst administrator for din konto!';
$lang["simplesaml_authorisation_version_error"]='VIGTIGT: Din SimpleSAML-konfiguration skal opdateres. Henvis venligst til afsnittet \'<a href=\'https://www.resourcespace.com/knowledge-base/plugins/simplesaml#saml_instructions_migrate\' target=\'_blank\'>Migrering af SP til at bruge ResourceSpace-konfiguration</a>\' i vidensbasen for mere information';
$lang["simplesaml_healthcheck_error"]='SimpleSAML-pluginfejl';
$lang["simplesaml_rsconfig"]='Brug standard ResourceSpace konfigurationsfiler til at indstille SP-konfiguration og metadata? Hvis dette er sat til falsk, kræves manuel redigering af filer';
$lang["simplesaml_sp_generate_config"]='Generer SP-konfiguration';
$lang["simplesaml_sp_config"]='Serviceudbyder (SP) konfiguration';
$lang["simplesaml_sp_data"]='Serviceudbyder (SP) information';
$lang["simplesaml_idp_section"]='IdP kan oversættes til "Identitetsudbyder"';
$lang["simplesaml_idp_metadata_xml"]='Indsæt IdP Metadata XML\'en';
$lang["simplesaml_sp_cert_path"]='Sti til SP-certifikatfil (lad være tom for at generere, men udfyld certifikatoplysninger nedenfor)';
$lang["simplesaml_sp_key_path"]='Sti til SP nøglefil (.pem) (lad være tom for at generere)';
$lang["simplesaml_sp_idp"]='IdP identifikator (lad være blank hvis XML bliver behandlet)';
$lang["simplesaml_saml_config_output"]='Indsæt dette i din ResourceSpace konfigurationsfil';
$lang["simplesaml_sp_cert_info"]='Certifikatinformation (påkrævet)';
$lang["simplesaml_sp_cert_countryname"]='Landekode (kun 2 tegn)';
$lang["simplesaml_sp_cert_stateorprovincename"]='Stat, amt eller provinsnavn';
$lang["simplesaml_sp_cert_localityname"]='Område (f.eks. by)';
$lang["simplesaml_sp_cert_organizationname"]='Organisationsnavn';
$lang["simplesaml_sp_cert_organizationalunitname"]='Organisatorisk enhed / afdeling';
$lang["simplesaml_sp_cert_commonname"]='Almindeligt navn (f.eks. sp.acme.org)';
$lang["simplesaml_sp_cert_emailaddress"]='E-mailadresse';
$lang["simplesaml_sp_cert_invalid"]='Ugyldig certifikatinformation';
$lang["simplesaml_sp_cert_gen_error"]='Kan ikke generere certifikat';
$lang["simplesaml_sp_samlphp_link"]='Besøg SimpleSAMLphp test webstedet';
$lang["simplesaml_sp_technicalcontact_name"]='Teknisk kontaktnavn';
$lang["simplesaml_sp_technicalcontact_email"]='Teknisk kontakt e-mail';
$lang["simplesaml_sp_auth.adminpassword"]='SP Test webstedsadministratoradgangskode';
$lang["simplesaml_acs_url"]='ACS URL / Reply URL kan oversættes til "ACS URL / Svar-URL"';
$lang["simplesaml_entity_id"]='Entitets-ID/metadata-URL';
$lang["simplesaml_single_logout_url"]='Ene logud-URL';
$lang["simplesaml_start_url"]='Start/Tilmeldings-URL';
$lang["simplesaml_existing_config"]='Følg instruktionerne i vidensbasen for at migrere din eksisterende SAML-konfiguration';
$lang["simplesaml_test_site_url"]='SimpleSAML test site URL: URL til SimpleSAML test websted';
$lang["plugin-simplesaml-title"]='Simple SAML';
$lang["plugin-simplesaml-desc"]='Kræv SAML-godkendelse for at få adgang til ResourceSpace';
$lang["simplesaml_idp_certs"]='SAML IdP-certifikater';
$lang["simplesaml_idp_cert_expiring"]='IdP %idpname certifikat udløber kl. %expiretime';
$lang["simplesaml_idp_cert_expired"]='IdP %idpname certifikat udløb kl. %expiretime';
$lang["simplesaml_idp_cert_expires"]='IdP %idpname certifikat udløber kl. %expiretime';
$lang["simplesaml_check_idp_cert_expiry"]='Kontroller IdP-certifikatets udløb?';