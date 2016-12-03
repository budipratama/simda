<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/*
|--------------------------------------------------------------------------
| Defined table
|--------------------------------------------------------------------------
|
| 
|
*/
define('TBL_CONFIG_REK_1',							'Ms_Rek_1');
define('TBL_CONFIG_REK_2',							'Ms_Rek_2');
define('TBL_CONFIG_REK_3',							'Ms_Rek_3');
define('TBL_CONFIG_REK_4',							'Ms_Rek_4');
define('TBL_CONFIG_REK_5',							'Ms_Rek_5');
define('TBL_KOROLARI',								'Ms_Korolari');

define('TBL_AKUN',									'akun');
define('TBL_KELOMPOK',								'kelompok');
define('TBL_JENIS',									'jenis');
define('TBL_OBYEK',									'obyek');
define('TBL_RINCIAN',								'rincian');
define('NOTIF_SUCCESS_INPUT','Data telah di masukan ke dalam sistem kami');
define('NOTIF_UNIQUE_INPUT','Data yang anda masukan telah ada pada sistem kami');
define('PESAN_FIELD_KOSONG','Data yang di inputkan tidak boleh kosong');


/* End of file constants.php */
/* Location: ./application/config/constants.php */