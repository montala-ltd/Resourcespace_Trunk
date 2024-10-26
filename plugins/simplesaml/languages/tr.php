<?php


$lang["simplesaml_configuration"]='SimpleSAML yapılandırması';
$lang["simplesaml_main_options"]='Kullanım seçenekleri';
$lang["simplesaml_site_block"]='SAML kullanarak siteye erişimi tamamen engelle, true olarak ayarlanırsa kimse siteye, anonim olarak bile, kimlik doğrulaması yapmadan erişemez';
$lang["simplesaml_allow_public_shares"]='Site\'i engelliyorsanız, genel paylaşımların SAML kimlik doğrulamasını atlamasına izin verilsin mi?';
$lang["simplesaml_allowedpaths"]='SAML gereksinimini atlayabilen ek izin verilen yolların listesi';
$lang["simplesaml_allow_standard_login"]='Kullanıcıların standart hesaplarla ve SAML SSO kullanarak giriş yapmalarına izin verilsin mi? UYARI: Bunu devre dışı bırakmak, SAML kimlik doğrulaması başarısız olursa tüm kullanıcıların sistemden kilitlenme riskini taşıyabilir.';
$lang["simplesaml_use_sso"]='SSO kullanarak giriş yap';
$lang["simplesaml_idp_configuration"]='IdP yapılandırması';
$lang["simplesaml_idp_configuration_description"]='Aşağıdakileri kullanarak eklentiyi IdP\'niz ile çalışacak şekilde yapılandırın';
$lang["simplesaml_username_attribute"]='Kullanıcı adı için kullanılacak öznitelik(ler).  Eğer bu iki özniteliğin birleştirilmesi ise, lütfen virgülle ayırın';
$lang["simplesaml_username_separator"]='Kullanıcı adı alanlarını birleştirirken bu karakteri ayırıcı olarak kullan';
$lang["simplesaml_fullname_attribute"]='Tam ad için kullanılacak öznitelik(ler). Bu iki özniteliğin birleştirilmesi ise lütfen virgülle ayırın';
$lang["simplesaml_fullname_separator"]='Tam ad için alanları birleştirirken bu karakteri ayırıcı olarak kullan';
$lang["simplesaml_email_attribute"]='E-posta adresi için kullanılacak özellik';
$lang["simplesaml_group_attribute"]='Grup üyeliğini belirlemek için kullanılacak özellik';
$lang["simplesaml_username_suffix"]='Oluşturulan kullanıcı adlarını standart ResourceSpace hesaplarından ayırt etmek için eklenen son ek';
$lang["simplesaml_update_group"]='Her oturum açıldığında kullanıcı grubunu güncelle. Erişimi belirlemek için SSO grup özniteliği kullanılmıyorsa, kullanıcıların gruplar arasında manuel olarak taşınabilmesi için bunu false olarak ayarla';
$lang["simplesaml_groupmapping"]='SAML - ResourceSpace Grup Eşleştirme';
$lang["simplesaml_fallback_group"]='Yeni oluşturulan kullanıcılar için kullanılacak varsayılan kullanıcı grubu';
$lang["simplesaml_samlgroup"]='SAML grubu';
$lang["simplesaml_rsgroup"]='ResourceSpace Grubu';
$lang["simplesaml_priority"]='Öncelik (daha yüksek sayı öncelikli olacaktır)';
$lang["simplesaml_addrow"]='Eşleme ekle';
$lang["simplesaml_service_provider"]='Yerel hizmet sağlayıcısının (SP) adı';
$lang["simplesaml_prefer_standard_login"]='Standart giriş tercih edin (varsayılan olarak giriş sayfasına yönlendirin)';
$lang["simplesaml_sp_configuration"]='Simplesaml SP yapılandırmasının tamamlanması bu eklentiyi kullanmak için gereklidir. Daha fazla bilgi için Bilgi Bankası makalesine bakınız';
$lang["simplesaml_custom_attributes"]='Kullanıcı kaydına karşı kaydedilecek özel nitelikler';
$lang["simplesaml_custom_attribute_label"]='SSO özniteliği - ';
$lang["simplesaml_usercomment"]='SimpleSAML eklentisi tarafından oluşturuldu';
$lang["origin_simplesaml"]='SimpleSAML eklentisi';
$lang["simplesaml_lib_path_label"]='SAML kütüphane yolu (lütfen tam sunucu yolunu belirtin)';
$lang["simplesaml_login"]='SAML kimlik bilgilerini kullanarak ResourceSpace\'e giriş yap? (Bu yalnızca yukarıdaki seçenek etkinleştirildiğinde geçerlidir)';
$lang["simplesaml_create_new_match_email"]='E-posta eşleşmesi: Yeni kullanıcılar oluşturmadan önce, SAML kullanıcı e-postasının mevcut bir RS hesap e-postasıyla eşleşip eşleşmediğini kontrol edin. Bir eşleşme bulunursa, SAML kullanıcısı o hesabı \'benimseyecek\'';
$lang["simplesaml_allow_duplicate_email"]='Mevcut ResourceSpace hesapları aynı e-posta adresine sahipse yeni hesapların oluşturulmasına izin verilsin mi? (e-posta eşleşmesi yukarıda ayarlandıysa ve bir eşleşme bulunursa bu geçersiz kılınır)';
$lang["simplesaml_multiple_email_match_subject"]='ResourceSpace SAML - çakışan e-posta giriş denemesi';
$lang["simplesaml_multiple_email_match_text"]='Yeni bir SAML kullanıcısı sisteme erişti ancak aynı e-posta adresine sahip birden fazla hesap var.';
$lang["simplesaml_multiple_email_notify"]='Bir e-posta çakışması bulunursa bilgilendirilecek e-posta adresi';
$lang["simplesaml_duplicate_email_error"]='Aynı e-posta adresiyle mevcut bir hesap var. Lütfen yöneticinizle iletişime geçin.';
$lang["simplesaml_usermatchcomment"]='SimpleSAML eklentisi tarafından SAML kullanıcısına güncellendi.';
$lang["simplesaml_usercreated"]='Yeni SAML kullanıcısı oluşturuldu';
$lang["simplesaml_duplicate_email_behaviour"]='Yinelenen hesap yönetimi';
$lang["simplesaml_duplicate_email_behaviour_description"]='Bu bölüm, yeni bir SAML kullanıcısının giriş yapması mevcut bir hesapla çakıştığında ne olacağını kontrol eder.';
$lang["simplesaml_authorisation_rules_header"]='Yetkilendirme kuralı';
$lang["simplesaml_authorisation_rules_description"]='ResourceSpace\'in, IdP\'den gelen yanıttaki ek bir öznitelik (örneğin, beyan/iddia) temelinde kullanıcıların yerel yetkilendirmesi ile yapılandırılmasını etkinleştirin. Bu beyan, kullanıcının ResourceSpace\'e giriş yapmasına izin verilip verilmediğini belirlemek için eklenti tarafından kullanılacaktır.';
$lang["simplesaml_authorisation_claim_name_label"]='Öznitelik (iddia/ talep) adı';
$lang["simplesaml_authorisation_claim_value_label"]='Öznitelik (iddia/ talep) değeri';
$lang["simplesaml_authorisation_login_error"]='Bu uygulamaya erişiminiz yok! Lütfen hesabınızın yöneticisiyle iletişime geçin!';
$lang["simplesaml_authorisation_version_error"]='ÖNEMLİ: SimpleSAML yapılandırmanızın güncellenmesi gerekiyor. Daha fazla bilgi için Bilgi Tabanı\'ndaki \'<a href=\'https://www.resourcespace.com/knowledge-base/plugins/simplesaml#saml_instructions_migrate\' target=\'_blank\'> ResourceSpace yapılandırmasını kullanmak için SP\'yi Taşıma</a>\' bölümüne bakın';
$lang["simplesaml_healthcheck_error"]='SimpleSAML eklentisi hatası';
$lang["simplesaml_rsconfig"]='Standart ResourceSpace yapılandırma dosyalarını kullanarak SP yapılandırmasını ve metadatasını ayarlayın? Bu yanlış olarak ayarlanırsa dosyaların manuel olarak düzenlenmesi gerekir';
$lang["simplesaml_sp_generate_config"]='SP yapılandırmasını oluştur';
$lang["simplesaml_sp_config"]='Hizmet Sağlayıcı (SP) Yapılandırması';
$lang["simplesaml_sp_data"]='Hizmet Sağlayıcı (SP) Bilgileri';
$lang["simplesaml_idp_section"]='IdP';
$lang["simplesaml_idp_metadata_xml"]='IdP Metadata XML\'sini yapıştırın';
$lang["simplesaml_sp_cert_path"]='SP sertifika dosyasının yolu (oluşturmak için boş bırakın ancak aşağıdaki sertifika bilgilerini doldurun)';
$lang["simplesaml_sp_key_path"]='SP anahtar dosyasının yolu (.pem) (oluşturmak için boş bırakın)';
$lang["simplesaml_sp_idp"]='IdP tanımlayıcı (XML işleniyorsa boş bırakın)';
$lang["simplesaml_saml_config_output"]='Bunu ResourceSpace yapılandırma dosyanıza yapıştırın';
$lang["simplesaml_sp_cert_info"]='Sertifika bilgileri (gerekli)';
$lang["simplesaml_sp_cert_countryname"]='Ülke Kodu (yalnızca 2 karakter)';
$lang["simplesaml_sp_cert_stateorprovincename"]='Eyalet, il veya ilçe adı';
$lang["simplesaml_sp_cert_localityname"]='Yer (ör. kasaba/şehir)';
$lang["simplesaml_sp_cert_organizationname"]='Organizasyon adı';
$lang["simplesaml_sp_cert_organizationalunitname"]='Organizasyon birimi / departman';
$lang["simplesaml_sp_cert_commonname"]='Yaygın ad (ör. sp.acme.org)';
$lang["simplesaml_sp_cert_emailaddress"]='E-posta adresi';
$lang["simplesaml_sp_cert_invalid"]='Geçersiz sertifika bilgisi';
$lang["simplesaml_sp_cert_gen_error"]='Sertifika oluşturulamıyor';
$lang["simplesaml_sp_samlphp_link"]='SimpleSAMLphp test sitesini ziyaret et';
$lang["simplesaml_sp_technicalcontact_name"]='Teknik iletişim adı';
$lang["simplesaml_sp_technicalcontact_email"]='Teknik iletişim e-postası';
$lang["simplesaml_sp_auth.adminpassword"]='SP Test site admin şifresi';
$lang["simplesaml_acs_url"]='ACS URL / Yanıt URL\'si';
$lang["simplesaml_entity_id"]='Varlık Kimliği/metadata URL\'si';
$lang["simplesaml_single_logout_url"]='Tekli çıkış URL\'si';
$lang["simplesaml_start_url"]='Başlat/Oturum Açma URL\'si';
$lang["simplesaml_existing_config"]='Bilinen Bilgi Tabanı talimatlarını izleyerek mevcut SAML yapılandırmanızı taşıyın';
$lang["simplesaml_test_site_url"]='SimpleSAML test sitesi URL\'si';
$lang["plugin-simplesaml-title"]='Basit SAML';
$lang["plugin-simplesaml-desc"]='[İleri] ResourceSpace\'e erişim için SAML kimlik doğrulaması gerektir';
$lang["simplesaml_idp_certs"]='SAML IdP sertifikaları';
$lang["simplesaml_idp_cert_expiring"]='IdP %idpname sertifikası %expiretime tarihinde sona eriyor';
$lang["simplesaml_idp_cert_expired"]='IdP %idpname sertifikası %expiretime tarihinde süresi doldu';
$lang["simplesaml_idp_cert_expires"]='IdP %idpname sertifikası %expiretime tarihinde sona eriyor';