<?php
    header("Content-type: text/css");

?>
.menu-btn {
    position: absolute;
    z-index: 3;
    right: 35px;
    top: 35px;
    cursor: pointer;
    transition: all 0.5s ease-out; }
    .menu-btn .btn-line {
      width: 28px;
      height: 3px;
      margin: 0 0 5px 0;
      background: #fff;
      transition: all 0.5s ease-out; }
    .menu-btn.close {
      transform: rotate(180deg); }
      .menu-btn.close .btn-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px); }
      .menu-btn.close .btn-line:nth-child(2) {
        opacity: 0; }
      .menu-btn.close .btn-line:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px); }
  
  .menu {
    position: fixed;
    top: 0;
    width: 100%;
    opacity: 0.9;
    visibility: hidden; }
    .menu.show {
      visibility: visible; }
    .menu-branding, .menu-nav {
      display: flex;
      flex-flow: column wrap;
      align-items: center;
      justify-content: center;
      float: left;
      width: 50%;
      height: 100vh;
      overflow: hidden; }
    .menu-nav {
      margin: 0;
      padding: 0;
      background: #373737;
      list-style: none;
      transform: translate3d(0, -100%, 0);
      transition: all 0.5s ease-out; }
      .menu-nav.show {
        transform: translate3d(0, 0, 0); }
    .menu-branding {
      background: #444;
      transform: translate3d(0, 100%, 0);
      transition: all 0.5s ease-out; }
      .menu-branding.show {
        transform: translate3d(0, 0, 0); }
      .menu-branding .portrait {
        width: 250px;
        height: 250px;
        background: url("../img/portrait.jpg");
        border-radius: 50%;
        border: solid 3px #eece1a; }
    .menu .nav-item {
      transform: translate3d(600px, 0, 0);
      transition: all 0.5s ease-out; }
      .menu .nav-item.show {
        transform: translate3d(0, 0, 0); }
      .menu .nav-item.current > a {
        color: #eece1a; }
    .menu .nav-link {
      display: inline-block;
      position: relative;
      font-size: 30px;
      text-transform: uppercase;
      padding: 1rem 0;
      font-weight: 300;
      color: #fff;
      text-decoration: none;
      transition: all 0.5s ease-out; }
      .menu .nav-link:hover {
        color: #eece1a; }
  
  .nav-item:nth-child(1) {
    transition-delay: 0.1s; }
  
  .nav-item:nth-child(2) {
    transition-delay: 0.2s; }
  
  .nav-item:nth-child(3) {
    transition-delay: 0.3s; }
  
  .nav-item:nth-child(4) {
    transition-delay: 0.4s; }
  
  * {
    box-sizing: border-box; }
  
  body {
    background: #444;
    color: #fff;
    height: 100%;
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.5; }
    body#bg-img {
      background: url(../img/background.jpg);
      background-attachment: fixed;
      background-size: cover; }
      body#bg-img:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background: rgba(68, 68, 68, 0.9); }
  
  h1,
  h2,
  h3 {
    margin: 0;
    font-weight: 400; }
    h1.lg-heading,
    h2.lg-heading,
    h3.lg-heading {
      font-size: 6rem; 
      
    }
    #login-home.lg-heading {
      font-size: 6rem; 
      
    }
    #login-home input, #login-home label {
      font-size: 2rem;
      
      
    }

    form{
      
      margin: 0px auto;
      display:grid;
      grid-gap: 30px;
    
      grid-template-areas: "inputEmail email" "inputPassword password" "submit submit ";
      grid-template-columns: repeat(2, 1fr); 
      

    }
    #email{
      grid-area: email;
      justify-self:start;
     
    }
    #inputEmail{
      grid-area: inputEmail;
      justify-self:stretch;
      
    }
    #password{
      grid-area: password;
    }
    #inputPassword{
      grid-area: inputPassword;
    }
    #email{
      grid-inputPassword: inputPassword;
    }
    #submit{
      grid-area: submit;
    }

  
     ::-webkit-input-placeholder {
        /* WebKit browsers */
         color: transparent;
    }
    
     ::-moz-placeholder {
        /* Mozilla Firefox 19+ */
         color: transparent;
    }
     :-ms-input-placeholder {
        /* Internet Explorer 10+ */
         color: transparent;
    }
     input::placeholder {
         color: transparent;
    }
    

    @media screen and (max-width: 770px) {
    form{
      grid-template-areas: "email" "password" "submit ";
      grid-template-columns: 1fr; 
    }
    form label{
      display:none;
    }
      ::-webkit-input-placeholder {
        /* WebKit browsers */
         color: silver;
    }
    
     ::-moz-placeholder {
        /* Mozilla Firefox 19+ */
         color: silver;
    }
     :-ms-input-placeholder {
        /* Internet Explorer 10+ */
         color: silver;
    }
     input::placeholder {
         color: silver;
    }


    }

    td, th{
      padding:20px 10px;
    }
    #edit table{
     
      margin: 0px auto;
      border:1px #fff solid;
      width:50%;
    }
    
    
    tr:nth-child(odd){
    background-color: #ffffff;
    color:#000000; 
}



#edit table tr:nth-child(even) td:last-child {
    background-color:#9c5757;
}
#edit table tr:nth-child(odd) td:last-child a{
  background-color: #ffffff;
  color:#000000; 
}

