<?php
include "pages/frontend/header.php";
if(isset($_GET['pages'])){
    if($_GET['pages']=='home'){
        include "pages/show.php";
        include "pages/frontend/home.php";
    }
    if($_GET['pages']=='admin'){
        include "pages/backend/header.php";
        include "pages/backend/admin.php";
    }
    if($_GET['pages']=='register'){
        include "pages/frontend/register.php";
    }
    if($_GET['pages']=='login'){
        include "pages/frontend/login.php";
    }
}
include "pages/frontend/footer.php";
