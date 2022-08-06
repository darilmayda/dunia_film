-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 10:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(100) NOT NULL,
  `judul_film` varchar(100) NOT NULL,
  `harga_sewa` int(50) NOT NULL,
  `durasi` time NOT NULL,
  `url_film` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul_film`, `harga_sewa`, `durasi`, `url_film`, `thumbnail`, `keterangan`) VALUES
(1, 'Baby Blues', 40000, '01:48:00', 'olXfjgN1WWo', 'baby_blues.jpg', 'Baby Blues menceritakan kisah pasangan suami istri yang baru dikaruniai buah hati. Andika dan Dinda tak pernah menyangka jika merawat bayi itu tak semudah yang mereka bayangkan. Hal tersebut akhirnya memicu adanya pertengkaran dan perdebatan dalam rumah tangga mereka.\r\n\r\nDinda pun mengalami sindrome Baby Blues yang mekin menambah runyam hubungan keduanya. Hingga suatu hal aneh terjadi, jiwa Andika dan Dinda tertukar. Mau tidak mau mereka harus memahami satu sama lain selama jiwa mereka tertukar.\r\n\r\nNamun bisakah jiwa mereka kembali ke tubuh masing-masing serta menjalani kehidupan yang normal lagi? Tonton Baby Blues untuk menemukan\r\njawabannya.\r\n\r\nSeperti disebutkan sebelumnya, film Baby Blues dibintangi oleh para artis pan atas. Sebagai pemeran utama, ada Vino G. Bastian yang memerankan sosok Andika. Sementara posisi Dinda diperankan oleh Aurelie Moeremans.\r\n\r\nSelain mereka berdua, ada juga artis senior Ratna Riantiarno sebagai Bu Tari. Sedangkan Mathias Muchus berperan sebagai Pak Nurul. Baby Blues juga diramaikan oleh para bintang muda seperti Abdurrahman Arif, Rigen Rakelna, Erick Estrada, dan masih banyak lagi.'),
(2, 'BUCIN', 44000, '01:29:00', 'xSdAC9WSJ5s', 'bucin.jpg', 'Film Bucin ini mengisahkan empat pria muda yang dianggap \"bucin\" alias budak cinta.\r\n\r\nMulanya tak ada yang sadar bahwa mereka bucin. Namun mereka sangat tunduk pada pacar sehingga bisa dikategorikan dengan bucin.\r\n\r\nSampai suatu ketika, mereka mengikuti kelas antibucin untuk menjalani hubungan yang lebih dewasa dengan pasangan.\r\n\r\nBukan hal mudah bagi mereka menjalani terapi tersebut yang dipimpin seorang psikiater bernama Vania.\r\n\r\nPasalnya, metode yang digunakan psikiater cantik itu tidak konvensional dan ekstrem, dia menggunakan konsep ESCAPE ROOM untuk menjelaskan konsep cinta.\r\n\r\nSering kali mereka ingin berhenti karena tidak sanggup. Kelas yang dijalani empat sekawan itu tak berjalan mulus. Sebaliknya, membuat hubungan mereka makin retak.\r\n\r\nBahkan, hubungan dengan kekasih masing-masing malah hancur.'),
(3, 'Cek Toko Sebelah', 50000, '01:05:00', 'r9NJveLN3zI', 'cek_toko_sebelah.jpg', 'Film ini berfokus pada keluarga Koh Afuk (Chew Kin Wah) dan kedua anak laki-lakinya, Erwin (Ernest Prakasa) dan Yohan (Dion Wiyoko).\r\nErwin sendiri merupakan pria lulusan universitas luar negeri yang juga tengah menikmati kariernya di negeri tetangga, Di sana ia memiliki seorang kekasih cantik yang tak kalah sukses darinya bernama, Natalie (Gisella Anastasia).\r\n\r\nBerkat kerja kerasnya, Erwin berhasil medapat promosi pekerjaan dari kantornya. Namun sayang, saat itu juga ayahnya tiba-tiba jatuh sakit. Sehingga ia diminta untuk mengambil alih toko sembako milik keluarganya.\r\n\r\nAlhasil, dengan cukup terpaksa, Erwin kembali ke Indonesia dan menghabiskan waktunya selama sebulan untuk mengelola toko. Natalie sendiri merasa kecewa dengan keputusan Erwin, karena ia menginginkan kekasihnya menerima tawaran yang diberikan kantornya.\r\nPermasalah Erwin semakin bertambah saat Yohan merasa kesal dengan keputusan ayahnya. Pasalnya, ia lah yang tinggal di Indonesia, namun ayahnya justru menyuruh Erwin yang jauh-jauh di Singapura untuk mengambil alih tokonya.\r\n\r\nSelain itu Yohan merasa semakin keasl, karena selama ini ia berpikir bahwa ia jauh lebih perhatian dengan orang tuanya. Namun, Koh Afuk ragu memberikan tanggungjawab itu pada Yohan yang dikenal suka memberontak.'),
(4, 'Garis Waktu', 55000, '01:20:00', 'YiQ3rsd6jkw', 'garis_waktu.jpg', '\"Garis Waktu\" bercerita tentang seorang pemuda bernama Sena yang hidup sebatang kara dan membiayai hidupnya dengan bekerja sebagai musisi kafe.\r\n\r\nKehidupannya berubah setelah dirinya bertemu dan jatuh cinta dengan seorang gadis bernama April. Berasal dari keluarga bangsawan yang kaya raya, hubungan pasangan tersebut terhalang restu orang tua.\r\nHubungan keduanya ditentang orang tua April karena alasan tertentu. Hingga suatu ketika muncul sosok Sanya yang dapat membantu Sena menjadi musisi sukses.\r\n\r\nAda beberapa alasan kenapa harus menonton \"Garis Waktu\". Dari sinopsisnya kita mungkin sering melihat film dengan plot di atas. Namun, yang membuat penasaran adalah apa alasan orang tua April tidak merestui hubungan anaknya.'),
(5, 'Jodohku Mana', 55000, '01:59:00', '1zb64S1bF_U', 'jodohku_mana.jpg', 'Ketika Ros (Arlita Reggiana) positif hamil, Tiar (Andi Arsyil) memutuskan pergi ke Jakarta bersama temannya Sakka (Zakaribo) dan Dodi (Dodi Mahuze) untuk mencari kerja sekaligus mencari saudara Bapaknya yang katanya kaya raya di Jakarta guna membantu kondisi keluarganya yang terbelit hutang. Mereka kesasar ke Bandung dan bertemu dengan seorang gadis muda bernama Ayana (Alexa Key) yang juga ingin ke Jakarta. Kesetiaan Tiar diuji ketika ia harus terlibat dalam permasalahan pribadi Ayana. Sementara Ros mengalami kejadian yang tak pernah dibayangkan Tiar.'),
(6, 'Jomblo', 40000, '01:30:00', 'TggdjwD2mSk', 'jomblo.jpg', 'Pada suatu ketika, Agus memiliki tekad harus memiliki pacar.\r\n\r\nKeinginan Agus rupanya didukung oleh ketiga sahabatnya yang memiliki keunikan karakter masing-masing.Bimo seorang pria berambut keriting yang punya rasa percaya diri tinggi.\r\nBimo memanfaatkan semua platform media sosial untuk berkenalan dengan cewek-cewek.Berkebalikan dengan Bimo, Olip merupakan sosok pemalu meski punya latar belakang militer.\r\n\r\nOlip sangat menyukai seorang cewek bernama Asri yang diperankan oleh Aurelie Moeremans.Terakhir ada Dony, cowok ganteng yang suka tebar pesona sama semua cewek di kampus.Sayang, Dony sulit berkomitmen karena baginya itu tidak perlu, yang terpenting baginya adalah bisa dekat dengan semua cewek.Tak butuh waktu lama, Agus akhirnya menemukan pujaan hatinya, Rita (Natasha Rizky) rekan SMPnya.Mereka kemudian berpacaran.'),
(7, 'Koala Kumal', 42000, '01:10:00', 'Yv_9YvhLv8g', 'koala_kumal.jpg', 'Film Koala Kumal mengisahkan kehidupan Dika, pria yang batal menikah dengan kekasihnya, Andrea.Hal ini lantaran Andrea rupanya telah memiliki pria lain yakni James.\r\n\r\nDika pun merasa sakit hati, dan akhirnya ia sulit menulis bagian buku terakhirnya.Suatu ketika Dika bertemu dengan Trisna, wanita menarik dan unik, membuat Dika lari dari perjodohan kacau yang dibuat ibunya.\r\n\r\nTrisna mulai membuka kembali kehidupan Dika yang bahagia.Ia merubah pandangan Dika akan cinta.Dika pergi bersama Trisna dan hubungan mereka semakin dekat.Trisna juga menyelesaikan bagian akhir dari bukunya,Akhirnya Ia tahu alasan mengapa Dika masih saja patah hati dan Trisna mencoba untuk membuat Dika kembali ke kehidupan normalnya.\r\n\r\n'),
(8, 'Mahasiswa Baru', 55000, '01:59:00', 'KmOrhtaC3gA', 'mahasiswa_baru.jpg', 'Tuntunlah ilmu hingga tua. Setidaknya, ini yang dibenamkan di dalam pikiran Lastri (Widyawati) Ia kembali ke kampus untuk menjadi mahasiswi. Tentu saja, bukan mahasiswi yang datang dari generasi milenial, namun generasi yang sudah berusia  70 tahun.\r\n\r\nIngin ikut terlibat lebih muda, Lasti bergabung bersama sebuah geng yang diisi anak-anak muda seperti Danny (Morgan Oey), Sarah (Mikha Tambayong), Erfan (Umay Shahab), dan Reva (Sonia Alyssa). Geng ini sering membuat heboh di kampus.\r\n\r\nGaya hidup anak muda pun menjadi bagian dari gaya hidup Lastri yang sudah berusia 70 tahun. ‘Bandel’ adalah konotasi yang pas ditempatkan bagi kehidupan Lasti. Anak-anaknya yang sudah dewasa sampai dibuat kerepotan.\r\n\r\nTak hanya itu, Lastri pun mampu membuat salah satu dosen senior sekaligus Dekan di kampus terpesona. Ujug-ujug ternyata, sang Dekan, Chaerul (Slamet Rahardjo) menyebutkan Lastri tidak layak menjadi mahasiswi karena kerap membuat heboh di luar aktifitas akademik.\r\n\r\nLalu, bagaimana kehidupan Lastri setelah menjadi Mahasiswi Baru? Film garapan sutradara Monty Tiwa ini akan tayang pada tanggal 8 Agustus di seluruh bioskop Indonesia. Buat kamu yang penasaran bagaimana cara Lasti tetap menjadi muda di usia senja, beli tiket nonton film Mahasiswi Baru di situs atau aplikasi BookMyShow yang tersedia gratis bagi pengguna Android dan iOS.'),
(9, 'Makmum', 60000, '01:20:00', 'zqT12bhMRnI', 'makmum.jpg', 'Makmum mengambil latar cerita di sebuah asrama yang seringkali dihantui oleh sosok yang mereka sebut Makmum. Sosok ini senantiasa mengganggu penghuni asrama, terlebih ketika Rini (Titi Kamal) datang dan memutuskan menerima ajakan Ibu Kinanthi (Jajang C. Noer) untuk membantu mengelola asrama yang ia tempati dahulu. Kedatangannya juga bertujuan merawat ibu Kinanthi yang kesehatannya semakin memburuk. Sebelum Rini datang, asrama dipimpin oleh Rosa (Reny Yuliana), perempuan yang dingin dan keras. Di asrama, Rini bertemu dengan tiga anak yang tidak diizinkan pulang ketika liburan, lantaran hasil ujian mereka yang buruk. Mereka adalah Nurul (Tissa Bianni), Nisa (Bianca Hello), dan Putri (Adila Fitri). Mereka seringkali mengeluhkan adanya gangguan dari makhluk gaib, terutama ketika sedang salat, dan menyebutkan ada yang mengikuti mereka saat salat. Mengetahui hal tersebut, Rosa seakan tidak memperdulikan keluhan dari tiga siswanya akan teror dan gangguan yang mereka alami. Hingga pada akhirnya Rini bertemu langsung dengan ketiga anak tersebut dan menyadari ada yang tidak beres di asrama. Satu hal yang ia sadari bahwa gangguan yang terjadi di asrama berkaitan dengan dendam seseorang di masa lalu. Di sisi lain, Putri semakin sering kesurupan dan suasana semakin tidak karuan. Rini pun bertekad untuk membantu ketiga siswa tersebut dan mencoba menguak misteri yang terjadi di asrama. Sayangnya, ia tidak menyadari bahwa nyawanya sendiri sedang terancam.'),
(10, 'Mekah', 30000, '01:20:00', 'GRYyEIygP2E', 'mekah.jpg', 'Mekah, I’m Coming bercerita tentang Eddy (Rizky Nazar), pemilik usaha bengkel desa, yang menjalin hubungan dengan Eni (Michelle Ziudith), penyanyi kosidah. Namun hubungan mereka tidak berjalan lancar, Eni akan dijodohkan dengan saudagar kaya dari kota, Pietoyo (Dwi Sasono). Orang tua Eni susah untuk menolak perjodohan itu lantaran terikat perjanjian. “Perjodohan ini kan kalau cancle, bapak tahu sendiri tho, rumah ini bisa balik nama lho pak,” kata asisten Pietoyo kepada ayah Eni. Hal itu cukup membuat gusar Eddy dan Eni. Bahkan mereka sempat berpikir untuk kawin lari atau mati saja. Sepertinya kegigihan dua pasangan itu cukup membuat orang tua Eni memberi kesempatan bagi Eddy.'),
(11, 'Sassy Girl', 45000, '01:00:00', 'IEm0t4YW0Xw', 'sassy_girl.jpg', 'Gian adalah laki-laki yang penurut, sedangkan Sissy (Tiara Andini) merupakan perempuan yang pemberani sekaligus galak.\r\n\r\nSementara My Sassy Girl versi Korea menceritakan Gyun Woo (diperankan Cha Tae Hyun) yang gemar minum-minum dengan temannya dan kerap kali menggoda perempuan.\r\n\r\nSuatu hari, ia melihat seorang perempuan mabuk (diperankan Jun Ji Hyun) di kereta bawah tanah. Perempuan itu berdiri di bibir peron stasiun yang membuatnya nyaris terserempet kereta yang tiba kalau tidak ditolong Gyun Woo.\r\n\r\nSetelah masuk ke dalam kereta, perempuan itu muntah dan muntahannya mengenai kepala pria tua yang duduk di hadapannya. Sebelum jatuh pingsan, perempuan yang tidak pernah disebutkan namanya dalam film itu melihat ke arah Gyun Woo dan memanggilnya \'Sayang.\'\r\n\r\nMata para penumpang di gerbong itu pun langsung tertuju kepada Gyun Woo yang akhirnya mau tidak mau harus menolong perempuan itu. Setelah kejadian itu, keduanya menjalin hubungan yang penuh kejutan.\r\n\r\nLantas, bagaimana dengan kisah hubungan Gian dan Sissy pada My Sassy Girl versi Indonesia? Akankah film versi Indonesianya akan memiliki akhir yang sama dengan versi aslinya?'),
(12, 'Susah Sinyal', 52000, '01:40:00', 'MbZtoOuRpyU', 'susah_sinyal.jpg', 'Ellen (AdiniaWirasti), pengacara yang sukses, adalah seorang single mom yang jarang bisa meluangkan waktu bagi anak tunggalnya Kiara (Aurora Ribero), yang akhirnya tumbuh sebagai remaja pemberontak yang lebih banyak melampiaskan emosinya di media sosial. Mereka tinggal bersama Agatha (Niniek L. Karim), ibunda Ellen yang sangat menyayangi Kiara.Ketika Agatha meninggal terkena serangan jantung, Kiara yang sejak kecil sangat dekat dengan Omanya langsung terguncang.Oleh psikolog, Ellen disarankan untuk mengajak Kiara berlibur, menghabiskan quality time untuk mengobati masa-masa dimana Ellen terlalu sibuk bekerja.Mereka pun pergi ke Sumba, menghabiskan saat-saat menyenangkan berdua.Kiara pulang dengan hati riang.Di Jakarta, Ellen langsung disambut masalah besar di kantor. Proyek besar yang sedang ia tangani bersama Iwan (Ernest Prakasa) terancam berantakan. Akhirnya karna sibuk, Ellen tidak menepati janjinya untuk menonton Kiara tampil di perlombaan talent show antar SMA yang sudah Kiara persiapkan sejak lama.Kiara pun marah dan pergi ke Sumba sendirian, tempat dimana terakhir kali ia bisa merasakan secercah kebahagiaan. Akankah Kiara bisa percaya lagi pada ibunya? Apakah Ellen sanggup merajut kembali keluarga keci lini? Saksikan SUSAH SINYAL, tayang di bioskop mulai 21 Desember.'),
(13, 'Warkop DKI Reborn', 55000, '01:20:00', '2UCPMRM-kHk', 'warkop_dki_reborn.jpg', 'Warkop DKI adalah grup komedi Indonesia yang sukses di radio, film, dan televisi selama tahun 1980-an hingga 1990-an. Dibentuk di Jakarta pada tahun 1976, Warkop DKI berada di bawah manajemen Prambors, awalnya bernama Warkop Prambors. Setelah debut film mereka pada 1979 berjudul Mana Tahan, Warkop Prambors berubah nama menjadi Warkop DKI. Nama tersebut diambil dari inisial tiga anggotanya yaitu Dono, Kasino dan Indro. Selain membintangi berbagai film, mereka juga membuat sitkom di ANTV pada 1995-1997 sebagai Warkop (Warung Kopi) DKI dan Indosiar pada 1997-2001 sebagai Warkop Millennium. Mereka juga terkenal dengan beberapa lagu parodi yang mereka buat. Kesuksesan Warkop DKI pun terus berlanjut meski dua personlenya, Kasino dan Dono, telah tiada. Hanya menyisakan Indro, dia pun berusaha tetap membawa nama besar Warkop DKI di dunia hiburan dengan membuat beberapa film remake dengan pemain baru.');

-- --------------------------------------------------------

--
-- Table structure for table `sewa_film`
--

CREATE TABLE `sewa_film` (
  `id` int(100) NOT NULL,
  `iduser` int(100) NOT NULL,
  `idfilm` int(100) NOT NULL,
  `status_sewa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa_film`
--

INSERT INTO `sewa_film` (`id`, `iduser`, `idfilm`, `status_sewa`) VALUES
(14, 1, 1, 0),
(15, 1, 7, 1),
(16, 1, 10, 0),
(17, 1, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` int(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `telepon`, `password`) VALUES
(1, 'user1', 'user1@gmail.com', 2147483647, '$2y$10$m6qYiHtHhgwRr18LkHICo.k0K.yHMqHZTy3qdulqHCyQ0oFjooBVS'),
(2, 'user2', 'user2@gmail.com', 2147483647, '$2y$10$m6qYiHtHhgwRr18LkHICo.k0K.yHMqHZTy3qdulqHCyQ0oFjooBVS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewa_film`
--
ALTER TABLE `sewa_film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sewa_film`
--
ALTER TABLE `sewa_film`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
