
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title> Borusan Mannesmann</title>
    <link href="css/StyleSheet1.css" rel="stylesheet" />
    <style>
        #cnm{
            position:absolute;
            z-index:1;
            margin-left:165px;
            margin-top:-90px;
          width:100px;
           display: none;
            } .news-li:hover #cnm{
             display:block;
         }
         #canm{
            position:absolute;
            z-index:1;
            margin-left:166px;
             margin-top:-85px;
          width:100px;
           display: none;
        }
           .news2-li:hover #canm{
             display:block;
         }



            #kyn{
            position:absolute;
            z-index:1;
            margin-left:165px;
            margin-top:-90px;
          width:100px;
           display: none;
            } .news3-li:hover #kyn{
             display:block;
         }
         #kayn{
            position:absolute;
            z-index:1;
            margin-left:166px;
             margin-top:-85px;
          width:100px;
           display: none;
        }
           .news4-li:hover #kayn{
             display:block;
         }


        ul {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    list-style: none;
}

    ul#main li {
        float: left;
        position: relative;
        width: 100%;
        max-width:166px;
    }

        ul#main li ul {
            display: none;
            position: absolute;
            left: 0;
            top: 40px;
        }

    ul li a {
        display: block;
        width: 166px;
        height: 50px;
        line-height: 25px;
        background-color: orangered;
        text-align: center;
        color: aliceblue;
        text-decoration: none;
    }

        ul li a:hover {
            background-color: coral;
        }

    ul#main li:hover ul {
        display: block;
    }
    .sosyalm{
        float:right;
        line-height:80px;color:gray;
    }
    .sosyalm a:link{
        text-decoration:none;
        margin-right:25px;
        
    }
    .ikon{
        color:dimgrey;
    }
    @media screen and (max-width: 768px) {
  /* Küçük ekranlar için stil kuralları */
}

    </style>
