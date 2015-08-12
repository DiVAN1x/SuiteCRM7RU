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
 
global $sugar_config;

$mod_strings = array (
// OOTB Scheduler Job Names:
'LBL_OOTB_WORKFLOW'=> 'Обрабатывать задачи документооборота' ,
'LBL_OOTB_REPORTS'=> 'Выполнять запланированные задачи создания отчётов' ,
'LBL_OOTB_IE'=> 'Проверять входящие письма' ,
'LBL_OOTB_BOUNCE'=> 'Запускать ночью проверку почтовых ящиков для возвращаемых писем' ,
'LBL_OOTB_CAMPAIGN'=> 'Запускать ночью массовую рассылку писем' ,
'LBL_OOTB_PRUNE'=> 'Очищать таблицы трекера',
'LBL_OOTB_TRACKER'=> 'Очищать историю последних просмотров первого числа каждого месяца',
'LBL_OOTB_SUGARFEEDS' => 'Очищать ленту событий',
'LBL_OOTB_LUCENE_INDEX' => 'Индексировать неиндексированные документы',
'LBL_OOTB_OPTIMISE_INDEX' => 'Оптимизировать индекс полнотекстового поиска',
'LBL_UPDATE_TRACKER_SESSIONS' => 'Обновлять таблицу tracker_sessions',
'LBL_OOTB_SEND_EMAIL_REMINDERS'	=> 'Отправлять напоминания о мероприятиях по E-mail',
'LBL_OOTB_CLEANUP_QUEUE' => 'Очистить очередь заданий',
'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Удалять неиспользуемые файлы из системы',

// List Labels
'LBL_LIST_JOB_INTERVAL' => 'Периодичность:' ,
'LBL_LIST_LIST_ORDER' => 'Задания:' ,
'LBL_LIST_NAME' => 'Задания:' ,
'LBL_LIST_RANGE' => 'Порядок:' ,
'LBL_LIST_REMOVE' => 'Удаление:' ,
'LBL_LIST_STATUS' => 'Статус:' ,
'LBL_LIST_TITLE' => 'Список заданий' ,
'LBL_LIST_EXECUTE_TIME' => 'Будет запущено в:' ,
// human readable:
'LBL_SUN'=> 'Воскресенье' ,
'LBL_MON'=> 'Понедельник' ,
'LBL_TUE'=> 'Вторник' ,
'LBL_WED'=> 'Среда' ,
'LBL_THU'=> 'Четверг' ,
'LBL_FRI'=> 'Пятница' ,
'LBL_SAT'=> 'Суббота' ,
'LBL_ALL'=> 'Каждый день' ,
'LBL_EVERY_DAY'=> 'Каждый день' ,
'LBL_AT_THE'=> 'В ' ,
'LBL_EVERY'=> 'Каждые ' ,
'LBL_FROM'=> 'с ' ,
'LBL_ON_THE'=> 'Раз в ' ,
'LBL_RANGE'=> ' до ' ,
'LBL_AT' => 'в ' ,
'LBL_IN'=> 'В ' ,
'LBL_AND'=> 'и ' ,
'LBL_MINUTES'=> ' минут(ы) ' ,
'LBL_HOUR'=> ' час.' ,
'LBL_HOUR_SING'=> ' час' ,
'LBL_MONTH'=> ' месяц' ,
'LBL_OFTEN'=> 'Постоянно' ,
'LBL_MIN_MARK'=> ' минуту' ,


// crontabs
'LBL_MINS' => 'минуты' ,
'LBL_HOURS' => 'часы' ,
'LBL_DAY_OF_MONTH' => 'число' ,
'LBL_MONTHS' => 'месяц' ,
'LBL_DAY_OF_WEEK' => 'день недели' ,
'LBL_CRONTAB_EXAMPLES' => 'Значения представлены в стандартной crontab-нотации' ,
'LBL_CRONTAB_SERVER_TIME_PRE' => 'Планировщик выполняет задания с учётом часового пояса, указанного на сервере (',
'LBL_CRONTAB_SERVER_TIME_POST' => '). Укажите соответствующее время выполнения задания.',
// Labels
'LBL_ALWAYS' => 'Всегда' ,
'LBL_CATCH_UP' => 'Выполнить, если пропущено' ,
'LBL_CATCH_UP_WARNING' => 'Снимите флажок, если выполнение задачи может занять продолжительное время.' ,
'LBL_DATE_TIME_END' => 'Дата и время окончания' ,
'LBL_DATE_TIME_START' => 'Дата и время начала' ,
'LBL_INTERVAL' => 'Периодичность' ,
'LBL_JOB' => 'Задание:' ,
'LBL_JOB_URL' => 'URL задачи',
'LBL_LAST_RUN' => 'Последний запуск' ,
'LBL_MODULE_NAME' => 'Задания Suite' ,
'LBL_MODULE_TITLE' => 'Планировщик' ,
'LBL_NAME' => 'Название задания:' ,
'LBL_NEVER' => 'Никогда' ,
'LBL_NEW_FORM_TITLE' => 'Новое задание' ,
'LBL_PERENNIAL' => 'Бессрочно' ,
'LBL_SEARCH_FORM_TITLE' => 'Поиск задания' ,
'LBL_SCHEDULER' => 'задание:' ,
'LBL_STATUS' => 'Статус:' ,
'LBL_TIME_FROM' => 'Задание активно с' ,
'LBL_TIME_TO' => 'Задание активно до' ,
'LBL_WARN_CURL_TITLE' => 'cURL предупреждение:' ,
'LBL_WARN_CURL' => 'Предупреждение:' ,
'LBL_WARN_NO_CURL' => 'Эта система не имеет cURL-библиотеку, доступную/откомпилированную в PHP-модуле (--with-curl=/path/to/curl_library).  Пожалуйста, свяжитесь с Вашим администратором, чтобы решить этот вопрос.  Без cURL-функциональности, планировщик не может выполнить необходимые действия.' ,
'LBL_BASIC_OPTIONS' => 'Основные параметры' ,
'LBL_ADV_OPTIONS'=> 'Дополнительные параметры' ,
'LBL_TOGGLE_ADV' => 'Показать дополнительные параметры' ,
'LBL_TOGGLE_BASIC' => 'Показать основные параметры' ,
// Links
'LNK_LIST_SCHEDULER' => 'Список заданий' ,
'LNK_NEW_SCHEDULER' => 'Создать задание' ,
'LNK_LIST_SCHEDULED' => 'Запланированные задания' ,
// Messages
'SOCK_GREETING' => "\nЭто интерфейс сервиса планировщика. \n[ Доступные команды: start|restart|shutdown|status ]\nДля выхода наберите 'quit'.\n",
'ERR_DELETE_RECORD' => 'Вы должны указать конкретную запись для удаления запланированного задания.' ,
'ERR_CRON_SYNTAX' => 'Неверный Cron-синтакс',
'NTC_DELETE_CONFIRMATION' => 'Вы действительно хотите удалить эту запись?' ,
'NTC_STATUS' => 'Установите статус "Не активна" для удаления этой задачи из списка заданий' ,
'NTC_LIST_ORDER' => 'Установка последовательности, в которой задания появятся в списке' ,
'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Настройка планировщика Windows' ,
'LBL_CRON_INSTRUCTIONS_LINUX' => 'Настройка сrontab' ,
'LBL_CRON_LINUX_DESC' => 'Примечание: Для запуска планировщика Suite добавьте эту строку в файл crontab: ',
'LBL_CRON_WINDOWS_DESC' => 'Примечание: Для запуска планировщика Suite создайте пакетный файл и ежеминутно выполняйте его при помощи планировщика Windows. Пакетный файл должен содержать следующие команды: ',
'LBL_NO_PHP_CLI' => 'Если на вашем хосте не установлен PHP, вы можете использовать wget или curl для выполнения запланированных задач.<br>для wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1</b><br>для curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1',
// Subpanels
'LBL_JOBS_SUBPANEL_TITLE'=> 'Журнал заданий' ,
'LBL_EXECUTE_TIME'=> 'Время выполнения' ,

//jobstrings
'LBL_REFRESHJOBS' => 'Обновить задания',
'LBL_POLLMONITOREDINBOXES' => 'Проверять почтовые ящики для входящей почты',
'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

'LBL_RUNMASSEMAILCAMPAIGN' => 'Запускать ночью массовую рассылку писем',
'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Информировать ночью о неудачной рассылке',
'LBL_PRUNEDATABASE' => 'Очищать БД первого числа каждого месяца',
'LBL_TRIMTRACKER' => 'Очищать таблицы трекера',
'LBL_TRIMSUGARFEEDS'   => 'Очищать ленту событий',
'LBL_SENDEMAILREMINDERS'=> 'Запускать отправку по E-mail напоминания о мероприятиях',
'LBL_CLEANJOBQUEUE' => 'Очищать очередь заданий',
'LBL_REMOVEDOCUMENTSFROMFS' => 'Удалять неиспользуемые файлы из системы',
);

$mod_strings['LBL_POLLMONITOREDINBOXESAOP'] = 'Портал - проверять почтовые ящики для входящей почты';

?>
