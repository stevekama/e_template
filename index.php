<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/ico" href="images/logo/favicon.ico" />
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <title>E-Commerce template</title>
</head>
<body>
    <div class="top-nav-bar">
        <div class="search-box">
            <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
            <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
            <img src="images/logo/logo.png" alt="Logo" class="logo"/>
            <input type="text" class="form-control">
            <span class="input-group-text">
                <i class="fa fa-search"></i>
            </span>
        </div>

        <div class="menu-bar">
           <ul>
               <li>
                   <a href="#">
                       <i class="fa fa-shopping-basket"></i>
                       Cart</a>
               </li>
               <li>
                   <a href="#">Register</a>
               </li>
               <li>
                   <a href="#">Login</a>
               </li>
           </ul> 
        </div>
    </div>

    <section class="header">
        <div class="side-menu" id="side-menu">
            <ul>
                <li>
                    On Sale <i class="fa fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-1</li>
                        <li>Sub Menu-1</li>
                        <li>Sub Menu-1</li>
                        <li>Sub Menu-1</li>
                    </ul>
                </li>

                <li>
                    Mobile Phones <i class="fa fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
                        <li>Sub Menu-2</li>
                    </ul>
                </li>

                <li>
                    Computers <i class="fa fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                    </ul>
                </li>

                <li>
                    Accessories <i class="fa fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                    </ul>
                </li>

                <li>
                    Lights <i class="fa fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                    </ul>
                </li>

                <li>
                    Tablets <i class="fa fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                    </ul>
                </li>

                <li>
                    Beauty Products <i class="fa fa-angle-right"></i>
                    <ul>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                        <li>Sub Menu-3</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="slider">
            
        </div>
    </section>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js" integrity="sha512-eUQ9hGdLjBjY3F41CScH3UX+4JDSI9zXeroz7hJ+RteoCaY+GP/LDoM8AO+Pt+DRFw3nXqsjh9Zsts8hnYv8/A==" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function openmenu(){
            document.getElementById('side-menu').style.display = "block";
            document.getElementById('menu-btn').style.display = "none";
            document.getElementById('close-btn').style.display = "block";
        }

        function closemenu()
        {
            document.getElementById('side-menu').style.display = "none";
            document.getElementById('menu-btn').style.display = "block";
            document.getElementById('close-btn').style.display = "none";

        }
    </script>
</body>
</html>