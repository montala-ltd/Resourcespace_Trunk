<?php


$lang["simpleldap_ldaptype"]='Proveïdor de directoris';
$lang["ldapserver"]='Servidor LDAP';
$lang["ldap_encoding"]='Codificació de dades rebuda des del servidor LDAP (establerta si no és UTF-8 i les dades no es mostren correctament - per exemple, el nom que es mostra)';
$lang["domain"]='Domini AD, si n\'hi ha diversos separa\'ls amb punt i coma';
$lang["emailsuffix"]='Sufix de correu electrònic - s\'utilitza si no es troben dades d\'atribut de correu electrònic';
$lang["port"]='Port: Port';
$lang["basedn"]='DN base. Si els usuaris es troben en múltiples DN, separar amb punt i coma (;).';
$lang["loginfield"]='Camp d\'entrada de sessió';
$lang["usersuffix"]='Sufix d\'usuari (un punt serà afegit davant del sufix)';
$lang["groupfield"]='Camp de grup';
$lang["createusers"]='Crear usuaris';
$lang["fallbackusergroup"]='Grup d\'usuari de contingència';
$lang["ldaprsgroupmapping"]='Assignació de Grup LDAP-ResourceSpace';
$lang["ldapvalue"]='Valor LDAP';
$lang["rsgroup"]='Grup de ResourceSpace';
$lang["addrow"]='Afegir fila';
$lang["email_attribute"]='Atribut per a utilitzar l\'adreça de correu electrònic';
$lang["phone_attribute"]='Atribut per a utilitzar en el número de telèfon';
$lang["simpleldap_telephone"]='Telèfon';
$lang["simpleldap_unknown"]='desconegut';
$lang["simpleldappriority"]='Prioritat (un número més alt tindrà prioritat)';
$lang["simpleldap_create_new_match_email"]='Corresponent d\'email: Comprova si l\'email LDAP coincideix amb un correu electrònic de compte RS existent i adopta aquest compte. Funcionarà fins i tot si "Crear usuaris" està desactivat';
$lang["simpleldap_allow_duplicate_email"]='Permetre la creació de nous comptes si ja existeixen comptes amb la mateixa adreça de correu electrònic? (això es substitueix si s\'estableix una coincidència d\'email anteriorment i es troba una coincidència)';
$lang["simpleldap_multiple_email_match_subject"]='ResourceSpace - intent d\'inici de sessió amb correu electrònic en conflicte';
$lang["simpleldap_multiple_email_match_text"]='Un nou usuari LDAP s\'ha connectat però ja hi ha més d\'un compte amb la mateixa adreça de correu electrònic:';
$lang["simpleldap_notification_email"]='Adreça de notificació, per exemple, si hi ha adreces de correu electrònic duplicades registrades. Si es deixa en blanc, no se\'n enviarà cap.';
$lang["simpleldap_duplicate_email_error"]='Hi ha un compte existent amb la mateixa adreça de correu electrònic. Si us plau, contacteu amb l\'administrador.';
$lang["simpleldap_no_group_match_subject"]='ResourceSpace - nou usuari sense assignació de grup';
$lang["simpleldap_no_group_match"]='Un nou usuari s\'ha connectat però no hi ha cap grup de ResourceSpace assignat a cap grup de directori al qual pertanyen.';
$lang["simpleldap_usermemberof"]='L\'usuari és membre dels següents grups de directoris: -';
$lang["simpleldap_test"]='Prova de configuració LDAP';
$lang["simpleldap_connection"]='Connexió al servidor LDAP';
$lang["simpleldap_bind"]='Vincular al servidor LDAP';
$lang["simpleldap_username"]='Nom d\'usuari/DN d\'usuari';
$lang["simpleldap_password"]='Contrasenya';
$lang["simpleldap_test_auth"]='Prova d\'autenticació';
$lang["simpleldap_domain"]='Domini';
$lang["simpleldap_displayname"]='Nom de visualització';
$lang["simpleldap_memberof"]='Membre de';
$lang["simpleldap_test_title"]='Prova';
$lang["simpleldap_result"]='Resultat';
$lang["simpleldap_retrieve_user"]='Recuperar detalls d\'usuari';
$lang["simpleldap_externsion_required"]='El mòdul PHP LDAP ha d\'estar habilitat perquè aquest connector funcioni';
$lang["simpleldap_usercomment"]='Creat per l\'extensió SimpleLDAP.';
$lang["simpleldap_usermatchcomment"]='Actualitzat a usuari LDAP per SimpleLDAP.';
$lang["origin_simpleldap"]='Connector SimpleLDAP';
$lang["simpleldap_LDAPTLS_REQCERT_never_label"]='No comprovis el FQDN del servidor amb el CN del certificat';
$lang["simpleldap_update_group"]='Actualitza el grup d\'usuari en cada inici de sessió. Si no s\'utilitzen grups d\'AD per determinar l\'accés, establiu-ho com a fals perquè els usuaris puguin ser promocionats manualment';
$lang["simpleldap_testing"]='Provant la configuració LDAP';