<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('index', 'Home::index');
$routes->get('courses','Home::courses');
$routes->get('teacher', 'Home::teacher');
$routes->get('gallery', 'Home::gallery');
$routes->get('admissionform', 'Home::admissionform');
$routes->get('payment', 'Home::payment');
$routes->get('blog', 'Home::blog');
$routes->get('aboutsc', 'Home::aboutsc');
$routes->get('aboutc', 'Home::aboutc');
$routes->get('aboutsb', 'Home::aboutsb');
$routes->get('aboutedir', 'Home::aboutedir');
$routes->get('aboutcexam', 'Home::aboutcexam');
$routes->get('aboutcashier', 'Home::aboutcashier');
$routes->get('aboutgm', 'Home::aboutgm');
$routes->get('peoplesays', 'Home::peoplesays');
$routes->get('contact', 'Home::contact');
$routes->get('admissionform_print/(:num)','AdmissionController::admissionform_print/$1');

$routes->post('insert','PaymentController::insert');
$routes->post('insert_admission', 'AdmissionController::insert_admission');
$routes->get('admin/admitstudent','AdmissionController::admitstudent');
$routes->get('admin/admitstudent_delete/(:num)','AdmissionController::admitstudent_delete/$1');
$routes->get('/admitstudentview/(:num)', 'AdmissionController::admitstudent_view/$1');
$routes->get('admissionformprint', 'AdmissionController::admissionformprint');


$routes->get('admin/login','AdminController::login');
$routes->get('admin/dashbord', 'AdminController::dashbord');
$routes->get('admin/payment','AdminController::payment');
$routes->get('admin/paymentadd', 'AdminController::paymentadd');
$routes->post('admin/insert_pay','AdminController::payment');
$routes->get('admin/notice','AdminController::notice');
$routes->get('admin/noticeadd', 'AdminController::noticeadd');
$routes->post('admin/noticeInsert', 'AdminController::noticeInsert');
$routes->get('admin/notice_delete/(:num)','AdminController::notice_delete/$1');

$routes->get('admin/course','AdminController::course');
$routes->get('admin/courseadd', 'AdminController::courseadd');
$routes->post('course_insert', 'AdminController::course_insert');
$routes->get('admin/course_delete/(:num)', 'AdminController::course_delete/$1');

$routes->get('admin/idcard','AdminController::idcard');
$routes->get('admin/idcardadd', 'AdminController::idcardadd');

$routes->get('admin/tidcard', 'AdminController::tidcard');
$routes->get('admin/tidcardadd', 'AdminController::tidcardadd');
$routes->post('tidcardInsert', 'TeacherController::tidcardInsert');
$routes->get('tidcardprint/(:num)', 'TeacherController::tidcardprint/$1');

$routes->post('idcardInsert', 'IDCardController::idcardInsert');
$routes->get('admin/idcardprint/(:num)', 'IDCardController::idcardprint/$1');
$routes->get('admin/idcard_delete/(:num)', 'IDCardController::idcard_delete/$1');
$routes->get('/idcardedit/(:num)', 'IDCardController::idcardedit/$1');
$routes->post('admin/update/(:num)', 'IDCardController::update/$1');


$routes->get('admin/teacher', 'TeacherController::teacher');
$routes->get('admin/teacheradd', 'TeacherController::teacheradd');
$routes->post('teacherInsert', 'TeacherController::teacherInsert');
$routes->get('admin/teacher_delete/(:num)', 'TeacherController::teacher_delete/$1');
$routes->get('admin/tidcard_delete/(:num)', 'TeacherController::tidcard_delete/$1');

$routes->get('admin/gallery','GalleryController::index');
$routes->get('admin/galleryadd', 'GalleryController::galleryadd');
$routes->post('admin/galleryInsert', 'GalleryController::galleryInsert');
$routes->get('admin/gallery_delete/(:num)', 'GalleryController::gallery_delete/$1');

//$routes->get('admin/index','LoginController::index');
 $routes->post('admin/login', 'LoginController::index');
 $routes->get('admin/logout','LoginController::logout');


 $routes->get('admin/admissionfee','PaymentController::admissionfee');
 $routes->get('admin/admissionfee_delete/(:num)','PaymentController::admissionfee_delete/$1');

// For Admit
$routes->get('admin/admitcard','AdmitController::admitcard');
$routes->get('admin/admitcardadd', 'AdmitController::admitcardadd');
$routes->get('/admitcard_edit/(:num)', 'AdmitController::admitcard_edit/$1');
$routes->get('admin/admitcard_delete/(:num)', 'AdmitController::admitcard_delete/$1');
$routes->post('admitInsert', 'AdmitController::admitInsert');
$routes->post('admin/admitupdate/(:num)', 'AdmitController::admitupdate/$1');
$routes->get('admin/admitprint/(:num)','AdmitController::admitprint/$1');

