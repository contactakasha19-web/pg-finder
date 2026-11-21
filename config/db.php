<?php
// Local XAMPP defaults, with environment variables for hosted deployments.
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_PORT', getenv('DB_PORT') ?: '3306');
define('DB_NAME', getenv('DB_NAME') ?: 'pg_finder');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DEMO_MODE', getenv('VERCEL') !== false && getenv('DB_HOST') === false);

function demo_properties(): array {
    return [
        ['id'=>1,'name'=>'Sunrise Boys PG','city'=>'Delhi','area'=>'Mukherjee Nagar','price'=>7500,'gender'=>'male','rating'=>4.3,'description'=>'Walking distance from coaching hubs and the Vidyarthi Nagar market. Double and triple sharing rooms with a quiet study hall open until midnight.','image'=>'https://picsum.photos/seed/pg1/800/600','interested'=>false],
        ['id'=>2,'name'=>'Lotus Girls Residency','city'=>'Delhi','area'=>'Laxmi Nagar','price'=>9000,'gender'=>'female','rating'=>4.6,'description'=>'Gated residence with a female warden, biometric entry and home-style meals. Ten minutes from the metro.','image'=>'https://picsum.photos/seed/pg2/800/600','interested'=>false],
        ['id'=>3,'name'=>'Campus Edge Stay','city'=>'Delhi','area'=>'Kamla Nagar','price'=>11000,'gender'=>'unisex','rating'=>4.1,'description'=>'Separate floors for men and women, shared rooftop lounge, and fast fibre internet.','image'=>'https://picsum.photos/seed/pg3/800/600','interested'=>false],
        ['id'=>4,'name'=>'Green Valley PG','city'=>'Pune','area'=>'Kothrud','price'=>8000,'gender'=>'male','rating'=>4.2,'description'=>'Airy rooms near MIT and Cummins College. Includes a tiffin service and covered bike parking.','image'=>'https://picsum.photos/seed/pg4/800/600','interested'=>false],
        ['id'=>5,'name'=>"Orchid Women's Hostel",'city'=>'Pune','area'=>'Viman Nagar','price'=>10500,'gender'=>'female','rating'=>4.7,'description'=>'Premium rooms with attached bathrooms, daily housekeeping and 24x7 security.','image'=>'https://picsum.photos/seed/pg5/800/600','interested'=>false],
        ['id'=>6,'name'=>'Techie Nest','city'=>'Pune','area'=>'Hinjewadi','price'=>12000,'gender'=>'unisex','rating'=>4.0,'description'=>'Built for interns and professionals, with shuttle access to the IT park and a co-working corner.','image'=>'https://picsum.photos/seed/pg6/800/600','interested'=>false],
        ['id'=>7,'name'=>"Scholar's Den",'city'=>'Bengaluru','area'=>'Koramangala','price'=>13500,'gender'=>'male','rating'=>4.4,'description'=>'Modern rooms with ergonomic study desks, filtered water and a games lounge.','image'=>'https://picsum.photos/seed/pg7/800/600','interested'=>false],
        ['id'=>8,'name'=>'Jasmine Court','city'=>'Bengaluru','area'=>'HSR Layout','price'=>14000,'gender'=>'female','rating'=>4.8,'description'=>'Bright rooms, meals and a landscaped courtyard with 24x7 CCTV.','image'=>'https://picsum.photos/seed/pg8/800/600','interested'=>false],
        ['id'=>9,'name'=>'Metro Link Hostel','city'=>'Bengaluru','area'=>'Indiranagar','price'=>9500,'gender'=>'unisex','rating'=>3.9,'description'=>'Budget-friendly shared rooms two minutes from the Indiranagar metro station.','image'=>'https://picsum.photos/seed/pg9/800/600','interested'=>false],
        ['id'=>10,'name'=>'Marine View PG','city'=>'Mumbai','area'=>'Andheri West','price'=>15000,'gender'=>'male','rating'=>4.2,'description'=>'Compact rooms close to the suburban railway and Versova metro.','image'=>'https://picsum.photos/seed/pg10/800/600','interested'=>false],
        ['id'=>11,'name'=>'Blossom Ladies PG','city'=>'Mumbai','area'=>'Powai','price'=>16500,'gender'=>'female','rating'=>4.5,'description'=>'Lake-facing rooms near IIT Bombay with laundry service and a reading nook.','image'=>'https://picsum.photos/seed/pg11/800/600','interested'=>false],
        ['id'=>12,'name'=>'Harbour Homes','city'=>'Mumbai','area'=>'Dadar','price'=>13000,'gender'=>'unisex','rating'=>4.0,'description'=>'Centrally located with easy access to both railway lines.','image'=>'https://picsum.photos/seed/pg12/800/600','interested'=>false],
    ];
}

function db(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        $dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=utf8mb4';
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
    }
    return $pdo;
}
