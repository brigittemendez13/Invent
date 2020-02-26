<?php
ini_set('display_errors',1);
ini_set('display_starup_error',1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';
 session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();


password_hash('superSecurePaswd', PASSWORD_DEFAULT);

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;
$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

//$map->get('index', '/CursoPHP/', '../index.php');
//$map->get('index', '/Invent/', ['controller'=> 'App\Controllers\IndexController', 'action'=>'indexAction'] );


//$map->get('begin', '/Invent/begin', ['controller'=> 'App\Controllers\BeginController', 'action'=>'BeginAction', 'auth'=> true] );

$map->get('begin', '/Invent/begin', ['controller'=> 'App\Controllers\BeginController', 'action'=>'BeginAction', 'auth'=> true] );

$map->get('loginForm', '/Invent/login', ['controller'=> 'App\Controllers\AuthController', 'action'=>'getLogin'] );

$map->get('logout', '/Invent/logout', ['controller'=> 'App\Controllers\AuthController', 'action'=>'getLogout'] );

$map->post('auth', '/Invent/auth', ['controller'=> 'App\Controllers\AuthController', 'action'=>'postLogin'] );

$map->get('admin', '/Invent/admin', ['controller'=> 'App\Controllers\AdminController', 'action'=>'getIndex', 'auth'=> true] );

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);

function printElement($job){
    echo '<li class="work-position">';
    echo '<h5>'. $job->title . '</h5>';
    echo '<p>' . $job->description . '</p>';
    //echo '<p>' . $job->getDurationAsString($job->months) . '</p>'; //esto lo hice probando
    //echo '<p>' . $totalmonths. '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  } 

  function printElementp($project){

    echo '<div class="project">';
    echo '            <h5>'.$project->title .'</h5>';
                echo '<div class="row">';
                    echo '<div class="col-3">';
                        echo '<img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">';
                      echo '</div>';
                      echo '<div class="col">';
                        echo '<p>'. $project->description.'</p>';
                        echo '<strong>Technologies used:</strong>';
                        echo '<span class="badge badge-secondary">PHP</span>';
                        echo '<span class="badge badge-secondary">HTML</span>';
                        echo '<span class="badge badge-secondary">CSS</span>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
    } 
if(!$route){
    echo 'No route';
} else {
    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionname = $handlerData['action'];
    $needsAuth =  $handlerData['auth'] ?? false;
    $sessionUserId = $_SESSION['userId'] ?? null;
    if($needsAuth && !$sessionUserId){
      $response = new Laminas\Diactoros\Response\RedirectResponse('/Invent/login');
    }
else{
    $controller = new $controllerName;
   $response = $controller->$actionname($request);
}
    foreach($response->getHeaders() as $name => $values){
        foreach ($values as $value){
            header(sprintf('%s: %s', $name, $value), false);
        }
    }
    http_response_code($response->getStatusCode());
    echo $response->getBody();
}

?>