$routes->get('admin/registration','RegistrationController::registration');
$routes->get('admin/registrationadd', 'RegistrationController::registrationadd');
$routes->post('registrationInsert', 'RegistrationController::registrationInsert');
$routes->get('registrationedit/(:num)','RegistrationController::registrationedit/$1');
$routes->get('admin/regprint/(:num)', 'RegistrationController::regprint/$1');
$routes->get('admin/reg_delete/(:num)', 'RegistrationController::reg_delete/$1');
$routes->post('admin/registrationUpdate/(:num)', 'RegistrationController::registrationUpdate/$1');

$routes->get('admin/attendence','AttendenceController::attendence');
$routes->get('admin/five', 'AttendenceController::five');
$routes->post('atnfiveinsert','AttendenceController::atnfiveinsert');
// $routes->get('admin/tidcard_list','TeacherController::tidcard_list');


//For science attendence
$routes->get('admin/atn_scienceadd','AttendenceController::atn_scienceadd');
$routes->post('atn_scienceinsert','AttendenceController::atn_scienceinsert');
$routes->get('admin/atn_sciencelist','AttendenceController::atn_sciencelist');
$routes->get('atn_scienceviewdate/(:num)','AttendenceController::atn_scienceviewdate/$1');
$routes->post('atn_scienceupdate','AttendenceController::atn_scienceupdate');
$routes->get('admin/atn_sciencedelete/(:num)','AttendenceController::atn_sciencedelete/$1');
$routes->get('atn_scienceprint/(:num)','AttendenceController::atn_scienceprint/$1');

// For Arts Attendance
$routes->get('admin/atn_artsadd','AttendenceController::atn_artsadd');
$routes->post('atn_artsinsert','AttendenceController::atn_artsinsert');
$routes->get('admin/atn_artslist','AttendenceController::atn_artslist');
$routes->get('atn_artsviewdate/(:num)','AttendenceController::atn_artsviewdate/$1');
$routes->post('atn_artsupdate','AttendenceController::atn_artsupdate');
$routes->get('admin/atn_artsdelete/(:num)','AttendenceController::atn_artsdelete/$1');
$routes->get('singlestudentatn/(:num)','AttendenceController::singlestudentatn/$1');
$routes->get('atn_artsprint/(:num)','AttendenceController::atn_artsprint/$1');

//science payment route
$routes->get('admin/science_paymentadd','SSCPaymentController::science_paymentadd');
$routes->get('admin/science_paymentlist','SSCPaymentController::science_paymentlist');
$routes->post('insertscience_payment','SSCPaymentController::insertscience_payment');
$routes->get('sciencepay_view/(:num)','SSCPaymentController::sciencepay_view/$1');
$routes->get('admin/sciencepay_delete/(:num)','SSCPaymentController::sciencepay_delete/$1');
$routes->get('admin/sciencepay_print/(:num)','SSCPaymentController::sciencepay_print/$1');
//$routes->get('sciencepay_edit/(:num)','SSCPaymentController::sciencepay_edit/$1');
//$routes->post('sciencepay_update/(:num)','SSCPaymentController::sciencepay_update/$1');
$routes->get('/editcheak/(:num)','SSCPaymentController::editcheak/$1');
$routes->post('admin/updatecheak/(:num)','SSCPaymentController::updatecheak/$1');

//payment route
$routes->get('admin/science_paymentadd','SSCPaymentController::science_paymentadd');
$routes->get('admin/science_paymentlist','SSCPaymentController::science_paymentlist');
$routes->post('insertscience_payment','SSCPaymentController::insertscience_payment');
$routes->get('admin/payment/sciencepay_view/(:num)','SSCPaymentController::sciencepay_view/$1');
$routes->get('admin/sciencepay_delete/(:num)','SSCPaymentController::sciencepay_delete/$1');
$routes->get('admin/sciencepay_print/(:num)','SSCPaymentController::sciencepay_print/$1');
$routes->get('/sciencepay_edit/(:num)','SSCPaymentController::sciencepay_edit/$1');
$routes->post('admin/sciencepay_update/(:num)','SSCPaymentController::sciencepay_print/$1');


$routes->get('admin/feerecipt', 'AdminController::feerecipt');
$routes->post('reciptInsert','ReciptController::reciptInsert');
$routes->get('admin/feereciptlist', 'ReciptController::feereciptlist');

$routes->get('admin/reciptprint/(:num)','ReciptController::reciptprint/$1');
$routes->get('admin/recipt_delete/(:num)','ReciptController::recipt_delete/$1');

// For Student Registration
$routes->get('admin/studentreg','LoginController::studentreg');
$routes->post('userInsert','LoginController::userInsert');
$routes->get('admin/studentreglist','LoginController::studentreglist');
$routes->get('admin/stinfo_delete/(:num)','LoginController::stinfo_delete/$1');
$routes->get('stinfo_edit/(:num)','LoginController::stinfo_edit/$1');
$routes->post('userUpdate/(:num)','LoginController::userUpdate/$1');
$routes->get('studentprofile_view/(:num)','LoginController::studentprofile_view/$1');
$routes->get('profileupdate','LoginController::profileupdate');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}