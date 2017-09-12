<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************

* This program is free software; you can redistribute it and/or modify it under
* the terms of the GNU Affero General Public License version 3 as published by the
* Free Software Foundation.
*
* This program is distributed in the hope that it will be useful, but WITHOUT
* ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
* details.
*
* You should have received a copy of the GNU Affero General Public License along with
* this program; if not, see http://www.gnu.org/licenses or write to the Free
* Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
* 02110-1301 USA.

 // Replaced by RAPIRA -->
 ********************************************************************************/
  /*********************************************************************************
  *
  * This file was generated by the RAPIRA Translation Suite ----------
  *
  ***********************************************************************likhobory*/

  /*********************************************************************************
  * Description : Defines the Russian language pack for the base application.
  *********************************************************************************/
 // Replaced by RAPIRA <--
 
global $timedate;

$mod_strings = array(

    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Строки не импортированы из-за возникшей ошибки',
    'LBL_UPDATE_SUCCESSFULLY' => 'записей успешно обновлены',
    'LBL_SUCCESSFULLY_IMPORTED' => 'записей создано',
    'LBL_STEP_4_TITLE' => 'Шаг {0}: Импорт файла',
    'LBL_STEP_5_TITLE' => 'Шаг {0}: Просмотр результатов импорта',
    'LBL_CUSTOM_ENCLOSURE' => 'Поля ограничены символом:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Нельзя опубликовать схему. Уже существует другая схема импорта с аналогичным названием.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Нельзя отменить публикацию схемы импорта, принадлежащую другому пользователю. Необходимо чтобы схема импорта с аналогичным названием принадлежала вам.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Импорт не настроен для данного типа модуля',
    'LBL_IMPORT_TYPE' => 'Параметры импорта',
    'LBL_IMPORT_BUTTON' => 'Создание новых записей',
    'LBL_UPDATE_BUTTON' => 'Создание новых и обновление существующих записей',
	'LBL_CREATE_BUTTON_HELP' => 'Данная опция используется только для создания новых записей. Примечание: если идентификатор импортируемой записи (ID) совпадает с идентификатором записи в БД, то такая запись импортирована не будет.',
    'LBL_UPDATE_BUTTON_HELP' => 'Данная опция используется для создания новых и обновления существующих записей. Примечание: обновлению подвергнутся записи, у которых идентификатор (ID) совпадает с идентификатором импортируемой записи.',
    'LBL_ERROR_INVALID_BOOL' => 'Неверное значение (должно быть 1 или 0)',
    'LBL_IMPORT_ERROR' => 'Ошибки импорта:',
    'LBL_ERROR' => 'Ошибка:',
    'LBL_FIELD_NAME' => 'Название поля',
    'LBL_VALUE' => 'Значение',
    'LBL_NONE' => 'Нет',
    'LBL_REQUIRED_VALUE' => 'Требуемое значение отсутствует',
	'LBL_ERROR_SYNC_USERS' => 'Эти данные не могут быть синхронизированы с Outlook: ',
    'LBL_ID_EXISTS_ALREADY' => 'Данный ID уже присутствует в этой таблице',
    'LBL_ASSIGNED_USER' => 'Если пользователь не существует - используйте текущего пользователя',

    'LBL_ERROR_DELETING_RECORD' => 'Ошибка удаления записи:',
    'LBL_ERROR_INVALID_ID' => 'Указано слишком длинное значение ID. В поле может быть введено не более 36 символов.',
    'LBL_ERROR_INVALID_PHONE' => 'Неверный телефонный номер',
    'LBL_ERROR_INVALID_NAME' => 'Слишком длинное значение',
    'LBL_ERROR_INVALID_VARCHAR' => 'Слишком длинное значение',
    'LBL_ERROR_INVALID_DATE' => 'Неверное значение даты',
    'LBL_ERROR_INVALID_DATETIME' => 'Неверное значение даты/времени',
	'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Неверное значение даты/времени',
    'LBL_ERROR_INVALID_TIME' => 'Неверное значение времени',
    'LBL_ERROR_INVALID_INT' => 'Неверное целое значение',
    'LBL_ERROR_INVALID_NUM' => 'Неверный номер',

    'LBL_ERROR_INVALID_EMAIL' => 'Неверный E-mail',


    'LBL_ERROR_INVALID_USER' => 'Неверное имя пользователя или ID',
    'LBL_ERROR_INVALID_TEAM' => 'Invalid team name or ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Неверная учётная запись или ID',
    'LBL_ERROR_INVALID_RELATE' => 'Неверное отношение',
    'LBL_ERROR_INVALID_CURRENCY' => 'Неверное значение валюты',
    'LBL_ERROR_INVALID_FLOAT' => 'Неверное число с плавающей запятой',
    'LBL_ERROR_NOT_IN_ENUM' => 'Значение отсутствует в списке. Допустимые значения: ',


'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Файл загружен неудачно. Возможно, значение \'upload_max_filesize\' в Вашем файле php.ini слишком мало' ,
'LBL_MODULE_NAME' => 'Импорт' ,
'LBL_TRY_AGAIN' => 'Попробовать ещё раз' ,

'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Импортируемый файл содержит {0} строк, что превышает оптимальное значение, равное {1}. Превышение данного значения может замедлить процесс импорта. Нажмите на кнопку "ОК" для продолжения импорта или на кнопку "Отмена" для возможности изменения и повторной загрузки импортируемого файла.',
'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Вы не можете импортировать пользователя, имеющего права системного администратора',
'ERR_MULTIPLE' => 'Несколько полей имеют одни и те же имена.' ,
'ERR_MISSING_REQUIRED_FIELDS' => 'Пропущены обязательные поля:' ,
'ERR_SELECT_FILE' => 'Выбор файла для загрузки.' ,
'LBL_SELECT_FILE' => 'Выбор файла:' ,
'LBL_EXTERNAL_SOURCE' => 'внешнее приложение или сервис', ///
'LBL_CUSTOM_DELIMITER' => 'Поля разделены при помощи:',
'LBL_DONT_MAP' => '-- Не импортировать это поле --' ,
'LBL_STEP_MODULE' => 'В какой модуль необходимо импортировать данные?',
'LBL_STEP_1_TITLE' => 'Шаг 1: Выбор источника данных' ,
'LBL_CONFIRM_TITLE' => 'Шаг {0}: Подтверждение параметров импортируемого файла',
'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
'LBL_MICROSOFT_OUTLOOK_HELP' => 'Microsoft Outlook в качестве разделителя использует запятую (csv). Если в импортируемом файле в качестве разделителя используется символ табуляции, то результат импорта будет отличен от ожидаемого.',
'LBL_SALESFORCE' => 'Salesforce.com' ,
'LBL_PUBLISH' => 'Опубликовать схему' ,
'LBL_DELETE' => 'Удалить схему' ,
'LBL_PUBLISHED_SOURCES' => 'Для использования одной из сохранённых схем импорта - выберите её из списка:',
'LBL_UNPUBLISH' => 'Отменить публикацию' ,
'LBL_NEXT' => 'Дальше >' ,
'LBL_BACK' => '< Назад' ,
'LBL_STEP_2_TITLE' => 'Шаг {0}: Загрузка файла импорта' ,
'LBL_HAS_HEADER' => 'Содержит строку заголовка:' ,
'LBL_NUM_1' => '1.' ,
'LBL_NUM_2' => '2.' ,
'LBL_NUM_3' => '3.' ,
'LBL_NUM_4' => '4.' ,
'LBL_NUM_5' => '5.' ,
'LBL_NUM_6' => '6.' ,
'LBL_NUM_7' => '7.' ,
'LBL_NUM_8' => '8.' ,
'LBL_NUM_9' => '9.' ,
'LBL_NUM_10' => '10.' ,
'LBL_NUM_11' => '11.' ,
'LBL_NUM_12' => '12.' ,
'LBL_NOTES' => 'Примечание:',




'LBL_STEP_3_TITLE' => 'Шаг {0}: Сопоставление полей' ,
'LBL_STEP_DUP_TITLE' => 'Шаг {0}: Поиск возможных дубликатов',
'LBL_DATABASE_FIELD' => 'Поле модуля' ,
'LBL_HEADER_ROW' => 'Строка заголовков' ,
'LBL_HEADER_ROW_OPTION_HELP' => 'Отметьте эту опцию, если первая строка импортируемого файла содержит названия полей.',
'LBL_ROW' => 'Строка' ,
'LBL_CONTACTS_NOTE_1' => 'Должна быть указана либо <b>Фамилия</b>, либо <b>Полное имя</b>.' ,
'LBL_CONTACTS_NOTE_2' => 'Если будет указано <b>Полное имя</b>, то поля <b>Имя</b> и <b>Фамилия</b> будут игнорироваться.' ,
'LBL_CONTACTS_NOTE_3' => 'Если будет указано <b>Полное имя</b>, то данные из этого поля будут разделены между полями <b>Имя</b> и <b>Фамилия</b> при вставке в базу данных.' ,
'LBL_CONTACTS_NOTE_4' => 'Поля <b>Улица 2</b> и <b>Улица 3</b> будут объединены вместе с основным адресным полем при вставке в базу данных.' ,
'LBL_ACCOUNTS_NOTE_1' => 'Поля <b>Улица 2</b> и <b>Улица 3</b> будут объединены вместе с основным адресным полем при вставке в базу данных.' ,


'LBL_IMPORT_NOW' => 'Начать импорт' ,
'LBL_' => '' ,
'LBL_CANNOT_OPEN' => 'Не удаётся открыть файл для чтения' ,
'LBL_NO_LINES' => 'В импортируемом файле строки не обнаружены. Убедитесь, что файл не содержит пустых строк или укажите другой файл.' ,
'LBL_SUCCESS' => 'Готово:' ,
'LBL_LAST_IMPORT_UNDONE' => 'Импорт отменён.' ,
'LBL_NO_IMPORT_TO_UNDO' => 'Нечего отменять, т.к. ничего не импортировано.' ,
'LBL_CREATED_TAB' => 'Добавленные записи',
'LBL_DUPLICATE_TAB' => 'Дубликаты',
'LBL_ERROR_TAB' => 'Ошибки',
'LBL_IMPORT_MORE' => 'Повторить импорт' ,
'LBL_FINISHED' => 'Готово' ,
'LBL_UNDO_LAST_IMPORT' => 'Отменить импорт' ,
'LBL_DUPLICATES' => 'дубликатов обнаружено',
'LNK_DUPLICATE_LIST' => 'Загрузить файл со списком дубликатов',
'LNK_ERROR_LIST' => 'Загрузить список ошибок',
'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Загрузить строки, которые не были импортированы.',
'LBL_INDEX_USED' => 'Проверяемые поля:',
'LBL_INDEX_NOT_USED' => 'Доступные поля:',

  'LBL_IMPORT_FIELDDEF_ID' => 'Уникальный ID',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Название или ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Номер телефона',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Team Name or ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Любой текст',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Любой текст',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Любой текст',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Время',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Дата',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Имя пользователя или ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '\'0\' или \'1\'',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Список',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Адрес E-Mail',
    'LBL_IMPORT_FIELDDEF_INT' => 'Цифра (только целое значение)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Цифра (только целое значение)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Цифра (только целое значение)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Цифра (допустимо дробное значение)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Цифра (допустимо дробное значение)',
    'LBL_DATE_FORMAT' => 'Формат даты:',
    'LBL_TIME_FORMAT' => 'Формат времени:',
    'LBL_TIMEZONE' => 'Часовой пояс:',
    'LBL_ADD_ROW' => 'Добавить поле',
    'LBL_REMOVE_ROW' => 'Удалить поле',
    'LBL_DEFAULT_VALUE' => 'Значение по умолчанию',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Показать параметры импортируемого файла',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Скрыть параметры импортируемого файла',
	'LBL_SHOW_NOTES' => 'Показать примечания',
    'LBL_HIDE_NOTES' => 'Скрыть примечания',
    'LBL_SAVE_MAPPING_AS' => 'Сохранить схему импорта как:',
	'LBL_IMPORT_COMPLETE' => 'Завершить',
    'LBL_IMPORT_COMPLETED' => 'Импорт завершён',

    'LBL_IMPORT_RECORDS' => 'Импорт записей с',
    'LBL_IMPORT_RECORDS_OF' => 'из',
    'LBL_IMPORT_RECORDS_TO' => 'по',
    'LBL_CURRENCY' => 'Валюта:',
	'LBL_CURRENCY_SIG_DIGITS' => 'Значащие цифры валюты',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Пример',
    'LBL_NUMBER_GROUPING_SEP' => 'Символ разделителя разрядов:',
    'LBL_DECIMAL_SEP' => 'Символ десятичного разделителя:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Формат имени по умолчанию',

    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Приветствие, "f" Имя, "l" Фамилия</i>',
    'LBL_CHARSET' => 'Кодировка:',
	'LBL_MY_SAVED_HELP' => 'Вы можете использовать ранее сохранённые схемы импорта, содержащие параметры импорта, параметры сопоставления полей, а также настройки поиска дубликатов.<br><br>Нажмите на кнопку <b>Удалить</b> для удаления схемы (схема станет недоступной для всех пользователей).',
	'LBL_MY_SAVED_ADMIN_HELP' => 'Вы можете использовать ранее сохранённые схемы импорта, содержащие параметры импорта, параметры сопоставления полей, а также настройки поиска дубликатов.<br><br>Нажмите на кнопку  <b>Опубликовать</b>, чтобы сделать схему импорта доступной для других пользователей.<br>Нажмите кнопку <b>Отменить публикацию</b>, чтобы сделать схему импорта недоступной для других пользователей.<br>Нажмите на кнопку <b>Удалить</b> для удаления схемы (схема станет недоступной для всех пользователей).',
    'LBL_ENCLOSURE_HELP' => '<p><b>Ограничивающий символ</b> используется для разграничения содержимого полей, включая любые символы, которые используются в качестве разделителей.<br><br>Пример: Если в качестве разделителя используется запятая <b>(,)</b>, а в качестве ограничивающего символа используется двойная кавычка <b>(")</b>, то строка <br><b>"Токсово, Ленинградская область"</b> импортируется в одно поле в виде <b>Токсово, Ленинградская область</b>.<br>Если ограничивающие символы отсутствуют, или в качестве таковых используются другие символы, то строка <br><b>`Токсово, Ленинградская область`</b> импортируется в два соседних поля в виде <b>Токсово</b> и <b>Ленинградская область</b>.<br><br>Примечание: Импортируемый файл может не содержать ограничивающих символов.<br> В Excel для файлов, значения которых разделены точкой с запятой или символом табуляции, ограничивающим символом по умолчанию является двойная кавычка.</p>',
    'LBL_DATABASE_FIELD_HELP' => 'Данный список содержит все доступные поля модуля. Выберите необходимые поля для их сопоставления с полями импортируемого файла.',
    'LBL_HEADER_ROW_HELP' => 'В данной колонке отображаются значения строки заголовка импортируемого файла.',
    'LBL_DEFAULT_VALUE_HELP' => 'В данной колонке отображается значение по умолчанию для поля в создаваемой или обновляемой записи, если поле в импортируемом файле не содержит данных.',
    'LBL_ROW_HELP' => 'В данной колонке отображается первая строка с данными импортируемого файла. Если в этой колонке отображаются значения строки заголовка импортируемого файла, то вернитесь на предыдущую страницу и отметьте опцию <b>Содержит строку заголовка</b>',
    'LBL_SAVE_MAPPING_HELP' => 'Здесь вы можете сохранить указанные параметры импорта (включая параметры сопоставления полей и настройки поиска дубликатов) в виде схемы импорта. Сохранённая схема может быть использована при следующем процессе импорта.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Параметры импортируемого файла определяются системой автоматически. При необходимости вы можете изменить установленные значения. Примечание: указанные здесь параметры относятся только к текущему процессу импорта и никак не повлияют на настройки, указанные в параметрах пользователя.',
	'LBL_IMPORT_STARTED' => 'Импорт начат',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Недостаточно прав для обновления записи',
	'LBL_DELETE_MAP_CONFIRMATION' => 'Вы действительно хотите удалить данную схему импорта?',
	'LBL_THIRD_PARTY_CSV_SOURCES' => 'Выберите необходимый пункт, если источником данных является одно из следующих приложений:',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Выберите источник данных для автоматического сопоставления полей на следующем шаге импорта.',
    'LBL_EXAMPLE_FILE' => 'Загрузить шаблон импортируемого файла',
    'LBL_CONFIRM_IMPORT' => 'Вы выбрали обновление существующих записей в процессе импорта. ОБНОВЛЕНИЕ существующих записей не может быть отменено. Однако, процесс СОЗДАНИЯ записей при желании может быть отменён. Нажмите на кнопку "Отмена" или на кнопку "ОК" для продолжения обновления.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Внимание: схема импорта уже была указана ранее, желаете продолжить?',
    'LBL_SAMPLE_URL_HELP' => 'Загрузка примера импортируемого файла, содержащего строку заголовка, которая может быть использована для определения полей модуля. Данный файл может использоваться в качестве шаблона файла, содержащего необходимые для импорта данные.',
    'LBL_AUTO_DETECT_ERROR' => 'Разделители и ограничители полей в данном файле не обнаружены. Проверьте настройки в параметрах импортируемого файла.',
    'LBL_MIME_TYPE_ERROR_1' => 'Вероятно, данный файл не содержит разделителей. Проверьте тип файла. Рекомендуется использовать текстовый файл с запятой в качестве разделителя (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Для импортирования выбранного файла нажмите на кнопку <b>ОК</b>. Для загрузки нового файла нажмите на кнопку <b>Попробовать ещё раз</b>.',
    'LBL_FIELD_DELIMETED_HELP' => 'Символ, использующийся в качестве разделителя полей.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Выберите файл, в котором данные разделены определённым символом, например запятой (рекомендуется) или символом табуляции.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Кэш-папка импорта не доступна для записи.',
	'LBL_ADD_FIELD_HELP' => 'Добавление значения в указанное поле обновляемых/создаваемых записей. Выберите необходимое поле и при необходимости укажите значение по умолчанию.',
    'LBL_MISSING_HEADER_ROW' => 'Строка заголовка не обнаружена',
    'LBL_CANCEL' => 'Отмена',
    'LBL_SELECT_DS_INSTRUCTION' => 'Готовы начать импорт? Выберите источник импортируемых данных.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Выберите файл, содержащий данные для импорта, либо загрузите шаблон, на основе которого может быть создан подобный файл.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Это предварительный показ первых строк импортируемого файла, выполненный на основе автоматического анализа его параметров. Если была обнаружена строка заголовка, то она отображается в крайнем левом столбце. Вы можете просмотреть автоматически определённые параметры файла и при необходимости внести желаемые изменения. Отображаемая в столбцах информация будет автоматически обновлена при изменении какого-либо параметра импортируемого файла.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'Данная таблица содержит все доступные поля модуля, которые могут быть сопоставлены с полями импортируемого файла. Если файл содержит строку заголовка, то её поля отображаются в крайнем левом столбце. Проверьте все имеющиеся сопоставления и при необходимости внесите желаемые изменения. Для проверки корректности сопоставления в таблице отображается первая строка с данными импортируемого файла. <b>Обратите внимание:</b> должны быть сопоставлены все обязательные поля (отмечены в списке красной звёздочкой).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Во избежание создания дублирующихся записей рекомендуется указать поля, в которых в процессе импорта будет осуществлена проверка данных: значения полей базы данных будут сравниваться с данными в импортируемом файле. Строки файла, в которых будут обнаружены дублирующиеся данные, будут отображены в результатах импорта на отдельной закладке.',
    'LBL_DUP_HELP' => 'Здесь представлены строки, которые НЕ БЫЛИ импортированы в систему, поскольку они содержат данные, уже имеющиеся в базе данных системы. Для осуществления повторного импорта вы можете загрузить файл со списком дубликатов, внести в него необходимые изменения и нажать на кнопку <b>Повторить импорт</b>.',
    'LBL_SUMMARY' => 'Результаты импорта:',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'Здесь представлены строки, которые НЕ БЫЛИ импортированы в систему из-за возникших ошибок. Для осуществления повторного импорта вы можете загрузить файл со списком ошибочных строк, внести в него необходимые изменения и нажать на кнопку <b>Повторить импорт</b>.',

    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'To assign the new records to a user other than yourself, use the Default Value column to select a different user.', ///
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'To assign the new records to teams other than your default team(s), use the Default Value column to select different teams.', ///



);

?>
