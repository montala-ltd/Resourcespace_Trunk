<?php


$lang["simplesaml_configuration"]='Konfiguration av SimpleSAML';
$lang["simplesaml_main_options"]='Användningsalternativ';
$lang["simplesaml_site_block"]='Använd SAML för att blockera åtkomst till webbplatsen helt. Om det är inställt på sant kan ingen få åtkomst till webbplatsen, inte ens anonymt, utan att autentisera sig';
$lang["simplesaml_allow_public_shares"]='Om webbplatsen blockeras, tillåt offentliga delningar att passera SAML-autentisering?';
$lang["simplesaml_allowedpaths"]='Lista över ytterligare tillåtna sökvägar som kan kringgå SAML-kravet';
$lang["simplesaml_allow_standard_login"]='Tillåt användare att logga in med standardkonton samt använda SAML SSO? VARNING: Att inaktivera detta kan riskera att låsa alla användare ur systemet om SAML-autentiseringen misslyckas';
$lang["simplesaml_use_sso"]='Använd SSO för att logga in';
$lang["simplesaml_idp_configuration"]='IdP-konfiguration';
$lang["simplesaml_idp_configuration_description"]='Använd följande för att konfigurera tillägget att fungera med din IdP';
$lang["simplesaml_username_attribute"]='Attribut(er) att använda för användarnamn. Om detta är en sammanfogning av två attribut, separera dem med ett kommatecken';
$lang["simplesaml_username_separator"]='Om du sammanslår fält för användarnamn, använd detta tecken som separator';
$lang["simplesaml_fullname_attribute"]='Attribut(er) att använda för fullständigt namn. Om detta är en sammanfogning av två attribut, separera dem med ett kommatecken';
$lang["simplesaml_fullname_separator"]='Om du sammanslår fälten för fullständigt namn, använd detta tecken som separator';
$lang["simplesaml_email_attribute"]='Attribut att använda för e-postadress';
$lang["simplesaml_group_attribute"]='Attribut att använda för att bestämma gruppmedlemskap';
$lang["simplesaml_username_suffix"]='Suffix att lägga till skapade användarnamn för att skilja dem från standard ResourceSpace-konton';
$lang["simplesaml_update_group"]='Uppdatera användargrupp vid varje inloggning. Om inte SSO-gruppattribut används för att bestämma åtkomst, ställ in detta till falskt så att användare kan flyttas manuellt mellan grupper';
$lang["simplesaml_groupmapping"]='SAML - Kartläggning av ResourceSpace-grupp';
$lang["simplesaml_fallback_group"]='Standard användargrupp som kommer att användas för nyskapade användare';
$lang["simplesaml_samlgroup"]='SAML-grupp';
$lang["simplesaml_rsgroup"]='ResourceSpace Grupp';
$lang["simplesaml_priority"]='Prioritet (högre nummer har företräde)';
$lang["simplesaml_addrow"]='Lägg till kartläggning';
$lang["simplesaml_service_provider"]='Namn på lokal tjänsteleverantör (SP)';
$lang["simplesaml_prefer_standard_login"]='Föredra standardinloggning (omdirigera till inloggningssidan som standard)';
$lang["simplesaml_sp_configuration"]='Simplesaml SP-konfigurationen måste slutföras för att använda denna plugin. Se Kunskapsbas-artikeln för mer information';
$lang["simplesaml_custom_attributes"]='Anpassade attribut att spara på användarprofilen';
$lang["simplesaml_custom_attribute_label"]='SSO-attribut';
$lang["simplesaml_usercomment"]='Skapad av SimpleSAML-plugin';
$lang["origin_simplesaml"]='SimpleSAML-tillägg';
$lang["simplesaml_lib_path_label"]='SAML lib sökväg (ange fullständig server sökväg)';
$lang["simplesaml_login"]='Använd SAML-legitimationer för att logga in på ResourceSpace? (Detta är endast relevant om ovanstående alternativ är aktiverat)';
$lang["simplesaml_create_new_match_email"]='E-postmatchning: Innan du skapar nya användare, kontrollera om SAML-användarens e-postadress matchar en befintlig RS-konto-e-postadress. Om en matchning hittas kommer SAML-användaren att "ta över" det kontot';
$lang["simplesaml_allow_duplicate_email"]='Tillåt nya konton att skapas om det finns befintliga ResourceSpace-konton med samma e-postadress? (detta åsidosätts om e-postmatchning är inställd ovan och en matchning hittas)';
$lang["simplesaml_multiple_email_match_subject"]='ResourceSpace SAML - konfliktande e-postinloggningsförsök';
$lang["simplesaml_multiple_email_match_text"]='En ny SAML-användare har fått tillgång till systemet men det finns redan mer än ett konto med samma e-postadress.';
$lang["simplesaml_multiple_email_notify"]='E-postadress att meddela om en e-postkonflikt upptäcks';
$lang["simplesaml_duplicate_email_error"]='Det finns redan ett konto med samma e-postadress. Vänligen kontakta din administratör.';
$lang["simplesaml_usermatchcomment"]='Uppdaterad till SAML-användare av SimpleSAML-tillägget.';
$lang["simplesaml_usercreated"]='Skapade ny SAML-användare';
$lang["simplesaml_duplicate_email_behaviour"]='Hantering av dubblerade konton';
$lang["simplesaml_duplicate_email_behaviour_description"]='Denna sektion styr vad som händer om en ny SAML-användare som loggar in kolliderar med ett befintligt konto';
$lang["simplesaml_authorisation_rules_header"]='Behörighetsregel';
$lang["simplesaml_authorisation_rules_description"]='Möjliggör att ResourceSpace kan konfigureras med ytterligare lokal auktorisering av användare baserat på en extra attribut (dvs. påstående/anspråk) i svaret från IdP. Detta påstående kommer att användas av tillägget för att avgöra om användaren är tillåten att logga in på ResourceSpace eller inte.';
$lang["simplesaml_authorisation_claim_name_label"]='Attributnamn (påstående/anspråk)';
$lang["simplesaml_authorisation_claim_value_label"]='Attributvärde (påstående/värde)';
$lang["simplesaml_authorisation_login_error"]='Du har inte tillgång till denna applikation! Vänligen kontakta administratören för ditt konto!';
$lang["simplesaml_authorisation_version_error"]='VIKTIGT: Din SimpleSAML-konfiguration behöver uppdateras. Vänligen hänvisa till avsnittet "<a href=\'https://www.resourcespace.com/knowledge-base/plugins/simplesaml#saml_instructions_migrate\' target=\'_blank\'>Migrera SP för att använda ResourceSpace-konfiguration</a>" i kunskapsbasen för mer information';
$lang["simplesaml_healthcheck_error"]='SimpleSAML tilläggsfel';
$lang["simplesaml_rsconfig"]='Använd standardkonfigurationsfiler för ResourceSpace för att ställa in SP-konfiguration och metadata? Om detta är inställt på falskt måste filerna redigeras manuellt';
$lang["simplesaml_sp_generate_config"]='Generera SP-konfiguration';
$lang["simplesaml_sp_config"]='Tjänsteleverantörs (SP) konfiguration';
$lang["simplesaml_sp_data"]='Tjänsteleverantörs (TL) information';
$lang["simplesaml_idp_section"]='IdP på svenska står för "Identifieringsleverantör" och syftar på en tjänst som hanterar autentisering och identifiering av användare i en systemmiljö';
$lang["simplesaml_idp_metadata_xml"]='Klistra in IdP Metadata XML';
$lang["simplesaml_sp_cert_path"]='Sökväg till SP-certifikatfil (lämna tomt för att generera men fyll i certifikatdetaljer nedan)';
$lang["simplesaml_sp_key_path"]='Sökväg till SP-nyckelfil (.pem) (lämna tomt för att generera)';
$lang["simplesaml_sp_idp"]='IdP identifier (lämna tomt om XML bearbetas)';
$lang["simplesaml_saml_config_output"]='Klistra in detta i din ResourceSpace konfigurationsfil';
$lang["simplesaml_sp_cert_info"]='Certifikatinformation (obligatorisk)';
$lang["simplesaml_sp_cert_countryname"]='Landskod (endast 2 tecken)';
$lang["simplesaml_sp_cert_stateorprovincename"]='Stat, län eller provinsnamn';
$lang["simplesaml_sp_cert_localityname"]='Område (t.ex. stad)';
$lang["simplesaml_sp_cert_organizationname"]='Organisationsnamn';
$lang["simplesaml_sp_cert_organizationalunitname"]='Organisationsenhet / Avdelning';
$lang["simplesaml_sp_cert_commonname"]='Vanligt namn (t.ex. sp.acme.org)';
$lang["simplesaml_sp_cert_emailaddress"]='E-postadress';
$lang["simplesaml_sp_cert_invalid"]='Ogiltig certifikatinformation';
$lang["simplesaml_sp_cert_gen_error"]='Kan inte generera certifikat';
$lang["simplesaml_sp_samlphp_link"]='Besök SimpleSAMLphp testwebbplatsen';
$lang["simplesaml_sp_technicalcontact_name"]='Teknisk kontaktnamn';
$lang["simplesaml_sp_technicalcontact_email"]='Teknisk kontakt e-post';
$lang["simplesaml_sp_auth.adminpassword"]='SP Test webbplats administratörslösenord';
$lang["simplesaml_acs_url"]='ACS URL / Reply URL kan översättas till ACS-URL / Svars-URL';
$lang["simplesaml_entity_id"]='Entitets-ID/metadatans URL';
$lang["simplesaml_single_logout_url"]='Enkel utloggning URL';
$lang["simplesaml_start_url"]='Start-/Logga in-URL';
$lang["simplesaml_existing_config"]='Följ instruktionerna i kunskapsdatabasen för att migrera din befintliga SAML-konfiguration';
$lang["simplesaml_test_site_url"]='SimpleSAML test webbplatsens URL';
$lang["plugin-simplesaml-title"]='Enkel SAML';
$lang["plugin-simplesaml-desc"]='Kräver SAML-autentisering för att få tillgång till ResourceSpace';
$lang["simplesaml_idp_certs"]='SAML IdP-certifikat';
$lang["simplesaml_idp_cert_expiring"]='IdP %idpname-certifikat går ut %expiretime';
$lang["simplesaml_idp_cert_expired"]='IdP %idpname certifikat gick ut %expiretime';
$lang["simplesaml_idp_cert_expires"]='IdP %idpname-certifikatet går ut %expiretime';
$lang["simplesaml_check_idp_cert_expiry"]='Kontrollera IdP-certifikatets utgångsdatum?';