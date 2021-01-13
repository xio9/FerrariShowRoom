<?php 

include("actions.php");

include("views/header.php");
if ($_GET['page'] == 'about.php') {
    include("views/about.php");
    }

if ($_GET['page'] == 'main.php') {
include("views/main.php");
}
else if ($_GET['page'] == 'profile.php') {
    include("views/profile.php");
}
else if ($_GET['page'] == 'search.php') {
    include("views/search.php");
}
include("views/footer.php");

?>