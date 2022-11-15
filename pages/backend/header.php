<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MondolOZ :: A personal Blog of Oleraj Hossin!!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/css/responsive.css">
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a href="action.php?pages=home" class="navbar-brand"><img src="assests/images/logo.png" alt="Logo"><p class="pos">Android HUB</p></a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fa-solid fa-bars fa-xl text-muted"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="action.php?pages=home" class="nav-link">Home</a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="others" role="button" data-bs-toggle="dropdown">
                                Software
                                <span class="ps-1 fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="others">
                                <li><a href="#" class="dropdown-item style">General Apps</a></li>
                                <li><a href="#" class="dropdown-item style">Multimedia Apps</a></li>
                                <li><a href="#" class="dropdown-item style">Photo/Video Editing</a></li>
                                <li><a href="#" class="dropdown-item style">Educational App</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" id="others" role="button" data-bs-toggle="dropdown">
                                Games  
                                <span class="ps-1 fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="others">
                                <li><a href="#" class="dropdown-item style">Action Game</a></li>
                                <li><a href="#" class="dropdown-item style">Adventure Game</a></li>
                                <li><a href="#" class="dropdown-item style">Puzzle Game</a></li>
                                <li><a href="#" class="dropdown-item style">Arcade Game</a></li>
                                <li><a href="#" class="dropdown-item style">Adult Game</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#blogpost" class="nav-link">Suggestion</a></li>
                        <li class="nav-item"><a href="#aboutme" class="nav-link">Contact Us</a></li>
                        <li class="nav-item"><a href="action.php?pages=admin" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Logout</a></li>
                    </ul>
                </div> 
            </div>
        </nav>
    </header>