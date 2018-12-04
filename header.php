<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Page Title</title>
            <?php wp_head(); ?>
        </head>
    <body>

    <div class="header-container row">
        <div class="header-logo col-8">
            <img src="./wp-content/themes/forest&birdTheme/assets/images/logo.png" alt="Logo Image">
        </div>
        <div class="header-topnav col-4">   
            <div class="d-nav-container">
                <nav class="d-nav">
                    <ul class="d-nav-list">
                        <li class="d-list">
                            <a class="nav-link-d active" href="">Donate</a>
                        </li>
                        <li class="d-list">
                            <a class="nav-link-d" href="">Subscribe</a>
                        </li>
                        <li class="d-list">
                            <a class="nav-link-d" href="">Volunteer</a>
                        </li>
                    <ul>
                </nav>
            </div>
        </div>
    </div>


    <ul class="nav main-nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>

    

    
    
