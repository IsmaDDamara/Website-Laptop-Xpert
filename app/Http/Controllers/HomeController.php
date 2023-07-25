<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = " Selamat datang di Laptop Xpert, destinasi terbaik untuk kebutuhan laptop Anda!
                                    Laptop Xpert adalah toko laptop terpercaya yang menyediakan beragam pilihan laptop dari merek terkenal dan terbaru. Dengan pengalaman lebih dari 10 tahun dalam industri teknologi, kami bangga dapat memberikan produk-produk unggulan dengan kualitas terbaik dan harga kompetitif.
                                    Kami memahami bahwa setiap konsumen memiliki kebutuhan yang berbeda-beda, oleh karena itu, tim ahli kami siap memberikan konsultasi dan rekomendasi yang tepat sesuai dengan kebutuhan dan budget Anda. Kami berkomitmen untuk memberikan pengalaman berbelanja yang menyenangkan dan memuaskan bagi setiap pelanggan.
                                    Keunggulan kami bukan hanya pada produk, tetapi juga pada pelayanan. Dengan layanan purna jual yang handal, kami akan selalu mendukung Anda setelah pembelian laptop. Jika Anda mengalami masalah atau butuh bantuan teknis, tim kami siap membantu dengan cepat dan profesional.
                                    Kualitas, kepercayaan, dan kepuasan pelanggan adalah prioritas utama kami. Bersama Laptop Xpert, Anda akan menemukan solusi terbaik untuk kebutuhan komputasi Anda. Jelajahi pilihan laptop terbaik kami dan rasakan pengalaman berbelanja yang luar biasa!
                                    Terima kasih telah mempercayai Laptop Xpert sebagai mitra teknologi Anda. Kami berharap dapat melayani Anda dengan yang terbaik.
                                    Salam,Tim Laptop Xpert";
        $viewData["author"] = "Developed by: Isma Dian Damara";
        return view('home.about')->with("viewData", $viewData);
    }
}