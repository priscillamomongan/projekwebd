<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GoodByeEx</title>
    <link rel="stylesheet" href="style.css" />
  </head>


  <!--BAGIAN ATAS HALAMAN INDEX MENU-->
  <body>
    <nav>
      <!--BAGIAN LOGONYA-->
      <div class="innersc">
        <div class="gbex">
          <h4>Good Bye Ex</h4>
        </div>

        <div class="menu">
         <!--MEMBUAT KLIK MENU YANG DAPAT BERPINDAH-->
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#galeri">Gallery</a></li>
            <li><a href="#order">Order</a></li>
            <li><a href="#info">Info</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php echo "<li><p> Welcome " . $_SESSION['username'] . "<p></li>"; ?>
          </ul>

        </div>
        
      </div>
    </nav>

    
      <!--MENAMPILKAN SECTION HOME-->

    <div class="fullsc">
      <header id="home">
        <div class="backgroundhome"></div>
        <div class="tempatgambar">
          <img src="asset/gbe2.jpg">
        </div>
      </header>

      <!--akhir home-->



      <!--About us START-->
      <main>
        <section id="aboutus">
          <div class="innersc">
            <h3>Good Bye Ex</h3>
            <p class="ringkasan">
              Cost is more important than quality
              but quality is the best way to reduce cost
            </p>
            
          </div>

          
        
        <div class="intross1">
           
          <img src="asset/bajucolor3.jpg">
        
        </div>

        <div class="intross2">
           
          <img src="asset/bajuhitam5.jpg">
        
        </div>
        
        </section>
      <!--About us AKHIRt-->
      


      
<!--Gallery Start-->
        <section id="galeri">
          <div class="innersc">
            <h3 style="text-align: center;"> Our Gallery </h3>
          
            <div class="tim1">
              <div>
                <img src="asset/bajuhitam1.jpg" />
                <h6>Illusion Black</h6>
                
              </div>
              <div>
                <img src="asset/bajucolor1.jpg" />
                <h6>Lose Beige</h6>
                
              </div>
              <div>
                <img src="asset/bajuhitam2.jpg" />
                <h6>Cooperative Black</h6>
              </div>
            </div>  
            
              <div class="tim2">
                <div>
                  <img src="asset/bajucolor2.jpg" />
                  <h6>Bad Purple</h6>

                </div>
                <div>
                  <img src="asset/bajuhitam3.jpg" />
                  <h6>Life Black</h6>
                  
                </div>
                <div>
                  <img src="asset/bajucolor3.jpg" />
                  <h6>NotWar Pink</h6>
                </div>
              </div>
              
                <div class="tim3">
                  <div>
                    <img src="asset/bajuhitam4.jpg" />
                    <h6>FoodBlack</h6>
                  </div>
                  <div>
                    <img src="asset/bajucolor4.jpeg" />
                    <h6>Crewneck White</h6>
                  </div>
                  <div>
                    <img src="asset/bajuhitam5.jpg" />
                    <h6>Hear Black</h6>
                  </div>
                </div>
            
          </div>
        </section>
       
  <!-- Gallery Finish -->
       
      
      

   <!-- order section start -->
   <section class="order" id="order">
  <h3 style="text-align: center;"> Order Sekarang </h3>
    
    <form action="pesananberhasil.php">
        <div class="inputBox">
            <div class="input">
                <span>Nama Lengkap</span>
                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="input">
                <span>Nomor Telepon</span>
                <input type="text" name="tlpn" placeholder="Masukkan Nomor Telepon">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Pesanan Kamu</span>
                <input type="text" name="pesanan" placeholder="Masukkan Pesanan Kamu">
            </div>
            <div class="input">
                <span>Tambahan</span>
                <input type="text" name="tlpn" placeholder="Masukkan Tambahan">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Jumlah (Max. 99)</span>
                <label for="quantity"></label>
                <input type="number" id="quantity" name="quantity" min="1" max="99">
            </div>
            <div class="input">
                <span>Hari dan waktu</span>
                <input type="datetime-local" name="datetime">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Alamat Lengkap</span>
                <textarea name="alamat" cols="30" rows="10" placeholder="Masukkan Alamat"></textarea>
            </div>
            <div class="input">
                <span>Catatan</span>
                <textarea name="catatan" cols="30" rows="10" placeholder="Masukkan Pesan Kamu"></textarea>
            </div>
        </div>
        <a href="pesananberhasil.php"><input type="submit" value="Pesan Sekarang" class="btn"></a>
    </form>
</section>

<!-- order section end -->


        

<footer id="info">
  <div class="innersc">
    
  </div>
  <div class="innersc">
    <div class="final">Tugas Ujian Akhir Semester Pemrograman Web 2022</div>
  </div>
</footer>
</div>
<script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
  </body>
</html>