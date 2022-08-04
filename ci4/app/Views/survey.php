<?= $this->extend('main') ?>

<?= $this->section('isi') ?>

<?php echo form_open_multipart('/home/save2nd');?>
<?= csrf_field(); ?>
<div class="container">
    <div class="card">
        <div class="form">
            <div class="left-side">
                <div class="left-heading text-center">
                    <h6>Lembar Penilaian Kinerja Unit Penyelenggara Pelayanan Publik (UPP)</h6>
                </div>
                <div class="steps-content">
                    <h6>Step <span class="step-number">1</span></h6>
                </div>
                <ul class="progress-bar">
                    <li class="active">1.a.K1</li>
                    <li>1.a.K2</li>
                    <li>1.a.K3</li>
                    <li>1.a.P</li>
                    <li>1.a.T</li>
                    <li>1.a.Ak</li>
                    <li>1.a.As</li>
                    <li>1.a.B</li>
                    <li>1.b.T</li>
                    <li>1.c.P</li>
                    <li>1.c.T</li>
                    <li>1.c.Ak</li>
                    <li>1.c.B </li>
                    <li>2.a.Ak</li>
                    <li>2.b.Ak</li>
                    <li>2.b.Ak2</li>
                    <li>2.d.K</li>
                    <li>2.e.K1</li>
                    <li>2.e.K2</li>
                    <li>2.g.Ak</li>
                    <li>3.a.As </li>
                    <li>3.b.K1 </li>
                    <li>3.b.As </li>
                    <li>3.c.K </li>
                    <li>3.d.As1 </li>
                    <li>3.e.As2  </li>
                    <li>3.e.As4 </li>
                    <li>4.a.T </li>
                    <li>4.a.B</li>
                    <li>4.a.Ak1 </li>
                    <li>4.a.Ak2 </li>
                    <li>4.b.T </li>
                    <li>5.1.a.K </li>
                    <li>5.1.a.As </li>
                    <li>5.2.a.K </li>
                    <li>5.2.a.As </li>
                    <li>6</li>
                </ul>
                
            </div>
            
            <div class="right-side">

                <div class="main active">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 1/13</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>1.a.K1 Tersedia Standar Pelayanan (SP) yang menjadi acuan dalam pemberian pelayanan  kepada publik</h6>
                        Standar Pelayanan adalah acuan dalam penilaian ukuran kinerja dan kualitas penyelenggaraan pelayanan dalam rangka mewujudkan penyelenggaraan pelayanan publik sesuai asas dan komponen standar pelayanan publik yang berlaku. Pelayanan Publik yang dimaksud dalam kuesioner ini adalah yang bersifat PELAYANAN LANGSUNG kepada masyarakat.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_1">
                            <input type="radio" name="p1_1" id="p1_1" value="0">
                            0.	Tidak ada ketentuan standar pelayanan   penyelenggaraan pelayanan publik.
                        </label> <br>
                        <label for="p1_1">
                            <input type="radio" name="p1_1" id="p1_1" value="1">
                            1. Standar Pelayanan telah dibuat terhadap seluruh  atau sebagian jenis pelayanan yang ditetapkan, namun belum dilakukan penetapan.
                        </label>
                        <label for="p1_1">
                            <input type="radio" name="p1_1" id="p1_1" value="2">
                            2. Penetapan ketentuan Standar Pelayanan telah dibuat terhadap sebagian jenis pelayanan yang ditetapkan, namun tidak sesuai asas serta komponen standar pelayanan publik yang berlaku.
                        </label>		
                        <label for="p1_1">
                            <input type="radio" name="p1_1" id="p1_1" value="3">
                            3. Penetapan ketentuan Standar Pelayanan telah dibuat terhadap seluruh jenis pelayanan yang ditetapkan, namun tidak sesuai asas serta komponen standar pelayanan publik yang berlaku.
                        </label>
                        <label for="p1_1">
                            <input type="radio" name="p1_1" id="p1_1" value="4">
                            4. Penetapan ketentuan Standar Pelayanan telah dibuat terhadap sebagian jenis pelayanan yang ditetapkan, dan sesuai asas serta komponen standar pelayanan publik yang berlaku.
                        </label>	
                        <label for="p1_1">
                            <input type="radio" name="p1_1" id="p1_1" value="5">
                            5. Penetapan ketentuan Standar Pelayanan telah dibuat terhadap semua jenis pelayanan yang ditetapkan, dan sesuai asas serta komponen standar pelayanan publik yang berlaku.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 2/13</h5>
                        <hr>
                        <h6>1.a.K2 Tersedia Standar Pelayanan (SP) yang menjadi acuan dalam pemberian pelayanan kepada publik (Per Jenis Layanan)</h6>
                        SP yang menjadi acuan adalah SP yang dipergunakan sebagai pedoman penyelenggaraan pelayanan dan acuan penilaian kualitas pelayanan kepada masyarakat. Pelayanan Publik yang dimaksud dalam kuesioner ini adalah yang bersifat PELAYANAN LANGSUNG kepada masyarakat. 
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_2">
                            <input type="radio" name="p1_2" id="p1_2" value="0">
                            0. Tidak tersedia Standar Pelayanan perjenis pelayanan
                        </label> <br>
                        <label for="p1_2">
                            <input type="radio" name="p1_2" id="p1_2" value="1">
                            1.	Jumlah Standar Pelayanan perjenis pelayanan < 20% dari jumlah pelayanan
                        </label>
                        <label for="p1_2">
                            <input type="radio" name="p1_2" id="p1_2" value="2">
                            2.	Jumlah Standar Pelayanan perjenis pelayanan 21 - 40% dari jumlah pelayanan
                        </label>		
                        <label for="p1_2">
                            <input type="radio" name="p1_2" id="p1_2" value="3">
                            3.	Jumlah Standar Pelayanan perjenis pelayanan 41- 60% dari jumlah pelayanan
                        </label>
                        <label for="p1_2">
                            <input type="radio" name="p1_2" id="p1_2" value="4">
                            4.	Jumlah Standar Pelayanan perjenis pelayanan 61- 80% dari jumlah pelayanan
                        </label>	
                        <label for="p1_2">
                            <input type="radio" name="p1_2" id="p1_2" value="5">
                            5.	Jumlah Standar Pelayanan perjenis pelayanan >80% dari jumlah pelayanan
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>
                
                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 3/13</h5>
                        <hr>
                        <h6>1.a.k3  Sistem Antrian</h6>
                        Sistem antrian yaitu mekanisme urutan penerima layanan yang mendapat giliran dilayani di loket pelayanan. 
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_3">
                            <input type="radio" name="p1_3" id="p1_3" value="0">
                            0.	Tidak ada sistem antrian
                        </label> <br>
                        <label for="p1_3">
                            <input type="radio" name="p1_3" id="p1_3" value="1">
                            1.	Tidak ada penomoran, antrian dengan sistem baris/geser tempat duduk langsung menuju ke setiap jenis layanan
                        </label>
                        <label for="p1_3">
                            <input type="radio" name="p1_3" id="p1_3" value="2">
                            2.	Sistem antrian secara non elektronik. Nomor  antrian dipanggil.
                        </label>		
                        <label for="p1_3">
                            <input type="radio" name="p1_3" id="p1_3" value="3">
                            3.	Sistem antrian secara elektronik. Nomor antrian  hanya ditampilkan (di layar antrian)
                        </label>
                        <label for="p1_3">
                            <input type="radio" name="p1_3" id="p1_3" value="4">
                            4.	Sistem antrian secara elektronik. Nomor antrian  ditampilkan (di layar antrian) dan diarahkan ke loket yang dituju, serta dipandu melalui pengeras suara.
                        </label>	
                        <label for="p1_3">
                            <input type="radio" name="p1_3" id="p1_3" value="5">
                            5.	Sistem antrian secara elektronik dan dibagi setiap jenis layanan / atau dikelompokkan bagi  setiap jenis layanan yang serumpun. Nomor antrian ditampilkan (di layar antrian) dan diarahkan ke loket yang dituju, serta dipandu melalui pengeras suara.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 4/13</h5>
                        <hr>
                        <h6>1.a.P  Proses penyusunan SP telah melibatkan masyarakat dan pihak terkait (stakeholder)</h6>
                        SP yang melibatkan masyarakat dan pihak terkait adalah penyusunan dan penetapan SP yang melibatkan warga negara maupun penduduk sebagai orang perseorangan, kelompok, maupun badan hukum yang berkedudukan sebagai penerima manfaat pelayanan publik, baik secara langsung maupun tidak langsung. Pihak terkait merupakan pihak yang dianggap kompeten dalam memberikan masukan terhadap penyusunan SP. 
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_4">
                            <input type="radio" name="p1_4" id="p1_4" value="0">
                            0.	Penyusunan SP tanpa keterlibatan unsur masyarakat dan tidak memanfaatkan masukan  hasil SKM dan pengaduan masyarakat.
                        </label> <br>
                        <label for="p1_4">
                            <input type="radio" name="p1_4" id="p1_4" value="1">
                            1.	Penyusunan SP tidak mengikut sertakan masyarakat tetapi memanfaatkan masukan hasil  SKM dan pengaduan masyarakat.
                        </label>
                        <label for="p1_4">
                            <input type="radio" name="p1_4" id="p1_4" value="2">
                            2.	Penyusunan SP mengikut sertakan masyarakat yang mewakili minimal satu unsur point (1). Tetapi tidak memanfaatkan masukan hasil SKM dan pengaduan masyarakat.
                        </label>		
                        <label for="p1_4">
                            <input type="radio" name="p1_4" id="p1_4" value="3">
                            3.	Penyusunan SP mengikut sertakan masyarakat yang mewakili minimal dua unsur point (2). Serta memanfaatkan masukan hasil SKM dan pengaduan masyarakat.
                        </label>
                        <label for="p1_4">
                            <input type="radio" name="p1_4" id="p1_4" value="4">
                            4.	Penyusunan SP mengikut sertakan masyarakat yang mewakili minimal tiga unsur point (3). Serta memanfaatkan masukan hasil SKM dan pengaduan masyarakat.
                        </label>	
                        <label for="p1_4">
                            <input type="radio" name="p1_4" id="p1_4" value="5">
                            5.	Penyusunan SP mengikut sertakan masyarakat yang mewakili berbagai unsur dan profesi antara lain: (1) tokoh masyarakat (2) akademisi, (3) dunia usaha, dan (4) lembaga swadaya masyarakat. Serta memanfaatkan masukan hasil SKM dan pengaduan masyarakat .
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 5/13</h5>
                        <hr>
                        <h6>1.a.T Tersedia dokumentasi tentang SP yang ditetapkan, dan dipublikasikan.</h6>
                        Rubrik tentang SP yang ditetapkan adalah informasi tentang SP yang dapat dijadikan bahan acuan oleh masyarakat.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_5">
                            <input type="radio" name="p1_5" id="p1_5" value="0">
                            0.	Tidak tersedia dokumentasi tentang SP yang ditetapkan.
                        </label> <br>
                        <label for="p1_5">
                            <input type="radio" name="p1_5" id="p1_5" value="1">
                            1.	SP yang ditetapkan, hanya didokumentasikan.
                        </label>
                        <label for="p1_5">
                            <input type="radio" name="p1_5" id="p1_5" value="2">
                            2.	SP yang ditetapkan telah didokumentasikan dan  dipublikasikan hanya di area ruang pelayanan (leaflet/pamflet/brosur, poster/banner, buku saku/katalog).
                        </label>		
                        <label for="p1_5">
                            <input type="radio" name="p1_5" id="p1_5" value="3">
                            3.	SP yang ditetapkan telah didokumentasikan dan dipublikasikan di area ruang pelayanan (leaflet/pamflet/brosur, poster/banner, buku saku/katalog) dan media informasi (baliho/billboard).
                        </label>
                        <label for="p1_5">
                            <input type="radio" name="p1_5" id="p1_5" value="4">
                            4.	SP yang ditetapkan telah didokumentasikan dan dipublikasikan hanya di area ruang pelayanan (leaflet/pamflet/brosur, poster/banner, buku saku/katalog), media informasi (baliho/billboard) dan media cetak.
                        </label>	
                        <label for="p1_5">
                            <input type="radio" name="p1_5" id="p1_5" value="5">
                            5.	SP yang ditetapkan telah didokumentasikan dan dipublikasikan hanya di area ruang pelayanan (leaflet/pamflet/brosur, poster/banner, buku saku/katalog), media informasi (baliho/billboard), media cetak dan website/media sosial.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 6/13</h5>
                        <hr>
                        <h6>1.a.Ak SP telah sesuai ketentuan peraturan perundang- undangan yang berlaku</h6>
                        SP yang digunakan sesuai dengan tolok ukur sebagai kewajiban dan janji penyelenggara kepada masyarakat dalam rangka pelayanan yang berkualitas, cepat.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_6">
                            <input type="radio" name="p1_6" id="p1_6" value="0">
                            0.	Tidak tersedia SP.
                        </label> <br>
                        <label for="p1_6">
                            <input type="radio" name="p1_6" id="p1_6" value="1">
                            1.	SP yang ditetapkan tidak sesuai ketentuan peraturan perundang-undangan yang berlaku.
                        </label>
                        <label for="p1_6">
                            <input type="radio" name="p1_6" id="p1_6" value="2">
                            2.	SP yang ditetapkan telah sesuai ketentuan peraturan perundang-undangan yang berlaku, namun tidak disosialisasikan dan tidak melibatkan masyarakat dalam penyusunannya.
                        </label>		
                        <label for="p1_6">
                            <input type="radio" name="p1_6" id="p1_6" value="3">
                            3.	SP yang ditetapkan telah sesuai ketentuan peraturan perundang-undangan yang berlaku, telah disosialisasikan namun tidak melibatkan masyarakat dalam penyusunannya.
                        </label>
                        <label for="p1_6">
                            <input type="radio" name="p1_6" id="p1_6" value="4">
                            4.	SP yang ditetapkan telah sesuai ketentuan peraturan perundang-undangan yang berlaku, telah disosialisasikan, dan melibatkan masyarakat dalam penyusunannya, namun tidak melakukan monev berkelanjutan.
                        </label>	
                        <label for="p1_6">
                            <input type="radio" name="p1_6" id="p1_6" value="5">
                            5.	SP yang ditetapkan telah sesuai ketentuan peraturan perundang-undangan yang berlaku, telah disosialisasikan, dan melibatkan masyarakat dalam penyusunannya, serta melakukan monev berkelanjut
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 7/13</h5>
                        <hr>
                        <h6>1.a.As Informasi atas Standar Pelayanan dapat diakses dengan mudah untuk diketahui dan dipahami oleh masyarakat.</h6>
                        Informasi SP yang terbuka adalah rangkaian kegiatan yang meliputi penyimpanan, dan pengelolaan informasi serta mekanisme penyampaian informasi dari penyelenggara kepada masyarakat dan dari masyarkat kepada penyelenggara.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_7">
                            <input type="radio" name="p1_7" id="p1_7" value="0">
                            0.	SP tidak dapat diakses.
                        </label> <br>
                        <label for="p1_7">
                            <input type="radio" name="p1_7" id="p1_7" value="1">
                            1.	Informasi tentang SP dapat diakses dengan bertanya kepada petugas secara tatap muka.
                        </label>
                        <label for="p1_7">
                            <input type="radio" name="p1_7" id="p1_7" value="2">
                            2.	Informasi tentang SP dapat diakses dengan bertanya kepada petugas secara tatap muka dan membaca di lokasi tempat layanan.
                        </label>		
                        <label for="p1_7">
                            <input type="radio" name="p1_7" id="p1_7" value="3">
                            3.	Informasi tentang SP dapat diakses dengan bertanya kepada petugas secara tatap muka, membaca di lokasi tempat layanan, dan melalui media sms/telepon.
                        </label>
                        <label for="p1_7">
                            <input type="radio" name="p1_7" id="p1_7" value="4">
                            4.	Informasi tentang SP dapat diakses dengan bertanya kepada petugas secara tatap muka, membaca di lokasi tempat layanan, melalui media sms/telepon, dan email.
                        </label>	
                        <label for="p1_7">
                            <input type="radio" name="p1_7" id="p1_7" value="5">
                            5.	Informasi tentang SP dapat diakses dengan bertanya kepada petugas secara tatap muka, membaca di lokasi tempat layanan, melalui media sms/telepon, email, website/media sosial.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 8/13</h5>
                        <hr>
                        <h6>1.a.B Tersedia SP yang tepat guna. (Substansi/Isi SP)</h6>
                        SP yang tepat guna adalah standar pelayanan yang memberikan kemudahan dan kenyamanan bagi para pihak, baik pengguna layanan maupun penyelenggara dan pelaksana layanan.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_8">
                            <input type="radio" name="p1_8" id="p1_8" value="0">
                            0.	Tidak tersedia SP.
                        </label> <br>
                        <label for="p1_8">
                            <input type="radio" name="p1_8" id="p1_8" value="1">
                            1.	SP yang ditetapkan tidak memberikan kemudahan persyaratan layanan.
                        </label>
                        <label for="p1_8">
                            <input type="radio" name="p1_8" id="p1_8" value="2">
                            2.	SP yang ditetapkan tidak memberikan kemudahan prosedur layanan.
                        </label>		
                        <label for="p1_8">
                            <input type="radio" name="p1_8" id="p1_8" value="3">
                            3.	SP yang ditetapkan telah memberikan kemudahan persyaratan, prosedur, namun tidak memberikan kepastian layanan (waktu, biaya, produk layanan) serta pengelolaan konsultasi dan pengaduan.
                        </label>
                        <label for="p1_8">
                            <input type="radio" name="p1_8" id="p1_8" value="4">
                            4.	SP yang ditetapkan telah memberikan kemudahan persyaratan, prosedur, dan kepastian  layanan (waktu, biaya, produk layanan) namun tidak tersedia pengelolaan konsultasi dan pengaduan.
                        </label>	
                        <label for="p1_8">
                            <input type="radio" name="p1_8" id="p1_8" value="5">
                            5.	SP yang ditetapkan telah memberikan kemudahan persyaratan, prosedur, dan kepastian     layanan (waktu, biaya, produk layanan) serta pengelolaan konsultasi dan pengaduan.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>
                
                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 9/13</h5>
                        <hr>
                        <h6>1.b.T. Tersedia Maklumat Pelayanan yang dipublikasikan kepada seluruh lapisan masyarakat.</h6>
                        Maklumat Pelayanan adalah pernyataan tertulis yang berisi keseluruhan rincian kewajiban dan janji  pemberi layanan untuk memenuhi SP, serta kesiapan menerima sanksi bila melanggar.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_9">
                            <input type="radio" name="p1_9" id="p1_9" value="0">
                            0.	Tidak tersedia Maklumat Pelayanan.
                        </label> <br>
                        <label for="p1_9">
                            <input type="radio" name="p1_9" id="p1_9" value="1">
                            1.	Maklumat Pelayanan yang ditetapkan hanya didokumentasikan, tidak dipublikasikan.
                        </label>
                        <label for="p1_9">
                            <input type="radio" name="p1_9" id="p1_9" value="2">
                            2.	Maklumat Pelayanan dipublikasikan di media  informasi di dalam ruangan (poster/banner).
                        </label>		
                        <label for="p1_9">
                            <input type="radio" name="p1_9" id="p1_9" value="3">
                            3.	Maklumat Pelayanan dipublikasikan di media informasi di dalam ruangan (poster/banner, leaflet/pamflet/brosur, buku saku/katalog, media cetak).
                        </label>
                        <label for="p1_9">
                            <input type="radio" name="p1_9" id="p1_9" value="4">
                            4.	Maklumat Pelayanan dipublikasikan di media informasi di dalam ruangan (poster/banner, leaflet/pamflet/brosur, buku saku/katalog, media cetak) dan media sosial atau website.
                        </label>	
                        <label for="p1_9">
                            <input type="radio" name="p1_9" id="p1_9" value="5">
                            5.	Maklumat Pelayanan dipublikasikan di media informasi di dalam ruangan (poster/banner, leaflet/pamflet/brosur, buku saku/katalog, media cetak) media sosial atau website dan area pemerintahan lainnya (baliho/billboard).
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 10/13</h5>
                        <hr>
                        <h6>1.c.P Tingginya keterlibatan pengguna layanan dalam pengisian SKM</h6>
                        Tingkat partisipasi pengguna layanan adalah keterlibatan pengguna layanan dalam memberikan masukan (kritik dan saran) dalam rangka peningkatan kualitas pelayanan melalui survei pelanggan dengan berbagai cara (secara langsung dan/atau online) meliputi pengisian kuesioner secara tatap muka, pengisian                 mandiri termasuk surat, e-survei/internet, FGD, wawancara mendalam (PermenPANRB 16/2014).
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_10">
                            <input type="radio" name="p1_10" id="p1_10" value="0">
                            0.	Tidak melakukan survei secara langsung dan/atau online.
                        </label> <br>
                        <label for="p1_10">
                            <input type="radio" name="p1_10" id="p1_10" value="1">
                            1.	Pengisian Kuesioner oleh pelanggan/survei hanya    dilakukan secara periodik setahun sekali secara langsung dan/atau online.
                        </label>
                        <label for="p1_10">
                            <input type="radio" name="p1_10" id="p1_10" value="2">
                            2.	Pengisian Kuesioner oleh pelanggan/survei hanya  dilakukan secara periodik enam bulan sekali secara langsung dan/atau online.
                        </label>		
                        <label for="p1_10">
                            <input type="radio" name="p1_10" id="p1_10" value="3">
                            3.	Pengisian Kuesioner oleh pelanggan/survei hanya   dilakukan secara periodik tiga bulan sekali.
                        </label>
                        <label for="p1_10">
                            <input type="radio" name="p1_10" id="p1_10" value="4">
                            4.	Pengisian Kuesioner oleh seluruh pengguna layanan baik secara langsung dan/atau online, hanya yang permohonannya disetujui.
                        </label>	
                        <label for="p1_10">
                            <input type="radio" name="p1_10" id="p1_10" value="5">
                            5.	Pengisian Kuesioner oleh seluruh pengguna layanan baik secara langsung dan/atau online, baik yang permohonannya disetujui maupun ditolak.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 11/13</h5>
                        <hr>
                        <h6>1.c.T informasi Survei Kepuasan Masyarakat (SKM) yang diketahui seluruh lapisan masyarakat. Hasil survei SKM : Laporan hasil survei SKM tahun 2014.</h6>
                        Keterbukaan informasi SKM adalah tersedianya informasi terkait metode, proses, dan hasil SKM untuk diketahui seluruh lapisan masyarakat.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_11">
                            <input type="radio" name="p1_11" id="p1_11" value="0">
                            0.	Tidak tersedia dokumentasi Informasi SKM.
                        </label> <br>
                        <label for="p1_11">
                            <input type="radio" name="p1_11" id="p1_11" value="1">
                            1.	Informasi SKM yang ditetapkan hanya didokumentasikan sebagai arsip dan tidak dipublikasikan.
                        </label>
                        <label for="p1_11">
                            <input type="radio" name="p1_11" id="p1_11" value="2">
                            2.	Informasi SKM didokumentasikan dan dipublikasikan hanya di area ruang pelayanan (leaflet/pamflet/brosur, buku saku/katalog, poster).
                        </label>		
                        <label for="p1_11">
                            <input type="radio" name="p1_11" id="p1_11" value="3">
                            3.	Informasi SKM tersedia di area ruang pelayanan dan dipublikasikan di media informasi (baliho/banner, leaflet/pamflet/brosur, buku saku/katalog, poster).
                        </label>
                        <label for="p1_11">
                            <input type="radio" name="p1_11" id="p1_11" value="4">
                            4.	Informasi SKM tersedia di area ruang pelayanan dan dipublikasikan di media informasi (website, leaflet/pamflet/brosur, buku saku/katalog, poster).
                        </label>	
                        <label for="p1_11">
                            <input type="radio" name="p1_11" id="p1_11" value="5">
                            5.	Informasi SKM tersedia dan dipublikasi di berbagai tempat dan media informasi (tersedia di area ruang pelayanan, media sosial, website, baliho/banner, leaflet/pamflet/brosur, buku saku/katalog, poster dan media cetak). 
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 12/13</h5>
                        <hr>
                        <h6>1.c.Ak Tindak lanjut hasil SKM dan kedalaman ruang lingkup.</h6>
                        Tindak lanjut Hasil SKM adalah hasil survei yang diolah, dianalisis yang menghasilkan rekomendasi yang kemudian dijadikan referensi kebijakan perbaikan layanan. Ruang lingkup SKM meliputi : persyaratan, prosedur, waktu, produk pelayanan, biaya, kompetensi, perilaku dan maklumat pelayanan serta pengelolaan pengaduan (PermenPANRB 16/2014). Cara mengukur prosentase: dihitung dari jumlah jenis pelayanan yang memiliki SKM yang ditindak lanjuti dibagi dengan seluruh jenis pelayanan yang ditetapkan dikali 100%.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_12">
                            <input type="radio" name="p1_12" id="p1_12" value="0">
                            0.	SKM tidak ditindaklanjuti.
                        </label> <br>
                        <label for="p1_12">
                            <input type="radio" name="p1_12" id="p1_12" value="1">
                            1.	Hasil SKM 20% jenis pelayanan dalam bentuk saran dan rekomendasi ditindaklanjuti dan dipergunakan sebagai acuan perbaikan layanan dan kebijakan layanan oleh pimpinan daerah maupun pimpinan penyelenggara.
                        </label>
                        <label for="p1_12">
                            <input type="radio" name="p1_12" id="p1_12" value="2">
                            2.	Hasil SKM 40% jenis pelayanan dalam bentuk saran dan rekomendasi ditindaklanjuti dan dipergunakan sebagai acuan perbaikan layanan dan kebijakan layanan oleh pimpinan daerah maupun pimpinan penyelenggara.
                        </label>		
                        <label for="p1_12">
                            <input type="radio" name="p1_12" id="p1_12" value="3">
                            3.	Hasil SKM 60% jenis pelayanan dalam bentuk saran dan rekomendasi ditindaklanjuti dan dipergunakan sebagai acuan perbaikan layanan dan kebijakan layanan oleh pimpinan daerah maupun pimpinan penyelenggara.
                        </label>
                        <label for="p1_12">
                            <input type="radio" name="p1_12" id="p1_12" value="4">
                            4.	Hasil SKM 80% jenis pelayanan dalam bentuk saran dan rekomendasi ditindaklanjuti dan dipergunakan sebagai acuan perbaikan layanan dan kebijakan layanan oleh pimpinan daerah maupun pimpinan penyelenggara.
                        </label>	
                        <label for="p1_12">
                            <input type="radio" name="p1_12" id="p1_12" value="5">
                            5.	Hasil SKM seluruh jenis pelayanan dalam bentuk saran dan rekomendasi ditindaklanjuti dan dipergunakan sebagai acuan perbaikan layanan dan kebijakan layanan oleh pimpinan daerah maupun pimpinan penyelenggara.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>I. Kebijakan Pelayanan - 13/13</h5>
                        <hr>
                        <h6>1.c.B Kecepatan tindak lanjut hasil SKM seluruh jenis pelayanan.</h6>
                        Kecepatan tindak lanjut Hasil SKM adalah progresifitas waktui dalam merespon saran, kritik, rekomendasi hasil SKM dalam ukuran waktu tertentu atas kasus-kasus yang muncul di seluruh jenis pelayanan.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_13">
                            <input type="radio" name="p1_13" id="p1_13" value="0">
                            0.	Saran, kritik, dan rekomendasi hasil SKM tidak ditindaklanjuti.
                        </label> <br>
                        <label for="p1_13">
                            <input type="radio" name="p1_13" id="p1_13" value="1">
                            1.	Saran, kritik, dan rekomendasi hasil SKM ditindaklanjuti seluruhnya 1 tahun setelah laporan SKM diterbitkan.
                        </label>
                        <label for="p1_13">
                            <input type="radio" name="p1_13" id="p1_13" value="2">
                            2.	Saran, kritik, dan rekomendasi hasil SKM ditindaklanjuti seluruhnya 6 bulan setelah laporan SKM diterbitkan.
                        </label>		
                        <label for="p1_13">
                            <input type="radio" name="p1_13" id="p1_13" value="3">
                            3.	Saran, kritik, dan rekomendasi hasil SKM ditindaklanjuti seluruhnya 3 bulan setelah laporan SKM diterbitkan.
                        </label>
                        <label for="p1_13">
                            <input type="radio" name="p1_13" id="p1_13" value="4">
                            4.	Saran, kritik, dan rekomendasi hasil SKM ditindaklanjuti seluruhnya 1 bulan setelah laporan SKM diterbitkan.
                        </label>	
                        <label for="p1_13">
                            <input type="radio" name="p1_13" id="p1_13" value="5">
                            5.	Saran, kritik, dan rekomendasi hasil SKM ditindaklanjuti seluruhnya sebelum terbit laporan SKM.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="submit">Submit</button>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
<?php echo form_close() ?>

<script src="<?= base_url() ?>/assets/js/form_survey.js"></script>


<?= $this->endSection('isi') ?>