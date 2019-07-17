<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Front';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//test counter sound
$route['countersound'] = "CounterSound/index";

$route['login'] = "login/index";
$route['check'] = "login/login_check";
$route['logout'] = "login/logout";
$route['dashboard'] = "home/index";
$route['userboard'] = "user/index";
$route['batal/(:any)'] = 'user/batalAntri/$1';

//Auth Admin
$route['admin'] = 'home/authAdmin';
$route['newAd'] = 'home/newAdmin';
$route['edAd/(:any)'] = 'home/editAdmin/$1';
$route['delAd/(:any)'] = 'home/deleteAdmin/$1';
//Counter
$route['counter'] = 'home/masterTable';
$route['newTable'] = 'home/newTable';
$route['editTablei/(:any)'] = 'home/editTable/$1';
$route['deleteTable/(:any)'] = 'home/deleteTable/$1';
//Male User
$route['male'] = 'home/masterMale';
$route['newMale'] = 'home/newMale';
$route['edMale/(:any)'] = 'home/editMale/$1';
$route['delMale/(:any)'] = 'home/deleteMale/$1';
//Partner
$route['partner'] = 'home/masterPartner';
$route['newPartner'] = 'home/newPartner';
$route['edPartner/(:any)'] = 'home/editPartner/$1';
$route['delPartner/(:any)'] = 'home/deletePartner/$1';









//Auth User
$route['user'] = 'home/authUser';
$route['newUs'] = 'home/newUser';
$route['edUs/(:any)'] = 'home/editUser/$1';
$route['delUs/(:any)'] = 'home/deleteUser/$1';
//Supplier
$route['motor'] = 'home/masterMotor';
$route['newMotor'] = 'home/newMotor';
$route['edMotor/(:any)'] = 'home/editMotor/$1';
$route['delMotor/(:any)'] = 'home/deleteMotor/$1';
//Jasa
$route['category'] = 'home/masterCategory';
$route['newCat'] = 'home/newCategory';
$route['edCat/(:any)'] = 'home/editCategory/$1';
$route['delCat/(:any)'] = 'home/deleteCategory/$1';
//Brand

//Rusak
$route['rusak'] = 'home/masterRusak';
$route['newRu'] = 'home/newRusak';
$route['edRu/(:any)'] = 'home/editRusak/$1';
$route['delRu/(:any)'] = 'home/deleteRusak/$1';
//Jenis
$route['jenis'] = 'home/masterJenis';
$route['newJe'] = 'home/newJenis';
$route['edJe/(:any)'] = 'home/editJenis/$1';
$route['delJe/(:any)'] = 'home/deleteJenis/$1';
//Mekanik
$route['mekanik'] = 'home/masterMekanik';
$route['newMekanik'] = 'home/newMekanik';
$route['editMekanik/(:any)'] = 'home/editMekanik/$1';
$route['deleteMekanik/(:any)'] = 'home/deleteMekanik/$1';
//Oli


//CatPart
$route['catpart'] = 'home/masterCatPart';
$route['newCatPart'] = 'home/newCatPart';
$route['edCatPart/(:any)'] = 'home/editCatPart/$1';
$route['delCatPart/(:any)'] = 'home/deleteCatPart/$1';
//Type
$route['type'] = 'home/masterType';
$route['newType'] = 'home/newType';
$route['edType/(:any)'] = 'home/editType/$1';
$route['delType/(:any)'] = 'home/deleteType/$1';
//Order Spare Part
$route['order'] = 'home/orderpart';
$route['orderDone/(:any)'] = 'home/orderDone/$1';

