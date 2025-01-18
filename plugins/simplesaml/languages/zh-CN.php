<?php


$lang["simplesaml_configuration"]='SimpleSAML 配置';
$lang["simplesaml_main_options"]='使用选项';
$lang["simplesaml_site_block"]='使用 SAML 来完全阻止对站点的访问，如果设置为 true，则没有人可以在未经身份验证的情况下访问站点，即使是匿名用户也不行。';
$lang["simplesaml_allow_public_shares"]='如果阻止了网站，是否允许公共共享跳过SAML身份验证？';
$lang["simplesaml_allowedpaths"]='可以绕过 SAML 要求的附加允许路径列表';
$lang["simplesaml_allow_standard_login"]='允许用户使用标准账户登录，同时也可以使用SAML SSO登录？警告：禁用此功能可能会导致所有用户在SAML身份验证失败时被锁定系统。';
$lang["simplesaml_use_sso"]='使用SSO登录';
$lang["simplesaml_idp_configuration"]='IdP配置';
$lang["simplesaml_idp_configuration_description"]='使用以下内容配置插件以使其与您的 IdP 协同工作。';
$lang["simplesaml_username_attribute"]='用于用户名的属性。如果这是两个属性的连接，请用逗号分隔。';
$lang["simplesaml_username_separator"]='如果要将字段连接起来作为用户名，请使用此字符作为分隔符。';
$lang["simplesaml_fullname_attribute"]='用于全名的属性。如果这是两个属性的连接，请用逗号分隔。';
$lang["simplesaml_fullname_separator"]='如果要将字段合并为全名，请使用此字符作为分隔符。';
$lang["simplesaml_group_attribute"]='用于确定组成员身份的属性';
$lang["simplesaml_username_suffix"]='创建的用户名后缀，用于将其与标准ResourceSpace帐户区分开来。 ';
$lang["simplesaml_update_group"]='每次登录时更新用户组。如果不使用SSO组属性来确定访问权限，则将其设置为false，以便可以手动移动用户到不同的组中。';
$lang["simplesaml_groupmapping"]='SAML - ResourceSpace组映射';
$lang["simplesaml_fallback_group"]='新创建用户将使用的默认用户组';
$lang["simplesaml_samlgroup"]='SAML组';
$lang["simplesaml_rsgroup"]='ResourceSpace 群组';
$lang["simplesaml_priority"]='优先级（数字越高，优先级越高）';
$lang["simplesaml_addrow"]='添加映射';
$lang["simplesaml_service_provider"]='本地服务提供商（SP）的名称';
$lang["simplesaml_prefer_standard_login"]='首选标准登录（默认情况下重定向到登录页面）';
$lang["simplesaml_sp_configuration"]='简体字: 必须完成 simplesaml SP 配置才能使用此插件。请参阅知识库文章以获取更多信息。';
$lang["simplesaml_custom_attributes"]='自定义属性以记录在用户记录中。';
$lang["simplesaml_custom_attribute_label"]='SSO属性';
$lang["simplesaml_usercomment"]='由SimpleSAML插件创建';
$lang["origin_simplesaml"]='SimpleSAML插件';
$lang["simplesaml_lib_path_label"]='SAML库路径（请指定完整的服务器路径）';
$lang["simplesaml_login"]='使用 SAML 凭据登录 ResourceSpace？（仅在上述选项启用时相关）';
$lang["simplesaml_create_new_match_email"]='电子邮件匹配：在创建新用户之前，请检查SAML用户的电子邮件是否与现有的RS帐户电子邮件匹配。如果找到匹配项，则SAML用户将“接管”该帐户。';
$lang["simplesaml_allow_duplicate_email"]='如果已经存在使用相同电子邮件地址的 ResourceSpace 帐户，则允许创建新帐户？（如果上面设置了电子邮件匹配并找到一个匹配，则会覆盖此设置）';
$lang["simplesaml_multiple_email_match_subject"]='ResourceSpace SAML - 冲突的电子邮件登录尝试';
$lang["simplesaml_multiple_email_match_text"]='一个新的SAML用户已经访问了系统，但是已经有一个或多个使用相同电子邮件地址的账户。';
$lang["simplesaml_multiple_email_notify"]='如果发现电子邮件冲突，请通知的电子邮件地址';
$lang["simplesaml_duplicate_email_error"]='存在使用相同电子邮件地址的现有帐户。请联系您的管理员。';
$lang["simplesaml_usermatchcomment"]='已通过SimpleSAML插件更新为SAML用户。';
$lang["simplesaml_usercreated"]='创建了新的 SAML 用户。';
$lang["simplesaml_duplicate_email_behaviour"]='重复账户管理';
$lang["simplesaml_duplicate_email_behaviour_description"]='此部分控制新的 SAML 用户登录时与现有帐户冲突时会发生什么。';
$lang["simplesaml_authorisation_rules_header"]='授权规则';
$lang["simplesaml_authorisation_rules_description"]='使ResourceSpace能够配置额外的本地用户授权，基于IdP响应中的额外属性（即断言/声明）。该断言将被插件用于确定用户是否被允许登录ResourceSpace。';
$lang["simplesaml_authorisation_claim_name_label"]='属性（断言/声明）名称';
$lang["simplesaml_authorisation_claim_value_label"]='属性（断言/声明）值';
$lang["simplesaml_authorisation_login_error"]='您没有访问此应用程序的权限！请联系您账户的管理员！';
$lang["simplesaml_authorisation_version_error"]='重要提示：您的SimpleSAML配置需要更新。请参考知识库中的“将SP迁移到使用ResourceSpace配置”部分，了解更多信息。<a href=\'https://www.resourcespace.com/knowledge-base/plugins/simplesaml#saml_instructions_migrate\' target=\'_blank\'>（链接）</a>';
$lang["simplesaml_healthcheck_error"]='SimpleSAML插件错误';
$lang["simplesaml_rsconfig"]='使用标准的ResourceSpace配置文件来设置SP配置和元数据？如果设置为false，则需要手动编辑文件。';
$lang["simplesaml_sp_generate_config"]='生成SP配置';
$lang["simplesaml_sp_config"]='服务提供商（SP）配置';
$lang["simplesaml_sp_data"]='服务提供商（SP）信息';
$lang["simplesaml_idp_section"]='IdP 的中文翻译为 "身份提供者"。';
$lang["simplesaml_sp_cert_path"]='SP证书文件路径（留空以生成，但填写下面的证书详细信息）';
$lang["simplesaml_sp_key_path"]='SP密钥文件的路径（.pem）（留空以生成）';
$lang["simplesaml_sp_idp"]='IdP标识符（如果处理XML，请留空）';
$lang["simplesaml_saml_config_output"]='请将此内容粘贴到您的ResourceSpace配置文件中。';
$lang["simplesaml_sp_cert_info"]='证书信息（必填）';
$lang["simplesaml_sp_cert_countryname"]='国家代码（仅限2个字符）';
$lang["simplesaml_sp_cert_stateorprovincename"]='州、县或省名称';
$lang["simplesaml_sp_cert_localityname"]='地点（例如城镇/城市）';
$lang["simplesaml_sp_cert_organizationname"]='组织名称';
$lang["simplesaml_sp_cert_commonname"]='通用名称（例如 sp.acme.org）';
$lang["simplesaml_sp_cert_emailaddress"]='电子邮件地址';
$lang["simplesaml_sp_cert_invalid"]='无效的证书信息。';
$lang["simplesaml_sp_cert_gen_error"]='无法生成证书。';
$lang["simplesaml_sp_samlphp_link"]='访问SimpleSAMLphp测试站点。';
$lang["simplesaml_sp_technicalcontact_name"]='技术联系人姓名';
$lang["simplesaml_sp_technicalcontact_email"]='技术联系人电子邮件';
$lang["simplesaml_sp_auth.adminpassword"]='SP测试站点管理员密码';
$lang["simplesaml_acs_url"]='ACS URL / 回复 URL';
$lang["simplesaml_entity_id"]='实体 ID / 元数据 URL';
$lang["simplesaml_single_logout_url"]='单点注销URL';
$lang["simplesaml_start_url"]='开始/登录网址';
$lang["simplesaml_existing_config"]='请按照知识库中的说明进行操作，以迁移您现有的SAML配置。';
$lang["simplesaml_test_site_url"]='SimpleSAML测试站点URL';
$lang["simplesaml_email_attribute"]='用于电子邮件地址的属性';
$lang["simplesaml_sp_cert_organizationalunitname"]='组织单位 / 部门';
$lang["simplesaml_idp_metadata_xml"]='粘贴IdP元数据XML';
$lang["plugin-simplesaml-title"]='简单SAML';
$lang["plugin-simplesaml-desc"]='[高级] 需要 SAML 认证才能访问 ResourceSpace';
$lang["simplesaml_idp_certs"]='SAML IdP 证书';
$lang["simplesaml_idp_cert_expiring"]='IdP %idpname 证书将于 %expiretime 到期';
$lang["simplesaml_idp_cert_expired"]='IdP %idpname 证书于 %expiretime 过期';
$lang["simplesaml_idp_cert_expires"]='IdP %idpname 证书将在 %expiretime 过期';
$lang["simplesaml_check_idp_cert_expiry"]='检查 IdP 证书到期？';