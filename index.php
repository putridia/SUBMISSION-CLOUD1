<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="assets/css/style.css"/>
        <link rel="stylesheet" href="assets/css/responsive.css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />        
        <title>Personal Portofolio | Putri Dia Lestari</title>
    </head>
    <body>
        <!-- Header -->
        <header class="header">
            <div class="navbar-nav">
                <div class="logo">
                    <a href="/">pdl.</a>
                </div>

                <nav>
                    <ul>
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#about">ABOUT ME</a></li>
                        <li><a href="#services">SERVICES</a></li>
                        <li><a href="#portofolio">PORTOFOLIO</a></li>
                    </ul>
                </nav>

                <div class="burger">
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                        <div class="line-3"></div>
                    </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Main -->
        <main>
            <!-- HOME -->
            <div class="main-container">
                <article id="home">
                    <div class="hero">
                        <div class="navbar">
                            <div class="hero-left">
                                <h3 class="pre-title">My name is</h3>
                                <h1 class="hero-name">Putri <span>Dia Lestari</span></h1>
                                <h4 class="hero-si">Cloud Computing Learning Path.</h4>
                                <h4 class="hero-ac">- Bangkit Academy 2023.</h4>
                                <p>
                                    This is my portofolio website to showes all. 
                                    <br>You can see details and work experience here.
                                </p>

                                <div class="hero-sci">
                                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                                    <a href="#"><i class='bx bxl-github'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="hero-right">
                            <img src="assets/images/profil.png" alt="profil">
                        </div>
                    </div>
                </article>
            </div>
            <!-- END HOME --> 

            <!-- ABOUT ME -->  
            <aside id="about">
                <div class="about">
                    <img src="assets/images/me.png" alt="Foto Profil">
                </div>

                <div class="data">
                    <h3 data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">About <span>Me</span></h3>
                    <p data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    I am an active student at the East Java Veteran 
                    National Development University, Information Systems 
                    study program, taking part in the Independent Study 
                    Program at Bangkit Academy 2023 in the field of 
                    Cloud Computing Learning Path. I have a strong 
                    interest in UI/UX design, Web Development. I have 
                    developed my skills and knowledge in attractive and 
                    functional user interface design. I have experience 
                    working in a team, good communication, and good 
                    problem solving skills. I am excited to continue 
                    learning and growing in the technology industry 
                    involving application design and development.
                    </p>
                    <button class="btn" target="_blank" data-aos="flip-left">MORE</button>
                </div>
            </aside>
            <!-- END ABOUT ME -->   

            <!-- Services -->
            <article id="services">
                <div class="services main-container">
                    <h1 class="section-title services-title" data-aos="zoom-out-down">Specialized In</h1>
            
                    <div class="grid-2" >
                        <div class="service" data-aos="flip-left">
                            <div class="service-icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                            >
                                <path
                                d="M16.896 10l-4.896-8-4.896 8-7.104-4 3 11v5h18v-5l3-11-7.104 4zm-11.896 10v-2h14v2h-14zm14.2-4h-14.4l-1.612-5.909 4.615 2.598 4.197-6.857 4.197 6.857 4.615-2.598-1.612 5.909z"
                                />
                            </svg>
                            </div>
                            <h4>UI/UX Design</h4>
                            <p>
                                The harmonious combination of visually appealing UI design and well-designed UX design                                    
                                as a whole helps to create digital products that not only have an attractive appearance, 
                                but are very easy to meet user needs.
                            </p>
                            <button class="btn">Read More</button>
                        </div>
            
                        <div class="service" data-aos="flip-right">
                            <div class="service-icon">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                >
                                  <path
                                    d="M3 20c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm9 2c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm0-16c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm9 20c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-2c-1.656 0-3 1.343-3 3s1.344 3 3 3 3-1.343 3-3-1.344-3-3-3zm-1.577-1.721l-6.423-5.028v-3.352c-.323.066-.658.101-1 .101s-.677-.035-1-.101v3.352l-6.424 5.028c.695.233 1.323.602 1.844 1.093l5.58-4.372 5.579 4.373c.522-.492 1.15-.861 1.844-1.094z"
                                  />
                                </svg>
                            </div>
                            <h4>Web Development</h4>
                            <p>
                                The process of creating, developing, and maintaining a website or web application. 
                                It involves various stages and activities aimed at creating interactive displays and 
                                functions accessible via the internet.
                            </p>
                                <button class="btn">Read More</button>
                        </div>
                    </div>
                </div>
            </article>
            <!-- End Services -->
        
            <!-- Portofolio -->
            <article id="portofolio">
                <div class="portofolios main-container">
                    <h1 class="section-title" data-aos="fade-down">My Portfolio Featured</span></h1>
        
                    <div class="grid-2">
                    <!-- Portfolio 1 -->
                    <div class="portofolio" data-aos="fade-up-right">
                        <div class="portofolio-cover">
                        <img
                            src="assets/images/portfolios/portofolio1.png"
                            alt="Portfolio 1"
                        />
                        </div>
                        <div class="portofolio-info">
                        <div class="portofolio-title">
                            <h1>CoffeeVibes Project</h1>
                            <a href="/" class="portofolio-link">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                            >
                                <path
                                d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                                />
                            </svg>
                            </a>
                        </div>
                        <div class="portofolio-tags" >
                            <button class="btn">PHP</button>
                            <button class="btn">Bootstrap</button>
                        </div>
                        <p>
                            This CoffeeVibes Project is the final project in a website 
                            programming course, in this project creating an online ordering 
                            website at the CoffeeVibes cafe.
                        </p>
                        </div>
                    </div>
        
                    <!-- Portfolio 2 -->
                    <div class="portofolio" data-aos="fade-up-left">
                        <div class="portofolio-cover">
                        <img
                            src="assets/images/portfolios/portofolio2.png"
                            alt="Portfolio 2"
                        />
                        </div>
                        <div class="portofolio-info">
                        <div class="portofolio-title">
                            <h1>UI/UX Project</h1>
                            <a href="/" class="portofolio-link">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                            >
                                <path
                                d="M6 17c2.269-9.881 11-11.667 11-11.667v-3.333l7 6.637-7 6.696v-3.333s-6.17-.171-11 5zm12 .145v2.855h-16v-12h6.598c.768-.787 1.561-1.449 2.339-2h-10.937v16h20v-6.769l-2 1.914z"
                                />
                            </svg>
                            </a>
                        </div>
                        <div class="portofolio-tags">
                            <button class="btn">Prototype</button>
                            <button class="btn">Contentful</button>
                        </div>
                        <p>
                            The UI/UX project creates a business idea and is developed 
                            into a prototype-based application entitled "W-Top Marketplace".
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
            </article>
            <!-- End Portfolios -->

        </main>
        <!-- End Main -->

        <!-- Footer -->
        <footer>
            <p><b>&#169; 2023 - Made by Putri Dia Lestari</b></p>
        </footer>
        <!-- End Footer -->

        <script src="js/main.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>