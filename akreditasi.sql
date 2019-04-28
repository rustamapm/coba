/*
SQLyog Community v12.2.4 (64 bit)
MySQL - 10.1.25-MariaDB : Database - akreditasi
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `dokumen_pendukung` */

insert  into `dokumen_pendukung`(`id`,`nama_dokumen`,`path_dokumen`,`id_standar`,`keterangan`,`created_at`) values 
(2,'01INV17070855 (2).pdf','files/20190127164017_01INV17070855 (2).pdf',1,'Test File 1','2019-01-27 22:40:17'),
(3,'01INV17070855 (3).pdf','files/20190127164029_01INV17070855 (3).pdf',1,'Test File 2','2019-01-27 22:40:29'),
(4,'01INV18020707_05-02-2018 (1).pdf','files/20190127181218_01INV18020707_05-02-2018 (1).pdf',2,'Test Standar 2 Dokumen','2019-01-28 00:12:18'),
(5,'01INV17070855 (1)(4).pdf','files/20190129004602_01INV17070855 (1)(4).pdf',3,'asdasdasd','2019-01-29 06:46:02');

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

/*Table structure for table `pencapaian_mahasiswa_3tahun` */

DROP TABLE IF EXISTS `pencapaian_mahasiswa_3tahun`;

CREATE TABLE `pencapaian_mahasiswa_3tahun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tingkat` int(11) DEFAULT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `prestasi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
(4,'Dosen');

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
(1,'Test','Test','Test','Test123','test123','test123','test123','Test123','test123','test123','test123','test','test','test','test','test');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `standar3` */

insert  into `standar3`(`id`,`hasil_pihak_pengguna`,`tindak_lanjut`,`hasil_aktivitas_himpunan`,`rata_waktu_pekerjaan`,`data_waktu_pekerjaan`,`persen_kerja_sesuai`,`data_kerja_sesuai`,`himpunan_alumni`) values 
(1,1,'asdasdasdasd',NULL,12,'asdasdasasd',20,'123123123123','asdasdasdasdasd');

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
(5,'Komunikasi',0,0,0,0,''),
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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