</head>
<body>
    <header class="header">
    
        <br />
         <br />
        
        <br />     
 <div class="sosyalm">
      <a href="https://www.facebook.com/BorusanMannesmann" target="_blank"><i class="fa-brands fa-facebook ikon"></i></a>
      <a href="https://twitter.com/bmb_borusan"target="_blank"><i class="fa-brands fa-twitter ikon"></i></a>
      <a href="https://www.linkedin.com/company/borusanmannesmann/"target="_blank"><i class="fa-brands fa-linkedin ikon"></i></a>
      <a href="https://www.instagram.com/borusanmannesmann/"target="_blank"><i class="fa-brands fa-instagram ikon" ></i></a>
      <a href="https://api.whatsapp.com/send/?phone=905493935800&text&type=phone_number&app_absent=0"target="_blank"><i class="fa-brands fa-whatsapp ikon"></i></a>
      </div>
                    

        <div>
            <img src="../img/indir.png" class="amb" width="35" height="35" />
            <h1>Borusan Mannesmann</h1>
   </div>
     
        <div class="main">
            <ul id="main">
                <li>
                   
                    <a href="#"> Borusan Mannesmann</a>
                    <ul>
                        <li> <a href="sayfalar/tarihce.php">Borunun Tarihçesi</a> </li>
                        <li> <a href="sayfalar/hakkinda.php "> Hakkında </a> </li>
                        <li> <a href="sayfalar/misyon-vizyon.php"> Misyon Vizyon Değer</a> </li>
                        <li> <a href="sayfalar/kilometreTas.php">Kilometre Taşları</a> </li>
                        <li> <a href="sayfalar/kurucu.php ">Kurucumuz</a> </li>
                        <li> <a href="sayfalar/uretim.php">Üretim Gücü</a> </li>
                        <li> <a href="sayfalar/turuncu-etik.php">Turuncu Etik</a> </li>
                        <li> <a href="sayfalar/kurumsal-sorumluluk.php">Kurumsal Sorumluluk</a> </li>

                        <li> <a href="https://borusanturuncu.com/borusan-esittir/"> Borusan Eşittir</a> </li>
                        <li> <a href="sayfalar/kadinlarinGüclenmesi.php">Kadınların Güçlenmesi</a> </li>
                        <li> <a href="sayfalar/bKocabiyik.php">Borusan Kocabıyık Vakfı</a> </li>
                        <li> <a href="sayfalar/efesv.php"> Efes Vakfı</a> </li>
                        <li> <a href="sayfalar/okyonus.php"> Okyonus Gönüllü Borusanlılar Platformu</a> </li>
                        <li> <a href="sayfalar/bcagdas.php"> Borusan Çağdaş</a> </li>
                        <li> <a href="sayfalar/sanat.php">Borusan Sanat</a> </li>
                    </ul>
                </li>

                <li>
                    <a href="#">Yatırımcı İlişkilerimiz </a>
                    <ul>
                        <li class="news3-li"> <a href="#">Kurumsal Yönetim</a> 
                            <div id="kyn">
                            <ul>
                        <li> <a href="sayfalar/ortaklikyapi.php">Ortaklık Yapısı</a> </li>
                        <li> <a href="sayfalar/kar-dagitim.php">Kar Dağıtım Politikası</a> </li>
                        <li> <a href="sayfalar/bagis.php">Bağış Politikası</a> </li>
                        <li> <a href="sayfalar/kyonetim-ilke.php">Kurumsal Yönetim İlkeleri Uyum Raporu</a> </li>
                        <li> <a href="sayfalar/sirket-ana-sozlesme.php">Şirket Ana Sözleşmesi</a> </li>
                        <li> <a href="sayfalar/ticaretSicil.php">Ticaret Sicil Bilgileri</a> </li>
                        <li> <a href="sayfalar/genel-kurul.php">Genel Kurul</a> </li>
                        <li> <a href="sayfalar/gkurul-calisma.php">Genel Kurulun Çalışma Usul ve Esasları Hakkında İç Yönerge</a> </li>
                        <li> <a href="sayfalar/formlar.php">Formlar</a> </li>
                        <li> <a href="sayfalar/birlesmeler.php">Birleşmeler</a> </li></ul></div></li>

                        <li class="news4-li"> <a href="#">Raporlar</a>
                             <div id="kayn">
                                 <ul>
                        <li> <a href="sayfalar/faaliyetr.php">Faaliyet Raporları</a> </li>
                        <li> <a href="sayfalar/denetimr.php">Denetim Rporları</a> </li>
                        <li> <a href="sayfalar/sunumlar.php">Sunumlar</a> </li></ul></div> </li>

                        <li> <a href="sayfalar/özel-durum-açiklamalari.php">Özel Durum Açıklamaları</a> </li>
                        <li> <a href="sayfalar/bilgilendirme.php"> Bilgilendirme Politikası</a> </li>
                        <li> <a href="sayfalar/ücretlendirme.php">Ücretlendirme</a> </li>
                        <li> <a href="sayfalar/iletisim.php"> İletişim</a> </li>

                    </ul>
                </li>

                <li>
                    <a href="#"> Grup Şirketlerimiz</a>
                    <ul>
                         <li> <a href="sayfalar/borusanholding.php">Borusan Holding</a> </li>
                        <li class="news-li"> <a href="#">Çelik Grubu</a> 
                         <div id="cnm">   
                             <ul>
                        <li> <a href="sayfalar/borusan-mannesmann.php">Borusan Mannesmann</a> </li>
                        <li> <a href="sayfalar/bmboru-yatirim.php">Borusan Mannesmann Boru Yatırım Holding</a> </li>
                        <li> <a href="sayfalar/borcelik.php">Borçelik</a> </li>
                        <li> <a href="sayfalar/istikbalt.php">İstikbal Ticaret</a> </li>

                             </ul></div></li>
                        <li> <a href="sayfalar/enerjig.php">Enerji Grubu</a> </li>
                        <li class="news2-li"> <a href="#">Distribütörlük Grubu</a>
                            <div id="canm">                       <ul>

                        <li> <a href="sayfalar/botomotiv.php">Borusan Otomotiv Grubu</a> </li>
                        <li> <a href="sayfalar/parcapazari.php">ParçaPazarı.com</a> </li>
                        <li> <a href="sayfalar/borusankedi.php">Borusan Kedisi</a> </li>
                        <li> <a href="sayfalar/barac-ihale.php">Borusan Araç İhalesi</a> </li>
                        <li> <a href="sayfalar/supsan.php">Supsan</a> </li></ul></div> </li>

                        <li> <a href="sayfalar/lojistikg.php">Lojistik Grubu</a> </li>
                    </ul>
                </li>

                <li>
                    <a href="#">Ürünler</a>
                    <ul>
                        <li> <a href="sayfalar/ürünk.php">Ürün Kataloğu</a> </li>
                        <li> <a href="https://outlet.borusanmannesmann.com/"> İhracat Fazlası Ürün Satışı</a> </li>
                       
                        <li> <a href="sayfalar/enerji.php">Enerji</a> </li>
                        <li> <a href="sayfalar/su.php">Su</a> </li>
                        <li> <a href="sayfalar/konst.php">Konstrüksiyon</a> </li>
                        <li> <a href="sayfalar/otomotiv-endüstriyel-uyg.php">Otomotiv ve Endüstriyel Uyg.</a> </li>
                    </ul>
                </li>

                <li>
                    <a href="#">Sürdürülebilirlik</a>
                    <ul>
                        <li> <a href="sayfalar/calisan.php">Çalışanlarımız İçin</a> </li>
                        <li> <a href="sayfalar/müsteri.php"> Müşterilerimiz İçin</a> </li>
                        <li> <a href="sayfalar/toplum.php">Toplumumuz İçin</a> </li>
                        <li> <a href="sayfalar/dünya.php">Dünyamız İçin</a> </li>
                        <li> <a href="sayfalar/tedarikci.php">Tedarikçilerimiz İçin</a> </li>

                    </ul>
                </li>

                <li>
                    <a href="#">Kariyer  </a>
                    <ul>
                        <li> <a href="sayfalar/borusanlı-olmak.php">Borusanlı Olmak</a> </li>
                        <li> <a href="sayfalar/is-firsat.php"> İş Fırsatları</a> </li>
                        <li> <a href="sayfalar/ise-alim-sürec.php">İşe Alım Süreci</a> </li>
                        <li> <a href="sayfalar/bakademi.php">Borusan Akademi</a> </li>
                        <li> <a href="sayfalar/alpha.php">Alpha Programları</a> </li>
                        <li> <a href="https://borusanturuncu.com/">Blog</a> </li>

                        <li> <a href="sayfalar/hikaye.php">Yolu Borusandan Geçenlerin Hikayesi</a> </li>

                    </ul>
                </li>

                <li>
                    <a href="#">Bize Ulaşın  </a>
                    <ul>
                        <li> <a href="sayfalar/ofis.php">Ofislerimiz</a> </li>
                        <li> <a href="sayfalar/tesis.php">Tesislerimiz</a> </li>
                        <li> <a href="sayfalar/bayi.php">Bayilerimiz</a> </li>
                        <li> <a href="sayfalar/boru-hatti.php">Boru Hattı</a> </li>
                        <li> <a href="sayfalar/voc.php">VOC</a></li>

                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa-solid fa-earth-americas"></i></a>
                    <ul>
                        <li> <a href="sayfalar/bm-pipe-us.php">BM PIPE US</a> </li>
                        <li> <a href="sayfalar/bm-vobarno.php">BM VOBARNO</a> </li>
                       
                    </ul>
                </li>

            </ul>
        </div>

        <div class="cerceve">
            <div class="galeri">
                <img src="../img/IMG_0908.JPG" widht="380" height="500" />
                <img src="../img/IMG_0910.JPG" widht="380" height="500" />
                <img src="../img/IMG_0911.JPG" widht="380" height="500" />
                <img src="../img/IMG_0913.jpg" widht="380" height=" 500" />
                <img src="../img/indir.jpeg" widht="380" height="500" />
                <img src="../img/images.jpeg" height="500" />
             
                <img src="../img/Ekran%20görüntüsü%202023-08-18%20144342.png" widht="380px" height="500" />
                <img src="../img/indir (1).jpeg" widht="380px" height="500" />
                <img src="../img/images1.jpeg" widht="380px" height="500" />
                <img src="../img/altin-orumcek-odul-gorseli-1.jpg" widht="380px" height="500" />
            </div>
        </div>
     
       


      
            <div align="center">
             <img src="../img/Ekran Görüntüsü (120).png" width="850"/>
</div>
       








</header>
    <script src="../js/JavaScript.js"></script>
</body>
</html>