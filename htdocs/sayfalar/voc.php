<?php
    include '../ayarlar/db.php';
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>VOC</title>

    <style>
    body {
        background-color: navajowhite;
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
        width: 50%;
        float: right;
        /*padding-left:5px;*/
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

    #adres {
        width: 450px;
        float: right;
        padding: 30px;
        height: 500px;
        text-align: left;
    }

    h4 {
        font-size: 25px;

    }

    .adresp {

        font-size: 15px;
        letter-spacing: 1.5px;

    }

    #copyright {
        font-size: 20px;
        letter-spacing: 2px;
        margin-bottom: 15px;
    }
    </style>

</head>

<body>
    <section id="bize-sor">
        <div class="container">
            <h2 id="h2bizesor">Voice of Customers</h2>
            <h5> Sorularınızı, Görüş ve Önerilerinizi Bize Bildirebilirsiniz<br />
                Fikirleriniz Bizim İçin Değerli<br />
                Borusan Mannesmann</h5>
            <form method="post">
                <div id="soropak">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control" />
                            <input type="text" name="tel" placeholder="Telefon Numarası" class="form-control" />
                        </div>
                        <div id="sagform">
                            <input type="email" name="email" placeholder="Email Adresiniz" required
                                class="form-control" />
                            <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control" />
                        </div>

                        <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required
                            class="form-control"></textarea>

                        <?php
                            if(isset($_POST['send'])){
                                $isim = $_POST['isim'];
                                $tel = $_POST['tel'];
                                $email = $_POST['email'];
                                $konu = $_POST['konu'];
                                $mesaj = $_POST['mesaj'];

                                if($isim != "" && $tel != "" && $email != "" && $konu != "" && $mesaj != ""){
                                    $sql = "INSERT INTO voc (ad_soyad, tel, email, konu, mesaj) VALUES ('$isim', '$tel', '$email', '$konu', '$mesaj')";

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

                    <div id="adres">
                        <h4>Adres: </h4>
                        <p class="adresp"> Borusan Mannesmann Boru Sanayi A.Ş.</p>
                        <p class="adresp">Ata Mah. Sanayi Cad. </p>
                        <p class="adresp">No: 54/68 16601 Gemlik/Bursa</p>
                        <p class="adresp">Telefon:
                            +90 (224) 270 15 00 </p>
                        <p class="adresp"> Fax:
                            +90 (224) 519 00 14</p>
                        <p class="adresp">Web: <a href=" https://www.borusanmannesmann.com/">
                                https://www.borusanmannesmann.com/ </a></p>


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