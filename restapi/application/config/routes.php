<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['API'] = 'Rest_server';

// User API Routes
$route['mahasiswa']['get'] = 'api/Mahasiswa/GetMahasiswa';
$route['mahasiswa']['post'] = 'api/Mahasiswa/InsertMahasiswa';
$route['mahasiswa']['put'] = 'api/Mahasiswa/UpdateMahasiswa';
$route['mahasiswa']['delete'] = 'api/Mahasiswa/DeleteMahasiswa';
$route['matakuliah']['get'] = 'api/Matakuliah/GetMatakuliah';
$route['matakuliah']['post'] = 'api/Matakuliah/InsertMatakuliah';
$route['matakuliah']['put'] = 'api/Matakuliah/UpdateMatakuliah';
$route['matakuliah']['delete'] = 'api/Matakuliah/DeleteMatakuliah';
$route['penilaian']['get'] = 'api/penilaian/Getpenilaian';
$route['penilaian']['post'] = 'api/penilaian/Insertpenilaian';
$route['penilaian']['put'] = 'api/penilaian/Updatepenilaian';
$route['penilaian']['delete'] = 'api/penilaian/Deletepenilaian';
$route['tahunakademik']['get'] = 'api/Tahunakademik/GetTahunakademik';
$route['tahunakademik']['post'] = 'api/Tahunakademik/InsertTahunakademik';
$route['tahunakademik']['put'] = 'api/Tahunakademik/UpdateTahunakademik';
$route['tahunakademik']['delete'] = 'api/Tahunakademik/DeleteTahunakademik';
$route['kompentensi']['get'] = 'api/Kompentensi/GetKompentensi';
$route['kompentensi']['post'] = 'api/Kompentensi/InsertKompentensi';
$route['kompentensi']['put'] = 'api/Kompentensi/UpdateKompentensi';
$route['kompentensi']['delete'] = 'api/Kompentensi/DeleteKompentensi';
$route['detailpenilaian']['get'] = 'api/detailpenilaian/GetDetailpenilaian';
$route['detailpenilaian']['post'] = 'api/detailpenilaian/InsertDetailpenilaian';
$route['detailpenilaian']['put'] = 'api/detailpenilaian/UpdateDetailpenilaian';
$route['detailpenilaian']['delete'] = 'api/detailpenilaian/DeleteDetailpenilaian';

