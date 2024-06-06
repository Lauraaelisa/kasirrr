<?php
require 'tambah.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <div class="wrap">
            <header>	
                <h1>Main Menu</h1>
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
        <center><h1> Form Register </h1> </center>  
        <form action="tambah.php" method="POST">
        <label> User Name : </label><br>
        <input type ="text" name="Username" required><br>
        <label>Password :</label><br>
        <input type="password" id="password" name="password" required><br>
        <label>E-mail :</label><br>
        <input type="text" name="email" id="email" required><br>
        <label for="role">Role :</label>
        <select name="role" id="role" required>
        <option value="Admin">Admin</option>
        <option value="User">User</option>  
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