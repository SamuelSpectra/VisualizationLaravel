@extends('layouts.main')

@section('style-css')
    <link rel="stylesheet" href="css/style.css">
@endsection

@section('jumbotron')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><span>Hello,</span></h1>
            <h3 class="jumbotron-text">Selamat datang di website<b> VISUALISASI </b> menggunakan<br> konsep <b>MVC</b> menggunakan Framework <b>LARAVEL</b>.</h3>
            <p class="jumbotron-text1">Klik Button Dibawah ini untuk menuju laman visulisasi.</p>
            <a class="btn btn-primary btn-lg mt-3" href="/laravel_google_chart" role="button">Go To Visualization</a>
        </div>
    </div>
@endsection

@section('container-graph')
    <div class="main mb-6">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Dataset</h1>
                <p>Dataset yang digunakan ini didapatkan dari hasil web scrapping KB 1 Mata Kuliah Kapita Selekta</p>
                <p>Hasil Scrapping ini diambil dari website <a href="https://books.toscrape.com/">Book To Scrape</a>. Website ini adalah sebuah website yang dapat</p>
                <p>digunakan untuk berlajar Web Scrapping. Isi dari data ini yaitu ada judul buku dan kategori buku.</p>
                <p>Silahkan Klik Button Dibawah ini untuk mendownload data yang digunakan untuk visualisasi:</p>
                <a class="btn btn-primary btn-lg mt-3 mb-5" href="https://drive.google.com/file/d/1lRphS7urcIzfsFM7Q0JPSjcdSn6XJtpc/view?usp=sharing" role="button">Download Dataset</a>
            </div>
        </div>
    </div>
@endsection