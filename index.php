<?php $request_uri = explode('?',$_SERVER['REQUEST_URI'],2);
$host = 'http://localhost:3000';
switch($request_uri[0]){
    case '/':
        $title = "Home";
        include 'parts/header.php';
        include 'parts/views/home.php';
    break;
    case '/About':
        $title = "About";
        include 'parts/header.php';
        include 'parts/views/about.php';
    break;
    case '/Work':
        $title = "Work";
        include 'parts/header.php';
        include 'parts/views/work.php';
    break;
    default:
        header('HTTP/1.0 404 Not Found');
        $path = $host . $request_uri[0];
        $title = "404 Not found"; 
        include 'parts/header.php'; 
        include 'parts/views/404.php';
    break;  
}
?>

<?php include 'parts/footer.php';?>
