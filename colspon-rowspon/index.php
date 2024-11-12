<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Örnekleri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Gelişmiş Prenses Temalı PHP Örnekleri</h1>
        <p>Farklı HTML ve CSS yapılarıyla geliştirilmiş örnekler</p>
    </header>

    <main>
        <!-- Colspan Örneği -->
        <section>
            <h2 class="table-header"><i class="fas fa-crown"></i> Colspan Örneği</h2>
            <table>
                <?php
                echo "<tr>
                        <th class='table-title'>Başlık 1</th>
                        <th class='table-title'>Başlık 2</th>
                        <th class='table-title'>Başlık 3</th>
                      </tr>";

                echo "<tr>
                        <td colspan='3'>Bu hücre 3 sütunu kaplıyor</td>
                      </tr>";

                echo "<tr>
                        <td>1. Hücre</td>
                        <td>2. Hücre</td>
                        <td>3. Hücre</td>
                      </tr>";
                ?>
            </table>
        </section>

        <!-- Rowspan Örneği -->
        <section>
            <h2 class="table-header"><i class="fas fa-crown"></i> Rowspan Örneği</h2>
            <table>
                <?php
                echo "<tr>
                        <th class='table-title'>Başlık 1</th>
                        <th class='table-title'>Başlık 2</th>
                      </tr>";

                echo "<tr>
                        <td rowspan='2'>Bu hücre 2 satırı kaplıyor</td>
                        <td>1. Satır, 2. Sütun</td>
                      </tr>";

                echo "<tr>
                        <td>2. Satır, 2. Sütun</td>
                      </tr>";
                ?>
            </table>
        </section>

        <!-- Flexbox ile Kart Tasarımı -->
        <section class="flexbox-section">
            <h2 class="section-header"><i class="fas fa-magic"></i> Flexbox ile Kart Tasarımı</h2>
            <p>Flexbox, esnek ve mobil uyumlu düzenler oluşturmak için güçlü bir CSS aracıdır. Flexbox kullanarak öğeleri yatay veya dikey olarak kolayca hizalayabiliriz.</p>
            <div class="card-container">
                <?php
                $cards = ["Güzel Prenses", "Cesur Savaşçı", "Bilge Danışman"];
                foreach ($cards as $card) {
                    echo "<div class='card'>
                            <h3>$card</h3>
                            <p>Bu bir $card kartı örneğidir.</p>
                          </div>";
                }
                ?>
            </div>
        </section>

        <!-- Responsive Grid Yapısı -->
        <section>
            <h2 class="section-header"><i class="fas fa-th"></i> Responsive Grid Yapısı</h2>
            <p>Grid yapısı, web sayfalarında içerikleri satır ve sütun düzeninde yerleştirmek için kullanılır. Aşağıda prenses temalı bir grid örneği bulunmaktadır.</p>
            <div class="grid-container">
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<div class='grid-item'>Öğe $i</div>";
                }
                ?>
            </div>
        </section>

        <!-- Görsel Galeri -->
        <section>
            <h2 class="section-header"><i class="fas fa-images"></i> Çerçeveli Görsel Galeri</h2>
            <p>Görsel galeri, resimleri zarif bir şekilde çerçeveler içinde sunar. Aşağıda beş adet prenses temalı örnek görsel bulunmaktadır.</p>
            <div class="gallery">
                <img src="https://via.placeholder.com/150" alt="Resim 1">
                <img src="https://via.placeholder.com/150" alt="Resim 2">
                <img src="https://via.placeholder.com/150" alt="Resim 3">
                <img src="https://via.placeholder.com/150" alt="Resim 4">
                <img src="https://via.placeholder.com/150" alt="Resim 5">
            </div>
        </section>

        <!-- Buton Stilleri ve Tooltip -->
        <section>
            <h2 class="section-header"><i class="fas fa-heart"></i> Buton Stilleri ve Tooltip</h2>
            <p>Aşağıdaki butonlarda prenses temasına uygun çeşitli stiller uygulanmıştır. Her bir buton, farklı bir stil ve efektle sunulmuştur.</p>
            <div class="button-container">
                <button class="btn btn-1" title="Bu bir Prenses Butonu!">Prenses Butonu</button>
                <button class="btn btn-2" title="Bu bir Şeffaf Buton!">Şeffaf Buton</button>
                <button class="btn btn-3" title="Bu bir Gölgeli Buton!">Gölgeli Buton</button>
                <button class="btn btn-4" title="Prenses Temalı Çerçeveli Buton">Çerçeveli Buton</button>
                <button class="btn btn-5" title="Hareketli Efektli Buton"><span>Hareketli Buton</span></button>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Gelişmiş Prenses Temalı PHP Örneği - Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>
