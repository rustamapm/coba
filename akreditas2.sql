/*
SQLyog Community v12.2.4 (64 bit)
MySQL - 10.1.30-MariaDB : Database - akreditasi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`akreditasi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `akreditasi`;

/*Table structure for table `dokumen_pendukung` */

DROP TABLE IF EXISTS `dokumen_pendukung`;

CREATE TABLE `dokumen_pendukung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokumen` varchar(200) DEFAULT NULL,
  `path_dokumen` varchar(255) DEFAULT NULL,
  `id_standar` int(11) DEFAULT NULL,
  `keterangan` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `dokumen_pendukung` */

insert  into `dokumen_pendukung`(`id`,`nama_dokumen`,`path_dokumen`,`id_standar`,`keterangan`,`created_at`) values 
(5,'es-teler.jpg','files/20190202150521_es-teler.jpg',3,'Standar 3 Dokumen 1','2019-01-29 06:46:02'),
(16,'dfd edii.PNG','files/20190202035526_dfd edii.PNG',1,'DFD','2019-02-02 09:55:26'),
(19,'sugary-restaurant-meals-cpk-springrolls.jpg','files/20190202035653_sugary-restaurant-meals-cpk-springrolls.jpg',2,'asdasd','2019-02-02 09:56:53'),
(22,'risoles.jpg','files/20190202035827_risoles.jpg',2,'asdasdasd','2019-02-02 09:58:20'),
(24,'es-cendol.jpg','files/20190202150504_es-cendol.jpg',3,'Standar 3 Dokumen 2123123','2019-02-02 20:59:50'),
(25,'es-kacang-merah.jpg','files/20190204175414_es-kacang-merah.jpg',3,'ASDASDASD','2019-02-04 23:54:14'),
(26,'ketupat-kandangan-min.jpg','files/20190204175608_ketupat-kandangan-min.jpg',4,'uduk 123','2019-02-04 23:55:17');

/*Table structure for table `jenis_kegiatan` */

DROP TABLE IF EXISTS `jenis_kegiatan`;

CREATE TABLE `jenis_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_kegiatan` */

insert  into `jenis_kegiatan`(`id`,`jenis`) values 
(1,'Seminar Ilmiah'),
(2,'Lokakarya'),
(3,'Penataran/Pelatihan'),
(4,'Workshop'),
(5,'Pagelaran'),
(6,'Pameran'),
(7,'Peragaan');

/*Table structure for table `master_penilaian` */

DROP TABLE IF EXISTS `master_penilaian`;

CREATE TABLE `master_penilaian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_butir_penilaian` varchar(20) DEFAULT NULL,
  `aspek_penilaian` text,
  `informasi_ps` text,
  `bobot` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

/*Data for the table `master_penilaian` */

