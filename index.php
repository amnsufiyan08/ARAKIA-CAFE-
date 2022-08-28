
<html>
    <head></title>
    </head>
    <style>
        * {
            box-sizing: content-box;
            margin: 0;
        }
        .header {
            background-color: #FA8072;
            overflow: hidden;
        }
        .header img {
            width: 25%;
            margin: 20px;
            float: left;
            max-width: 200px;
        }
        .header .font {
            font-size: 10mm;
            margin: 0;
            width: 65%;
            margin-top: 30px;
            float: left;
        }
        .menu ul {
            list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
            background-color: rgb(205, 92, 92);
        }
        .menu li {
            float: left;
            padding: 20px;
        }
        .menu li:hover {
            background-color: cornsilk;
        }
        .menu a {
            text-decoration: none;
            display: block;
            color: cornsilk;
        }
        .menu a:hover {
            color: black;
            font-weight: bold;
        }
        .content {
            margin-top: 20px;
            background-color: cornsilk;
        }
        .content h1 {
            margin: 10px;
            text-align: center;
        }
        .content form {
            
            margin: 10px;
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: center;

        }
        .content table {
            border: solid 3px;
            margin: auto;
            width: 50%;
            padding: 10px;
        }
        .content td, th {
            border: solid 1px;
            text-align: center;
        }
        .kaki {
            text-align: center;
            border: solid black;
            background-color: burlywood;
            color: black;
            overflow: hidden;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
    <body>

      
        <!--HEADER-->
        <div class="header">
            <img src="imagescafe.png">
            <div class="font">
                <br>
           <center> <font>ARAKIA CAFE PREMIUM</font></center>
             <br>





        </div>
        </div>
        <!--MENU-->
        <div class="menu">
            <ul>
                
                <li><a href="index.html">MENU</a></li>
                <li><a href="list.html">CONTACT  US </a></li>
                <li><a href="login.html">ABOUT CAFE</a></li>

            </ul>
        </div>

        <!--CONTENT-->
        <div class="content">
            <h1>Index</h1>
            <form action="">
                <input type="text" width="100px">
                <input type="button" value="Search">
                <input type="reset" value="Reset">
            </form>

            <table width="70%">
                <tr>
                    <th>Bil.</th>
                    <th>Nama</th>
                    <th>Jantina</th>
                    <th>Jabatan</th>
                    <th>Gaji</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Muhammad Abu</td>
                    <td>Lelaki</td>
                    <td>Perniagaan</td>
                    <td>RM1500</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Muhammad Ali</td>
                    <td>Lelaki</td>
                    <td>Komputer</td>
                    <td>RM1701</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nurul Timah</td>
                    <td>Perempuan</td>
                    <td>Perniagaan</td>
                    <td>RM2002</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Siti Semah</td>
                    <td>Perempuan</td>
                    <td>Perniagaan</td>
                    <td>RM1500</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Nur Zila</td>
                    <td>Perempuan</td>
                    <td>Komputer</td>
                    <td>RM1701</td>
                </tr>
            </table>
        </div>

        <!--FOOTER-->    
        <div class="kaki">
            <font>Copyright &copy; 2KPD1 2022</font>
        </div>
    </body>
</html>
