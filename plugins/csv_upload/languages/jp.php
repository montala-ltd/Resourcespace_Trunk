<?php

$lang["csv_upload_nav_link"] = 'CSVアップロード';
$lang["csv_upload_intro"] = 'このプラグインを使用すると、CSVファイルをアップロードしてリソースを作成または更新できます。CSVの形式が重要です。';
$lang["csv_upload_condition1"] = 'CSVファイルが <b>BOMなしUTF-8</b>でエンコードされていることを確認してください。';
$lang["csv_upload_condition2"] = 'CSVはヘッダー行を持っている必要があります。';
$lang["csv_upload_condition3"] = 'バッチ置換機能を使用して後でリソースファイルをアップロードできるようにするには、「元のファイル名」という名前の列が必要であり、各ファイルにはユニークなファイル名が必要です。';
$lang["csv_upload_condition4"] = '新しく作成されたリソースのすべての必須フィールドはCSVに存在している必要があります。';
$lang["csv_upload_condition5"] = '値に<b>カンマ( , )</b>を含む列については、引用符("")を追加する必要がないように、タイプ<b>テキスト</b>としてフォーマットしてください。CSVファイルとして保存する場合は、テキストタイプのセルを引用符で囲むオプションを確認してください。';
$lang["csv_upload_condition6"] = 'CSVファイルの例を<a href="../downloads/csv_upload_example.csv">csv-upload-example.csv</a>をクリックしてダウンロードできます。';
$lang["csv_upload_condition7"] = '既存のリソースデータを更新するには、コレクションまたは検索結果のアクションメニューから「CSVエクスポート - メタデータ」オプションをクリックして、既存のメタデータを含むCSVをダウンロードできます。';
$lang["csv_upload_condition8"] = '\'Upload CSV configuration file\' をクリックすることで、以前に設定した CSV マッピングファイルを再利用できます。';
$lang["csv_upload_error_no_permission"] = 'CSVファイルをアップロードするための適切な権限がありません。';
$lang["check_line_count"] = 'CSVファイルで少なくとも2つの行が見つかりました。';
$lang["csv_upload_file"] = 'CSVファイルを選択してください。';
$lang["csv_upload_default"] = 'デフォルト';
$lang["csv_upload_error_no_header"] = 'ファイルにヘッダー行が見つかりません。';
$lang["csv_upload_update_existing"] = '既存のリソースを更新しますか？チェックを外すと、CSVデータに基づいて新しいリソースが作成されます。';
$lang["csv_upload_update_existing_collection"] = '特定のコレクション内のリソースのみを更新しますか？';
$lang["csv_upload_process"] = '処理 (しょり)';
$lang["csv_upload_add_to_collection"] = '現在のコレクションに新しく作成されたリソースを追加しますか？';
$lang["csv_upload_step1"] = 'ステップ1 - ファイルを選択する';
$lang["csv_upload_step2"] = 'ステップ2 - デフォルトのリソースオプション';
$lang["csv_upload_step3"] = 'ステップ3 - カラムをメタデータフィールドにマップする';
$lang["csv_upload_step4"] = 'ステップ4 - CSVデータの確認';
$lang["csv_upload_step5"] = 'ステップ5 - CSVの処理';
$lang["csv_upload_update_existing_title"] = '既存のリソースを更新する。';
$lang["csv_upload_update_existing_notes"] = '既存のリソースを更新するために必要なオプションを選択してください。';
$lang["csv_upload_create_new_title"] = '新しいリソースを作成する';
$lang["csv_upload_create_new_notes"] = '新しいリソースを作成するために必要なオプションを選択してください。';
$lang["csv_upload_map_fields_notes"] = 'CSVの列を必要なメタデータフィールドに合わせてください。 「次へ」をクリックすると、データを実際に変更せずにCSVを確認します。';
$lang["csv_upload_map_fields_auto_notes"] = 'メタデータフィールドは名前やタイトルに基づいて事前に選択されていますが、正しいことを確認してください。';
$lang["csv_upload_workflow_column"] = 'ワークフロー状態IDを含む列を選択してください。';
$lang["csv_upload_workflow_default"] = 'カラムが選択されていない場合、またはカラムに有効なステートが見つからない場合のデフォルトのワークフロー状態。';
$lang["csv_upload_access_column"] = 'アクセスレベルを含む列を選択してください（0=オープン、1=制限あり、2=機密）。';
$lang["csv_upload_access_default"] = 'カラムが選択されていない場合、またはカラムに有効なアクセスが見つからない場合のデフォルトアクセスレベル。';
$lang["csv_upload_resource_type_column"] = 'リソースタイプ識別子を含む列を選択してください。';
$lang["csv_upload_resource_type_default"] = 'カラムが選択されていない場合、またはカラムに有効なタイプが見つからない場合のデフォルトのリソースタイプ。';
$lang["csv_upload_resource_match_column"] = 'リソース識別子を含む列を選択してください。';
$lang["csv_upload_match_type"] = 'リソースIDまたはメタデータフィールドの値に基づいてリソースを一致させますか？';
$lang["csv_upload_multiple_match_action"] = '複数の一致するリソースが見つかった場合の対処方法';
$lang["csv_upload_validation_notes"] = '手続きを進める前に、下記の検証メッセージを確認してください。変更を確定するには、「処理」をクリックしてください。';
$lang["csv_upload_upload_another"] = '別のCSVをアップロードしてください。';
$lang["csv_upload_mapping config"] = 'CSV列マッピング設定';
$lang["csv_upload_download_config"] = 'ファイルとしてCSVマッピング設定をダウンロードする。';
$lang["csv_upload_upload_config"] = 'CSVマッピングファイルをアップロードする。';
$lang["csv_upload_upload_config_question"] = 'CSVマッピングファイルをアップロードしますか？ 以前に類似のCSVをアップロードし、構成を保存した場合に使用してください。';
$lang["csv_upload_upload_config_set"] = 'CSV構成セット';
$lang["csv_upload_upload_config_clear"] = 'CSVマッピング構成をクリアする';
$lang["csv_upload_mapping_ignore"] = '使用しないでください。';
$lang["csv_upload_mapping_header"] = 'カラムヘッダー';
$lang["csv_upload_mapping_csv_data"] = 'CSVからのサンプルデータ';
$lang["csv_upload_using_config"] = '既存のCSV設定を使用する。';
$lang["csv_upload_process_offline"] = 'CSVファイルをオフラインで処理しますか？これは大きなCSVファイルに使用する必要があります。処理が完了すると、ResourceSpaceメッセージで通知されます。';
$lang["csv_upload_oj_created"] = 'CSVアップロードジョブがジョブID # [jobref]で作成されました。<br/>ジョブが完了したら、ResourceSpaceシステムメッセージが届きます。';
$lang["csv_upload_oj_complete"] = 'CSVアップロードジョブが完了しました。完全なログファイルを表示するには、リンクをクリックしてください。';
$lang["csv_upload_oj_failed"] = 'CSVアップロードジョブが失敗しました。';
$lang["csv_upload_processing_x_meta_columns"] = '%count 個のメタデータ列を処理しています。';
$lang["csv_upload_processing_complete"] = '処理が完了しました。時間は [time] で、そのうち [hours] 時間、 [minutes] 分、 [seconds] 秒かかりました。';
$lang["csv_upload_error_in_progress"] = '処理が中止されました - このCSVファイルは既に処理中です。';
$lang["csv_upload_error_file_missing"] = 'エラー - CSVファイルが見つかりません：[file]';
$lang["csv_upload_full_messages_link"] = '最初の1000行のみ表示しています。完全なログファイルをダウンロードするには<a href=\'[log_url]\' target=\'_blank\'>ここをクリック</a>してください。';
$lang["csv_upload_ignore_errors"] = 'エラーを無視してファイルを処理します。';
$lang["csv_upload_process_offline_quick"] = 'バリデーションをスキップしてCSVファイルをオフラインで処理しますか？これは、小さなファイルでのテストが完了した場合にのみ、大きなCSVファイルで使用する必要があります。アップロードが完了すると、ResourceSpaceメッセージで通知されます。';
$lang["csv_upload_force_offline"] = 'この大きなCSVファイルは処理に時間がかかるため、オフラインで実行されます。処理が完了したら、ResourceSpaceのメッセージで通知されます。';
$lang["csv_upload_recommend_offline"] = 'この大きなCSVファイルを処理するには非常に長い時間がかかる可能性があります。大きなCSVファイルを処理する必要がある場合は、オフラインジョブを有効にすることをお勧めします。';
$lang["csv_upload_createdfromcsvupload"] = 'CSVアップロードプラグインから作成されました。';
$lang["plugin-csv_upload-title"] = 'CSVアップロード';
$lang["plugin-csv_upload-desc"] = '[高度な] CSVファイルを使用してメタデータをアップロードします。';
