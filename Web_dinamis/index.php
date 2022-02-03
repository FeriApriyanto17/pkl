<html>
    <head>
        <title>membuat halaman web dinamis</title>
        <!-- menghubungkan denganfile css -->
        <link rel="stylesheet" type="tect/css" href="style.css">
        <!-- menghubungkan dengan file jquery-->
        <script type="text/javascript" src=jquery.js"></script>
</head>
<body>
    <div class="content">
        <header>
            <h1 class="judul">SMKN 1 CIKEDUNG</h1>
            <h3> membuat halaman web dinamis</h3>
</header>
<div class="menu">
    <ul>
        <li<a herf="index.php?page=beranda">BERANDA</a></li>
        <li><a herf="index.php?page=tentang">TENTANG</a></li>
</ul>
</div>
<div class="badan">

<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];


switch ($page){
    case 'beranda':
        include "halaman/beranda.php";
        break;
        case 'tentang':
            include "halaman/tentang.php";
            break;
            default:
            echo "<center><h3>Maaf. Halaman tidak di temukan!</h3></center>";
            break;
        }
    }else{
        include "halaman/beranda.php";
    }
        ?>

body{
        background-color:#f9f9f9;
        font-size:16px
        color:#444;
        font-family: sans-serif;
    }
     .content{
         width:80%;
         margin: 10px auto;
     }
     /*header*/
     header{
         background-color:white;
         padding: 20px 10px;
         border-radius: 50px;
         border: 1px solid f0f0f0;
         margin-bottom: 10px;
     }
     header h1.judul,
     header h3.deskripsi{
         text-align: center;
     }
     /*menu navigasi*/
     .menu{
         background-color: #87CEFA;
         border: 1px solid #f0f0f0;
         border-radius: 8px;
         margin-bottom: 10px;
     }
     div.menu ul {
         list-style:none;
         overflow: hidden;
     }

     div.menu ul li {
         float:left;
         text-transform:uppercase;
     }

     div.menu ul li a {
         display:block;
         padding:0 20px;
         text-decoration:none;
         color:#2c2c2c;
         font-family: sans-serif;
         font-size:13px;
         font-weight:400;
         transition:all 0.3s ease-in-out;
     }

     div.badan{
         background-color:white;
         border-radius: 5px;
         border: 1px solid #f0f0f0;
         margin-bottom: 10px;
     }
     div.halaman{
         texy-align: center;
         padding: 30px 20px
     }
        </div>
    </div>
    </body>
    </html>

    