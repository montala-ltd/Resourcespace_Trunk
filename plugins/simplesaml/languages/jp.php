<?php


$lang["simplesaml_configuration"]='SimpleSAMLの設定';
$lang["simplesaml_main_options"]='使用オプション';
$lang["simplesaml_site_block"]='SAMLを使用してサイトへのアクセスを完全にブロックし、trueに設定されている場合、認証なしで誰もサイトにアクセスできません。';
$lang["simplesaml_allow_public_shares"]='サイトをブロックする場合、パブリック共有がSAML認証をバイパスできるようにしますか？';
$lang["simplesaml_allowedpaths"]='SAML要件をバイパスできる追加許可パスのリスト';
$lang["simplesaml_allow_standard_login"]='ユーザーが標準アカウントでログインすることと、SAML SSOを使用してログインすることの両方を許可しますか？警告：これを無効にすると、SAML認証が失敗した場合にすべてのユーザーがシステムからロックアウトされる可能性があります。';
$lang["simplesaml_use_sso"]='SSOを使用してログインしてください。';
$lang["simplesaml_idp_configuration"]='IdPの設定';
$lang["simplesaml_idp_configuration_description"]='次のものを使用して、プラグインをあなたのIdPと連携するように設定してください。';
$lang["simplesaml_username_attribute"]='ユーザー名に使用する属性。2つの属性を連結する場合は、カンマで区切ってください。';
$lang["simplesaml_username_separator"]='ユーザー名のフィールドを結合する場合は、この文字を区切り文字として使用してください。';
$lang["simplesaml_fullname_attribute"]='フルネームに使用する属性。2つの属性を連結する場合は、カンマで区切ってください。';
$lang["simplesaml_fullname_separator"]='フルネームのためにフィールドを結合する場合、この文字を区切り文字として使用してください。';
$lang["simplesaml_email_attribute"]='Eメールアドレスに使用する属性';
$lang["simplesaml_group_attribute"]='グループメンバーシップを決定するために使用する属性';
$lang["simplesaml_username_suffix"]='標準のResourceSpaceアカウントと区別するために作成されたユーザー名に追加するサフィックス';
$lang["simplesaml_update_group"]='ログイン時にユーザーグループを更新します。SSOグループ属性を使用しない場合は、アクセスを決定するためにこれをfalseに設定し、ユーザーを手動でグループ間で移動できるようにします。';
$lang["simplesaml_groupmapping"]='SAML - ResourceSpace グループマッピング';
$lang["simplesaml_fallback_group"]='新しく作成されたユーザーに使用されるデフォルトのユーザーグループ';
$lang["simplesaml_samlgroup"]='SAMLグループ';
$lang["simplesaml_rsgroup"]='ResourceSpace グループ';
$lang["simplesaml_priority"]='優先度（数値が高いほど優先されます）';
$lang["simplesaml_addrow"]='マッピングを追加する';
$lang["simplesaml_service_provider"]='地元のサービスプロバイダー（SP）の名前';
$lang["simplesaml_prefer_standard_login"]='標準的なログインを優先する（デフォルトでログインページにリダイレクトする）';
$lang["simplesaml_sp_configuration"]='このプラグインを使用するには、simplesaml SPの設定を完了する必要があります。詳細については、ナレッジベースの記事を参照してください。';
$lang["simplesaml_custom_attributes"]='ユーザーレコードに記録するためのカスタム属性';
$lang["simplesaml_custom_attribute_label"]='SSO属性';
$lang["simplesaml_usercomment"]='SimpleSAMLプラグインによって作成されました。';
$lang["origin_simplesaml"]='SimpleSAML プラグイン';
$lang["simplesaml_lib_path_label"]='SAMLライブラリのパス（完全なサーバーパスを指定してください）';
$lang["simplesaml_login"]='ResourceSpaceへのログインにSAML資格情報を使用しますか？（これは、上記のオプションが有効な場合にのみ関連します）';
$lang["simplesaml_create_new_match_email"]='Eメール一致: 新しいユーザーを作成する前に、SAMLユーザーのEメールが既存のRSアカウントのEメールと一致するかどうかを確認してください。一致が見つかった場合、SAMLユーザーはそのアカウントを「引き継ぐ」ことになります。';
$lang["simplesaml_allow_duplicate_email"]='同じメールアドレスを持つ既存のResourceSpaceアカウントがある場合、新しいアカウントの作成を許可しますか？（上記のメールアドレス一致が設定され、1つの一致が見つかった場合は、これが上書きされます）';
$lang["simplesaml_multiple_email_match_subject"]='ResourceSpace SAML - メールログインの競合が発生しました。';
$lang["simplesaml_multiple_email_match_text"]='新しいSAMLユーザーがシステムにアクセスしましたが、同じメールアドレスを持つアカウントがすでに1つ以上存在しています。';
$lang["simplesaml_multiple_email_notify"]='電子メールの競合が見つかった場合に通知するための電子メールアドレス';
$lang["simplesaml_duplicate_email_error"]='同じメールアドレスを持つ既存のアカウントがあります。管理者に連絡してください。';
$lang["simplesaml_usermatchcomment"]='SimpleSAMLプラグインによってSAMLユーザーに更新されました。';
$lang["simplesaml_usercreated"]='新しいSAMLユーザーを作成しました。';
$lang["simplesaml_duplicate_email_behaviour"]='重複アカウント管理';
$lang["simplesaml_duplicate_email_behaviour_description"]='このセクションでは、新しいSAMLユーザーがログインした場合に既存のアカウントと競合した場合の処理方法を制御します。';
$lang["simplesaml_authorisation_rules_header"]='認可ルール';
$lang["simplesaml_authorisation_rules_description"]='ResourceSpaceを追加のローカル認証に設定できるようにし、IdPからのレスポンスに含まれる追加属性（つまり、アサーション/クレーム）に基づいてユーザーの認証を行います。このアサーションは、プラグインによって使用され、ユーザーがResourceSpaceにログインできるかどうかを判断するために使用されます。';
$lang["simplesaml_authorisation_claim_name_label"]='属性（主張/クレーム）名';
$lang["simplesaml_authorisation_claim_value_label"]='属性（主張/クレーム）値';
$lang["simplesaml_authorisation_login_error"]='このアプリケーションにアクセス権限がありません！アカウントの管理者に連絡してください！';
$lang["simplesaml_authorisation_version_error"]='重要: SimpleSAMLの設定を更新する必要があります。詳細については、Knowledge Baseの\'<a href=\'https://www.resourcespace.com/knowledge-base/plugins/simplesaml#saml_instructions_migrate\' target=\'_blank\'>SPをResourceSpace設定に移行する手順</a>\'セクションを参照してください。';
$lang["simplesaml_healthcheck_error"]='SimpleSAML プラグインエラー';
$lang["simplesaml_rsconfig"]='標準のResourceSpace設定ファイルを使用してSPの設定とメタデータを設定しますか？これがfalseに設定されている場合、ファイルの手動編集が必要です。';
$lang["simplesaml_sp_generate_config"]='SP設定を生成する';
$lang["simplesaml_sp_config"]='サービスプロバイダー(SP)の設定';
$lang["simplesaml_sp_data"]='サービスプロバイダー（SP）情報';
$lang["simplesaml_idp_metadata_xml"]='IdPメタデータXMLを貼り付けてください。';
$lang["simplesaml_sp_cert_path"]='SP証明書ファイルへのパス（生成する場合は空白のままにして、以下の証明書の詳細を入力してください）';
$lang["simplesaml_sp_key_path"]='SPキーのファイルパス（.pem）（空白の場合は生成）';
$lang["simplesaml_sp_idp"]='IdP識別子（XMLの処理を行わない場合は空白のままにしてください）';
$lang["simplesaml_saml_config_output"]='ResourceSpaceの設定ファイルにこれを貼り付けてください。';
$lang["simplesaml_sp_cert_info"]='証明書情報（必須）';
$lang["simplesaml_sp_cert_countryname"]='国コード（2文字のみ）';
$lang["simplesaml_sp_cert_stateorprovincename"]='州、郡、または州名';
$lang["simplesaml_sp_cert_localityname"]='地域（例：町/都市）';
$lang["simplesaml_sp_cert_organizationname"]='組織名 (Soshiki-mei)';
$lang["simplesaml_sp_cert_organizationalunitname"]='組織単位 / 部署';
$lang["simplesaml_sp_cert_commonname"]='一般名（例：sp.acme.org）';
$lang["simplesaml_sp_cert_invalid"]='証明書情報が無効です。';
$lang["simplesaml_sp_cert_gen_error"]='証明書を生成できません。';
$lang["simplesaml_sp_samlphp_link"]='SimpleSAMLphpのテストサイトを訪問してください。';
$lang["simplesaml_sp_technicalcontact_name"]='技術連絡担当者名';
$lang["simplesaml_sp_technicalcontact_email"]='技術的な連絡先のメールアドレス';
$lang["simplesaml_sp_auth.adminpassword"]='SP テストサイトの管理者パスワード';
$lang["simplesaml_entity_id"]='エンティティID / メタデータURL';
$lang["simplesaml_single_logout_url"]='シングルログアウトURL';
$lang["simplesaml_start_url"]='開始/サインオンURL';
$lang["simplesaml_existing_config"]='既存のSAML設定を移行するために、ナレッジベースの手順に従ってください。';
$lang["simplesaml_test_site_url"]='SimpleSAMLのテストサイトのURL';
$lang["simplesaml_sp_cert_emailaddress"]='メールアドレス';
$lang["simplesaml_idp_section"]='IdP';
$lang["simplesaml_acs_url"]='ACS URL / 返信URL';
$lang["plugin-simplesaml-title"]='シンプルSAML';
$lang["plugin-simplesaml-desc"]='[高度] ResourceSpaceにアクセスするにはSAML認証が必要です';
$lang["simplesaml_idp_certs"]='SAML IdP 証明書';
$lang["simplesaml_idp_cert_expiring"]='IdP %idpname 証明書の有効期限が %expiretime に切れます';
$lang["simplesaml_idp_cert_expired"]='IdP %idpname 証明書の有効期限が %expiretime に切れました';
$lang["simplesaml_idp_cert_expires"]='IdP %idpname 証明書の有効期限は %expiretime です';
$lang["simplesaml_check_idp_cert_expiry"]='IdP証明書の有効期限を確認しますか？';