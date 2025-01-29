<?php


$lang["simpleldap_ldaptype"]='Proveedor de directorios';
$lang["ldapserver"]='Servidor LDAP';
$lang["ldap_encoding"]='Codificación de datos recibida desde el servidor LDAP (establecida si no es UTF-8 y los datos no se muestran correctamente, por ejemplo, el nombre de visualización)';
$lang["domain"]='Dominio AD, si hay varios separar con punto y coma (;).';
$lang["emailsuffix"]='Sufijo de correo electrónico - se utiliza si no se encuentran datos de atributos de correo electrónico';
$lang["port"]='Puerto';
$lang["basedn"]='DN base. Si los usuarios están en múltiples DN, sepárelos con punto y coma (;).';
$lang["loginfield"]='Campo de inicio de sesión';
$lang["usersuffix"]='Sufijo de usuario (se agregará un punto delante del sufijo)';
$lang["groupfield"]='Campo de Grupo';
$lang["createusers"]='Crear usuarios';
$lang["fallbackusergroup"]='Grupo de usuario de respaldo';
$lang["ldaprsgroupmapping"]='Mapeo de grupos LDAP-ResourceSpace';
$lang["ldapvalue"]='Valor LDAP';
$lang["rsgroup"]='Grupo de ResourceSpace';
$lang["addrow"]='Agregar fila';
$lang["email_attribute"]='Atributo a utilizar para la dirección de correo electrónico';
$lang["phone_attribute"]='Atributo a utilizar para el número de teléfono';
$lang["simpleldap_telephone"]='Teléfono';
$lang["simpleldap_unknown"]='desconocido/a';
$lang["simpleldap_update_group"]='Actualizar el grupo de usuario en cada inicio de sesión. Si no se utilizan grupos de AD para determinar el acceso, establezca esto en falso para que los usuarios puedan ser promovidos manualmente';
$lang["simpleldappriority"]='Prioridad (un número más alto tendrá precedencia)';
$lang["simpleldap_create_new_match_email"]='Correo electrónico coincidente: Comprueba si el correo electrónico de LDAP coincide con el correo electrónico de una cuenta existente en RS y adopta esa cuenta. Funcionará incluso si "Crear usuarios" está desactivado';
$lang["simpleldap_allow_duplicate_email"]='¿Permitir la creación de nuevas cuentas si ya existen cuentas con la misma dirección de correo electrónico? (esto se anula si se establece "email-match" arriba y se encuentra una coincidencia)';
$lang["simpleldap_multiple_email_match_subject"]='ResourceSpace - intento de inicio de sesión de correo electrónico en conflicto';
$lang["simpleldap_multiple_email_match_text"]='Un nuevo usuario LDAP ha iniciado sesión, pero ya existe más de una cuenta con la misma dirección de correo electrónico:';
$lang["simpleldap_notification_email"]='Dirección de notificación, por ejemplo, si se registran direcciones de correo electrónico duplicadas. Si está en blanco, no se enviará ninguna notificación.';
$lang["simpleldap_duplicate_email_error"]='Ya existe una cuenta con la misma dirección de correo electrónico. Por favor, contacte a su administrador.';
$lang["simpleldap_no_group_match_subject"]='ResourceSpace - nuevo usuario sin asignación de grupo';
$lang["simpleldap_no_group_match"]='Un nuevo usuario ha iniciado sesión pero no hay ningún grupo de ResourceSpace asignado a ningún grupo de directorio al que pertenezca.';
$lang["simpleldap_usermemberof"]='El usuario es miembro de los siguientes grupos de directorios: -';
$lang["simpleldap_test"]='Prueba de configuración LDAP';
$lang["simpleldap_testing"]='Probando la configuración de LDAP';
$lang["simpleldap_connection"]='Conexión al servidor LDAP';
$lang["simpleldap_bind"]='Conectar al servidor LDAP';
$lang["simpleldap_username"]='Nombre de usuario/DN de usuario';
$lang["simpleldap_password"]='Contraseña';
$lang["simpleldap_test_auth"]='Autenticación de prueba';
$lang["simpleldap_domain"]='Dominio';
$lang["simpleldap_displayname"]='Nombre de visualización';
$lang["simpleldap_memberof"]='Miembro de';
$lang["simpleldap_test_title"]='Prueba';
$lang["simpleldap_result"]='Resultado';
$lang["simpleldap_retrieve_user"]='Recuperar detalles del usuario';
$lang["simpleldap_externsion_required"]='El módulo PHP LDAP debe estar habilitado para que este plugin funcione';
$lang["simpleldap_usercomment"]='Creado por el plugin SimpleLDAP.';
$lang["simpleldap_usermatchcomment"]='Actualizado a usuario LDAP por SimpleLDAP.';
$lang["origin_simpleldap"]='Plugin SimpleLDAP';
$lang["simpleldap_LDAPTLS_REQCERT_never_label"]='No verifique el FQDN del servidor con el CN del certificado';
$lang["plugin-simpleldap-title"]='LDAP Simple';
$lang["plugin-simpleldap-desc"]='Implementación más simple de la autenticación ldap, dirigida a Active Directory pero también compatible con el directorio Oracle';