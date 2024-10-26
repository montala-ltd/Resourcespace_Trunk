<?php


$lang["simplesaml_configuration"]='Configuració de SimpleSAML';
$lang["simplesaml_main_options"]='Opcions d\'ús';
$lang["simplesaml_site_block"]='Utilitza SAML per bloquejar completament l\'accés al lloc web, si està establert a "true" llavors ningú podrà accedir al lloc web, ni tan sols de forma anònima, sense autenticar-se';
$lang["simplesaml_allow_public_shares"]='Si es bloqueja el lloc, permetre que les comparticions públiques evitin l\'autenticació SAML?';
$lang["simplesaml_allowedpaths"]='Llista de rutes addicionals permeses que poden evitar el requisit de SAML';
$lang["simplesaml_allow_standard_login"]='Permetre als usuaris iniciar sessió amb comptes estàndard així com utilitzant SAML SSO? AVÍS: Desactivar això pot posar en risc el bloqueig de tots els usuaris del sistema si falla l\'autenticació SAML';
$lang["simplesaml_use_sso"]='Utilitza SSO per iniciar sessió';
$lang["simplesaml_idp_configuration"]='Configuració de l\'IdP';
$lang["simplesaml_idp_configuration_description"]='Utilitza el següent per configurar el connector perquè funcioni amb el teu IdP';
$lang["simplesaml_username_attribute"]='Atribut(s) per a utilitzar com a nom d\'usuari. Si això és una concatenació de dos atributs, si us plau, separar amb una coma';
$lang["simplesaml_username_separator"]='Si us plau, tradueixi: Si s\'uneixen camps per al nom d\'usuari, utilitzeu aquest caràcter com a separador';
$lang["simplesaml_fullname_attribute"]='Atribut(s) per utilitzar per al nom complet. Si això és una concatenació de dos atributs, si us plau, separar amb una coma';
$lang["simplesaml_fullname_separator"]='Si us plau, tradueixi: Si s\'uneixen camps per al nom complet, utilitzeu aquest caràcter com a separador';
$lang["simplesaml_email_attribute"]='Atribut per a utilitzar l\'adreça de correu electrònic';
$lang["simplesaml_group_attribute"]='Atribut per determinar la pertinença a un grup';
$lang["simplesaml_username_suffix"]='Sufix per afegir als noms d\'usuari creats per distingir-los dels comptes estàndard de ResourceSpace';
$lang["simplesaml_update_group"]='Actualitza el grup d\'usuari en cada inici de sessió. Si no s\'utilitza l\'atribut de grup SSO per determinar l\'accés, establiu-ho com a fals perquè els usuaris puguin ser moguts manualment entre grups';
$lang["simplesaml_groupmapping"]='SAML - Assignació de Grup de ResourceSpace';
$lang["simplesaml_fallback_group"]='Grup d\'usuari per defecte que s\'utilitzarà per als usuaris creats recentment';
$lang["simplesaml_samlgroup"]='Grup SAML';
$lang["simplesaml_rsgroup"]='Grup de ResourceSpace';
$lang["simplesaml_priority"]='Prioritat (un número més alt tindrà prioritat)';
$lang["simplesaml_addrow"]='Afegir mapeig';
$lang["simplesaml_service_provider"]='Nom del proveïdor de serveis local (SP)';
$lang["simplesaml_prefer_standard_login"]='Prefereix el login estàndard (redirigir a la pàgina de login per defecte)';
$lang["simplesaml_sp_configuration"]='La configuració del proveïdor de serveis simplesaml ha de ser completada per poder utilitzar aquest connector. Si us plau, consulteu l\'article de la Base de Coneixement per obtenir més informació';
$lang["simplesaml_custom_attributes"]='Atributs personalitzats per enregistrar en el registre d\'usuari';
$lang["simplesaml_custom_attribute_label"]='Atribut SSO';
$lang["simplesaml_usercomment"]='Creat per l\'extensió SimpleSAML';
$lang["origin_simplesaml"]='Connector del plugin SimpleSAML';
$lang["simplesaml_lib_path_label"]='Ruta de la llibreria SAML (si us plau, especifiqueu la ruta completa del servidor)';
$lang["simplesaml_login"]='Utilitza les credencials SAML per iniciar sessió a ResourceSpace? (Això només és rellevant si l\'opció anterior està activada)';
$lang["simplesaml_create_new_match_email"]='Correspondència d\'email: Abans de crear nous usuaris, comprova si l\'email de l\'usuari SAML coincideix amb un correu electrònic del compte RS existent. Si es troba una coincidència, l\'usuari SAML "adoptarà" aquest compte';
$lang["simplesaml_allow_duplicate_email"]='Permetre la creació de nous comptes si ja existeixen comptes de ResourceSpace amb la mateixa adreça de correu electrònic? (això es substitueix si s\'estableix una coincidència d\'adreça de correu electrònic anterior i es troba una coincidència)';
$lang["simplesaml_multiple_email_match_subject"]='ResourceSpace SAML - intent d\'inici de sessió amb correu electrònic en conflicte';
$lang["simplesaml_multiple_email_match_text"]='Un nou usuari SAML ha accedit al sistema, però ja hi ha més d\'un compte amb la mateixa adreça de correu electrònic.';
$lang["simplesaml_multiple_email_notify"]='Adreça de correu electrònic per notificar si es troba un conflicte de correu electrònic';
$lang["simplesaml_duplicate_email_error"]='Hi ha un compte existent amb la mateixa adreça de correu electrònic. Si us plau, contacteu amb l\'administrador.';
$lang["simplesaml_usermatchcomment"]='Actualitzat a usuari SAML pel connector SimpleSAML.';
$lang["simplesaml_usercreated"]='S\'ha creat un nou usuari SAML';
$lang["simplesaml_duplicate_email_behaviour"]='Gestió de comptes duplicats';
$lang["simplesaml_duplicate_email_behaviour_description"]='Aquesta secció controla el que passa si un nou usuari SAML que accedeix té un conflicte amb un compte existent';
$lang["simplesaml_authorisation_rules_header"]='Regla d\'autorització';
$lang["simplesaml_authorisation_rules_description"]='Permetre que ResourceSpace pugui ser configurat amb autorització local addicional d\'usuaris basada en un atribut extra (és a dir, afirmació/reclam) en la resposta de l\'IdP. Aquesta afirmació serà utilitzada pel connector per determinar si l\'usuari té permisos per iniciar sessió a ResourceSpace o no.';
$lang["simplesaml_authorisation_claim_name_label"]='Nom d\'atribut (afirmació/reclamació)';
$lang["simplesaml_authorisation_claim_value_label"]='Valor d\'atribut (afirmació/reclamació)';
$lang["simplesaml_authorisation_login_error"]='No tens accés a aquesta aplicació! Si us plau, contacta amb l\'administrador del teu compte!';
$lang["simplesaml_authorisation_version_error"]='IMPORTANT: La configuració del teu SimpleSAML ha de ser actualitzada. Si us plau, consulta la secció \'<a href=\'https://www.resourcespace.com/knowledge-base/plugins/simplesaml#saml_instructions_migrate\' target=\'_blank\'>Migrating the SP to use ResourceSpace configuration</a>\' de la Base de Coneixement per obtenir més informació';
$lang["simplesaml_healthcheck_error"]='Error del connector SimpleSAML';
$lang["simplesaml_rsconfig"]='Utilitzeu els fitxers de configuració estàndard de ResourceSpace per establir la configuració de SP i les metadades? Si això està establert com a fals, llavors es requereix l\'edició manual dels fitxers';
$lang["simplesaml_sp_generate_config"]='Generar la configuració de SP';
$lang["simplesaml_sp_config"]='Configuració del proveïdor de serveis (SP)';
$lang["simplesaml_sp_data"]='Informació del proveïdor de serveis (SP)';
$lang["simplesaml_idp_section"]='Proveïdor d\'Identitat (IdP)';
$lang["simplesaml_idp_metadata_xml"]='Enganxa el fitxer XML de metadades de l\'IdP';
$lang["simplesaml_sp_cert_path"]='Ruta al fitxer del certificat SP (deixeu-ho en blanc per generar-lo, però ompliu els detalls del certificat a continuació)';
$lang["simplesaml_sp_key_path"]='Ruta al fitxer de clau SP (.pem) (deixeu-ho en blanc per generar-ne un)';
$lang["simplesaml_sp_idp"]='Identificador d\'IdP (deixeu en blanc si es processa XML)';
$lang["simplesaml_saml_config_output"]='Enganxa això en el fitxer de configuració del ResourceSpace';
$lang["simplesaml_sp_cert_info"]='Informació del certificat (obligatori)';
$lang["simplesaml_sp_cert_countryname"]='Codi de país (només 2 caràcters)';
$lang["simplesaml_sp_cert_stateorprovincename"]='Nom de l\'estat, comtat o província';
$lang["simplesaml_sp_cert_localityname"]='Localitat (per exemple, ciutat/poble)';
$lang["simplesaml_sp_cert_organizationname"]='Nom de l\'organització';
$lang["simplesaml_sp_cert_organizationalunitname"]='Unitat organitzativa / departament';
$lang["simplesaml_sp_cert_commonname"]='Nom comú (p. ex. sp.acme.org)';
$lang["simplesaml_sp_cert_emailaddress"]='Adreça de correu electrònic';
$lang["simplesaml_sp_cert_invalid"]='Informació del certificat no vàlida';
$lang["simplesaml_sp_cert_gen_error"]='No es pot generar el certificat';
$lang["simplesaml_sp_samlphp_link"]='Visita el lloc de prova de SimpleSAMLphp';
$lang["simplesaml_sp_technicalcontact_name"]='Nom del contacte tècnic';
$lang["simplesaml_sp_technicalcontact_email"]='Correu electrònic de contacte tècnic';
$lang["simplesaml_sp_auth.adminpassword"]='Contrasenya d\'administrador del lloc de proves SP';
$lang["simplesaml_acs_url"]='URL ACS / URL de resposta';
$lang["simplesaml_entity_id"]='Identificador d\'entitat/URL de metadades';
$lang["simplesaml_single_logout_url"]='URL de tancament de sessió única';
$lang["simplesaml_start_url"]='Inici/URL d\'inici de sessió';
$lang["simplesaml_existing_config"]='Segueix les instruccions de la Base de Coneixement per migrar la teva configuració SAML existent';
$lang["simplesaml_test_site_url"]='URL del lloc de prova SimpleSAML';
$lang["plugin-simplesaml-title"]='SAML simple';
$lang["plugin-simplesaml-desc"]='[Avançat] Requereix autenticació SAML per accedir a ResourceSpace';
$lang["simplesaml_idp_certs"]='Certificats SAML IdP';
$lang["simplesaml_idp_cert_expiring"]='Certificat IdP %idpname caduca a %expiretime';
$lang["simplesaml_idp_cert_expired"]='El certificat de l\'IdP %idpname va expirar a les %expiretime';
$lang["simplesaml_idp_cert_expires"]='El certificat de l\'IdP %idpname caduca a %expiretime';