<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "dashboard/Dashboard_controller";

$route['login'] = "landing/Login_controller";
$route['logout'] = "dashboard/Dashboard_controller/logout";

$route['dashboard'] = "dashboard/Dashboard_controller";
$route['profile'] = "dashboard/Dashboard_controller/profile";
$route['notifications'] = "dashboard/Dashboard_controller/notif";
$route['promotions'] = "dashboard/Dashboard_controller/promotions";
$route['local-services'] = "dashboard/Dashboard_controller/local";

$route['facilities'] = "facilities/Facilities_controller";
$route['events'] = "events/Events_controller";
$route['services'] = "services/Services_controller";
$route['analytics'] = "analytics/Analytics_controller";
$route['payments'] = "payments/Payments_controller";

$route['promos-local'] = "promolocal/Promolocal_controller";
$route['promos-local/update'] = "promolocal/Promolocal_controller/update_entry";

$route['about'] = "about/About_controller";
$route['contact'] = "contact/Contact_controller";

$route['404_override'] = '';




/* End of file routes.php */
/* Location: ./application/config/routes.php */