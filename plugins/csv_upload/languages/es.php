<?php


$lang["csv_upload_nav_link"]='Carga de CSV';
$lang["csv_upload_intro"]='Este plugin te permite crear o actualizar recursos mediante la carga de un archivo CSV. El formato del CSV es importante';
$lang["csv_upload_condition1"]='<li>Asegúrese de que el archivo CSV esté codificado en <b>UTF-8 sin BOM</b>.</li>';
$lang["csv_upload_condition2"]='<li>El archivo CSV debe tener una fila de encabezado</li>';
$lang["csv_upload_condition3"]='<li>Para poder subir archivos de recursos más tarde utilizando la funcionalidad de reemplazo por lotes, debe haber una columna llamada \'Nombre de archivo original\' y cada archivo debe tener un nombre único</li>';
$lang["csv_upload_condition4"]='<li>Todos los campos obligatorios para cualquier recurso recién creado deben estar presentes en el CSV</li>';
$lang["csv_upload_condition5"]='<li>Para las columnas que tienen valores que contienen <b>comas ( , )</b>, asegúrese de formatearlas como tipo <b>texto</b> para que no tenga que agregar comillas (""). Al guardar como archivo CSV, asegúrese de marcar la opción de citar las celdas de tipo texto</li>';
$lang["csv_upload_condition6"]='Puede descargar un ejemplo de archivo CSV haciendo clic en <a href="../downloads/csv_upload_example.csv">csv-upload-example.csv</a>';
$lang["csv_upload_condition7"]='<li>Para actualizar los datos de recursos existentes, puedes descargar un archivo CSV con los metadatos existentes haciendo clic en la opción \'Exportar CSV - metadatos\' del menú de acciones de la colección o los resultados de búsqueda.</li>';
$lang["csv_upload_condition8"]='Puede reutilizar un archivo de mapeo CSV previamente configurado haciendo clic en \'Cargar archivo de configuración CSV\'';
$lang["csv_upload_error_no_permission"]='No tienes los permisos correctos para subir un archivo CSV';
$lang["check_line_count"]='Se encontraron al menos dos filas en el archivo CSV';
$lang["csv_upload_file"]='Seleccionar archivo CSV';
$lang["csv_upload_default"]='Valor predeterminado';
$lang["csv_upload_error_no_header"]='No se encontró fila de encabezado en el archivo';
$lang["csv_upload_update_existing"]='¿Actualizar recursos existentes? Si esto no está marcado, entonces se crearán nuevos recursos basados en los datos CSV';
$lang["csv_upload_update_existing_collection"]='¿Actualizar solo los recursos en una colección específica?';
$lang["csv_upload_process"]='Proceso';
$lang["csv_upload_add_to_collection"]='¿Agregar los recursos recién creados a la colección actual?';
$lang["csv_upload_step1"]='Paso 1 - Seleccionar archivo';
$lang["csv_upload_step2"]='Paso 2 - Opciones predeterminadas de recursos';
$lang["csv_upload_step3"]='Paso 3 - Asignar columnas a campos de metadatos';
$lang["csv_upload_step4"]='Paso 4 - Verificación de datos CSV';
$lang["csv_upload_step5"]='Paso 5 - Procesando CSV';
$lang["csv_upload_update_existing_title"]='Actualizar recursos existentes';
$lang["csv_upload_update_existing_notes"]='Seleccione las opciones necesarias para actualizar los recursos existentes';
$lang["csv_upload_create_new_title"]='Crear nuevos recursos';
$lang["csv_upload_create_new_notes"]='Selecciona las opciones necesarias para crear nuevos recursos';
$lang["csv_upload_map_fields_notes"]='Alinee las columnas en el CSV con los campos de metadatos requeridos. Al hacer clic en "Siguiente", se verificará el CSV sin cambiar los datos en realidad';
$lang["csv_upload_map_fields_auto_notes"]='Los campos de metadatos han sido preseleccionados en base a los nombres o títulos, pero por favor verifique que sean correctos';
$lang["csv_upload_workflow_column"]='Selecciona la columna que contiene el ID del estado del flujo de trabajo';
$lang["csv_upload_workflow_default"]='Estado de flujo de trabajo predeterminado si no se selecciona ninguna columna o si no se encuentra un estado válido en la columna';
$lang["csv_upload_access_column"]='Seleccione la columna que contiene el nivel de acceso (0=Abierto, 1=Restringido, 2=Confidencial)';
$lang["csv_upload_access_default"]='Nivel de acceso predeterminado si no se selecciona ninguna columna o si no se encuentra ningún acceso válido en la columna';
$lang["csv_upload_resource_type_column"]='Selecciona la columna que contiene el identificador del tipo de recurso';
$lang["csv_upload_resource_type_default"]='Tipo de recurso predeterminado si no se selecciona ninguna columna o si no se encuentra ningún tipo válido en la columna';
$lang["csv_upload_resource_match_column"]='Selecciona la columna que contiene el identificador del recurso';
$lang["csv_upload_match_type"]='¿Coincidir recurso basado en el ID del recurso o en el valor del campo de metadatos?';
$lang["csv_upload_multiple_match_action"]='Acción a tomar si se encuentran múltiples recursos coincidentes';
$lang["csv_upload_validation_notes"]='Verifique los mensajes de validación a continuación antes de continuar. Haga clic en Procesar para confirmar los cambios';
$lang["csv_upload_upload_another"]='Subir otro CSV';
$lang["csv_upload_mapping config"]='Configuración de asignación de columnas CSV';
$lang["csv_upload_download_config"]='Descargar la configuración de mapeo CSV como archivo';
$lang["csv_upload_upload_config"]='Subir archivo de mapeo CSV';
$lang["csv_upload_upload_config_question"]='¿Subir archivo de mapeo CSV? Úselo si ha subido un archivo CSV similar antes y ha guardado la configuración';
$lang["csv_upload_upload_config_set"]='Conjunto de configuración CSV';
$lang["csv_upload_upload_config_clear"]='Borrar la configuración de mapeo CSV';
$lang["csv_upload_mapping_ignore"]='POR FAVOR NO UTILIZAR';
$lang["csv_upload_mapping_header"]='Encabezado de columna';
$lang["csv_upload_mapping_csv_data"]='Datos de muestra desde CSV';
$lang["csv_upload_using_config"]='Utilizando la configuración CSV existente';
$lang["csv_upload_process_offline"]='¿Procesar archivo CSV sin conexión? Esto debería usarse para archivos CSV grandes. Se le notificará a través de un mensaje de ResourceSpace una vez que se haya completado el procesamiento';
$lang["csv_upload_oj_created"]='Se ha creado un trabajo de carga CSV con el ID de trabajo # %%JOBREF%%. <br/>Recibirás un mensaje del sistema de ResourceSpace una vez que se haya completado el trabajo';
$lang["csv_upload_oj_complete"]='Carga de trabajo de subida de CSV completada. Haga clic en el enlace para ver el archivo de registro completo';
$lang["csv_upload_oj_failed"]='La carga de trabajo de subida de CSV ha fallado';
$lang["csv_upload_processing_x_meta_columns"]='Procesando %count columnas de metadatos';
$lang["csv_upload_processing_complete"]='Procesamiento completado en %%TIME%% (%%HOURS%% horas, %%MINUTES%% minutos, %%SECONDS%% segundos)';
$lang["csv_upload_error_in_progress"]='Procesamiento abortado - este archivo CSV ya está siendo procesado';
$lang["csv_upload_error_file_missing"]='Error - Falta el archivo CSV: %%FILE%%';
$lang["csv_upload_full_messages_link"]='Mostrando solo las primeras 1000 líneas, para descargar el archivo de registro completo, haga clic <a href=\'%%LOG_URL%%\' target=\'_blank\'>aquí</a>';
$lang["csv_upload_ignore_errors"]='Ignorar errores y procesar el archivo de todas formas';
$lang["csv_upload_process_offline_quick"]='¿Omitir la validación y procesar el archivo CSV sin conexión? Esto solo debe usarse para archivos CSV grandes cuando se hayan completado las pruebas en archivos más pequeños. Se le notificará a través de un mensaje de ResourceSpace una vez que se haya completado la carga';
$lang["csv_upload_force_offline"]='Este archivo CSV grande puede tardar mucho tiempo en procesarse, por lo que se ejecutará sin conexión. Se le notificará a través de un mensaje de ResourceSpace una vez que se haya completado el procesamiento';
$lang["csv_upload_recommend_offline"]='Este archivo CSV grande puede tardar mucho tiempo en procesarse. Se recomienda habilitar trabajos sin conexión si necesita procesar archivos CSV grandes';
$lang["csv_upload_createdfromcsvupload"]='Creado desde el plugin de carga CSV';