insert  into `master_penilaian`(`id`,`no_butir_penilaian`,`aspek_penilaian`,`informasi_ps`,`bobot`) values 
(1,'1.1.a','Kejelasan dan kerealistikan visi, misi, tujuan, dan sasaran program studi.','Visi PS:',1.04),
(2,'1.1.b','Strategi pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen.','Sasaran …',1.04),
(3,'1.2','Sosialisasi visi-misi. Sosialisasi yang efektif tercermin dari tingkat pemahaman seluruh pemangku kepentingan internal yaitu sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan.','Sosialisasi dilakukan dengan …',1.04),
(4,'2.1','Tata pamong menjamin terwujudnya visi, terlaksananya misi, tercapainya tujuan, berhasilnya strategi yang digunakan secara kredibel, transparan, akuntabel, bertanggung jawab, dan adil.','Tata pamong …',1.39),
(5,'2.2','Karakteristik kepemimpinan yang efektif (kepemimpinan operasional, kepemimpinan organisasi, kepemimpinan publik).','Kepemimpinan PS',0.69),
(6,'2.3','Sistem pengelolaan fungsional dan operasional program studi mencakup: planning, organizing, staffing, leading, controlling yang efektif dilaksanakan.','Sistem pengelolaan PS',1.39),
(7,'2.4','Pelaksanaan penjaminan mutu di program studi.','Pelaksanaan penjaminan mutu',1.39),
(8,'2.5','Penjaringan umpan balik dan tindak lanjutnya.','Umpan balik diperoleh',0.69),
(9,'2.6','Upaya untuk menjamin keberlanjutan (sustainability) program studi.','Upaya yang dilakukan untuk keberlanjutan PS:',0.69),
(10,'3.1.1.a','Rasio calon mahasiswa yang ikut seleksi terhadap daya tampung.','Jumlah calon yang ikut seleksi = 2138,daya tampung PS = 450. Rasio calon mahasiswa yang ikut seleksi : daya tampung = 005',1.95),
(11,'3.1.1.b','Rasio mahasiswa baru reguler yang melakukan registrasi terhadap calon mahasiswa baru reguler yang lulus seleksi.','Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi = 809 / 825 = 001.',0.65),
(12,'3.1.1.c','Rasio mahasiswa baru transfer terhadap mahasiswa baru regular.','Rasio mahasiswa baru transfer terhadap mahasiswa baru bukan transfer = 0 / 809 = 000',0.65),
(13,'3.1.1.d','Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir.','Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir = 003',1.3),
(14,'3.1.2','Penerimaan mahasiswa non-reguler (selayaknya tidak membuat beban dosen sangat berat, jauh melebihi beban ideal sekitar 12 sks).','Penerimaan mahasiswa non reguler',0.65),
(15,'3.1.3','Penghargaan atas prestasi mahasiswa di bidang nalar, bakat dan minat.','Penghargaan atas prestasi mahasiswa di bidang nalar, minat, dan bakat:',1.3),
(16,'3.1.4.a','Persentase kelulusan tepat waktu.','Persentase kelulusan tepat waktu (KTW) = (3 / 180) x 100 = 002%.',1.3),
(17,'3.1.4.b','Persentase mahasiswa yang DO atau mengundurkan diri.','Persentase mahasiswa yang DO atau mengundurkan diri = 13 / 82 = 016%',0.65),
(18,'3.2.1','Layanan dan kegiatan kemahasiswaan (ragam, jenis, dan aksesibilitasnya) yang dapat dimanfaatkan untuk membina dan mengembangkan penalaran, minat, bakat, seni, dan kesejahteraan.','Jenis layanan PS kepada mahasiswa antara lain:',0.65),
(19,'3.2.2','Kualitas layanan kepada mahasiswa.','Kualitas layanan kepada mahasiswa …',0.65),
(20,'3.3.1.a','Upaya pelacakan dan perekaman data lulusan.','Upaya pelacakan dan perekaman data lulusan …',0.65),
(21,'3.3.1.b','Penggunaan hasil pelacakan untuk perbaikan: (1) proses pembelajaran, (2) penggalangan dana, (3) informasi pekerjaan, (4) membangun jejaring.','Penggunaan hasil pelacakan untuk perbaikan …',0.65),
(22,'3.3.1.c','Pendapat pengguna lulusan terhadap mutu alumni.','Pendapat pengguna terhadap kualitas alumni.Respon sangat baik = 071%, respon baik = 014%, respon cukup = 014%, dan respon kurang = 000%.',1.3),
(23,'3.3.2','Profil masa tunggu kerja pertama (dalam bulan).','Rata-rata waktu tunggu lulusan untuk memperoleh pekerjaan yang pertama = 6 bulan.',1.3),
(24,'3.3.3','Profil kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan.','Persentase lulusan yang bekerja sesuai dengan bidang keahliannya = 085%',0.65),
(25,'3.4.1','Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan akademik program studi.','Bentuk partisipasi lulusan dan alumni untuk kegiatan akademik:',0.65),
(26,'3.4.2','Bentuk partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi.','Bentuk partisipasi lulusan dan alumni untuk kegiatan non akademik:',0.65),
(27,'4.1','Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan.','Pedoman tertulis tentang sistem seleksi, perekrutan, penempatan, pengembangan, retensi, dan pemberhentian dosen dan tenaga kependidikan…',0.72),
(28,'4.2.1','Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja akademik dosen dan kinerja tenaga kependidikan.','Pedoman tertulis tentang sistem monitoring dan evaluasi, serta rekam jejak kinerja dosen dan tenaga kependidikan …',0.72),
(29,'4.2.2','Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang pendidikan, penelitian, dan pengabdian kepada masyarakat.','Pelaksanaan monitoring dan evaluasi kinerja dosen di bidang tridarma…',1.43),
(30,'4.3.1.a','Dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS.','Jumlah dosen tetap = 6 (1 S1, 2 S2, 3 S3). Persentase dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS = 083%',1.43),
(31,'4.3.1.b','Dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS.','Persentase dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS = (1 / 6) x 100% = 017%',2.15),
(32,'4.3.1.c','Dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS.','Persentase dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS = (2 / 6) x 100% = 033%',1.43),
(33,'4.3.1.d','Dosen yang memiliki Sertifikat Pendidik Profesional.','Persentase dosen yang memiliki Sertifikat Pendidik Profesional = (3 / 11) x 100% = 027%',0.72),
(34,'4.3.2','Rasio mahasiswa terhadap dosen tetap yang bidang keahliannya sesuai dengan bidang PS.','Jumlah dosen tetap = 6. Jumlah seluruh mahasiswa PS pada TS = 98. Rasio mahasiswa terhadap dosen tetap = 016',0.72),
(35,'4.3.3','Rata-rata beban dosen per semester, atau rata-rata FTE (Fulltime Teaching Equivalent). ','Rata-rata beban dosen per semester, atau rata-rata FTE (Fulltime Teaching Equivalent) = 15 sks.',0.72),
(36,'4.3.4 & 4.3.5','Kesesuaian keahlian (pendidikan terakhir) dosen dengan mata kuliah yang diajarkannya.','Sebagian besar dosen mengajar mata kuliah yang sesuai dengan bidang ilmunya.',0.72),
(37,'4.3.4 & 4.3.5','Tingkat kehadiran dosen tetap dalam mengajar.','Kehadiran dosen tetap dalam perkuliahan. Persentase kehadiran yang direalisasikan terhadap kehadiran yang direncanakan = 097%',0.72),
(38,'4.4.1','Rasio jumlah dosen tidak tetap, terhadap jumlah seluruh dosen.','Persentase jumlah dosen tidak tetap, terhadap jumlah seluruh dosen = (23 / 73) x 100% = 032%',0.72),
(39,'4.4.2.a','Kesesuaian keahlian dosen tidak tetap dengan mata kuliah yang diampu.','Sebagian besar dosen tidak tetap telah mengajar mata kuliah yang sesuai bidangnya.',0.72),
(40,'4.4.2.b','Pelaksanaan tugas atau tingkat kehadiran dosen tidak tetap dalam mengajar.','Kehadiran dosen tidak tetap dalam perkuliahan. Persentase kehadiran yang direalisasikan terhadap kehadiran yang direncanakan = 098%',0.72),
(41,'4.5.1','Kegiatan tenaga ahli/pakar sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap).','Jumlah tenaga ahli/pakar yang telah diundang sebagai pembicara dalam seminar/pelatihan, pembicara tamu = 5 orang.',0.72),
(42,'4.5.2','Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS.','Jumlah dosen tugas belajar S2 sesuai bidang PS = 4 orang, dan S3 sesuai bidang PS = 0 orang.',0.72),
(43,'4.5.3','Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/ lokakarya/ penataran/ workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri.','Jumlah dosen tetap yang bidang keahliannya sesuai bidang PS = 6 orang. Jumlah kehadiran sebagai penyaji = 0 kali. Jumlah kehadiran sebagai peserta = 19 kali. SP = (0+19/4 ) = 001',1.43),
(44,'4.5.4','Prestasi dalam mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari tingkat nasional dan internasional; besaran dan proporsi dana penelitian dari sumber institusi sendiri dan luar institusi.','Prestasi dalam mendapatkan penghargaan hibah dalam tiga tahun terakhir:',1.43),
(45,'4.5.5','Reputasi dan keluasan jejaring dosen dalam bidang akademik dan profesi.','Persentase dosen yang menjadi anggota masyarakat bidang ilmu = 015%',1.08),
(46,'4.6.1.a','Pustakawan: jumlah dan kualifikasinya.','Jumlah pustakawan = 8 orang, dengan rincian sbb:',0.72),
(47,'4.6.1.b','Laboran, analis, teknisi, operator: jumlah, kualifikasi, dan mutu kerjanya.','Jumlah tenaga laboran = , teknisi = , operator = , dan programer = .',0.72),
(48,'4.6.1.c','Tenaga administrasi: jumlah dan kualifikasinya.','Jumlah tenaga administrasi = 2, dengan rincian sebagai berikut:',0.72),
(49,'4.6.2','Upaya PS dalam meningkatkan kualifikasi dan kompetensi tenaga kependidikan.','Upaya yang telah dilakukan PS untuk meningkatkan kualifikasi dan kompetensi tenaga kependidikan antara lain:',0.72),
(50,'5.1.1.a','Struktur kurikulum (harus memuat standar kompetensi lulusan yang terstruktur dalam kompetensi utama, pendukung dan lainnya ).','Kelengkapan dan perumusan kompetensi dalam kurikulum:dengan sangat jelas',0.57),
(51,'5.1.1.b','Orientasi dan kesesuaian kurikulum dengan visi dan misi PS.','Kesesuaian kurikulum dengan visi dan misi PS dan berorientasi di masa akan datang',0.57),
(52,'5.1.2.a','Kesesuaian mata kuliah dengan standar kompetensi.','Kesesuaian mata kuliah dan urutannya dengan standar kompetensi PS:tetapi masih berorientasi ke masa kini',0.57),
(53,'5.1.2.b','Persentase mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (PR atau makalah) ? 20%.','Persentase mata kuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas-tugas (prektikum/praktek, PR atau makalah) ? 20% = (64/112) x 100% = 057%',0.57),
(54,'5.1.2.c','Matakuliah dilengkapi dengan deskripsi matakuliah, silabus dan SAP.','Persentase mata kuliah yang memiliki deskripsi, silabus dan SAP = (112/112) x 100% = 100%',0.57),
(55,'5.1.3','Fleksibilitas mata kuliah pilihan.','Rasio sks mata kuliah pilihan yang disediakan terhadap jumlah sks yang diwajibkan = (88/22) = 004 kali.',0.57),
(56,'5.1.4','Substansi praktikum dan pelaksanaan praktikum.','Substansi praktikum dan pelaksanaan praktikum.lebih dari cukup',1.14),
(57,'5.2.a','Pelaksanaan peninjauan kurikulum selama 5 tahun terakhir.','Pelaksanaan peninjauan praktikum dalam lima tahun terakhir dilakukan di PT sendiri dan adanya umpan balik diantara PS',0.57),
(58,'5.2.b','Penyesuaian kurikulum dengan perkembangan Ipteks dan kebutuhan.','Penyesuaian kurikulum dengan perkembangan Ipteks dan kebutuhan lapangan kerja.',0.57),
(59,'5.3.1.a','Pelaksanaan pembelajaran memiliki mekanisme untuk memonitor, mengkaji, dan memperbaiki secara periodik kegiatan perkuliahan (kehadiran dosen dan mahasiswa), penyusunan materi perkuliahan, serta penilaian hasil belajar.','Monitoring terhadap proses pembelajaran mencakup: (a) kehadiran mahasiswa, (b) kehadiran dosen, (c) materi kuliah.',1.14),
(60,'5.3.1.b','Mekanisme penyusunan materi perkuliahan.','Mekanisme penyusunan materi kuliah.',0.57),
(61,'5.3.2','Mutu soal ujian.','Mutu soal ujian.',0.57),
(62,'5.4.1.a','Rata-rata banyaknya mahasiswa per dosen Pembimbing Akademik per semester.','Rata-rata banyaknya mahasiswa per dosen pembimbing akademik (PA) = (80/5) = 16 mahasiswa/dosen PA.',0.57),
(63,'5.4.1.b','Pelaksanaan kegiatan pembimbingan akademik.','Pelaksanaan kegiatan pembimbingan akademik:',0.57),
(64,'5.4.1.c','Jumlah rata-rata pertemuan pembimbingan akademik per mahasiswa per semester.','Jumlah rata-rata pertemuan pembimbingan per mahasiswa per semester = 5 kali.',0.57),
(65,'5.4.2','Efektivitas kegiatan pembimbingan akademik.','Efektivitas kegiatan perwalian/pembimbingan akademik:',0.57),
(66,'5.5.1.a','Ketersediaan panduan, sosialisasi, dan penggunaan.','Ketersediaan panduan tugas akhir, sosialisasi dan konsistensi pelaksanaannya.',0.57),
(67,'5.5.1.b','Rata-rata mahasiswa per dosen pembimbing tugas akhir.','Rata-rata mahasiswa per dosen pembimbing tugas akhir = (19/7) = 003 mahasiswa/dosen TA.',0.57),
(68,'5.5.1.c','Rata-rata jumlah pertemuan/ pembimbingan selama penyelesaian TA.','Rata-rata jumlah pertemuan/pembimbingan TA = 7 kali.',0.57),
(69,'5.5.1.d','Kualifikasi akademik dosen pembimbing tugas akhir.','Kualifikasi akademik dosen pembimbing tugas akhir.',1.14),
(70,'5.5.2','Rata-rata waktu penyelesaian penulisan tugas akhir.','Dalam kurikulum, tugas akhir direncanakan selesai dalam … semester. Dalam realisasinya, rata-rata waktu penyelesaian tugas akhir = 4 bulan.',1.14),
(71,'5.6','Upaya perbaikan sistem pembelajaran yang telah dilakukan selama tiga tahun terakhir.','Upaya perbaikan sistem pembelajaran yang telah dilakukan selama tiga tahun terakhir antara lain:',0.57),
(72,'5.7.1','Kebijakan tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik).','Kebijakan tertulis tentang suasana akademik (otonomi keilmuan, kebebasan akademik, kebebasan mimbar akademik, kemitraan dosen-mahasiswa):…',0.57),
(73,'5.7.2','Ketersediaan dan jenis prasarana, sarana dan dana yang memungkinkan terciptanya interaksi akademik antara sivitas akademika.','Sarana dan prasarana yang mendukung terciptanya suasana akademik yang kondusif:…',1.14),
(74,'5.7.3','Program dan kegiatan akademik untuk menciptakan suasana akademik (seminar, simposium, lokakarya, bedah buku, penelitian bersama dll).','Program/kegiatan akademik yang mendukung terciptanya suasana akademik yang kondusif:',1.14),
(75,'5.7.4','Interaksi akademik antara dosen-mahasiswa.','Bentuk kegiatan interaksi akademik antara dosen dan mahasiswa:',0.57),
(76,'5.7.5','Pengembangan perilaku kecendekiawanan.','Bentuk kegiatan terkait pengembangan perilaku kecendekiawanan antara lain:',0.57),
(77,'6.1','Keterlibatan program studi dalam perencanaan target kinerja, perencanaan kegiatan/ kerja dan perencanaan/alokasi dan pengelolaan dana.','Keterlibatan program studi dalam perencanaan kegiatan dan pengelolaan dana:',0.67),
(78,'6.2.1','Besarnya dana (termasuk hibah) yang dikelola dalam tiga tahun terakhir.','Total dana untuk kegiatan tridarma per tahun = Rp 532 juta. Jumlah seluruh mahasiswa pada TS = 98 orang. Rata-rata besar dana operasional = Rp 005 juta/mahasiswa.',1.34),
(79,'6.2.2','Dana penelitian dalam tiga tahun terakhir.','Total dana penelitian dalam tiga tahun terakhir = Rp 325 juta. Jumlah dosen tetap dengan keahlian sesuai PS = 6 orang. Rata-rata dana penelitian per dosen per tahun = Rp 018 juta.',2.02),
(80,'6.2.3','Dana yang diperoleh dalam rangka pengabdian kepada masyarakat dalam tiga tahun terakhir.','Total dana PkM dalam tiga tahun terakhir = Rp 90 juta. Jumlah dosen tetap PS = 7 orang. Rata-rata dana PkM per dosen per tahun = Rp 004 juta.',0.67),
(81,'6.3.1','Luas ruang kerja dosen','Banyaknya dosen tetap dengan bidang sesuai PS = 11 orang, menempati ruang dosen dengan luas total 72 m2. Dengan demikian rasio luas ruang per dosen = 007 m2/dosen.',2.02),
(82,'6.3.2','Prasarana (kantor, ruang kelas, ruang laboratorium, studio, ruang perpustakaan, kebun percobaan, dsb. kecuali ruang dosen) yang dipergunakan PS dalam proses pembelajaran.','Prasarana yang dimiliki/dapat diakses oleh PS: …',2.02),
(83,'6.3.3','Prasarana lain yang menunjang (misalnya tempat olah raga, ruang bersama, ruang himpunan mahasiswa, poliklinik).','Prasarana lain yang menunjang yang dimiliki/dapat diakses oleh PS: …',0.67),
(84,'6.4.1.a','Bahan pustaka yang berupa buku teks.','Jumlah pustaka berupa buku teks yang relevan = 1837 judul.',0.17),
(85,'6.4.1.b','Bahan pustaka yang berupa disertasi/tesis/ skripsi/ tugas akhir.','Jumlah pustaka berupa disertasi/tesis/skripsi/TA = 208 eksemplar.',0.17),
(86,'6.4.1.c','Bahan pustaka yang berupa jurnal ilmiah terakreditasi Dikti.','Jumlah judul jurnal ilmiah terakreditasi Dikti = 0 judul.',0.67),
(87,'6.4.1.d','Bahan pustaka yang berupa jurnal ilmiah internasional .','Jumlah judul jurnal ilmiah internasional = 1 judul.',1.01),
(88,'6.4.1.e','Bahan pustaka yang berupa prosiding seminar dalam tiga tahun terakhir.','Banyak prosiding seminar = 67 judul.',0.17),
(89,'6.4.2','Akses ke perpustakaan di luar PT atau sumber pustaka lainnya.','Perpustakaan di luar PT yang dapat diakses antara lain: …',0.67),
(90,'6.4.3','Ketersediaan, akses dan pendayagunaan sarana utama di lab (tempat praktikum, bengkel, studio, ruang simulasi, rumah sakit, puskesmas/balai kesehatan, green house, lahan untuk pertanian, dan sejenisnya).','Ketersediaan, akses dan pendayagunaan sarana utama di laboratorium.',1.34),
(91,'6.5.1','Sistem informasi dan fasilitas yang digunakan PS dalam proses pembelajaran (hardware, software, e-learning, dan perpustakaan).','Sistem informasi dan fasilitas yang digunakan PS dalam PBM.',1.34),
(92,'6.5.2','Aksesibilitas data dalam sistem informasi.','Persentase jenis data yang dikelola manual =100%, dengan komputer tak terhubung jaringan = 000%, dengan komputer terhubung jaringan lokal = 000%, dan dengan komputer terhubung jaringan luas (internet) = 000%.',0.67),
(93,'7.1.1','Jumlah penelitian yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS per tahun, selama 3 tahun.','Penelitian dosen dalam tiga tahun terakhir. Jumlah penelitian dengan biaya LN = 0 judul, biaya luar PT = 0 judul, biaya dari PT/sendiri = 2 judul. Jumlah dosen tetap dengan bidang sesuai PS = 6 orang. Nilai Kasar (NK) = 000',3.75),
(94,'7.1.2','Keterlibatan mahasiswa yang melakukan tugas akhir dalam penelitian dosen.','Jumlah mahasiswa yang melakukan tugas akhir (TA) = 10 orang. Persentase mahasiswa tugas akhir yang terlibat dalam penelitian dosen = (0/10) x 100% = 000%.',1.88),
(95,'7.1.3','Jumlah artikel ilmiah yang dihasilkan oleh dosen tetap yang bidang keahliannya sesuai dengan PS per tahun, selama tiga tahun.','Jumlah artikel ilmiah yang dihasilkan dosen tetap yang sesuai bidang selama tiga tahun. Jumlah dosen yang terlibat dalam penulisan artikel internasional = 0 orang, nasional = 0 orang, dan bersifat lokal = 12 orang. Jumlah dosen tetap dengan bidang sesuai ?????\0\0??????\0?\0??\0??7?1\07?',3.75),
(96,'7.1.4','Karya-karya PS/institusi yang telah memperoleh perlindungan Hak atas Kekayaan Intelektual (HaKI) dalam tiga tahun terakhir.','Karya PS/institusi memperoleh perlindungan HaKI dalam 3 tahun terakhir:',1.88),
(97,'7.2.1','Jumlah kegiatan Pengabdian kepada Masyarakat (PkM) yang dilakukan oleh dosen tetap yang bidang keahliannya sesuai dengan PS.','Kegiatan PkM oleh dosen tetap yang bidang keahliannya sama dengan PS selama tiga tahun terakhir. Jumlah kegiatan PkM dengan biaya LN = 0 judul, dengan biaya luar PT = 0 judul, dan dengan biaya PT/sendiri = 4 judul. Jumlah dosen tetap dengan bidang sesuai ?????\0\0??????\0?\0??\0??8?1\08?',1.88),
(98,'7.2.2','Keterlibatan mahasiswa dalam kegiatan pengabdian kepada masyarakat.','Bentuk keterlibatan mahasiswa dalam kegiatan PkM:',1.88),
(99,'7.3.1','Kegiatan kerjasama dengan instansi di dalam negeri dalam tiga tahun terakhir.','Kegiatan kerjasama dengan instansi di DN dalam tiga tahun terakhir.',1.88),
(100,'7.3.2','Kegiatan kerjasama dengan instansi di luar negeri dalam tiga tahun terakhir.','Kegiatan kerjasama dengan instansi di LN dalam tiga tahun terakhir.',1.88);

