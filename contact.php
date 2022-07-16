<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=PT+Sans:wght@400;700&family=Roboto+Mono:wght@200;400;700&family=VT323&display=swap" rel="stylesheet">  -->
    <title>ContactUs</title>
</head>
<body>
   <!-- navbar -->
   <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation" >
            <div class="navbar-brand">
                <a class="navbar-item " href="index.html#home">
                        <img src="img/OffGridLogo.svg" alt="OffGrid logo" class="is-64x64">
                </a>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expandable="false" data-target="navMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-menu" id="navMenu">
                <div class="navbar-end">
                    <a class="navbar-item" href="index.html#home">Home</a>
                    <a class="navbar-item" href="index.html#games">Games</a>
                    <a class="navbar-item" href="index.html#about">About</a>
                    <a class="navbar-item" href="contact.php">Contact Us</a>
                </div>
            </div>
    </nav>

    <!-- hero body & form -->
    <section class="container">
        <div class="hero is-fullheight"> 
            <div class="hero-body has-text-centered centered">  
   
                    <div class="card">
                        <div class="media-content">
                            <p class="title is-2 red">Contact Us</p>
                        </div>
                        <div class="media">
                           
                            <form action="POST" class="px-3" >
                                <div class="field">
                                    <label for="email" class="label  ">Email</label>
                                    <div class="control">
                                        <input type="email" name="email" id="email" class="input red" placeholder="Your Email Here">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="name" class="label">Your Name</label>
                                    <div class="control">
                                        <input type="text" name="name" id="name">
                                    </div>
                                </div>

                                <div class="field">
                                    <label for="subject" class="label">Subject</label>
                                    <div class="control">
                                        <input type="text" name="subject" id="subject">
                                    </div>
                                </div>
                                
                                <div class="field">
                                    <label for="text" class="label" >Message</label>
                                    <div class="control">
                                        <textarea name="text" id="text" cols="30" rows="10" placeholder="Your Message Here"></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="button myBtn is-medium" value="Send">
                            </form>
                        </div>
                    </div>
               
                
                        
                   
               
            </div>
        </div>
    </section>


     <!-- footer -->
    <footer class="footer">
        <div class="content has-text-centered">
            <p>Brought to you with <span class="icon"><img  src="img/heartIcon.png" alt=""></span>  </p>
            <p>All Rights reserved.2022.</p> 
            <div class="icon is-128x128 ">
                <img src="img/OffGridLogo.svg" alt="OffGrid logo" >
            </div>
               
        </div>
    </footer>

    <?php
       
    
    ?>
</body>
</html>