<?php
include("header.html");
?>
    <style>
        .col-md-6{
            text-transform: uppercase;
            font-family: 'Times New Roman', Times, serif;
            color: #fff;
            margin-top: 50px;
        }
        .card{
            border: none;
            min-height: 100vh;
            background: linear-gradient(to right, #068770 0%, #bcc3c2 51%, #046251 100%);
            box-shadow: 0px 15px 37px  black;
            border-radius: 19%;
        }
        h2{
            margin-top: 78px;
        }
        .link{
     color:#fff;
     display:inline-block;
    margin-top: 45px;
     text-transform:uppercase; 
     text-align: center;
}
.link:after {
  display:block;
  content: '';
  border-bottom: solid 2px #5e5e61;  
  transform: scaleX(0);  
  text-align: center;
  transition: transform 250ms ease-in-out;
}
.link:hover{ 
    text-decoration: none;
    outline: 0;
    text-align: center;
    transform: scaleX(1);
    color: #fff;
     
}
.link:hover:after{ 
    text-decoration: none;
    outline: 0;
    transform: scaleX(1);
     text-align: center;
}
    </style>
</head>
<body>
    <div class="section">
        <div class="container">
            <div class="card my-4">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 mx-3">
                        <h2 class="">semester 5</h2>
                        <span><a href="" class="link">bca-351  web designing fundamentals</a></span><br>
                        <span><a href="" class="link mt-2">bca-352  operating system-i</a></span><br>
                        <span><a href="" class="link mt-2">bca-353  artificial intelligence</a></span><br>
                        <span><a href="" class="link mt-2">bca-354  computer networks</a></span><br>
                        <span><a href="" class="link mt-2">bca-355  programming using visual basic</a></span><br>
                        <span><a href="" class="link mt-2">bca-356  multimedia tools</a></span><br>
                       
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
<?php
include("footer.html");
?>