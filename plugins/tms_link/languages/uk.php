<?php


$lang["tms_link_configuration"]='Конфігурація посилання TMS';
$lang["tms_link_dsn_name"]='Назва локального DSN для підключення до бази даних TMS. У Windows це налаштовується через Адміністративні інструменти->Джерела даних (ODBC). Переконайтеся, що налаштовано правильне підключення (32/64 біт)';
$lang["tms_link_table_name"]='Назва таблиці або подання TMS, що використовується для отримання даних TMS';
$lang["tms_link_user"]='Ім\'я користувача для підключення до бази даних TMS';
$lang["tms_link_password"]='Пароль для користувача бази даних TMS';
$lang["tms_link_resource_types"]='Виберіть типи ресурсів, пов\'язані з TMS';
$lang["tms_link_object_id_field"]='Поле, яке використовується для зберігання ID об\'єкта TMS';
$lang["tms_link_checksum_field"]='Поле метаданих для зберігання контрольних сум. Це запобігає непотрібним оновленням, якщо дані не змінилися';
$lang["tms_link_checksum_column_name"]='Стовпець, повернутий з таблиці TMS, для використання контрольної суми, повернутої з бази даних TMS.';
$lang["tms_link_tms_data"]='Дані TMS в реальному часі';
$lang["tms_link_database_setup"]='Підключення до бази даних TMS';
$lang["tms_link_metadata_setup"]='Конфігурація метаданих TMS';
$lang["tms_link_tms_link_success"]='Підключення успішне';
$lang["tms_link_tms_link_failure"]='З\'єднання не вдалося. Будь ласка, перевірте ваші дані.';
$lang["tms_link_test_link"]='Тестове посилання на TMS';
$lang["tms_link_tms_resources"]='Ресурси TMS';
$lang["tms_link_no_tms_resources"]='Не знайдено ресурсів TMS. Будь ласка, перевірте, чи правильно налаштовано плагін і чи правильно зіставлено поля метаданих ObjectID та контрольної суми';
$lang["tms_link_no_resource"]='Ресурс не вказано';
$lang["tms_link_resource_id"]='Ідентифікатор ресурсу';
$lang["tms_link_object_id"]='Ідентифікатор об\'єкта';
$lang["tms_link_checksum"]='Контрольна сума';
$lang["tms_link_no_tms_data"]='Дані не повернені з TMS';
$lang["tms_link_field_mappings"]='Відображення полів TMS до полів ResourceSpace';
$lang["tms_link_resourcespace_field"]='Поле ResourceSpace';
$lang["tms_link_column_name"]='Колонка TMS';
$lang["tms_link_add_mapping"]='Додати відображення';
$lang["tms_link_performance_options"]='Налаштування сценарію TMS - ці налаштування вплинуть на заплановане завдання, яке оновлює дані ресурсів з TMS';
$lang["tms_link_query_chunk_size"]='Кількість записів для отримання з TMS у кожному блоці. Це можна налаштувати для знаходження оптимального параметра.';
$lang["tms_link_test_mode"]='Тестовий режим - Встановіть значення true, і скрипт буде виконуватися, але не оновлюватиме ресурси';
$lang["tms_link_email_notify"]='Адреса електронної пошти, на яку скрипт надсилатиме сповіщення. За замовчуванням буде використовуватися системна адреса для сповіщень, якщо залишити порожнім;';
$lang["tms_link_test_count"]='Кількість записів для тестування скрипту - можна встановити менше значення для тестування скрипту та продуктивності';
$lang["tms_link_last_run_date"]='<strong>Останній запуск скрипту: </strong>';
$lang["tms_link_script_failure_notify_days"]='Кількість днів, після яких відображати сповіщення та надсилати електронний лист, якщо скрипт не завершено';
$lang["tms_link_script_problem"]='УВАГА - скрипт TMS не був успішно завершений протягом останніх %days% днів. Останній час запуску:';
$lang["tms_link_upload_tms_field"]='TMS ObjectID';
$lang["tms_link_upload_nodata"]='Не знайдено даних TMS для цього ObjectID:';
$lang["tms_link_confirm_upload_nodata"]='Будь ласка, поставте галочку, щоб підтвердити, що ви бажаєте продовжити завантаження';
$lang["tms_link_enable_update_script"]='Увімкнути скрипт оновлення TMS';
$lang["tms_link_enable_update_script_info"]='Увімкніть скрипт, який автоматично оновлюватиме дані TMS щоразу, коли виконується заплановане завдання ResourceSpace (cron_copy_hitcount.php).';
$lang["tms_link_log_directory"]='Каталог для зберігання журналів скриптів. Якщо залишити це поле порожнім або вказати недійсний каталог, то журналювання не відбуватиметься.';
$lang["tms_link_log_expiry"]='Кількість днів для зберігання журналів скриптів. Будь-які журнали TMS у цьому каталозі, які старші, будуть видалені';
$lang["tms_link_column_type_required"]='<strong>ПРИМІТКА</strong>: Якщо додаєте новий стовпець, будь ласка, додайте назву стовпця до відповідного списку нижче, щоб вказати, чи містить новий стовпець числові або текстові дані.';
$lang["tms_link_numeric_columns"]='Список стовпців, які слід отримати у форматі UTF-8';
$lang["tms_link_text_columns"]='Список стовпців, які слід отримати у форматі UTF-16';
$lang["tms_link_bidirectional_options"]='Двостороння синхронізація (додавання зображень RS до TMS)';
$lang["tms_link_push_condition"]='Критерії метаданих, які повинні бути виконані для додавання зображень до TMS';
$lang["tms_link_tms_loginid"]='Ідентифікатор входу TMS, який буде використовуватися ResourceSpace для вставки записів. Обліковий запис TMS повинен бути створений або існувати з цим ідентифікатором';
$lang["tms_link_push_image"]='Надіслати зображення до TMS після створення попереднього перегляду? (Це створить новий медіазапис у TMS)';
$lang["tms_link_push_image_sizes"]='Бажаний розмір попереднього перегляду для відправки до TMS. Розділені комами в порядку пріоритету, тому буде використано перший доступний розмір';
$lang["tms_link_mediatypeid"]='IDТипуМедіа для використання у вставлених медіазаписах';
$lang["tms_link_formatid"]='Ідентифікатор формату для використання в вставлених медіазаписах';
$lang["tms_link_colordepthid"]='Використовувати ColorDepthID для вставлених медіазаписів';
$lang["tms_link_media_path"]='Кореневий шлях до файлового сховища, який буде збережено в TMS, наприклад, \\RS_SERVER\\filestore\\. Переконайтеся, що включено кінцевий слеш. Ім\'я файлу, збережене в TMS, включатиме відносний шлях від кореня файлового сховища.';
$lang["tms_link_mediapaths_resource_reference_column"]='Стовпець для використання в таблиці MediaMaster для зберігання ідентифікатора ресурсу. Це необов\'язково і використовується для уникнення використання декількома ресурсами одного і того ж ідентифікатора Media Master.';
$lang["tms_link_modules_mappings"]='Синхронізація з додаткових модулів (таблиць/переглядів)';
$lang["tms_link_module"]='Модуль';
$lang["tms_link_tms_uid_field"]='Поле TMS UID';
$lang["tms_link_rs_uid_field"]='Поле UID ResourceSpace';
$lang["tms_link_applicable_rt"]='Застосовуваний тип(и) ресурсу(ів)';
$lang["tms_link_modules_mappings_tools"]='Інструменти';
$lang["tms_link_add_new_tms_module"]='Додати новий додатковий модуль TMS';
$lang["tms_link_tms_module_configuration"]='Конфігурація модуля TMS';
$lang["tms_link_tms_module_name"]='Назва модуля TMS';
$lang["tms_link_encoding"]='кодування';
$lang["tms_link_not_found_error_title"]='Не знайдено';
$lang["tms_link_not_deleted_error_detail"]='Неможливо видалити запитану конфігурацію модуля.';
$lang["tms_link_uid_field"]='TMS %module_name %tms_uid_field';
$lang["tms_link_confirm_delete_module_config"]='Ви впевнені, що хочете видалити цю конфігурацію модуля? Цю дію не можна скасувати!';
$lang["tms_link_write_to_debug_log"]='Включити прогрес скрипту в системний журнал налагодження (потрібно окремо налаштувати журнал налагодження). Увага: Це призведе до швидкого зростання файлу журналу налагодження.';