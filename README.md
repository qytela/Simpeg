# Sistem Informasi Kepegawaian
Management Data Pegawai, seperti Absensi, Biodata, Gaji dan Menambahkan Pegawai Baru.

# Version
Simpeg using Framework Codeigniter 3.x and PHP Version 5.x or Higher.

# Settings
- Setup your database in folder /application/config/database.php :
```php
<?php
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'YOUR_DATABASE_USERNAME',
	'password' => 'YOUR_DATABASE_PASSWORD',
	'database' => 'YOUR_DATABASE_NAME',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```

- After setup, import database `karyawan.sql`

# Login
- Admin Login:
```
NIK: 332
Password: ganteng
```

# License
MIT License.
