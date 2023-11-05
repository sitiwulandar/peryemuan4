<?php
// Membuat associative array dengan data perusahaan teknologi
$perusahaan_teknologi = array(
    "perusahaan 1" => array(
        "Nama" => "Google",
        "pendiri" => "Larry Page dan Sergey Brin",
        "tahun_didirikan" => 1998,
        "produk_utama"=> "Mesin Pencari Google, Android",
        "pendapatan tahunan" => "$181 miliar",
        "Gambar" =>"pertemuan4/Array/google.jpeg"
    ),
    "perusahaan 2" => array(
        "Nama" => "Microsoft",
        "pendiri" => "Bill Gates dan Paul Allen",
        "tahun_didirikan" => 1975,
        "produk_utama"=> "windows, office,azure",
        "pendapatan tahunan" => "$161 miliar",
        "Gambar"=>"pertemuan4\Array\microsoft.png"
        
    ),
    "perusahaan 3" => array(
        "Nama" => "Apple",
        "pendiri" =>"Steve Jobs, Steve Wozniak, dan Ronald Wayne",
        "tahun_didirikan" =>1976,
        "produk_utama"=> "iPhone, Mac, iPad",
        "pendapatan tahunan" =>"$394 miliar USD",
        "Gambar"=>"pertemuan4/Array/apple.png"
    
    ),    
    "perusahaan 4" => array(
        "Nama" => "Amazon",
        "pendiri" =>"jeff Bezos",
        "tahun_didirikan" =>1994,
        "produk_utama"=>"e-commerce. AWS" ,
        "pendapatan tahunan" =>"$386 miliar USD",
        "Gambar"=>"D:\xampp\htdocs\pemogramanweb2\pertemuan4\Array\amzon.png"
    ),
    "perusahaan 5" => array(
        "Nama" => "Meta Platforms (Facebook)",
        "pendiri" =>"Mark Zuckerberg",
        "tahun_didirikan" =>2004,
        "produk_utama"=> "'Facebook, Instagram, WhatsApp",
        "pendapatan tahunan" =>"$86 miliar USD",
        "Gambar"=>"pertemuan4/Array/meta.jpeg"
    ),
    "perusahaan 6" => array(
        "Nama" => "Tencent",
        "pendiri" =>"pony Ma",
        "tahun_didirikan" =>1998,
        "produk_utama"=> "WeChat, Tencent Games",
        "pendapatan tahunan" =>"$68 miliar USD",
        "Gambar"=>"pertemuan4/Array/tencent.jpeg"
    ),
    "perusahaan 7" => array(
        "Nama" => "TSMC (Taiwan Semiconductor Manufacturing Company)",
        "pendiri" =>"Morris Chang",
        "tahun_didirikan" =>1987,
        "produk_utama"=> "Semiconductor manufacturing",
        "pendapatan tahunan" =>"$56 miliar USD",
        "Gambar"=>"pertemuan4/Array/download.jpeg"
    ),
    "perusahaan 8" => array(
        "Nama" => "Alibaba",
        "pendiri" =>"jack ma",
        "tahun_didirikan" =>1999,
        "produk_utama"=> "e-commerce, cloud computing",
        "pendapatan tahunan" =>"$73 miliar USD",
        "Gambar"=>"pertemuan4/Array/alibaba.jpeg"
    ),
    "perusahaan 9" => array(
        "Nama" => "Netflix",
        "pendiri" =>"Reed Hastings dan Marc Randolph",
        "tahun_didirikan" =>1997,
        "produk_utama"=> "Streaming video",
        "pendapatan tahunan" =>"$29 miliar USD",
        "Gambar"=>"pertemuan4/Array/netflix.png"
    ),
    "perusahaan 10" => array(
        "Nama" => "Tesla ",
        "pendiri" =>"Elon Musk, JB Straubel, dan Martin Eberhard",
        "tahun_didirikan" =>2003,
        "produk_utama"=>"Mobil listrik, energi terbarukan", 
        "pendapatan tahunan" =>"$46 miliar USD",
        "Gambar"=>"pertemuan4/Array/tesla.png"
    ),
);

// Mencetak tabel
echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Pendiri</th><th>tahun_didirikan</th><th>Produk_utama</th><th>pendapat_tahunan</th><th>Gambar</th></tr>";
$nomor = 1;
foreach ($perusahaan_teknologi as $perusahaan) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $perusahaan["Nama"] . "</td>";
    echo "<td>" . $perusahaan["pendiri"] . "</td>";
    echo "<td>" . $perusahaan["tahun_didirikan"] . "</td>";
    echo "<td>" . $perusahaan["produk_utama"] . "</td>";
    echo "<td>" . $perusahaan["pendapatan tahunan"] . "</td>";
    echo "<td><img src='" . $perusahaan["Gambar"] . "' alt='" . $perusahaan["Nama"] . "' width='100'></td>";
    echo "</tr>";
    $nomor++;
}
echo "</table>";
?>