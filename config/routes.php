<?php
use \NoahBuscher\Macaw\Macaw;
Macaw::get ( 'success', function () {
	echo "success！";
} );
Macaw::get ( 'test', 'App\Controllers\Test@index' );
Macaw::get ( 'jsonData', 'App\Controllers\Index@jsonData' );
Macaw::get ( 'index', 'App\Controllers\Index@index' );
Macaw::get('view/(:num)', 'Controllers\demo@view');

Macaw::error(function() {
	throw new Exception ('404 :: Not Found');
});


Macaw::dispatch ();