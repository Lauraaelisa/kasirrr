<?php
require 'datatambah.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="barang.css">
    </head>
    <body>
        <div class="wrap">
            <header>	
                <h1>Tambah Data</h1>
                <nav class="navbar">
                    <div class="toggle-menu" id="toggle-menu"></div>
                <li><a href="#" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Register</a></li>
                <li><a href="#" class="nav-link">Tambah Barang</a></li>
            </ul>
            </nav>
                
                <div class="menu">
            </header>
           
        <div class="container">
        <center><h1> Tambah Data Barang </h1> </center>  
        <form action="datatambah.php" method="POST">
        <label> Nama Produk : </label><br>
        <input type ="text" name="namabarang" required><br>
        <label>Jumlah Produk :</label><br>
        <input type="text"  name="jumlah" required><br>
        <label>Sub Total :</label><br>
        <input type="text" name="subtotal"  required><br>
        </select><br>  

        <center> <button type="submit" name="submit" class="btn submit">Submit</button></center> 
        <center><p class="register"><a href="stokbarang.php">Creat Acount!!</a></p></center>

        </form></h1>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div id="footer">
                    Copyright laura@.com
                </div>
       
	</div>
    </body>
    </html>