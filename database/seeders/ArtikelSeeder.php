<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::insert([
            'judul' => 'Warisan Leluhur di Nusantara',
            'gambar_artikel' => 'https://asset-a.grid.id/crop/0x0:0x0/360x240/photo/2021/01/07/281360186.png',
            'kategori' => 'Sejarah & Arkeologi',
            'konten' => 'Nusantara, sebuah nama yang menggema sejak zaman dahulu, kini menjadi simbol kekayaan budaya dan sejarah Indonesia. Di tengah hamparan kepulauan ini, tersembunyi warisan leluhur yang tak ternilai harganya. Situs-situs megalitikum tersebar luas, dari ujung Sumatra hingga Sulawesi, menjadi saksi bisu peradaban yang pernah berjaya.Di balik batu-batu besar yang tertata rapi, terdapat cerita-cerita yang terlupakan. Cerita tentang masyarakat yang hidup berdampingan dengan alam, menghormati roh nenek moyang, dan memuja bintang-bintang di langit. Warisan ini bukan hanya sekumpulan objek arkeologi; ini adalah jembatan yang menghubungkan kita dengan masa lalu.Penelitian demi penelitian terus dilakukan untuk mengungkap misteri yang tersimpan. Setiap temuan baru membawa kita semakin dekat dengan pemahaman yang lebih dalam tentang identitas bangsa. Dari struktur batu yang megah hingga artefak kecil yang halus, setiap detail membantu kita memahami filosofi dan kearifan lokal yang telah diwariskan.Warisan Leluhur di Nusantara bukan hanya milik Indonesia, tetapi juga warisan bagi dunia. Ini adalah bukti bahwa sejarah umat manusia adalah sejarah bersama, penuh dengan keberagaman dan keunikan. Mari kita lestarikan dan pelajari warisan ini, agar generasi mendatang dapat terus belajar dan terinspirasi oleh kebesaran leluhur kita.',
            'penulis' => 'Siti Nurbaya',
        ]);

        Artikel::insert([
            'judul' => 'Perjalanan Kuliner di Bandung',
            'gambar_artikel' => 'https://i.ytimg.com/vi/5JZyU0ZHJaU/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBI6fxjpP-ORVnUME9D65RetsUREQ',
            'kategori' => 'Wisata Kuliner',
            'konten' => 'Bandung, kota yang terkenal dengan sebutan ‘Paris van Java’, tidak hanya memikat pengunjung dengan keindahan alam dan keramahan penduduknya, tetapi juga dengan kekayaan kuliner yang luar biasa. Sebagai seorang chef, saya mengajak Anda untuk mengeksplorasi perjalanan kuliner yang akan memanjakan selera dan membawa Anda pada petualangan rasa yang tak terlupakan. Mulai dari pagi hari, aroma kopi dan roti bakar khas Bandung sudah menyeruak di udara. Sarapan dengan Bubur Ayam Cianjur atau Nasi Liwet 165 yang gurih akan memberikan energi untuk memulai hari. Jangan lupa mencicipi Surabi yang hangat dengan berbagai topping, dari oncom hingga keju dan cokelat. Siang hari, saat matahari mulai meninggi, adalah waktu yang tepat untuk menikmati kesegaran Es Cendol atau Es Campur khas Bandung. Untuk makan siang, Nasi Timbel dengan lauk pauk yang lengkap atau Sate Maranggi yang kaya rempah bisa menjadi pilihan yang menggugah selera. Menjelang sore, saat udara Bandung mulai sejuk, cobalah berbagai jenis Snack Street Food seperti Batagor, Cireng, dan Cilok. Tak lengkap rasanya jika tidak mencoba Martabak Manis yang tebal dengan taburan meses dan kacang. Malam hari, Bandung bertransformasi menjadi surga kuliner malam. Steak Lidah di restoran klasik atau Ayam Goreng Kalasan di warung tenda bisa menjadi pilihan untuk makan malam. Untuk pengalaman yang lebih autentik, Angkringan di pinggir jalan menawarkan berbagai macam nasi kucing dan sate yang lezat.Perjalanan kuliner di Bandung adalah perpaduan antara tradisi dan inovasi. Setiap sudut kota menyimpan cerita rasa yang unik, mencerminkan keberagaman dan kekayaan budaya Indonesia. Sebagai chef, saya percaya bahwa makanan adalah media untuk berbagi kebahagiaan dan cinta. Oleh karena itu, mari kita rayakan kekayaan kuliner Bandung dengan setiap gigitan yang kita nikmati.',
            'penulis' => 'Chef Aiko',
        ]);
        
        Artikel::insert([
            'judul' => 'Masa Depan Cerah Indonesia',
            'gambar_artikel' => 'https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/234/2024/03/12/ILUSTRASI-PEMUDA-4179097296.jpg',
            'kategori' => 'Teknologi & Lingkungan',
            'konten' => 'Indonesia, negara kepulauan dengan keanekaragaman hayati dan budaya yang kaya, kini tengah berada di ambang revolusi energi bersih. Sebagai seorang ahli di bidang teknologi dan lingkungan, saya melihat masa depan yang cerah bagi negara ini dalam pemanfaatan energi terbarukan. Potensi sumber daya alam seperti matahari, angin, dan panas bumi di Indonesia adalah salah satu yang terbesar di dunia. Pemanfaatan energi surya di daerah tropis, turbin angin di pesisir, dan pembangkit listrik tenaga panas bumi (PLTP) di kawasan vulkanik, menjadi bukti nyata komitmen Indonesia terhadap energi bersih. Pengembangan mobil listrik dan transportasi umum berbasis listrik juga menjadi prioritas untuk mengurangi emisi karbon dan polusi udara. Inisiatif pemerintah dan partisipasi aktif masyarakat dalam program pengelolaan sampah dan daur ulang menunjukkan kesadaran yang meningkat terhadap lingkungan hidup. Investasi dalam riset dan pengembangan teknologi ramah lingkungan tidak hanya membawa dampak positif bagi alam, tetapi juga membuka peluang ekonomi baru. Industri-industri hijau yang berkembang akan menciptakan lapangan kerja dan mendorong pertumbuhan ekonomi yang berkelanjutan. Edukasi dan sosialisasi tentang pentingnya keberlanjutan dan konservasi menjadi kunci untuk memastikan bahwa setiap lapisan masyarakat dapat berkontribusi. Melalui kolaborasi antara pemerintah, swasta, dan masyarakat, kita dapat memastikan bahwa warisan alam Indonesia akan terjaga untuk generasi yang akan datang. Masa depan cerah Indonesia dalam energi bersih adalah visi yang dapat diwujudkan. Dengan semangat inovasi dan kerja sama, kita dapat mengubah tantangan menjadi peluang dan menjadikan Indonesia sebagai contoh bagi dunia dalam pembangunan berkelanjutan.',
            'penulis' => 'Dr. Andi Putra',
        ]);
        
        Artikel::insert([
            'judul' => 'Misteri Kuno Gunung Padang',
            'gambar_artikel' => 'https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p3/22/2024/02/16/situs-gung-pdg130104b-3349887820.jpg',
            'kategori' => 'Sejarah & Arkeologi',
            'konten' => 'Gunung Padang, terletak di Jawa Barat, Indonesia, merupakan salah satu situs megalitikum terbesar di Asia Tenggara. Misteri yang menyelimuti situs ini tidak hanya menarik perhatian arkeolog dan sejarawan, tetapi juga masyarakat luas yang penasaran dengan sejarahnya yang kuno. Situs ini diperkirakan berusia lebih dari 5.000 tahun, menjadikannya lebih tua dari piramida di Mesir. Struktur batu yang teratur dan teknik pembangunannya menunjukkan bahwa masyarakat yang membangun Gunung Padang memiliki pengetahuan teknik yang maju untuk zamannya. Penelitian terbaru menunjukkan bahwa di bawah lapisan batu permukaan terdapat struktur lain yang lebih besar dan lebih kompleks. Beberapa teori mengatakan bahwa ini bisa jadi merupakan bagian dari sebuah piramida besar atau bahkan pusat peradaban yang hilang. Namun, banyak misteri yang masih belum terpecahkan. Apa tujuan dibangunnya situs ini? Bagaimana masyarakat kuno dapat memindahkan dan menyusun batu-batu besar ini? Dan apa hubungannya dengan tradisi dan kepercayaan mereka? Melalui kerja keras para peneliti dan dukungan teknologi modern, kita berharap dapat mengungkap lebih banyak rahasia yang tersimpan di Gunung Padang. Situs ini bukan hanya warisan budaya Indonesia, tetapi juga warisan bagi umat manusia untuk memahami lebih dalam tentang sejarah peradaban kita.',
            'penulis' => 'Arief Rahman',
        ]);
        
        Artikel::insert([
            'judul' => 'Kuliner Tersembunyi di Jalan Braga',
            'gambar_artikel' => 'https://asset.kompas.com/crops/KFab9oA4VA3P9zOoEUFJFdO5bJI=/0x0:1161x774/750x500/data/photo/2021/03/11/6049c035af232.jpg',
            'kategori' => 'Wisata Kuliner',
            'konten' => 'Jalan Braga, jantung kota Bandung, terkenal dengan bangunan bersejarah dan suasana kolonialnya yang kental. Namun, bagi para pencinta kuliner, Jalan Braga menawarkan lebih dari sekadar pemandangan; ia menyimpan rahasia kuliner yang hanya diketahui oleh mereka yang berani menjelajah lebih dalam. Di antara deretan galeri seni dan toko antik, terdapat warung-warung kecil yang menawarkan kelezatan yang tak terduga. Kopi Es Tak Kie, misalnya, adalah sebuah kedai kopi legendaris yang telah berdiri sejak tahun 1927, menyajikan kopi susu khas dengan cita rasa yang konsisten selama hampir satu abad. Selangkah lebih jauh, Anda akan menemukan Batagor Kingsley, tempat yang sempurna untuk menikmati batagor krispi dengan saus kacang yang gurih. Tidak jauh dari situ, Soto Bandung Mang Oyo menawarkan semangkuk soto bening yang segar dengan irisan daging sapi yang lembut dan taburan daun seledri yang harum. Ketika malam tiba, Jalan Braga berubah menjadi surga makanan jalanan. Martabak Manis San Francisco adalah salah satu yang terbaik, dengan martabak manisnya yang tebal dan berbagai pilihan topping mulai dari cokelat hingga keju. Namun, petualangan kuliner di Jalan Braga tidak lengkap tanpa mencicipi Es Durian Pak Aip, es krim durian homemade yang lezat, atau Es Campur Bungsu, perpaduan es serut dengan aneka buah dan sirup yang menyegarkan. Jalan Braga adalah bukti bahwa Bandung tidak hanya kaya akan sejarah dan budaya, tetapi juga kekayaan rasa yang dapat memuaskan setiap penjelajah kuliner. Setiap sudutnya adalah undangan untuk menemukan kelezatan yang tersembunyi, menanti untuk ditemukan dan dinikmati.',
            'penulis' => 'Dian Sastrowardoyo',
        ]);
        
        Artikel::insert([
            'judul' => 'Inovasi Teknologi Ramah Lingkungan di Indonesia',
            'gambar_artikel' => 'https://www.prestasikita.com/wp-content/uploads/2023/05/04-1.jpg',
            'kategori' => 'Teknologi & Lingkungan',
            'konten' => 'Indonesia, sebagai negara kepulauan terbesar di dunia, menghadapi tantangan unik dalam menjaga keseimbangan antara pembangunan dan pelestarian lingkungan. Namun, inovasi teknologi ramah lingkungan telah membuka jalan bagi solusi yang berkelanjutan. Salah satu terobosan yang menjanjikan adalah pengembangan panel surya fleksibel yang dapat dipasang di berbagai permukaan, termasuk atap rumah dan bangunan. Teknologi ini tidak hanya mengurangi ketergantungan pada energi fosil tetapi juga memanfaatkan potensi sinar matahari yang melimpah di Indonesia. Di bidang transportasi, bus listrik telah mulai beroperasi di beberapa kota besar, menawarkan alternatif yang lebih bersih dan lebih tenang dibandingkan dengan kendaraan bermotor konvensional. Inisiatif ini diharapkan dapat mengurangi polusi udara dan emisi gas rumah kaca. Pengelolaan sampah juga mendapat perhatian dengan adanya teknologi konversi limbah menjadi energi. Beberapa kota telah mengimplementasikan sistem ini untuk mengurangi volume sampah yang berakhir di TPA dan sekaligus menghasilkan energi terbarukan. Pendidikan dan kesadaran lingkungan juga menjadi fokus, dengan program-program seperti Eco-Schools yang mengajarkan siswa tentang pentingnya keberlanjutan dan cara-cara praktis untuk melindungi lingkungan. Inovasi-inovasi ini menunjukkan komitmen Indonesia terhadap masa depan yang lebih hijau. Dengan terus mendorong penelitian dan pengembangan, serta kerja sama antara pemerintah, industri, dan masyarakat, Indonesia dapat menjadi pelopor dalam teknologi ramah lingkungan di kawasan Asia Tenggara.',
            'penulis' => 'Budi Raharjo',
        ]);
    }
}
