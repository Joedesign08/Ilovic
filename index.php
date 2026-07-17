<?php
    $pageURL=parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
    switch ($pageURL) {
        case '/home':
        case '/':
            include __DIR__.'/pages/home.php';
            break;

        case '/categories':
            include __DIR__.'/pages/categories.php';
            break;

        case '/products':
            Include __DIR__.'/pages/products.php';
            break;  
            
        case '/about':
            Include __DIR__.'/pages/about.php';
            break;
            
        case '/about':
            Include __DIR__.'/pages/about.php';
            break;
        
        default:
            # code...
            break;
    }
?>