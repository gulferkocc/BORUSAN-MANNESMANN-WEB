<?php
    include '../ayarlar/db.php';
?>
    
    <!DOCTYPE html>

    <html xmlns="http://www.w3.org/1999/xhtml">

    <head runat="server">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Yolu Borusundan Geçenlerin Hikayesi</title>

        <style>
            body {
                background-color: #f1f3f5;
                text-align: center;
                font-family: Arial;
            }

            #soropak {
                background: rgba(255, 255, 255, 0.2);
                padding: 30px 20px;
                border-radius: 5px;
                margin-bottom: 50px;
                height: 550px;
            }

            #formgroup {
                width: 700px;
                float: left;
                height: 500px;
                text-align: left;
            }

            #solform {
                width: 50%;
                float: left;
                /*   padding-right:5px;*/
            }

            #sagform {
                width: 45%;
                float: right;
                /*padding-left:5px;*/
            }

            #sagform input,
            #konu {
                width: 100%;
                padding: 10px;
                font-size: 15px;
                line-height: 1.5;
                color: #495057;
                background-color: white;
                margin: 10px;
                border-radius: 5px;
                border: 1px solid #ced4da;
            }

            #konu {
                margin-top: 0;
                /* E-posta ve çalıştığınız tarih ile aynı hizada başlasın */
                width: 336px;
                height: 55px;
            }

            .form-control {
                width: 100%;
                padding: 10px;
                font-size: 15px;
                line-height: 1.5;
                color: #495057;
                background-color: white;
                margin: 10px;
                border-radius: 5px;
                border: 1px solid #ced4da;
            }

            input[type="submit"] {
                cursor: pointer;
                background-color: #445c6e;
                font-size: 18px;
                letter-spacing: 1px;
                padding: 10px 30px;
                color: white;
                border: 2px solid white;
                border-radius: 5px;
                margin-left: 10px;
                margin-top: 10px;
            }

            h4 {
                font-size: 25px;

            }

            #copyright {
                font-size: 20px;
                letter-spacing: 2px;
                margin-bottom: 15px;
            }

            #konu {
                font-size: 20px;
            }
        </style>

    </head>

    <body>

        <section id="bize-sor">
            <div class="container">
                <h2 id="h2bizesor">Yolu Borusundan Geçenlerin Hikayesi</h2>
                <h5> Sizinde Borusanda Çalışma Geçmişiniz Varsa Ekleyebilirsiniz..<br />
                    Borusan Mannesmann</h5>
                <form method="post" action="">
                    <div id="soropak">
                        <div id="formgroup">
                            <div id="solform">
                                <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control" />
                                <input type="date" name="tarih" id="tarih" placeholder="Çalıştığınız Tarih" class="form-control" />
                            </div>
                            <div id="sagform">
                                <input type="email" name="email" placeholder="Email Adresiniz" required
                                    class="form-control" />
                                <label for="konu"></label>
                                <!-- <input type="text" name="konu" placeholder="Konu Başlığı" required
                                    class="form-control" />-->

                                <select id="konu" name="konusecim">
                                    <option value="konu" disabled selected>Konu Başlığı</option>
                                    <option value="Stajdaki Anılarım">Stajdaki Anılarım</option>
                                    <option value="Uzun Dönem Stajındaki Anılarım">Uzun Dönem Stajındaki Anılarım </option>
                                    <option value="Çalışma Hayatındaki Anılarım">Çalışma Hayatındaki Anılarım</option>

                                </select>
                            </div>

                            <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required
                                class="form-control"></textarea>


                            <?php
                                if(isset($_POST['send'])){
                                    $isim = $_POST['isim'];
                                    $tarih = $_POST['tarih'];
                                    $email = $_POST['email'];
                                    $konusecim = $_POST['konusecim'];
                                    $mesaj = $_POST['mesaj'];

                                    if($isim != "" && $tarih != "" && $email != "" && $konusecim != "" && $mesaj != ""){
                                        $sql = "INSERT INTO hikaye (ad_soyad, email, tarih, konu_basligi, mesaj) VALUES ('$isim', '$email', '$tarih', '$konusecim', '$mesaj')";

                                        if ($conn->query($sql) === TRUE) {
                                            echo '<p style="margin:0; margin-left:12px;">Mesajınız eklenmiştir.</p><br/>';
                                        } else {
                                            echo "Hata oluştu: " . $conn->error;
                                        }

                                        $conn->close();
                                    }else{
                                        echo '<p style="margin:0; margin-left:12px;">Lütfen Formu Eksiksiz Doldurun!</p><br/>';
                                    }

                                }
                            ?>
                            <input type="submit" name="send" value="Gönder" />
                        </div>

                    </div>
                    <br />
                </form>
                <footer>
                    <div id="copyright"> 2023 | Tüm Hakları Saklıdır</div>


                </footer>

            </div>
        </section>

    </body>

    </html>