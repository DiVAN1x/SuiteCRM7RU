Russian RAPIRA language pack and manual for SuiteCRM
=========================================

+ Здесь находится самая актуальная версия языковых файлов для [SuiteCRM][suitecrm] (форка безвременно почившего [SugarCRM CE] [sugar]), с учётом последних дополнений и исправлений, а также русифицированное ["Руководство пользователя и администратора SuiteCRM"] [man]
+ Обновление языковых файлов проще всего сделать через установку языкового пакета ([ссылка на последний актуальный перевод для SuiteCRM 7.7][langpack]). Процесс установки/обновления пакета русификации SuiteCRM описан ниже.
+ Обсуждение русификации интерфейса и перевода документации по SuiteCRM доступно на [официальном форуме][forum]

------------------------------------------------

<b>Что нового в SuiteCRM 7.8</b>    (полная история изменений содержится в файле [HISTORY.TXT][history])

+ Функционал базового/расширенного поиска в модулях заменён более компактными фильтрами. Если вы желаете использовать прежний интерфейс расширенного поиска для каких-либо модулей, добавьте в файл  config_overwrite.php параметр 'enable_legacy_search' с указанием названия модуля в качестве его значения, например: $sugar_config['enable_legacy_search'][] = 'Accounts';

+ В модуль Процессы добален новый функционал: вычисление в полях (Разработчик: [diligent technology & business consulting GmbH](www.dtbc.eu/en)). Вычисляемые поля позволяют значительно расширить возможности создаваемого Процесса, автоматизируя многие операции по вводу данных без дополнительного программирования. Пользователь может добавлять необходимые формулы непосредственно в интерфейсе Процесса, указывая поля, в которые будут выводиться вычисляемые результаты. В формулах могут быть задействованы следующие типы функций:  
•	логические функции  
•	текстовые функции  
•	математические функции  
•	функции обработки даты/времени  
•	функции обработки условных операторов  
•	счетчики  

Для трассировки работы указанных формул все необходимые данные могут быть записаны в файл журнала

Более детально функционал будет описан в Руководстве пользователя для версии 7.8

------------------------------------------------

<b>Русский язык в SuiteCRM: установка языкового пакета</b>

Все действия по установке дополнительных пакетов (не только языковых) производятся через панель администратора.

1. Входим в систему с правами администратора.
2. В правом верхнем меню выбираем пункт <b>Администрирование</b> (Admin) для входа в раздел администратора системы.
3. В разделе администратора выбираем <b>Загрузчик модулей</b> (Module Loader).
4. Если в SuiteCRM уже был установлен пакет русификации, то его рекомендуется удалить (кнопка  <b>Деинсталлировать</b>).
5. Загружаем архив с языковым пакетом и далее следуем шагам, описанным в мастере.
6. После того как мастер сообщит об успешной установке пакета, рекомендуется выполнить быстрое восстановление: Администрирование->Восстановление->Быстрое восстановление (Admin->Repair->Quick Repair and Rebuild).
7. Выходим из системы (Logout) и на странице ввода логина/пароля выбираем необходимый язык интерфейса системы.
8. Вновь входим в систему.

Установленный язык можно указать в качестве языка по умолчанию. Для этого в панели администрирования в подразделе <b>Региональные настройки</b> выберите соответствующий языковой пакет (Admin->Locale Settings->Default Language).

------------------------------------------------

<b>Документация к SuiteCRM</b>

Детальная информация по установке, настройке и использованию системы описана в русскоязычной [документации к SuiteCRM][man].
Начинающим пользователям, не знакомым с SuiteCRM, в первую очередь рекомендуются к прочтению раздел 'Начало работы', знакомящий с основными настройками системы, и раздел 'Описание пользовательского интерфейса', описывающий базовые принципы работы в системе. 

[langpack]: https://github.com/likhobory/SuiteCRM7RU/blob/ver.7.8/rapira-suite_pack_russian-7.8.zip?raw=true
[suitecrm]: https://github.com/salesagility/SuiteCRM
[man]: https://github.com/likhobory/SuiteCRM7RU/blob/master/DOCS/Russian_Rapira_Application_Guide_for_SuiteCRM_7.7.pdf?raw=true
[forum]: https://suitecrm.com/forum/international-language-support/59
[sugar]: https://ru.wikipedia.org/wiki/SugarCRM
[history]: https://github.com/likhobory/SuiteCRM7RU/blob/master/HISTORY.TXT

