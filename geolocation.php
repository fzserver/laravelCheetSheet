<? 
     # Command for geo location
     # 1. composer require torann/geoip
     # 2. php artisan vendor:publish --provider="Torann\GeoIP\GeoIPServiceProvider" --tag=config
     # 3. Add this line in app.php in provider section  : Torann\GeoIP\GeoIPServiceProvider::class,
     # 3. Add this line in app.php in  provider alias : 'GeoIP' => Torann\GeoIP\Facades\GeoIP::class,
     # 4. Update CACHE_DRIVER=array in .env file 

?>;