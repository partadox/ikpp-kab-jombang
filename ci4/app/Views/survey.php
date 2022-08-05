<?= $this->extend('main') ?>

<?= $this->section('isi') ?>

<?php echo form_open_multipart('/home/save2nd');?>
<input type="hidden" name="survey_id" id="survey_id" value="<?= $survey_id?>">
<input type="hidden" name="ikm" id="ikm" value="<?= $ikm?>">
<input type="hidden" name="nama_lembaga" id="nama_lembaga" value="<?= $layanan?>">
<input type="hidden" name="id_lembaga" id="id_lembaga" value="<?= $id_lembaga?>">
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
                        <h6><?= $layanan ?></h6>
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
                        <h6><?= $layanan ?></h6>
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
                        <h6><?= $layanan ?></h6>
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
                        <h6><?= $layanan ?></h6>
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
                        <h6><?= $layanan ?></h6>
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
                        <h6><?= $layanan ?></h6>
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
                        <h6><?= $layanan ?></h6>
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
                        <h6><?= $layanan ?></h6>
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
                        <h6><?= $layanan ?></h6>
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
                        <h6><?= $layanan ?></h6>
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
                        <h6><?= $layanan ?></h6>
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
                        <h6><?= $layanan ?></h6>
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
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>II.	Profesionalisme SDM 1/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>2.a.Ak Tersedia Pelaksana Layanan dengan kompentensi sesuai kebutuhan jenis layanan.</h6>
                        Kompetensi SDM adalah latar belakang pendidikan, pengalaman, keterampilan/keahlian, dan pengetahuan produk yang dimiliki pelaksana layanan sesuai dengan jenis pelayanan.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_14">
                            <input type="radio" name="p1_14" id="p1_14" value="0">
                            0.	Tidak tersedia pelaksana layanan dengan kompetensi sesuai kebutuhan jenis layanan.
                        </label> <br>
                        <label for="p1_14">
                            <input type="radio" name="p1_14" id="p1_14" value="1">
                            1.	Ketersediaan pelaksana layanan dengan kompetensi sesuai kebutuhan jenis layanan, ≤ 20% dari nomenklatur ditetapkan.
                        </label>
                        <label for="p1_14">
                            <input type="radio" name="p1_14" id="p1_14" value="2">
                            2.	Ketersediaan pelaksana layanan dengan kompetensi sesuai kebutuhan jenis layanan, 21% - 40% dari nomenklatur ditetapkan.
                        </label>		
                        <label for="p1_14">
                            <input type="radio" name="p1_14" id="p1_14" value="3">
                            3.	Ketersediaan pelaksana layanan dengan kompetensi sesuai kebutuhan jenis layanan, 41% - 60%  dari nomenklatur yang ditetapkan.
                        </label>
                        <label for="p1_14">
                            <input type="radio" name="p1_14" id="p1_14" value="4">
                            4.	Ketersediaan pelaksana layanan dengan kompetensi sesuai kebutuhan jenis layanan, 61% - 80% dari nomenklatur ditetapkan.
                        </label>	
                        <label for="p1_14">
                            <input type="radio" name="p1_14" id="p1_14" value="5">
                            5.	Ketersediaan pelaksana layanan dengan kompetensi sesuai kebutuhan jenis layanan, > 80% dari nomenklatur ditetapkan.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>II.	Profesionalisme SDM 2/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>2.b.Ak.1 Pelaksana layanan yang responsif waktu.</h6>
                        Responsif waktu yaitu penyesuaian waktu pelayanan yang memberikan keleluasaan bagi pengguna layanan.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_15">
                            <input type="radio" name="p1_15" id="p1_15" value="0">
                            0.	Tidak ada ketetapan/kejelasan waktu pelayanan.
                        </label> <br>
                        <label for="p1_15">
                            <input type="radio" name="p1_15" id="p1_15" value="1">
                            1.	Jam kerja layanan harian dari 08.00 – 16.00 dengan jeda waktu istirahat pelayanan.
                        </label>
                        <label for="p1_15">
                            <input type="radio" name="p1_15" id="p1_15" value="2">
                            2.	Jam kerja layanan harian dari 08.00 – 16.00 tanpa jeda waktu istirahat pelayanan, untuk layanan informasi, konsultasi dan pengaduan (istirahat bergilir bagi pegawai tanpa menghentikan pelayanan bagi publik saat istirahat).
                        </label>		
                        <label for="p1_15">
                            <input type="radio" name="p1_15" id="p1_15" value="3">
                            3.	Jam kerja layanan harian dari 08.00 – 16.00 tanpa jeda waktu istirahat pelayanan, untuk Customer Service (istirahat bergilir bagi pegawai tanpa menghentikan pelayanan bagi publik saat istirahat).
                        </label>
                        <label for="p1_15">
                            <input type="radio" name="p1_15" id="p1_15" value="4">
                            4.	Jam kerja layanan harian dari 08.00 – 16.00 tanpa jeda waktu istirahat pelayanan, baik untuk layanan informasi,konsultsi dan pengaduan serta Customer Service (dengan sistem istirahat bergilir bagi pegawai tanpa menghentikan pelayanan bagi publik saat istirahat).
                        </label>	
                        <label for="p1_15">
                            <input type="radio" name="p1_15" id="p1_15" value="5">
                            5.	Jam kerja layanan harian dari 08.00 – 16.00 tanpa jeda waktu istirahat pelayanan, baik untuk layanan informasi, konsultasi dan pengaduan serta Customer Service (dengan sistem istirahat bergilir bagi pegawai tanpa menghentikan pelayanan bagi publik saat istirahat). Adanya penambahan waktu ekstra pelayanan misal; Sabtu/Minggu/Loket Malam.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>II.	Profesionalisme SDM 3/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>2.b.Ak2 Kesigapan pelaksana dalam memberikan layanan (kecepatan).</h6>
                        Kesigapan petugas yaitu kecepatan dalam memberikan respon pelayanan secara cepat dan benar ketika berhadapan dengan pengguna layanan.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_16">
                            <input type="radio" name="p1_16" id="p1_16" value="0">
                            0.	 Tidak Cepat
                        </label> <br>
                        <label for="p1_16">
                            <input type="radio" name="p1_16" id="p1_16" value="1">
                            1.	
                        </label> <br>
                        <label for="p1_16">
                            <input type="radio" name="p1_16" id="p1_16" value="2">
                            2.
                        </label> <br>		
                        <label for="p1_16">
                            <input type="radio" name="p1_16" id="p1_16" value="3">
                            3.
                        </label> <br>
                        <label for="p1_16">
                            <input type="radio" name="p1_16" id="p1_16" value="4">
                            4.
                        </label> <br>
                        <label for="p1_16">
                            <input type="radio" name="p1_16" id="p1_16" value="5">
                            5. Cepat
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>II.	Profesionalisme SDM 4/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>2.d.K Tersedia Aturan Perilaku dan Kode Etik Pelaksana Layanan.</h6>
                        Aturan Perilaku dan Kode Etik Pelaksana Layanan adalah pedoman sikap, perilaku, perbuatan, tulisan  dan ucapan pegawai , serta hak dan kewajiban pelaksana layanan dalam menjalankan tugas-tugas pelayanan kepada pengguna layanan.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_17">
                            <input type="radio" name="p1_17" id="p1_17" value="0">
                            0.	Tidak tersedia aturan perilaku dan kode etik.
                        </label> <br>
                        <label for="p1_17">
                            <input type="radio" name="p1_17" id="p1_17" value="1">
                            1.	Aturan Perilaku dan Kode Etik Pelaksana Layanan hanya meliputi hak dan kewajiban.
                        </label>
                        <label for="p1_17">
                            <input type="radio" name="p1_17" id="p1_17" value="2">
                            2.	Aturan Perilaku dan Kode Etik Pelaksana Layanan meliputi hak kewajiban, dan larangan KKN.
                        </label>		
                        <label for="p1_17">
                            <input type="radio" name="p1_17" id="p1_17" value="3">
                            3.	Aturan Perilaku dan Kode Etik Pelaksana Layanan meliputi hak dan kewajiban, larangan KKN, dan larangan diskriminasi.
                        </label>
                        <label for="p1_17">
                            <input type="radio" name="p1_17" id="p1_17" value="4">
                            4.	Aturan Perilaku dan Kode Etik Pelaksana Layanan meliputi hak dan kewajiban, larangan KKN, larangan diskriminasi, dan sanksi.
                        </label>	
                        <label for="p1_17">
                            <input type="radio" name="p1_17" id="p1_17" value="5">
                            5.	Aturan Perilaku dan Kode Etik Pelaksana Layanan meliputi hak dan kewajiban, larangan KKN, larangan diskriminasi, sanksi dan penghargaan.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>II.	Profesionalisme SDM 5/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>2.e.K1 Pemberian penghargaan.</h6>
                        Penghargaan adalah media apresiasi terhadap prestasi luar biasa bagi pelaksana layanan yang telah menjalankan kewajibannya secara konsisten.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_18">
                            <input type="radio" name="p1_18" id="p1_18" value="0">
                            0.	Tidak terdapat ketentuan terkait pemberian penghargaan dan penerapan kepada pelaksana layanan.
                        </label> <br>
                        <label for="p1_18">
                            <input type="radio" name="p1_18" id="p1_18" value="1">
                            1.	Pemberian penghargan diberikan kepada pegawai setiap 1 (satu) tahun.
                        </label>
                        <label for="p1_18">
                            <input type="radio" name="p1_18" id="p1_18" value="2">
                            2.	Pemberian penghargan diberikan kepada pegawai setiap enam bulan.
                        </label>		
                        <label for="p1_18">
                            <input type="radio" name="p1_18" id="p1_18" value="3">
                            3.	Pemberian penghargan diberikan kepada pegawai setiap empat bulan.
                        </label>
                        <label for="p1_18">
                            <input type="radio" name="p1_18" id="p1_18" value="4">
                            4.	Pemberian penghargan diberikan kepada pegawai setiap 3 (tiga) bulan.
                        </label>	
                        <label for="p1_18">
                            <input type="radio" name="p1_18" id="p1_18" value="5">
                            5.	Pemberian penghargan diberikan kepada pegawai setiap 1 (satu) bulan.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>II.	Profesionalisme SDM 6/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>2.e.K2 Pemberian Sanksi.</h6>
                        Sanksi adalah media pembinaan terhadap bentuk pelanggaran pelaksana layanan sebagai kendali penegakan disiplin berupa teguran sampai dengan pemecatan terhadap kelemahan pelaksana layanan dalam menjalankan tugas dan kewajibannya.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_19">
                            <input type="radio" name="p1_19" id="p1_19" value="0">
                            0.	Pemberian sanksi kepada pegawai melebihi 1 (satu) tahun sejak ditetapkan melanggar.
                        </label> <br>
                        <label for="p1_19">
                            <input type="radio" name="p1_19" id="p1_19" value="1">
                            1.	Pemberian sanksi diberikan kepada pegawai antara 6 (enam) bulan sampai dengan 1 (satu) tahun sejak ditetapkan melanggar.
                        </label>
                        <label for="p1_19">
                            <input type="radio" name="p1_19" id="p1_19" value="2">
                            2.	Pemberian sanksi diberikan kepada pegawai antara 4 (empat) sampai dengan 6 (enam) bulan sejak ditetapkan melanggar.
                        </label>		
                        <label for="p1_19">
                            <input type="radio" name="p1_19" id="p1_19" value="3">
                            3.	Pemberian sanksi diberikan kepada pegawai antara 3 (tiga) sampe 4 (empat) bulan sejak ditetapkan melanggar.
                        </label>
                        <label for="p1_19">
                            <input type="radio" name="p1_19" id="p1_19" value="4">
                            4.	Pemberian sanksi diberikan kepada pegawai antara 1 (satu) sampai 3 (tiga) bulan sejak ditetapkan melanggar.
                        </label>	
                        <label for="p1_19">
                            <input type="radio" name="p1_19" id="p1_19" value="5">
                            5.	Pemberian sanksi diberikan kepada pegawai selambatnya 1 (satu) bulan sejak ditetapkan melanggar.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>II.	Profesionalisme SDM 7/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>2.g.Ak Budaya Pelayanan.</h6>
                        Budaya Pelayanan yaitu ekspresi, komitmen dan perilaku dalam menghadapi pengguna layanan, baik berupa tindakan langsung maupun atribut.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_20">
                            <input type="radio" name="p1_20" id="p1_20" value="0">
                            0.	Tidak menerapkan budaya layanan.
                        </label> <br>
                        <label for="p1_20">
                            <input type="radio" name="p1_20" id="p1_20" value="1">
                            1.	Pelaksana layanan tidak berseragam khusus dan mengenakan Identitas Nama.
                        </label>
                        <label for="p1_20">
                            <input type="radio" name="p1_20" id="p1_20" value="2">
                            2.	Pelaksana layanan mengenakan pakaian seragam khusus.
                        </label>		
                        <label for="p1_20">
                            <input type="radio" name="p1_20" id="p1_20" value="3">
                            3.	Pelaksana layanan mengenakan pakaian seragam khusus, Identitas Nama.
                        </label>
                        <label for="p1_20">
                            <input type="radio" name="p1_20" id="p1_20" value="4">
                            4.	Pelaksana layanan mengenakan pakaian seragam khusus, Identitas Nama, PIN/Atribut/logo unit pelayanan.
                        </label>	
                        <label for="p1_20">
                            <input type="radio" name="p1_20" id="p1_20" value="5">
                            5.	Pelaksana layanan mengenakan pakaian seragam khusus, Identitas Nama, PIN/Atribut/logo unit pelayanan, mempraktekkan 5S.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>III. Sarana Dan Prasarana 1/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>3.a.As Tersedia tempat parkir yang aman, nyaman dan mudah diakses.</h6>
                        Sarana tempat parkir adalah fasilitas dan petugas khusus yang memberikan layanan tempat, keamanan kendaraan, serta kenyamanan kepada masyarakat, dengan akses yang mudah dan perlakuan yang sama, tidak diskriminatif, dan ada perlakuan khusus bagi kelompok rentan.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_21">
                            <input type="radio" name="p1_21" id="p1_21" value="0">
                            0.	Tidak tersedia tempat parkir/parkir sembarangan di pinggir jalan.
                        </label> <br>
                        <label for="p1_21">
                            <input type="radio" name="p1_21" id="p1_21" value="1">
                            1.	Tersedia tempat parkir khusus di luar area kantor dengan petugas parkir dengan tarif berbayar.
                        </label>
                        <label for="p1_21">
                            <input type="radio" name="p1_21" id="p1_21" value="2">
                            2.	Tersedia tempat parkir khusus di luar area kantor dengan petugas parkir dan gratis.
                        </label>		
                        <label for="p1_21">
                            <input type="radio" name="p1_21" id="p1_21" value="3">
                            3.	Tersedia tempat parkir yang luas di dalam area kantor dengan petugas parkir, pemeriksaan karcis/kartu parkir dan STNK, serta ada perlakuan khusus bagi kelompok rentan.
                        </label>
                        <label for="p1_21">
                            <input type="radio" name="p1_21" id="p1_21" value="4">
                            4.	Tersedia tempat parkir yang luas di dalam area kantor dengan petugas parkir, pemeriksaan karcis/kartu parkir dan STNK, terpisah antara kendaraan roda dua dan roda empat serta ada perlakuan khusus bagi kelompok rentan.
                        </label>	
                        <label for="p1_21">
                            <input type="radio" name="p1_21" id="p1_21" value="5">
                            5.	Tersedia tempat parkir yang luas di dalam area kantor dengan petugas parkir, dilengkapi CCTV, pemeriksaan karcis/kartu parkir dan STNK, terpisah antara kendaraan roda dua dan roda empat dengan tarif gratis serta ada perlakuan khusus bagi kelompok rentan.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>III. Sarana Dan Prasarana 2/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>3.b.K1 Tersedia sarana ruang tunggu yang nyaman.</h6>
                        Sarana ruang tunggu yang nyaman adalah fasilitas layanan ruang tunggu yang bersih tertata rapi dan menyediakan seluruh kebutuhan dasar kpd masyarakat dalam aktifitas menunggu dengan perlakuan yang sama, tidak diskriminatif, dan perlakuan khusus bagi kelompok rentan.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_22">
                            <input type="radio" name="p1_22" id="p1_22" value="0">
                            0.	Tidak tersedia ruang tunggu.
                        </label> <br>
                        <label for="p1_22">
                            <input type="radio" name="p1_22" id="p1_22" value="1">
                            1.	Tersedia ruang tunggu tanpa fasilitas apapun.
                        </label>
                        <label for="p1_22">
                            <input type="radio" name="p1_22" id="p1_22" value="2">
                            2.	Sarana ruang tunggu dilengkapi fasilitas televisi, bahan bacaan.
                        </label>		
                        <label for="p1_22">
                            <input type="radio" name="p1_22" id="p1_22" value="3">
                            3.	Sarana ruang tunggu dilengkapi fasilitas televisi, bahan bacaan AC/sirkulasi udara.
                        </label>
                        <label for="p1_22">
                            <input type="radio" name="p1_22" id="p1_22" value="4">
                            4.	Sarana ruang tunggu dilengkapi fasilitas televisi, bahan bacaan, AC/sirkulasi udara, air minum.
                        </label>	
                        <label for="p1_22">
                            <input type="radio" name="p1_22" id="p1_22" value="5">
                            5.	Sarana ruang tunggu dilengkapi fasilitas televisi, bahan bacaan, monitor antrian, AC/sirkulasi udara, air minum, dan fasilitas penunjang (hotspot/wifi, area merokok terisolasi, serta tersedia ruang ibadah baik menyatu ataupun terpisah).
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>III. Sarana Dan Prasarana 3/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>3.b.As Tersedia sarana toilet khusus pengguna layanan yang bersih, sehat       dan memadai</h6>
                        Sarana toilet khusus pengguna layanan bersih, sehat dan memadai adalah fasilitas toilet yang diperuntukkan khusus bagi pengguna layanan yang senantiasa terjaga bersih dengan ketersediaan air bersih dan toiletres yang cukup memadai serta memperhatikan privacy.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_23">
                            <input type="radio" name="p1_23" id="p1_23" value="0">
                            0.	Tidak tersedia toilet.
                        </label> <br>
                        <label for="p1_23">
                            <input type="radio" name="p1_23" id="p1_23" value="1">
                            1.	Tersedia toilet yang tidak terpisah antara pria dan wanita.
                        </label>
                        <label for="p1_23">
                            <input type="radio" name="p1_23" id="p1_23" value="2">
                            2.	Toilet disediakan terpisah antara pria dan wanita tanpa ada pilihan kloset duduk maupun jongkok.
                        </label>		
                        <label for="p1_23">
                            <input type="radio" name="p1_23" id="p1_23" value="3">
                            3.	Toilet disediakan terpisah antara pria dan wanita serta ada pilihan kloset duduk maupun jongkok.
                        </label>
                        <label for="p1_23">
                            <input type="radio" name="p1_23" id="p1_23" value="4">
                            4.	Toilet disediakan terpisah antara pria dan wanita serta ada pilihan kloset duduk maupun jongkok dilengkapi wastafel.
                        </label>	
                        <label for="p1_23">
                            <input type="radio" name="p1_23" id="p1_23" value="5">
                            5.	Toilet disediakan terpisah antara pria dan wanita serta ada pilihan kloset duduk maupun jongkok dilengkapi wastafel dan toiletres.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>III. Sarana Dan Prasarana 4/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>3.c.K Tersedia sarana prasarana bagi pengguna layanan yang berkebutuhan khusus.</h6>
                        Sarana prasarana bagi pengguna layanan yang berkebutuhan khusus adalah fasilitas yang disediakan khusus untuk memenuhi kebutuhan dasar pengguna layanan berkebutuhan khusus dalam menjalani aktifitas pengurusan layanan. 
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_24">
                            <input type="radio" name="p1_24" id="p1_24" value="0">
                            0.	Tidak tersedia fasilitas khusus bagi pengguna kursi roda/difabel/lansia/ibu hamil/berkebutuhan khusus lainnya.
                        </label> <br>
                        <label for="p1_24">
                            <input type="radio" name="p1_24" id="p1_24" value="1">
                            1.	Tersedia loket khusus difabel/lansia/ibu hamil/berkebutuhan khusus lainnya.
                        </label>
                        <label for="p1_24">
                            <input type="radio" name="p1_24" id="p1_24" value="2">
                            2.	Tersedia step lobby/ramp bagi pengguna kursi roda.
                        </label>		
                        <label for="p1_24">
                            <input type="radio" name="p1_24" id="p1_24" value="3">
                            3.	Tersedia step lobby bagi pengguna kursi roda, tersedia loket khusus difabel/lansia/ibu hamil/berkebutuhan khusus lainnya.
                        </label>
                        <label for="p1_24">
                            <input type="radio" name="p1_24" id="p1_24" value="4">
                            4.	Tersedia step lobby/ramp bagi pengguna kursi roda, tersedia toilet khusus difabel, tersedia loket khusus difabel/lansia/ibu hamil/berkebutuhan khusus lainnya.
                        </label>	
                        <label for="p1_24">
                            <input type="radio" name="p1_24" id="p1_24" value="5">
                            5.	Tersedia step lobby/ramp bagi pengguna kursi roda, tersedia toilet khusus difabel, tersedia loket khusus difabel/lansia/ibu hamil/berkebutuhan khusus lainnya serta ada petugas khusus yang membantu.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>III. Sarana Dan Prasarana 5/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>3.d.As1 Tersedia sarana prasarana penunjang lainnya: Ruang Laktasi/nursery, arena bermain anak, kantin/fotocopy/toko ATK</h6>
                        Sarana prasarana penunjang lainnya adalah fasilitas khusus bagi pengguna layanan yang tidak langsung terkait pengurusan perijinan.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_25">
                            <input type="radio" name="p1_25" id="p1_25" value="0">
                            0.	Tidak tersedia kantin, fotocopy, toko ATK , Ruang Laktasi/nursery, arena bermain anak.
                        </label> <br>
                        <label for="p1_25">
                            <input type="radio" name="p1_25" id="p1_25" value="1">
                            1.	Tersedia fotocopy.
                        </label> <br>
                        <label for="p1_25"> 
                            <input type="radio" name="p1_25" id="p1_25" value="2">
                            2.	Tersedia kantin dan fotocopy.
                        </label> <br>		
                        <label for="p1_25"> 
                            <input type="radio" name="p1_25" id="p1_25" value="3">
                            3.	Tersedia kantin, fotocopy, toko ATK.
                        </label> <br>
                        <label for="p1_25"> 
                            <input type="radio" name="p1_25" id="p1_25" value="4">
                            4.	Tersedia kantin, fotocopy, toko ATK , Ruang Laktasi/nursery.
                        </label> <br>	
                        <label for="p1_25"> 
                            <input type="radio" name="p1_25" id="p1_25" value="5">
                            5.	Tersedia kantin, fotocopy, toko ATK , Ruang Laktasi/nursery, arena bermain anak.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>III. Sarana Dan Prasarana 6/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>3.e.As2  Tersedia sarana front office untuk layanan konsultasi dan informasi tatap muka langsung.</h6>
                        Sarana Front Office layanan konsultasi adalah fasilitas/tempat khusus untuk layanan konsultasi tatap muka langsung di kantor pelayanan. Dapat berupa ruang khusus atau meja layanan khusus.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_26">
                            <input type="radio" name="p1_26" id="p1_26" value="0">
                            0.	Tidak tersedia sarana front office layanan konsultasi.
                        </label> <br>
                        <label for="p1_26">
                            <input type="radio" name="p1_26" id="p1_26" value="1">
                            1.	Tersedia sarana Front Office untuk layanan konsultasi dan informasi berupa meja khusus (dapat digabung dengan pengaduan dan informasi) yang tidak terpisah dari layanan lainnya.
                        </label>
                        <label for="p1_26">
                            <input type="radio" name="p1_26" id="p1_26" value="2">
                            2.	Tersedia sarana Front Office untuk layanan konsultasi dan informasi berupa meja khusus (dapat digabung dengan pengaduan dan informasi) yang terpisah dari layanan lainnya, namun tidak di bagian depan kantor/tidak terlihat/tidak mudah diakses.
                        </label>		
                        <label for="p1_26">
                            <input type="radio" name="p1_26" id="p1_26" value="3">
                            3.	Tersedia sarana Front Office untuk layanan konsultasi dan informasi berupa meja khusus (dapat digabung dengan pengaduan dan informasi) di bagian depan kantor/terlihat/mudah diakses yang terpisah dari layanan lainnya.
                        </label>
                        <label for="p1_26">
                            <input type="radio" name="p1_26" id="p1_26" value="4">
                            4.	Tersedia sarana Front Office untuk layanan konsultasi dan infromasi berupa ruangan khusus (dapat digabung dengan pengaduan dan informasi) namun tidak di bagian depan kantor/tidak terlihat/tidak mudah diakses.
                        </label>	
                        <label for="p1_26">
                            <input type="radio" name="p1_26" id="p1_26" value="5">
                            5.	Tersedia sarana Front Office untuk layanan konsultasi dan infromasi berupa ruangan khusus (dapat digabung dengan pengaduan dan informasi) di bagian depan kantor/terlihat/mudah diakses yang terpisah dari layanan lainnya.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>III. Sarana Dan Prasarana 7/7</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>3.e.As4 Tersedia sarana front office untuk layanan pengaduan tatap muka langsung.</h6>
                        Sarana Front Office layanan pengaduan adalah fasilitas/tempat khusus untuk layanan pengaduan tatap muka langsung di kantor pelayanan. Dapat berupa ruang khusus atau meja layanan khusus.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_27">
                            <input type="radio" name="p1_27" id="p1_27" value="0">
                            0.	Tidak tersedia sarana front office layanan pengaduan.
                        </label> <br>
                        <label for="p1_27">
                            <input type="radio" name="p1_27" id="p1_27" value="1">
                            1.	Tersedia sarana Front Office untuk layanan pengaduan berupa meja khusus (dapat digabung dengan informasi dan konsultasi) yang tidak terpisah dari layanan lainnya.
                        </label>
                        <label for="p1_27">
                            <input type="radio" name="p1_27" id="p1_27" value="2">
                            2.	Tersedia sarana Front Office untuk layanan pengaduan berupa meja khusus (dapat digabung dengan informasi dan konsultasi) yang terpisah dari layanan lainnya, namun tidak di bagian depan kantor/tidak terlihat/tidak mudah diakses.
                        </label>		
                        <label for="p1_27">
                            <input type="radio" name="p1_27" id="p1_27" value="3">
                            3.	Tersedia sarana Front Office untuk layanan pengaduan berupa meja khusus (dapat digabung dengan informasi dan konsultasi) di bagian depan kantor/terlihat/mudah diakses yang terpisah dari layanan lainnya.
                        </label>
                        <label for="p1_27">
                            <input type="radio" name="p1_27" id="p1_27" value="4">
                            4.	Tersedia sarana Front Office untuk layanan pengaduan berupa ruangan khusus (dapat digabung dengan informasi dan konsultasi) namun tidak di bagian depan kantor/tidak terlihat/tidak mudah diakses.
                        </label>	
                        <label for="p1_27">
                            <input type="radio" name="p1_27" id="p1_27" value="5">
                            5.	Tersedia sarana Front Office untuk layanan pengaduan berupa ruangan khusus (dapat digabung dengan informasi dan konsultasi) di bagian depan kantor/terlihat/mudah diakses yang terpisah dari layanan lainnya.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>IV.	Sistem Informasi Pelayanan Publik 1/5</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>4.a.T Sistem informasi pelayanan publik untuk informasi publik.</h6>
                        Sistem informasi pelayanan publik untuk informasi publik adalah sistem informasi yang sekurang- kurangnya meliputi profil penyelenggara, pelaksana, standar pelayanan, maklumat pelayanan, pengelolaan pengaduan dan penilaian kinerja lembaga, yang disajikan untuk kebutuhan publik. (UUNo.25/2009)
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_28">
                            <input type="radio" name="p1_28" id="p1_28" value="0">
                            0.	Tidak tersedia sistem informasi pelayanan publik baik elektronik maupun non elektronik.
                        </label> <br>
                        <label for="p1_28">
                            <input type="radio" name="p1_28" id="p1_28" value="1">
                            1.	Tersedia sistem informasi pelayanan publik non elektronik.
                        </label>
                        <label for="p1_28">
                            <input type="radio" name="p1_28" id="p1_28" value="2">
                            2.	Sistem informasi pelayanan publik elektronik belum online hanya bisa diakses di tempat layanan namun hanya sebagian informasi diantaranaya meliputi unsur profil penyelenggara dan profil pelaksana.
                        </label>		
                        <label for="p1_28">
                            <input type="radio" name="p1_28" id="p1_28" value="3">
                            3.	Sistem informasi pelayanan publik telah online/website hanya sebagian dan memenuhi unsur profil penyelenggara, pelaksana, standar pelayanan, maklumat pelayanan, pengelolaan pengaduan dan penilaian kinerja lembaga.
                        </label>
                        <label for="p1_28">
                            <input type="radio" name="p1_28" id="p1_28" value="4">
                            4.	Sistem informasi pelayanan publik sudah elektronik tetapi tidak online/hanya bisa diakses di tempat layanan namun telah memenuhi unsur profil penyelenggara, pelaksana, standar pelayanan, maklumat pelayanan, pengelolaan pengaduan dan penilaian kinerja lembaga.
                        </label>	
                        <label for="p1_28">
                            <input type="radio" name="p1_28" id="p1_28" value="5">
                            5.	Sistem informasi pelayanan publik telah online dan telah memenuhi unsur profil penyelenggara, pelaksana, standar pelayanan, maklumat pelayanan, pengelolaan pengaduan dan penilaian kinerja lembaga.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>IV.	Sistem Informasi Pelayanan Publik 2/5</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>4.a.B Sistem informasi pelayanan publik pendukung operasional pelayanan.</h6>
                        Sistem informasi pelayanan publik pendukung operasional pelayanan adalah sistem informasi yang mengintegrasikan dan mensinkronisasikan sistem data dan informasi yang menunjang menkanisme kerja antar unit pelayanan dalam instansi.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_29">
                            <input type="radio" name="p1_29" id="p1_29" value="0">
                            0.	Tidak tersedia sistem informasi pendukung operasional pelayanan publik. 
                        </label> <br>
                        <label for="p1_29">
                            <input type="radio" name="p1_29" id="p1_29" value="1">
                            1.	SIPP dikembangkan meliputi sistem data informasi, Aplikasi otomasi proses kerja (bussiness process).
                        </label>
                        <label for="p1_29">
                            <input type="radio" name="p1_29" id="p1_29" value="2">
                            2.	SIPP dikembangkan meliputi sistem data informasi, Aplikasi otomasi proses kerja (bussiness process), Keuangan.
                        </label>		
                        <label for="p1_29">
                            <input type="radio" name="p1_29" id="p1_29" value="3">
                            3.	SIPP dikembangkan meliputi sistem data informasi pelayanan, Aplikasi otomasi proses kerja (bussiness process), Keuangan, sistem pengelolaan pengaduan.
                        </label>
                        <label for="p1_29">
                            <input type="radio" name="p1_29" id="p1_29" value="4">
                            4.	SIPP dikembangkan meliputi sistem data informasi pelayanan, Aplikasi otomasi proses kerja (bussiness process), Keuangan, sistem pengelolaan pengaduan dan SKM.
                        </label>	
                        <label for="p1_29">
                            <input type="radio" name="p1_29" id="p1_29" value="5">
                            5.	SIPP dikembangkan meliputi sistem data informasi pelayanan, Aplikasi otomasi proses kerja (bussiness process), Keuangan, sistem pengelolaan pengaduan, SKM dan SDM.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>IV.	Sistem Informasi Pelayanan Publik 3/5</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>4.a.Ak1 Kepemilikan situs dan Pengelola Situs</h6>
                        Kepemilikan situs dan pengelola situs unit pelayanan adalah kepemilikan terhadap domain yang memuat informasi atau aplikasi sistem informasi yang dikelola petugas.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_30">
                            <input type="radio" name="p1_30" id="p1_30" value="0">
                            0.	Tidak terhubung dengan dunia maya
                        </label> <br>
                        <label for="p1_30">
                            <input type="radio" name="p1_30" id="p1_30" value="1">
                            1.	Tidak memiliki situs hanya memanfaatkan/akun di media sosial
                        </label>
                        <label for="p1_30">
                            <input type="radio" name="p1_30" id="p1_30" value="2">
                            2.	Situs merupakan milik situs komersil non pemerintah, unit pelayanan hanya memiliki alamat (CMS/Content Management System seperti, blogspot, wordpress, dll) yang menumpang pada situs komersial tersebut.
                        </label>		
                        <label for="p1_30">
                            <input type="radio" name="p1_30" id="p1_30" value="3">
                            3.	Situs merupakan milik SKPD lain di lingkungan pemda, unit pelayanan hanya menjadi sub domain dari situs skpd lain tersebut
                        </label>
                        <label for="p1_30">
                            <input type="radio" name="p1_30" id="p1_30" value="4">
                            4.	Situs merupakan milik pemda, unit pelayanan hanya menjadi sub domain dari situs pemda tersebut
                        </label>	
                        <label for="p1_30">
                            <input type="radio" name="p1_30" id="p1_30" value="5">
                            5.	Situs merupakan milik unit pelayanan dan dikelola langsung.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>IV.	Sistem Informasi Pelayanan Publik 4/5</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>4.a.Ak2 Pemutakhiran data dan informasi situs.</h6>
                        Pemutakhiran data dan informasi situs adalah pembaruan data, informasi dan aplikasi yang disajikan dalam situs unit pelayanan.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_31">
                            <input type="radio" name="p1_31" id="p1_31" value="0">
                            0.	Tersedia informasi pelayanan publik yang tidak dimutakhiran.
                        </label> <br>
                        <label for="p1_31">
                            <input type="radio" name="p1_31" id="p1_31" value="1">
                            1.	Pemutakhiran informasi pelayanan publik telah dilakukan setiap tahun.
                        </label>
                        <label for="p1_31">
                            <input type="radio" name="p1_31" id="p1_31" value="2">
                            2.	Pemutakhiran informasi pelayanan publik telah dilakukan setiap semester.
                        </label>		
                        <label for="p1_31">
                            <input type="radio" name="p1_31" id="p1_31" value="3">
                            3.	Pemutakhiran sistem informasi pelayanan publik setiap bulan.
                        </label>
                        <label for="p1_31">
                            <input type="radio" name="p1_31" id="p1_31" value="4">
                            4.	Pemutakhiran sistem informasi pelayanan publik dilakukan setiap minggu.
                        </label>	
                        <label for="p1_31">
                            <input type="radio" name="p1_31" id="p1_31" value="5">
                            5.	Pemutakhiran informasi pelayanan publik dilakukan secara terus menerus setiap hari.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>
                
                <div class="main">
                    <div class="text">
                        <h5>IV.	Sistem Informasi Pelayanan Publik 5/5</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>4.b.T Tersedia informasi non elektronik yang mendukung pelayanan yang diketahui seluruh lapisan masyarakat</h6>
                        Informasi non elektronik yaitu informasi berupa poster / spanduk / leaflet / buku / dokumen / bahan cetak lain yang berisi profil penyelenggara, profil pelaksana dll bagi masyarakat yang tidak memiliki akses IT atau tidak melek IT. 
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_32">
                            <input type="radio" name="p1_32" id="p1_32" value="0">
                            0.	Tidak tersedia informasi non elektronik
                        </label> <br>
                        <label for="p1_32">
                            <input type="radio" name="p1_32" id="p1_32" value="1">
                            1.	Informasi non elektronik berupa poster / spanduk / leaflet / buku / dokumen / bahan cetak lain yang berisi profil penyelenggara, profil pelaksana dll didokumentasikan dan dipublikasikan hanya di area ruang pelayanan
                        </label>
                        <label for="p1_32">
                            <input type="radio" name="p1_32" id="p1_32" value="2">
                            2.	Informasi non elektronik berupa poster / spanduk / leaflet / buku / dokumen / bahan cetak lain yang berisi profil penyelenggara, profil pelaksana dll didokumentasikan dan dipublikasikan di area ruang pelayanan dan ruang publik (contoh alun-alun, perempatan jalan dll).
                        </label>		
                        <label for="p1_32">
                            <input type="radio" name="p1_32" id="p1_32" value="3">
                            3.	Informasi non elektronik berupa poster / spanduk / leaflet / buku / dokumen / bahan cetak lain yang berisi profil penyelenggara, profil pelaksana dll didokumentasikan dan dipublikasikan di area ruang pelayanan, ruang publik (contoh alun-alun, perempatan jalan dll) dan perpustakaan daerah.
                        </label>
                        <label for="p1_32">
                            <input type="radio" name="p1_32" id="p1_32" value="4">
                            4.	Informasi non elektronik berupa poster / spanduk / leaflet / buku / dokumen / bahan cetak lain yang berisi profil penyelenggara, profil pelaksana dll didokumentasikan dan dipublikasikan di area ruang pelayanan, ruang publik (contoh alun-alun, perempatan jalan dll), perpustakaan daerah dan kantor pemerintah yang lain.
                        </label>	
                        <label for="p1_32">
                            <input type="radio" name="p1_32" id="p1_32" value="5">
                            5.	Informasi non elektronik berupa poster / spanduk / leaflet / buku / dokumen / bahan cetak lain yang berisi profil penyelenggara, profil pelaksana dll didokumentasikan dan dipublikasikan di area ruang pelayanan, ruang publik (contoh alun-alun, perempatan jalan dll), perpustakaan daerah, kantor pemerintah yang lain, dan didistribusikan ke stakeholder.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>V.	Konsultasi Dan Pengaduan 1/4</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>5.1.a.K Tersedia sarana dan media konsultasi layanan yang bisa dimanfaatkan semua lapisan masyarakat.</h6>
                        Sarana dan media konsultasi adalah fasilitas dan petugas khusus yang memberikan layanan konsultasi kepada masyarakat dengan perlakuan yang sama, tidak diskriminatif, dan perlakuan khusus bagi kelompok  rentan. 
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_33">
                            <input type="radio" name="p1_33" id="p1_33" value="0">
                            0.	Tidak ada sarana dan petugas.
                        </label> <br>
                        <label for="p1_33">
                            <input type="radio" name="p1_33" id="p1_33" value="1">
                            1.	Tidak ada petugas khusus dan konsultasi hanya bersifat tatap muka.
                        </label>
                        <label for="p1_33">
                            <input type="radio" name="p1_33" id="p1_33" value="2">
                            2.	Ada petugas khusus untuk konsultasi langsung.
                        </label>		
                        <label for="p1_33">
                            <input type="radio" name="p1_33" id="p1_33" value="3">
                            3.	Petugas khusus dan ruang khusus konsultasi, tatap muka dan telepon.
                        </label>
                        <label for="p1_33">
                            <input type="radio" name="p1_33" id="p1_33" value="4">
                            4.	Petugas khusus dan pemberian konsultasi melalui website, media telepon dan tatap muka di ruang khusus.
                        </label>	
                        <label for="p1_33">
                            <input type="radio" name="p1_33" id="p1_33" value="5">
                            5.	Sarana dan petugas lengkap (media sosial, email, surat, telepon, tatap muka, tempat khusus, dan petugas khusus).
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>V.	Konsultasi Dan Pengaduan 2/4</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>5.1.a.As Tersedia rubrik, dokumentasi , dan publikasi konsultasi yang mudah diakses.</h6>
                        Rubrik, dokumentasi dan publikasi hasil konsultasi adalah arsip proses konsultasi sebelumnya yang dapat dijadikan referensi.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_34">
                            <input type="radio" name="p1_34" id="p1_34" value="0">
                            0.	Tidak ada dokumentasi.
                        </label> <br>
                        <label for="p1_34">
                            <input type="radio" name="p1_34" id="p1_34" value="1">
                            1.	Terdapat sistem dokumentasi/arsip manual.
                        </label>
                        <label for="p1_34">
                            <input type="radio" name="p1_34" id="p1_34" value="2">
                            2.	Terdapat sistem dokumentasi/arsip dengan bentuk softcopy dan hardcopy.
                        </label>		
                        <label for="p1_34">
                            <input type="radio" name="p1_34" id="p1_34" value="3">
                            3.	Terdapat sistem dokumentasi/arsip berbasis IT dan manual, dan dapat diakses berdasarkan permintaan.
                        </label>
                        <label for="p1_34">
                            <input type="radio" name="p1_34" id="p1_34" value="4">
                            4.	Terdapat sistem dokumentasi/arsip IT dan manual dan dapat diakses secara langsung.
                        </label>	
                        <label for="p1_34">
                            <input type="radio" name="p1_34" id="p1_34" value="5">
                            5.	Arsip proses konsultasi terdokumentasi dan mudah diakses di website, majalah, dokumen/arsip lainnya.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>V.	Konsultasi Dan Pengaduan 3/4</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>5.2.a.K Tersedia sarana dan media pelayanan pengaduan yang bisa dimanfaatkan semua lapisan masyarakat.</h6>
                        Sarana dan media pengaduan adalah fasilitas dan petugas khusus yang memberikan layanan pengaduan kepada masyarakat dengan perlakuan yang sama, tidak diskriminatif, dan perlakuan khusus bagi kelompok  rentan.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_35">
                            <input type="radio" name="p1_35" id="p1_35" value="0">
                            0.	Tidak ada sarana dan petugas pelayanan pengaduan.
                        </label> <br>
                        <label for="p1_35">
                            <input type="radio" name="p1_35" id="p1_35" value="1">
                            1.	Terdapat sarana pelayanan pengaduan (kotak pengaduan) di lokasi pelayanan namun tidak ada petugas khusu yang menangani pengaduan.
                        </label>
                        <label for="p1_35">
                            <input type="radio" name="p1_35" id="p1_35" value="2">
                            2.	Terdapat sarana pelayanan pengaduan dan petugas khusus yang menangani pengaduan maupun menerima pengaduan langsung.
                        </label>		
                        <label for="p1_35">
                            <input type="radio" name="p1_35" id="p1_35" value="3">
                            3.	Terdapat sarana pelayanan pengaduan melalui media/publikasi lokal dan petugas khusus yang menangani pengaduan.
                        </label>
                        <label for="p1_35">
                            <input type="radio" name="p1_35" id="p1_35" value="4">
                            4.	Terdapat media pelayanan pengaduan berbasis online dan petugas khusus yang menangani pengaduan. 
                        </label>	
                        <label for="p1_35">
                            <input type="radio" name="p1_35" id="p1_35" value="5">
                            5.	Terdapat lengkap sarana dan petugas pelayanan pengaduan (online, media sosial, email, surat, telpon, kotak pengaduan, tatap    muka, tempat khusus, dan petugas khusus).
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>V.	Konsultasi Dan Pengaduan 4/4</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>5.2.a.As Tersedia rubrik, dokumentasi, dan publikasi proses/hasil pengaduan yang mudah diakses.</h6>
                        Rubrik, dokumentasi dan publikasi proses/hasil pengaduan adalah arsip proses/hasil pengaduan sebelumnya yang dapat dijadikan referensi.
                        <hr>
                    </div>
                    <div class="group mt-3">
                        <label for="p1_36">
                            <input type="radio" name="p1_36" id="p1_36" value="0">
                            0.	Tidak ada dokumentasi.
                        </label> <br>
                        <label for="p1_36">
                            <input type="radio" name="p1_36" id="p1_36" value="1">
                            1.	Terdapat sistem dokumentasi/arsip manual.
                        </label>
                        <label for="p1_36">
                            <input type="radio" name="p1_36" id="p1_36" value="2">
                            2.	Terdapat sistem dokumentasi/arsip dengan bentuk softcopy dan hardcopy
                        </label>		
                        <label for="p1_36">
                            <input type="radio" name="p1_36" id="p1_36" value="3">
                            3.	Terdapat sistem dokumentasi/arsip berbasis IT dan manual, dan dapat diakses berdasarkan permintaan.
                        </label>
                        <label for="p1_36">
                            <input type="radio" name="p1_36" id="p1_36" value="4">
                            4.	Terdapat sistem dokumentasi/arsip IT dan manual dan dapat diakses secara langsung.
                        </label>	
                        <label for="p1_36">
                            <input type="radio" name="p1_36" id="p1_36" value="5">
                            5.	Arsip proses/hasil pengaduan terdokumentasi dan mudah diakses di website, majalah, dokumen/arsip lainnya.
                        </label>			
                    </div>
                    <div class="buttons button_space">
                        <button type="button" class="back_button">Back</button>
                        <button type="button" class="next_button">Next</button>
                    </div>
                </div>

                <div class="main">
                    <div class="text">
                        <h5>VI.	Inovasi 1/1</h5>
                        <h6><?= $layanan ?></h6>
                        <hr>
                        <h6>6 Indikator Tersedia Inovasi</h6>
                        Inovasi pelayanan publik adalah terobosan jenis pelayanan baik yang merupakan gagasan/ide kreatif orisinal dan/atau adaptasi/modifikasi yang memberikan manfaat bagi masyarakat, baik secara langsung maupun tidak langsung
                    </div>
                    <div class="group mt-3">
                        <label for="p1_37">
                            <input type="radio" name="p1_37" id="p1_37" value="0">
                            0.	Tidak tersedia inovasi
                        </label> <br>
                        <label for="p1_37">
                            <input type="radio" name="p1_37" id="p1_37" value="1">
                            1.	Tersedia inovasi, dilaksanakan kurang dari 1 tahun
                        </label>
                        <label for="p1_37">
                            <input type="radio" name="p1_37" id="p1_37" value="2">
                            2.	Tersedia inovasi, dilaksanakan lebih dari 1 tahun dan memberi manfaat pada masyarakat, namun tidak berkelanjutan
                        </label>		
                        <label for="p1_37">
                            <input type="radio" name="p1_37" id="p1_37" value="3">
                            3.	Tersedia inovasi, dilaksanakan lebih dari 1 tahun dan memberi manfaat pada masyarakat, berkelanjutan
                        </label>
                        <label for="p1_37">
                            <input type="radio" name="p1_37" id="p1_37" value="4">
                            4.	Tersedia inovasi, dilaksanakan lebih dari 1 tahun dan memberi manfaat pada masyarakat, berkelanjutan, dapat atau sudah direplikasi
                        </label>	
                        <label for="p1_37">
                            <input type="radio" name="p1_37" id="p1_37" value="5">
                            5.	Tersedia inovasi, dilaksanakan lebih dari 1 tahun dan memberi manfaat pada masyarakat, berkelanjutan, dapat atau sudah     direplikasi serta sudah diikutsertakan dalam Kompetisi Inovasi Pelayanan Publik / sudah mendapat penghargaan (nasional/internasional).
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