/*Table structure for table `mata_kuliah` */

DROP TABLE IF EXISTS `mata_kuliah`;

CREATE TABLE `mata_kuliah` (
  `kode_matkul` varchar(100) NOT NULL,
  `nama_matkul` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`kode_matkul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mata_kuliah` */

insert  into `mata_kuliah`(`kode_matkul`,`nama_matkul`) values 
('KWU-001','Kewirausahaan-1'),
('KWU-002','Kewirausahaan-2'),
('KWU-003','Kewirausahaan-3'),
('MTK-001','Matematika'),
('PCS_001','Pancasila'),
('PKN-001','PKN'),
('WEB-001','Pemrograman Web'),
('WEB-002','Pemrograman Web Enterprise');

/*Table structure for table `pencapaian_mahasiswa_3tahun` */

DROP TABLE IF EXISTS `pencapaian_mahasiswa_3tahun`;

CREATE TABLE `pencapaian_mahasiswa_3tahun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tingkat` int(11) DEFAULT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `prestasi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `pencapaian_mahasiswa_3tahun` */

insert  into `pencapaian_mahasiswa_3tahun`(`id`,`id_tingkat`,`nama_kegiatan`,`waktu`,`prestasi`) values 
(1,3,'Test','2019-01-10','Test');

/*Table structure for table `penilaian` */

DROP TABLE IF EXISTS `penilaian`;

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_penilaian` int(11) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `nilaixbobot` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

/*Data for the table `penilaian` */

insert  into `penilaian`(`id`,`id_penilaian`,`nilai`,`nilaixbobot`,`created_at`,`updated_at`) values 
(1,1,1,1.04,'2019-01-29 09:24:55',NULL),
(2,2,0,0,'2019-01-29 09:24:55',NULL),
(3,3,0,0,'2019-01-29 09:24:55',NULL),
(4,4,0,0,'2019-01-29 09:24:55',NULL),
(5,5,0,0,'2019-01-29 09:24:55',NULL),
(6,6,0,0,'2019-01-29 09:24:55',NULL),
(7,7,0,0,'2019-01-29 09:24:55',NULL),
(8,8,0,0,'2019-01-29 09:24:55',NULL),
(9,9,0,0,'2019-01-29 09:24:56',NULL),
(10,10,0,0,'2019-01-29 09:24:56',NULL),
(11,11,0,0,'2019-01-29 09:24:56',NULL),
(12,12,0,0,'2019-01-29 09:24:56',NULL),
(13,13,0,0,'2019-01-29 09:24:56',NULL),
(14,14,0,0,'2019-01-29 09:24:56',NULL),
(15,15,0,0,'2019-01-29 09:24:56',NULL),
(16,16,0,0,'2019-01-29 09:24:56',NULL),
(17,17,0,0,'2019-01-29 09:24:56',NULL),
(18,18,0,0,'2019-01-29 09:24:56',NULL),
(19,19,0,0,'2019-01-29 09:24:56',NULL),
(20,20,0,0,'2019-01-29 09:24:56',NULL),
(21,21,0,0,'2019-01-29 09:24:56',NULL),
(22,22,0,0,'2019-01-29 09:24:56',NULL),
(23,23,0,0,'2019-01-29 09:24:56',NULL),
(24,24,0,0,'2019-01-29 09:24:56',NULL),
(25,25,0,0,'2019-01-29 09:24:56',NULL),
(26,26,0,0,'2019-01-29 09:24:56',NULL),
(27,27,0,0,'2019-01-29 09:24:56',NULL),
(28,28,0,0,'2019-01-29 09:24:56',NULL),
(29,29,0,0,'2019-01-29 09:24:56',NULL),
(30,30,0,0,'2019-01-29 09:24:57',NULL),
(31,31,0,0,'2019-01-29 09:24:57',NULL),
(32,32,0,0,'2019-01-29 09:24:57',NULL),
(33,33,0,0,'2019-01-29 09:24:57',NULL),
(34,34,0,0,'2019-01-29 09:24:57',NULL),
(35,35,0,0,'2019-01-29 09:24:57',NULL),
(36,36,0,0,'2019-01-29 09:24:57',NULL),
(37,37,0,0,'2019-01-29 09:24:57',NULL),
(38,38,0,0,'2019-01-29 09:24:57',NULL),
(39,39,0,0,'2019-01-29 09:24:57',NULL),
(40,40,0,0,'2019-01-29 09:24:57',NULL),
(41,41,0,0,'2019-01-29 09:24:57',NULL),
(42,42,0,0,'2019-01-29 09:24:57',NULL),
(43,43,0,0,'2019-01-29 09:24:57',NULL),
(44,44,0,0,'2019-01-29 09:24:57',NULL),
(45,45,0,0,'2019-01-29 09:24:57',NULL),
(46,46,0,0,'2019-01-29 09:24:57',NULL),
(47,47,0,0,'2019-01-29 09:24:57',NULL),
(48,48,0,0,'2019-01-29 09:24:57',NULL),
(49,49,0,0,'2019-01-29 09:24:58',NULL),
(50,50,0,0,'2019-01-29 09:24:58',NULL),
(51,51,0,0,'2019-01-29 09:24:58',NULL),
(52,52,0,0,'2019-01-29 09:24:58',NULL),
(53,53,0,0,'2019-01-29 09:24:58',NULL),
(54,54,0,0,'2019-01-29 09:24:58',NULL),
(55,55,0,0,'2019-01-29 09:24:58',NULL),
(56,56,0,0,'2019-01-29 09:24:58',NULL),
(57,57,0,0,'2019-01-29 09:24:58',NULL),
(58,58,0,0,'2019-01-29 09:24:58',NULL),
(59,59,0,0,'2019-01-29 09:24:58',NULL),
(60,60,0,0,'2019-01-29 09:24:58',NULL),
(61,61,0,0,'2019-01-29 09:24:58',NULL),
(62,62,0,0,'2019-01-29 09:24:58',NULL),
(63,63,0,0,'2019-01-29 09:24:58',NULL),
(64,64,0,0,'2019-01-29 09:24:58',NULL),
(65,65,0,0,'2019-01-29 09:24:58',NULL),
(66,66,0,0,'2019-01-29 09:24:58',NULL),
(67,67,0,0,'2019-01-29 09:24:58',NULL),
(68,68,0,0,'2019-01-29 09:24:58',NULL),
(69,69,0,0,'2019-01-29 09:24:58',NULL),
(70,70,0,0,'2019-01-29 09:24:59',NULL),
(71,71,0,0,'2019-01-29 09:24:59',NULL),
(72,72,0,0,'2019-01-29 09:24:59',NULL),
(73,73,0,0,'2019-01-29 09:24:59',NULL),
(74,74,0,0,'2019-01-29 09:24:59',NULL),
(75,75,0,0,'2019-01-29 09:24:59',NULL),
(76,76,0,0,'2019-01-29 09:24:59',NULL),
(77,77,0,0,'2019-01-29 09:24:59',NULL),
(78,78,0,0,'2019-01-29 09:24:59',NULL),
(79,79,0,0,'2019-01-29 09:24:59',NULL),
(80,80,0,0,'2019-01-29 09:24:59',NULL),
(81,81,0,0,'2019-01-29 09:24:59',NULL),
(82,82,0,0,'2019-01-29 09:24:59',NULL),
(83,83,0,0,'2019-01-29 09:24:59',NULL),
(84,84,0,0,'2019-01-29 09:24:59',NULL),
(85,85,0,0,'2019-01-29 09:24:59',NULL),
(86,86,0,0,'2019-01-29 09:24:59',NULL),
(87,87,0,0,'2019-01-29 09:24:59',NULL),
(88,88,0,0,'2019-01-29 09:25:00',NULL),
(89,89,0,0,'2019-01-29 09:25:00',NULL),
(90,90,0,0,'2019-01-29 09:25:00',NULL),
(91,91,0,0,'2019-01-29 09:25:00',NULL),
(92,92,0,0,'2019-01-29 09:25:00',NULL),
(93,93,0,0,'2019-01-29 09:25:00',NULL),
(94,94,0,0,'2019-01-29 09:25:00',NULL),
(95,95,0,0,'2019-01-29 09:25:00',NULL),
(96,96,0,0,'2019-01-29 09:25:00',NULL),
(97,97,0,0,'2019-01-29 09:25:00',NULL),
(98,98,0,0,'2019-01-29 09:25:00',NULL),
(99,99,0,0,'2019-01-29 09:25:00',NULL),
(100,100,0,0,'2019-01-29 09:25:00',NULL);

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `role` */

insert  into `role`(`id`,`nama_role`) values 
(1,'Admin'),
(2,'Kaprodi'),
(3,'Asesor'),
(4,'Time Akreditasi');

/*Table structure for table `standar` */

DROP TABLE IF EXISTS `standar`;

CREATE TABLE `standar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_standar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar` */

/*Table structure for table `standar1` */

DROP TABLE IF EXISTS `standar1`;

CREATE TABLE `standar1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mekanisme_penyusunan` text,
  `visi` text,
  `misi` text,
  `tujuan` text,
  `strategi_pencapaian` text,
  `sosialisasi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `standar1` */

insert  into `standar1`(`id`,`mekanisme_penyusunan`,`visi`,`misi`,`tujuan`,`strategi_pencapaian`,`sosialisasi`) values 
(1,'Test','Test','Test','Test','Test','test');

/*Table structure for table `standar2` */

DROP TABLE IF EXISTS `standar2`;

CREATE TABLE `standar2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tata_pamong` text,
  `kepemimpinan` text,
  `sistem_pengelolaan` text,
  `isi_umpan_balik_dosen` text,
  `isi_umpan_balik_mhs` text,
  `isi_umpan_balik_alumni` text,
  `isi_umpan_balik_lulusan` text,
  `tindak_lanjut_dosen` text,
  `tindak_lanjut_mhs` text,
  `tindak_lanjut_alumni` text,
  `tindak_lanjut_lulusan` text,
  `upaya_animo` text,
  `upaya_mutu_manajemen` text,
  `upaya_mutu_lulusan` text,
  `upaya_kemitraan` text,
  `upaya_dana_hibah` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `standar2` */

insert  into `standar2`(`id`,`tata_pamong`,`kepemimpinan`,`sistem_pengelolaan`,`isi_umpan_balik_dosen`,`isi_umpan_balik_mhs`,`isi_umpan_balik_alumni`,`isi_umpan_balik_lulusan`,`tindak_lanjut_dosen`,`tindak_lanjut_mhs`,`tindak_lanjut_alumni`,`tindak_lanjut_lulusan`,`upaya_animo`,`upaya_mutu_manajemen`,`upaya_mutu_lulusan`,`upaya_kemitraan`,`upaya_dana_hibah`) values 
(1,'Test 123','Test 123','Test 123','Test123123','Test123123','Test123123','Test123123','Test123123','Test123123','Test123123','Test123123','Test123123','Test123123','Test123123','Test123123','Test123123');

/*Table structure for table `standar3` */

DROP TABLE IF EXISTS `standar3`;

CREATE TABLE `standar3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hasil_pihak_pengguna` int(1) DEFAULT NULL,
  `tindak_lanjut` text,
  `hasil_aktivitas_himpunan` text,
  `rata_waktu_pekerjaan` int(11) DEFAULT NULL,
  `data_waktu_pekerjaan` text,
  `persen_kerja_sesuai` double DEFAULT NULL,
  `data_kerja_sesuai` text,
  `himpunan_alumni` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `standar3` */

insert  into `standar3`(`id`,`hasil_pihak_pengguna`,`tindak_lanjut`,`hasil_aktivitas_himpunan`,`rata_waktu_pekerjaan`,`data_waktu_pekerjaan`,`persen_kerja_sesuai`,`data_kerja_sesuai`,`himpunan_alumni`) values 
(1,1,'asdasdasdasd',NULL,12,'asdasdasasd',20,'123123123123','asdasdasdasdasd'),
(2,0,'',NULL,0,'',0,'','');

/*Table structure for table `standar3_hasil_pelacakan` */

DROP TABLE IF EXISTS `standar3_hasil_pelacakan`;

CREATE TABLE `standar3_hasil_pelacakan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kemampuan` varchar(255) DEFAULT NULL,
  `tgp_sangat_baik` double DEFAULT NULL,
  `tgp_baik` double DEFAULT NULL,
  `tgp_cukup` double DEFAULT NULL,
  `tgp_kurang` double DEFAULT NULL,
  `rencana_tindak_lanjut` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `standar3_hasil_pelacakan` */

insert  into `standar3_hasil_pelacakan`(`id`,`jenis_kemampuan`,`tgp_sangat_baik`,`tgp_baik`,`tgp_cukup`,`tgp_kurang`,`rencana_tindak_lanjut`) values 
(1,'Integritas (etika dan moral)',30,30,30,30,'asdasd'),
(2,'Keahlian berdasarkan bidang ilmu (profesionalisme)',30,30,30,30,'asdasd'),
(3,'Bahasa Inggris',30,30,30,30,'asdasd'),
(4,'Penggunaan Teknologi Informasi',0,0,0,0,''),
(5,'Komunikasi',30,0,0,0,''),
(6,'Kerjasama tim',0,0,0,0,''),
(7,'Pengembangan diri',0,0,0,0,'');

/*Table structure for table `standar3_layanan_mahasiswa` */

DROP TABLE IF EXISTS `standar3_layanan_mahasiswa`;

CREATE TABLE `standar3_layanan_mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pelayanan` varchar(255) DEFAULT NULL,
  `kegiatan` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `standar3_layanan_mahasiswa` */

insert  into `standar3_layanan_mahasiswa`(`id`,`jenis_pelayanan`,`kegiatan`,`created_at`,`updated_at`) values 
(1,'Bimbingan dan Konseling','asdasdasdas123','2019-01-28 21:54:23','0000-00-00 00:00:00'),
(2,'Minat dan bakat (ekstra kulikuler)','asdasdasdasdasd123','2019-01-28 21:54:36','0000-00-00 00:00:00'),
(3,'Pembinaan soft skills','asdasdasdasdasdasdasd123','2019-01-28 21:54:47','0000-00-00 00:00:00'),
(4,'Beasiswa','asdasdasdasdasdasdasdasdasd123','2019-01-28 21:54:53','0000-00-00 00:00:00'),
(5,'Kesehatan','asdasdasdasdasdasdasdasdasdasdasdasdasd123','2019-01-29 05:52:01','0000-00-00 00:00:00');

/*Table structure for table `standar3_mahasiswa_non_reguler` */

DROP TABLE IF EXISTS `standar3_mahasiswa_non_reguler`;

CREATE TABLE `standar3_mahasiswa_non_reguler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_akademik` varchar(20) DEFAULT NULL,
  `daya_tampung` varchar(20) DEFAULT NULL,
  `calon_ikut` int(11) DEFAULT NULL,
  `calon_lulus` int(11) DEFAULT NULL,
  `baru_non_reguler` int(11) DEFAULT NULL,
  `baru_transfer` int(11) DEFAULT NULL,
  `total_non_reguler` int(11) DEFAULT NULL,
  `total_transfer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `standar3_mahasiswa_non_reguler` */

insert  into `standar3_mahasiswa_non_reguler`(`id`,`tahun_akademik`,`daya_tampung`,`calon_ikut`,`calon_lulus`,`baru_non_reguler`,`baru_transfer`,`total_non_reguler`,`total_transfer`) values 
(1,'TS-4','12',0,0,0,0,0,0),
(2,'TS-3','12',0,0,0,0,0,0),
(3,'TS-2','2',0,0,0,0,0,0),
(4,'TS-1','12',0,0,0,0,0,0),
(5,'TS','12',0,0,0,0,0,0);

/*Table structure for table `standar3_mahasiswa_reg_7tahun` */

DROP TABLE IF EXISTS `standar3_mahasiswa_reg_7tahun`;

CREATE TABLE `standar3_mahasiswa_reg_7tahun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_masuk` varchar(20) DEFAULT NULL,
  `jumlah_ts6` int(11) DEFAULT NULL,
  `jumlah_ts5` int(11) DEFAULT NULL,
  `jumlah_ts4` int(11) DEFAULT NULL,
  `jumlah_ts3` int(11) DEFAULT NULL,
  `jumlah_ts2` int(11) DEFAULT NULL,
  `jumlah_ts1` int(11) DEFAULT NULL,
  `jumlah_ts` int(11) DEFAULT NULL,
  `jumlah_lulusan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `standar3_mahasiswa_reg_7tahun` */

insert  into `standar3_mahasiswa_reg_7tahun`(`id`,`tahun_masuk`,`jumlah_ts6`,`jumlah_ts5`,`jumlah_ts4`,`jumlah_ts3`,`jumlah_ts2`,`jumlah_ts1`,`jumlah_ts`,`jumlah_lulusan`) values 
(1,'TS-6',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(2,'TS-5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(3,'TS-4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(4,'TS-3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(5,'TS-2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(6,'TS-1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(7,'TS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `standar3_mahasiswa_reguler` */

DROP TABLE IF EXISTS `standar3_mahasiswa_reguler`;

CREATE TABLE `standar3_mahasiswa_reguler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_akademik` varchar(20) DEFAULT NULL,
  `daya_tampung` varchar(20) DEFAULT NULL,
  `reguler_ikut` int(11) DEFAULT NULL,
  `reguler_lulus` int(11) DEFAULT NULL,
  `baru_reguler` int(11) DEFAULT NULL,
  `baru_transfer` int(11) DEFAULT NULL,
  `total_reguler` int(11) DEFAULT NULL,
  `total_transfer` int(11) DEFAULT NULL,
  `lulusan_reguler` int(11) DEFAULT NULL,
  `lulusan_transfer` int(11) DEFAULT NULL,
  `ipk_min` double DEFAULT NULL,
  `ipk_rat` double DEFAULT NULL,
  `ipk_mak` double DEFAULT NULL,
  `ipk_275` double DEFAULT NULL,
  `ipk_275_350` double DEFAULT NULL,
  `ipk_350` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `standar3_mahasiswa_reguler` */

insert  into `standar3_mahasiswa_reguler`(`id`,`tahun_akademik`,`daya_tampung`,`reguler_ikut`,`reguler_lulus`,`baru_reguler`,`baru_transfer`,`total_reguler`,`total_transfer`,`lulusan_reguler`,`lulusan_transfer`,`ipk_min`,`ipk_rat`,`ipk_mak`,`ipk_275`,`ipk_275_350`,`ipk_350`) values 
(1,'TS-4','12',12,12,12,12,12,12,12,122,12,12,12,12,12,12),
(2,'TS-3','12',12,12,12,12,12,12,12,12,12,12,12,12,0,0),
(3,'TS-2','12',12,12,32,0,0,0,0,0,0,0,0,0,0,0),
(4,'TS-1','',0,0,0,0,0,0,0,0,0,0,0,0,0,0),
(5,'TS','',0,0,0,0,0,0,0,0,0,0,0,0,0,0);

/*Table structure for table `standar4` */

DROP TABLE IF EXISTS `standar4`;

CREATE TABLE `standar4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sistem_seleksi_pengembangan` text,
  `monitoring_evaluasi` text,
  `upaya_dilakukan_ps` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `standar4` */

insert  into `standar4`(`id`,`sistem_seleksi_pengembangan`,`monitoring_evaluasi`,`upaya_dilakukan_ps`) values 
(1,'Test','Test','Test');

/*Table structure for table `standar4_aktivitas_dosen` */

DROP TABLE IF EXISTS `standar4_aktivitas_dosen`;

CREATE TABLE `standar4_aktivitas_dosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(200) DEFAULT NULL,
  `bidang_keahlian` varchar(255) DEFAULT NULL,
  `kode_mata_kuliah` varchar(100) DEFAULT NULL,
  `jumlah_kelas` int(11) DEFAULT NULL,
  `jumlah_pertemuan_rencana` int(11) DEFAULT NULL,
  `jumlah_pertemuan_laksana` int(11) DEFAULT NULL,
  `jenis_dosen` int(1) DEFAULT NULL COMMENT '0 = tidak tetap; 1 = tetap',
  `type_ps` int(1) DEFAULT NULL COMMENT '0 = luar ps; 1 = ps;',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `standar4_aktivitas_dosen` */

insert  into `standar4_aktivitas_dosen`(`id`,`nama_dosen`,`bidang_keahlian`,`kode_mata_kuliah`,`jumlah_kelas`,`jumlah_pertemuan_rencana`,`jumlah_pertemuan_laksana`,`jenis_dosen`,`type_ps`) values 
(1,'Dosen Tttp','Mantap','KWU-002',3,8,9,1,1),
(2,'Test','Test','MTK-001',12,12,12,1,0),
(3,'Blur 2','2918988','KWU-001',98,88,77,0,1);

/*Table structure for table `standar4_dosen` */

DROP TABLE IF EXISTS `standar4_dosen`;

CREATE TABLE `standar4_dosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(255) DEFAULT NULL,
  `nidn` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jabatan_akademik` varchar(150) DEFAULT NULL,
  `gelar_akademik` varchar(150) DEFAULT NULL,
  `pendidikan` varchar(200) DEFAULT NULL,
  `asal_pt` varchar(200) DEFAULT NULL,
  `bidang_keahlian` varchar(200) DEFAULT NULL,
  `jenis_dosen` int(1) DEFAULT NULL COMMENT '0 = tidak tetap; 1 = tetap',
  `type_ps` int(1) DEFAULT NULL COMMENT '0 = luar ps; 1 = ps',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `standar4_dosen` */

insert  into `standar4_dosen`(`id`,`nama_dosen`,`nidn`,`tgl_lahir`,`jabatan_akademik`,`gelar_akademik`,`pendidikan`,`asal_pt`,`bidang_keahlian`,`jenis_dosen`,`type_ps`) values 
(1,'Dandy','123123123','2019-02-05','Prodi','S2','S2','Koppedi','Mantap',1,1),
(2,'Dandy 2','123123444','2019-02-13','Prodi 2','S22 ','S3','Koppedi 2','Kepo 123',1,0),
(5,'Dans','123444','2019-02-05','Prodi 4','S4','S2','Koppee','Kope',1,0),
(6,'Blur','123090','2019-02-13','Kepo','Kepo','S2','PT Coba','Kepo bet',0,1);

/*Table structure for table `standar4_kegiatan_dosen_tetap` */

DROP TABLE IF EXISTS `standar4_kegiatan_dosen_tetap`;

CREATE TABLE `standar4_kegiatan_dosen_tetap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(255) DEFAULT NULL,
  `id_jenis_kegiatan` int(11) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `sebagai` varchar(1) DEFAULT NULL COMMENT '0 = penyaji; 0 = peserta',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `standar4_kegiatan_dosen_tetap` */

insert  into `standar4_kegiatan_dosen_tetap`(`id`,`nama_dosen`,`id_jenis_kegiatan`,`tempat`,`waktu`,`sebagai`) values 
(1,'Dosen 1',3,'Malang','2019-02-12','0');

/*Table structure for table `standar4_keikutsertaan_dosen` */

DROP TABLE IF EXISTS `standar4_keikutsertaan_dosen`;

CREATE TABLE `standar4_keikutsertaan_dosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(255) DEFAULT NULL,
  `nama_organisasi` varchar(200) DEFAULT NULL,
  `kurun_waktu` varchar(100) DEFAULT NULL,
  `id_tingkat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `standar4_keikutsertaan_dosen` */

insert  into `standar4_keikutsertaan_dosen`(`id`,`nama_dosen`,`nama_organisasi`,`kurun_waktu`,`id_tingkat`) values 
(1,'Dosen 2','Kepo','4 Tahun',1);

/*Table structure for table `standar4_peningkatan_kemampuan_ps` */

DROP TABLE IF EXISTS `standar4_peningkatan_kemampuan_ps`;

CREATE TABLE `standar4_peningkatan_kemampuan_ps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(200) DEFAULT NULL,
  `jenjang_pendidikan_lanjut` varchar(100) DEFAULT NULL,
  `bidang_studi` varchar(200) DEFAULT NULL,
  `perguruan_tinggi` varchar(200) DEFAULT NULL,
  `negara` varchar(200) DEFAULT NULL,
  `tahun_mulai` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `standar4_peningkatan_kemampuan_ps` */

insert  into `standar4_peningkatan_kemampuan_ps`(`id`,`nama_dosen`,`jenjang_pendidikan_lanjut`,`bidang_studi`,`perguruan_tinggi`,`negara`,`tahun_mulai`) values 
(1,'Dosen 1','SMA','SMA','SMA','Indonesia','2012');

/*Table structure for table `standar4_prestasi_dosen` */

DROP TABLE IF EXISTS `standar4_prestasi_dosen`;

CREATE TABLE `standar4_prestasi_dosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(255) DEFAULT NULL,
  `prestasi` varchar(255) DEFAULT NULL,
  `waktu_pencapaian` varchar(100) DEFAULT NULL,
  `id_tingkat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `standar4_prestasi_dosen` */

insert  into `standar4_prestasi_dosen`(`id`,`nama_dosen`,`prestasi`,`waktu_pencapaian`,`id_tingkat`) values 
(1,'asdasd123','123123','123123',1);

/*Table structure for table `standar4_tenaga_pendidikan` */

DROP TABLE IF EXISTS `standar4_tenaga_pendidikan`;

CREATE TABLE `standar4_tenaga_pendidikan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_tenaga` varchar(200) DEFAULT NULL,
  `jumlah_s3` int(11) DEFAULT NULL,
  `jumlah_s2` int(11) DEFAULT NULL,
  `jumlah_s1` int(11) DEFAULT NULL,
  `jumlah_d4` int(11) DEFAULT NULL,
  `jumlah_d3` int(11) DEFAULT NULL,
  `jumlah_d2` int(11) DEFAULT NULL,
  `jumlah_d1` int(11) DEFAULT NULL,
  `jumlah_sma_smk` int(11) DEFAULT NULL,
  `unit_kerja` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `standar4_tenaga_pendidikan` */

insert  into `standar4_tenaga_pendidikan`(`id`,`jenis_tenaga`,`jumlah_s3`,`jumlah_s2`,`jumlah_s1`,`jumlah_d4`,`jumlah_d3`,`jumlah_d2`,`jumlah_d1`,`jumlah_sma_smk`,`unit_kerja`) values 
(1,'Pustakawan',122,12,12,12,12,12,12,12,'Kepo'),
(2,'Laporan/ Teknisi/ Analisi/ Operator/ Programmer',122,15,17,81,99,81,77,12,'Kepo 2'),
(3,'Administrasi',72,90,21,23,334,1,12,12,'Kepo 3');

/*Table structure for table `standar4_tenagaahli_pembicara` */

DROP TABLE IF EXISTS `standar4_tenagaahli_pembicara`;

CREATE TABLE `standar4_tenagaahli_pembicara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tenaga` varchar(200) DEFAULT NULL,
  `nama_judul` varchar(255) DEFAULT NULL,
  `waktu_pelaksanaan` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `standar4_tenagaahli_pembicara` */

insert  into `standar4_tenagaahli_pembicara`(`id`,`nama_tenaga`,`nama_judul`,`waktu_pelaksanaan`) values 
(1,'Samsul','Apa yaa','2019-01-29'),
(2,'Sams','Apa yaa 2','2019-02-19'),
(3,'Ngeng','Ngeng','2019-02-13'),
(5,'Ngeng 3','Ngeng 3','2019-01-29');

/*Table structure for table `standar5` */

DROP TABLE IF EXISTS `standar5`;

CREATE TABLE `standar5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kompetensi_utama` text,
  `kompetensi_pendukung` text,
  `kompetensi_lainnya` text,
  `sks_minimum_kelulusan` int(11) DEFAULT NULL,
  `mekanisme_peninjauan_kurikulum` text,
  `mekanisme_penyusunan_materi` text,
  `rata_banyak_mahasiswa` text,
  `rata_jumlah_pertemuan` text,
  `ketersediaan_panduan` int(1) DEFAULT NULL,
  `cara_sosialisasi` text,
  `rata_lama_penyelesaian_ta` int(11) DEFAULT NULL,
  `tugas_akhir_direncanakan` int(11) DEFAULT NULL,
  `rata_lama_penyelesaian_ta_ket` text,
  `kebijakan_suasana_akademik` text,
  `ketersediaan_jenis_prasarana` text,
  `program_dan_kegiatan` text,
  `interaksi_akademik` text,
  `pengembangan_perilaku` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar5` */

/*Table structure for table `standar5_dosen_mahasiswa_ta` */

DROP TABLE IF EXISTS `standar5_dosen_mahasiswa_ta`;

CREATE TABLE `standar5_dosen_mahasiswa_ta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(200) DEFAULT NULL,
  `jumlah_mahasiswa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar5_dosen_mahasiswa_ta` */

/*Table structure for table `standar5_dosen_pembimbing` */

DROP TABLE IF EXISTS `standar5_dosen_pembimbing`;

CREATE TABLE `standar5_dosen_pembimbing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(200) DEFAULT NULL,
  `jumlah_mahasiswa` int(11) DEFAULT NULL,
  `rata_pertemuan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar5_dosen_pembimbing` */

/*Table structure for table `standar5_hasil_peninjauan_kurikulum` */

DROP TABLE IF EXISTS `standar5_hasil_peninjauan_kurikulum`;

CREATE TABLE `standar5_hasil_peninjauan_kurikulum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_mk` varchar(100) DEFAULT NULL,
  `mk_baru_lama_hapus` int(1) DEFAULT NULL COMMENT '0 = lama, 1 = baru, 2 = hapus',
  `perubahan_silabus` varchar(100) DEFAULT NULL,
  `perubahan_buku_ajar` varchar(100) DEFAULT NULL,
  `alasan_peninjauan` varchar(255) DEFAULT NULL,
  `atas_usul_dari` varchar(255) DEFAULT NULL,
  `berlaku_mulai` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar5_hasil_peninjauan_kurikulum` */

/*Table structure for table `standar5_jumlah_sks_ps_min` */

DROP TABLE IF EXISTS `standar5_jumlah_sks_ps_min`;

CREATE TABLE `standar5_jumlah_sks_ps_min` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_matkul` int(1) DEFAULT '0' COMMENT '0 = pilihan; 1 = wajib',
  `sks` varchar(100) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar5_jumlah_sks_ps_min` */

/*Table structure for table `standar5_matkul_dilaksanakan` */

DROP TABLE IF EXISTS `standar5_matkul_dilaksanakan`;

CREATE TABLE `standar5_matkul_dilaksanakan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(10) DEFAULT NULL,
  `kode_mk` varchar(100) DEFAULT NULL,
  `bobot_sks` int(11) DEFAULT NULL,
  `bobot_tugas` int(11) DEFAULT NULL,
  `pengelola` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar5_matkul_dilaksanakan` */

/*Table structure for table `standar5_proses_pembimbingan` */

DROP TABLE IF EXISTS `standar5_proses_pembimbingan`;

CREATE TABLE `standar5_proses_pembimbingan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hal` varchar(255) DEFAULT NULL,
  `penjelasan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar5_proses_pembimbingan` */

/*Table structure for table `standar5_upaya_perbaikan_pembelajaran` */

DROP TABLE IF EXISTS `standar5_upaya_perbaikan_pembelajaran`;

CREATE TABLE `standar5_upaya_perbaikan_pembelajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `butir` varchar(255) DEFAULT NULL,
  `tindakan` text,
  `hasil` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar5_upaya_perbaikan_pembelajaran` */

/*Table structure for table `standar6` */

DROP TABLE IF EXISTS `standar6`;

CREATE TABLE `standar6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keterlibatan_ps` text,
  `sistem_informasi_prodi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar6` */

/*Table structure for table `standar6_aksesibilitas` */

DROP TABLE IF EXISTS `standar6_aksesibilitas`;

CREATE TABLE `standar6_aksesibilitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_data` varchar(200) DEFAULT NULL,
  `manual` varchar(1) DEFAULT NULL,
  `tanpa_jaringan` varchar(1) DEFAULT NULL,
  `jaringan_lokal` varchar(1) DEFAULT NULL,
  `jaringan_luas` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar6_aksesibilitas` */

/*Table structure for table `standar6_dana` */

DROP TABLE IF EXISTS `standar6_dana`;

CREATE TABLE `standar6_dana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` int(11) DEFAULT NULL,
  `judul_penelitian` varchar(255) DEFAULT NULL,
  `sumber_jenis_dana` varchar(255) DEFAULT NULL,
  `jumlah_dana` int(11) DEFAULT NULL,
  `type` int(10) DEFAULT NULL COMMENT '622 dan 623',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar6_dana` */

/*Table structure for table `standar6_data_prasarana` */

DROP TABLE IF EXISTS `standar6_data_prasarana`;

CREATE TABLE `standar6_data_prasarana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_prasarana` varchar(255) DEFAULT NULL,
  `jumlah_unit` int(11) DEFAULT NULL,
  `total_luas` double DEFAULT NULL,
  `kepemilikan` varchar(2) DEFAULT NULL,
  `kondisi` varchar(1) DEFAULT NULL,
  `utilisasi` varchar(100) DEFAULT NULL,
  `unit_pengelola` varchar(255) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar6_data_prasarana` */

/*Table structure for table `standar6_jurnal_tersedia` */

DROP TABLE IF EXISTS `standar6_jurnal_tersedia`;

CREATE TABLE `standar6_jurnal_tersedia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_jurnal` varchar(1) DEFAULT NULL,
  `nama_jurnal` varchar(255) DEFAULT NULL,
  `rincian_tahun_nomor` varchar(200) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar6_jurnal_tersedia` */

/*Table structure for table `standar6_penggunaan_dana` */

DROP TABLE IF EXISTS `standar6_penggunaan_dana`;

CREATE TABLE `standar6_penggunaan_dana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_penggunaan` varchar(255) DEFAULT NULL,
  `ts-2` double DEFAULT NULL,
  `ts-1` double DEFAULT NULL,
  `ts` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar6_penggunaan_dana` */

/*Table structure for table `standar6_peralatan_lab` */

DROP TABLE IF EXISTS `standar6_peralatan_lab`;

CREATE TABLE `standar6_peralatan_lab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lab` varchar(255) DEFAULT NULL,
  `jenis_peralatan_utama` varchar(255) DEFAULT NULL,
  `jumlah_unit` int(11) DEFAULT NULL,
  `kepemilikan` varchar(1) DEFAULT NULL,
  `kondisi` varchar(1) DEFAULT NULL,
  `rata_penggunaan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar6_peralatan_lab` */

/*Table structure for table `standar6_realisasi_alokasi_dana` */

DROP TABLE IF EXISTS `standar6_realisasi_alokasi_dana`;

CREATE TABLE `standar6_realisasi_alokasi_dana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sumber_dana` varchar(200) DEFAULT NULL,
  `jenis_dana` varchar(255) DEFAULT NULL,
  `ts-2` int(11) DEFAULT NULL,
  `ts-1` int(11) DEFAULT NULL,
  `ts` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar6_realisasi_alokasi_dana` */

/*Table structure for table `standar6_rekapitulasi_pustaka` */

DROP TABLE IF EXISTS `standar6_rekapitulasi_pustaka`;

CREATE TABLE `standar6_rekapitulasi_pustaka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pustaka` varchar(255) DEFAULT NULL,
  `jumlah_judul` int(11) DEFAULT NULL,
  `jumlah_copy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar6_rekapitulasi_pustaka` */

/*Table structure for table `standar6_ruangkerja_dosentetap` */

DROP TABLE IF EXISTS `standar6_ruangkerja_dosentetap`;

CREATE TABLE `standar6_ruangkerja_dosentetap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruang_kerja` varchar(255) DEFAULT NULL,
  `jumlah_ruang` int(11) DEFAULT NULL,
  `jumlah_luas` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar6_ruangkerja_dosentetap` */

/*Table structure for table `standar6_sumber_pustakalain` */

DROP TABLE IF EXISTS `standar6_sumber_pustakalain`;

CREATE TABLE `standar6_sumber_pustakalain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar6_sumber_pustakalain` */

/*Table structure for table `standar7` */

DROP TABLE IF EXISTS `standar7`;

CREATE TABLE `standar7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mahasiswa_terlibat_penelitian` varchar(1) DEFAULT NULL,
  `banyak_ikut` int(11) DEFAULT NULL,
  `jumlah_mahasiswa_ta` int(11) DEFAULT NULL,
  `mahasiswa_dilibat_pelayanan_mas` varchar(1) DEFAULT NULL,
  `tingkat_partisipasi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar7` */

/*Table structure for table `standar7_instansi_kerjasama` */

DROP TABLE IF EXISTS `standar7_instansi_kerjasama`;

CREATE TABLE `standar7_instansi_kerjasama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_instansi` varchar(255) DEFAULT NULL,
  `jenis_kegiatan` varchar(200) DEFAULT NULL,
  `mulai` varchar(10) DEFAULT NULL,
  `akhir` varchar(10) DEFAULT NULL,
  `manfaat` text,
  `type` varchar(1) DEFAULT NULL COMMENT '0 = dalam negeri; 1 = luar negeri;',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar7_instansi_kerjasama` */

/*Table structure for table `standar7_judul_artikel_3tahun` */

DROP TABLE IF EXISTS `standar7_judul_artikel_3tahun`;

CREATE TABLE `standar7_judul_artikel_3tahun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `nama_dosen` varchar(200) DEFAULT NULL,
  `dipublikasipada` varchar(200) DEFAULT NULL,
  `tahun_penyajian` varchar(20) DEFAULT NULL,
  `tingkat` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar7_judul_artikel_3tahun` */

/*Table structure for table `standar7_judul_penelitian_ps` */

DROP TABLE IF EXISTS `standar7_judul_penelitian_ps`;

CREATE TABLE `standar7_judul_penelitian_ps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sumber_pembiayaan` varchar(200) DEFAULT NULL,
  `TS-2` int(11) DEFAULT NULL,
  `TS-1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar7_judul_penelitian_ps` */

/*Table structure for table `standar7_karya_haki` */

DROP TABLE IF EXISTS `standar7_karya_haki`;

CREATE TABLE `standar7_karya_haki` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `karya` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar7_karya_haki` */

/*Table structure for table `standar7_kegiatan_pengabdian` */

DROP TABLE IF EXISTS `standar7_kegiatan_pengabdian`;

CREATE TABLE `standar7_kegiatan_pengabdian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sumber_dana` varchar(255) DEFAULT NULL,
  `TS-2` int(11) DEFAULT NULL,
  `TS-1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `standar7_kegiatan_pengabdian` */

/*Table structure for table `tingkat_prestasi` */

DROP TABLE IF EXISTS `tingkat_prestasi`;

CREATE TABLE `tingkat_prestasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tingkat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tingkat_prestasi` */

insert  into `tingkat_prestasi`(`id`,`tingkat`) values 
(1,'Lokal'),
(2,'Wilayah'),
(3,'Nasional'),
(4,'Internasional');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`role`,`created_at`) values 
(1,'admin','5f4dcc3b5aa765d61d8327deb882cf99',1,'2019-01-27 20:04:09'),
(2,'Kaprodi','5f4dcc3b5aa765d61d8327deb882cf99',2,'2019-01-28 00:23:25'),
(3,'AsesorInternal','5f4dcc3b5aa765d61d8327deb882cf99',3,'2019-01-28 00:23:32'),
(4,'Dosen1','5f4dcc3b5aa765d61d8327deb882cf99',4,'2019-01-28 00:23:38'),
(5,'Dosen2','5f4dcc3b5aa765d61d8327deb882cf99',4,'2019-01-28 00:23:43');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