tr:nth-child(even){
    background-color: #9c5757;
}
#education-grid > div{
  background-color: #9c5757;
  color:#ffffff; 
}
#education-grid{
  display:grid;
  grid-template-areas: 'country' 'city' 'school' 'degree' 'grade';
  grid-template-columns: repeat(auto-fill, min-max(250px,1fr));
  grid-gap:10px;
  text-align:left;
}
.country{
  grid-area: country;
  
}
.city{
  grid-area: city;
}
.school{
  grid-area: school;
}
.degree{
  grid-area: degree;
}
.grade{
  grid-area: grade;
}


#info-grid{
  display:grid;
  grid-template-areas: 'nationality' 'age' 'bornplace' 'relationship';
  grid-template-columns: repeat(auto-fill, min-max(250px,1fr));
  grid-gap:10px;
  text-align:left;
}
.nationality{
  grid-area: nationality;
  
}
.age{
  grid-area: age;
}
.bornplace{
  grid-area: bornplace;
}
.relationship{
  grid-area: relationship;
}

#info-grid > div{
  background-color: #ffffff;
  color:#9c5757; 

}
#edit table a:nth{

}


tr{
    font-weight: bold;
}
    #contact form input[type=submit], #about form input[type=submit], #work form input[type=submit] {
      width:50%;
      height:5vh;
      font-size:20px;
      font-weight:bold;
      color:#fff;
      background-color: #444444;
      border: 1px #fff solid;

    }

    h1.sm-heading,
    h2.sm-heading,
    h3.sm-heading {
      margin-bottom: 2rem;
      padding: 0.2rem 1rem;
      background: rgba(73, 73, 73, 0.5); }
  
  a {
    color: #fff;
    text-decoration: none; }
  
  header {
    position: fixed;
    z-index: 2;
    width: 100%; }
  
  .text-secondary {
    color: #eece1a; }
  
  main {
    padding: 4rem;
    min-height: calc(100vh - 60px); }
    main .icons {
      margin-top: 1rem; }
      main .icons a {
        padding: 0.4rem; }
        main .icons a:hover {
          color: #eece1a;
          transition: all 0.5s ease-out; }
    main#home {
      overflow: hidden; }
      main#home h1 {
        margin-top: 20vh; }
  
  .about-info {
    display: grid;
    grid-gap: 30px;
    grid-template-areas: 'bioimage bio bio' 'job1 job2 job3';
    grid-template-columns: repeat(3, 1fr); }
    .about-info .bio-image {
      grid-area: bioimage;
      margin: auto;
      border-radius: 50%;
      border: #eece1a 3px solid; }
    .about-info .bio {
      grid-area: bio;
      font-size: 1.5rem; }
    .about-info .job-1 {
      grid-area: job1; }
    .about-info .job-2 {
      grid-area: job2; }
    .about-info .job-3 {
      grid-area: job3; }
    .about-info .job {
      background: #515151;
      padding: 0.5rem;
      }

      progress {
        width:100%; 
      }
    
  
  .projects {
    display: grid;
    grid-gap: 0.7rem;
    grid-template-columns: repeat(3, 1fr); }
    .projects img {
      width: 100%;
      border: 3px #fff solid; }
      .projects img:hover {
        opacity: 0.5;
        border-color: #eece1a;
        transition: all 0.5s ease-out; }
  
  .boxes {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: center;
    margin-top: 1rem; }
    .boxes div {
      font-size: 2rem;
      border: 3px #fff solid;
      padding: 1.5rem 2.5rem;
      margin-bottom: 3rem;
      transition: all 0.5s ease-out; }
      .boxes div:hover {
        padding: 0.5rem 1.5rem;
        background: #eece1a;
        color: #000; }
        .boxes div:hover span {
          color: #000; }
  
  .btn, .btn-dark, .btn-light {
    display: block;
    padding: 0.5rem 1rem;
    border: 0;
    margin-bottom: 0.3rem; }
    .btn:hover, .btn-dark:hover, .btn-light:hover {
      background: #eece1a;
      color: #000; }
  
  .btn-dark {
    background: black;
    color: #fff; }
  
  .btn-light {
    background: #c4c4c4;
    color: #333; }
  
  #main-footer {
    text-align: center;
    padding: 1rem;
    background: #2b2b2b;
    color: #fff;
    height: 60px; }
  
  @media screen and (min-width: 1171px) {
    .projects {
      grid-template-columns: repeat(4, 1fr); } }
  
  @media screen and (min-width: 769px) and (max-width: 1170px) {
    .projects {
      grid-template-columns: repeat(3, 1fr); } }
  
  @media screen and (max-width: 768px) {
    main {
      align-items: center;
      text-align: center; }
      main .lg-heading {
        line-height: 1;
        margin-bottom: 1rem; }
    ul.menu-nav,
    div.menu-branding {
      float: none;
      width: 100%;
      min-height: 0; }
      ul.menu-nav.show,
      div.menu-branding.show {
        transform: translate3d(0, 0, 0); }
    .menu-nav {
      height: 75vh;
      transform: translate3d(-100%, 0, 0);
      font-size: 24px; }
    .menu-branding {
      height: 25vh;
      transform: translate3d(100%, 0, 0); }
      .menu-branding .portrait {
        background: url("../img/portrait_small.jpg");
         width: 150px;
        height: 150px; }
    .about-info {
      grid-template-areas: 'bioimage' 'bio' 'job1' 'job2' 'job3';
      grid-template-columns: 1fr; }
    .projects {
      grid-template-columns: repeat(2, 1fr); } }
  
  @media screen and (max-width: 500px) {
    main {
      padding: 2rem; }
      main #home h1 {
        margin-top: 10vh; }
      main .lg-heading {
        margin-top: 1rem;
        font-size: 5rem; }
    .projects {
      grid-template-columns: 1fr; } }