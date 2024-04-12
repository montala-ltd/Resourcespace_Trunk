<?php


$lang["simpleldap_ldaptype"]='Fournisseur d\'annuaire';
$lang["ldapserver"]='Serveur LDAP';
$lang["ldap_encoding"]='Encodage de données reçu depuis le serveur LDAP (défini si ce n\'est pas de l\'UTF-8 et que les données ne sont pas affichées correctement - par exemple le nom d\'affichage)';
$lang["domain"]='Domaine AD, si plusieurs séparés par des points-virgules';
$lang["emailsuffix"]='Suffixe de courriel - utilisé si aucune donnée d\'attribut de courriel n\'est trouvée';
$lang["basedn"]='Base DN. Si les utilisateurs sont dans plusieurs DN, séparez-les avec des points-virgules ';
$lang["loginfield"]='Champ de connexion';
$lang["usersuffix"]='Suffixe de l\'utilisateur (un point sera ajouté devant le suffixe)';
$lang["groupfield"]='Champ de groupe';
$lang["createusers"]='Créer des utilisateurs';
$lang["fallbackusergroup"]='Groupe d\'utilisateurs de secours';
$lang["ldaprsgroupmapping"]='Association de groupe LDAP-ResourceSpace';
$lang["ldapvalue"]='Valeur LDAP';
$lang["rsgroup"]='Groupe ResourceSpace';
$lang["addrow"]='Ajouter une ligne';
$lang["email_attribute"]='Attribut à utiliser pour l\'adresse e-mail';
$lang["phone_attribute"]='Attribut à utiliser pour le numéro de téléphone';
$lang["simpleldap_telephone"]='Téléphone';
$lang["simpleldap_unknown"]='Inconnu';
$lang["simpleldap_update_group"]='Mettre à jour le groupe d\'utilisateurs à chaque connexion. Si vous n\'utilisez pas les groupes AD pour déterminer l\'accès, définissez cette option sur "false" afin que les utilisateurs puissent être promus manuellement';
$lang["simpleldappriority"]='Priorité (un nombre plus élevé aura la priorité)';
$lang["simpleldap_create_new_match_email"]='Correspondance d\'e-mail : Vérifiez si l\'e-mail LDAP correspond à un e-mail de compte RS existant et adoptez ce compte. Fonctionnera même si "Créer des utilisateurs" est désactivé';
$lang["simpleldap_allow_duplicate_email"]='Autoriser la création de nouveaux comptes si des comptes existants ont la même adresse e-mail ? (cela est remplacé si la correspondance d\'e-mail est définie ci-dessus et qu\'une correspondance est trouvée)';
$lang["simpleldap_multiple_email_match_subject"]='ResourceSpace - tentative de connexion par e-mail en conflit';
$lang["simpleldap_multiple_email_match_text"]='Un nouvel utilisateur LDAP s\'est connecté mais il existe déjà plus d\'un compte avec la même adresse e-mail :';
$lang["simpleldap_notification_email"]='Adresse de notification, par exemple si des adresses e-mail en double sont enregistrées. Si vide, aucune notification ne sera envoyée.';
$lang["simpleldap_duplicate_email_error"]='Il existe déjà un compte avec la même adresse e-mail. Veuillez contacter votre administrateur.';
$lang["simpleldap_no_group_match_subject"]='ResourceSpace - nouvel utilisateur sans affectation de groupe';
$lang["simpleldap_no_group_match"]='Un nouvel utilisateur s\'est connecté mais aucun groupe ResourceSpace n\'est associé à un groupe de répertoire auquel il appartient.';
$lang["simpleldap_usermemberof"]='L\'utilisateur est membre des groupes de répertoires suivants : -';
$lang["simpleldap_test"]='Tester la configuration LDAP';
$lang["simpleldap_testing"]='Tester la configuration LDAP';
$lang["simpleldap_connection"]='Connexion au serveur LDAP';
$lang["simpleldap_bind"]='Se connecter au serveur LDAP';
$lang["simpleldap_username"]='Nom d\'utilisateur / DN de l\'utilisateur';
$lang["simpleldap_password"]='Mot de passe';
$lang["simpleldap_test_auth"]='Vérification de l\'authentification de test';
$lang["simpleldap_domain"]='Domaine';
$lang["simpleldap_displayname"]='Nom d\'affichage';
$lang["simpleldap_memberof"]='Membre de';
$lang["simpleldap_test_title"]='Test';
$lang["simpleldap_result"]='Résultat';
$lang["simpleldap_retrieve_user"]='Récupérer les détails de l\'utilisateur';
$lang["simpleldap_externsion_required"]='Le module PHP LDAP doit être activé pour que ce plugin fonctionne';
$lang["simpleldap_usercomment"]='Créé par le plugin SimpleLDAP.';
$lang["simpleldap_usermatchcomment"]='Mis à jour vers l\'utilisateur LDAP par SimpleLDAP.';
$lang["origin_simpleldap"]='Plugin SimpleLDAP';
$lang["simpleldap_LDAPTLS_REQCERT_never_label"]='Ne pas vérifier le FQDN du serveur par rapport au CN du certificat';