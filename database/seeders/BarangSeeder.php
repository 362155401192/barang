<?php

namespace Database\Seeders;

use App\Models\barang as ModelsBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       ModelsBarang::insert(
            [
                [
                    'namaBarang' => 'Sepatu Converse',
                    'fotoBarang' => 'f1.jpg',
                    'harga' => '300000',
                    'stok' => '50',
                    'ukuran' => '39,40,41,42',
                    'reviewBarang' => 'Converse adalah salah satu merk sepatu terkenal. Converse Chuck Taylor All-Stars adalah sepatu sejuta umat.
                    Desainnya mungkin tidak seikonis Converse Chuck Taylor All-Stars tetapi Converse Jack Purcell termasuk merk sepatu pria yang lebih nyaman dan punya desain yang manis, terutama pilihan warna putih bersihnya.',
                ],
                [
                    'namaBarang' => 'Sepatu Adidas',
                    'fotoBarang' => 'f2.jpg',
                    'harga' => '200000',
                    'stok' => '50',
                    'ukuran' => '39,40,41,42',
                    'reviewBarang' => 'Adidas adalah salah satu merk sepatu sport favorit para pria. Adidas Stan Smith bisa dibilang salah satu sneakers legendaris. Desain original model ini lebih dikenal dan digemari, yakni warna putih bersih dengan hijau ala Stan Smith di belakangnya.
                    Adidas merestorasi model lama Stan Smith jadi versi baru yang dilengkapi sol Boost serta Primeknit pada upper-nya.merk sepatu terkenal Stan Smith Primeknit Boost ini wajib masuk koleksi karena faktor kenyamanannya.',
                ],
                [
                    'namaBarang' => 'Sepatu Vans',
                    'fotoBarang' => 'f7.jpg',
                    'harga' => '300000',
                    'stok' => '30',
                    'ukuran' => '39,40,41,42',
                    'reviewBarang' => 'Sejarah sepatu Vans Checkerboard Slip-On dimulai pada 1977. Saat itu, Steve Van Doren, anaknya Paul Van Doren si pendiri Vans, 
                    melihat para skateboarder suka mewarnai bagian sol sepatunya dengan pola hitam-putih. Ia lalu punya ide untuk membuat motif tersebut juga, tetapi bukan di sol melainkan di bagian kanvasnya.',
                ],
                [
                    'namaBarang' => 'Sepatu Superga',
                    'fotoBarang' => 'f8.jpg',
                    'harga' => '150000',
                    'stok' => '20',
                    'ukuran' => '39,40,41,42',
                    'reviewBarang' => 'Brand Superga tentu bukan nama asing buat kamu yang hobi mengoleksi sneakers. Merk sepatu ini terkenal dengan desainnya yang klasik dan penggunaan bahan-bahan berkualitas tinggi. 
                    Superga punya beragam jenis sneakers, termasuk edisi slip on.Superga 2311-Cotu merupakan salah satu merk sepatu terbaik dari koleksi sepatu slip on Superga yang wajib kamu koleksi. 
                    Slip on ini menggunakan kanvas sebagai upper-nya, sedangkan untuk bagian sole, menggunakan rubber (luar), dan tekstil (dalam). Karena desain yang canggih, kamu tak perlu meragukan kenyamanannya.',
                ],
                [
                    'namaBarang' => 'Sepatu Reebok',
                    'fotoBarang' => 'n1.jpg',
                    'harga' => '125000',
                    'stok' => '45',
                    'ukuran' => '39,40,41,42',
                    'reviewBarang' => 'Untuk kamu yang suka full black sneakers, harus tahu kalau Reebok punya koleksi dengan warna full hitam yang sama. Untuk dipakai jalan sehari-hari, Reebok Classic tak ada tandingannya karena tingkat kenyamanannya patut diacungi jempol. 
                    Untuk warna, merk sepatu sneakers Reebok Classic hitam ini cocok untuk dipakai ke sekolah, atau dipakai hang out sekalipun.Kesan macho bakal semakin mantap melekat di dirimu.
',
                ],
                [
                    'namaBarang' => 'Sepatu Puma',
                    'fotoBarang' => 'n6.jpg',
                    'harga' => '400000',
                    'stok' => '50',
                    'ukuran' => '39,40,41,42',
                    'reviewBarang' => 'Merk sepatu pria Suede Classic All Black adalah salah satu warna paling favorit dari deretan pilihan warna lainnya. 
                    Sneaker klasik pertama yang terbuat dari suede ini memiliki ciri khas aksen garis panjang yang melengkung di bagian samping tumit.',
                ],
            ]
        );
    }
}
