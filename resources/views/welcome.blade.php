@extends('layouts.master')
@section('title', 'Diplomat Education')
@section('content')
    <div>
        <a href="#nav"><i id="up" class="fa-solid fa-angles-up"></i></a>
        <div id="nav">
            <div class="d-flex align-items-center">
                <h5>Savollar uchun</h5>
                <i class="fa-solid fa-phone ms-3"></i>
                <h5 class="ms-1">+998 (90) 365-51-00</h5>
            </div>
            <div class="d-flex align-items-center">
                <i class="fa-regular fa-clock"></i>
                <h5 class="ms-2 mt-1">Dushanba - Shanba: 08:00-18:00</h5>
            </div>
        </div>
        <div id="nav1" class="shadow">
            <div>
                <h2>Diplomat Education</h2>
            </div>
            <div>
                <ul id="ul" class="list-unstyled fs-5">
                    <a class="d-none d-lg-inline-block" href=""><li>Bosh sahifa</li></a>
                    <a class="d-none d-lg-inline-block" href=""><li>Sahifalar</li></a>
                    <a class="d-none d-lg-inline-block" href=""><li>Kurslar</li></a>
                    <a class="d-none d-lg-inline-block" href=""><li>Bog'lanish</li></a>
                    <i class="fa-solid fa-bars d-lg-none"></i>
                </ul>
            </div>
        </div>
        <div id="nav2" class="shadow sticky-top bg-white">
            <div>
                <h2 id="text-col">Diplomat Education</h2>
            </div>
            <div>
                <ul id="ul1" class="list-unstyled fs-5">
                    <a class="d-none d-lg-inline-block" href=""><li>Bosh sahifa</li></a>
                    <a class="d-none d-lg-inline-block" href=""><li>Sahifalar</li></a>
                    <a class="d-none d-lg-inline-block" href=""><li>Kurslar</li></a>
                    <a class="d-none d-lg-inline-block" href=""><li>Bog'lanish</li></a>
                    <i class="fa-solid fa-bars d-lg-none"></i>
                </ul>
            </div>
        </div>
        <div id="header">
            <p id="head-p1" class="text-white fs-1 text-center">Diplomat Education Akademiyasiga hush kelibsiz!</p>
            <button id="shake" class="btn btn-success fs-5">Ro'yhatdan o'tish</button>
        </div>
        <div id="main">
            <div class="container-fluid">
                <div class="row">
                    <div style="background-color: #0A68B1EB;" class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 pt-3 pb-3 border border-dark">
                        <div class="p-3">
                            <span class="text-white fs-3 text-center d-block"><i class="fa-solid fa-book"></i> Bizning Kurslar</span>
                            <p class="text-white fs-5 text-center mt-3">Biz juda ko'p yangi va ajoyib xususiyatlarni o'z ichiga olgan dinamik kurslarni taqdim etishdan mamnunmiz ...</p>
                            <p class="text-white fs-5 text-center mt-3">Siz uchun Yaxshiroq ishlab chiqilgan darsliklar va o'rganishga qulay materiallar...</p>
                            <button class="mx-auto btn btn-light d-block mt-4">Ko'proq ma'lumotlar</button>
                        </div>
                    </div>
                    <div style="background-color: #174873EB;" class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 pt-3 pb-3 border border-dark">
                        <div class="p-3">
                            <span class="text-white text-center d-block fs-4"><i class="fa-solid fa-users"></i> Bizning Ustozlar</span>
                            <p class="text-white fs-5 text-center mt-3">Bizda o'z mahoratingizni oshirishga yordam beradigan shahardagi eng yaxshi o'qituvchilar mavjud ...</p>
                            <p class="text-white fs-5 text-center mt-3">Siz uchun Yaxshiroq ishlab chiqilgan darsliklar va o'rganishga qulay materiallar...</p>
                            <button class="mx-auto btn btn-light d-block mt-4">Ko'proq ma'lumotlar</button>
                        </div>
                    </div>
                    <div style="background-color: #0A68B1EB;" class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 pt-3 pb-3 border border-dark">
                        <div class="p-3">
                            <span class="text-white fs-4 text-center d-block">Qabul Jarayoni</span>
                            <p class="text-white fs-5 text-center mt-3">Sizga shuni aytishdan mamnunmizki, biz yangi darsliklar uchun yangi qo'shimchalarni qabul qilmoqdamiz, ro'yhatdan o'tishni kechiktirmang ...</p>
                            <p class="text-white fs-5 text-center mt-3">Siz uchun Yaxshiroq ishlab chiqilgan darsliklar va o'rganishga qulay materiallar...</p>
                            <button class="mx-auto btn btn-light d-block mt-4">Ro'yhatdan O'tish</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="wel">
                <div>
                    <img class="img-fluid" src="{{asset('assets/education_bg.jpg')}}" alt="">
                </div>
                <div>
                    <h2><span id="text-col">DIPLOMAT EDUCATIONGA</span> HUSH KELIBSIZ!</h2>
                    <p class="fs-5">Biz sizga eng yaxshi ta'lim va uslubni berishga tayyormiz.</p>
                    <p id="line-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat mauris quis volutpat fermentum. Nunc nec nisi vitae ipsum pharetra tincidunt. Nam vel purus dolor. Aliquam erat volutpat. Donec laoreet iaculis elementum. Aliquam ligula nisi, molestie faucibus tortor quis, vulputate imperdiet turpis. In iaculis arcu et aliquam dapibus. Nulla facilisi.</p>
                    <p id="line-p">Nunc pellentesque euismod felis id posuere. Nunc maximus aliquet varius. Cras ornare tristique est vel porttitor. Fusce tempor, augue sagittis congue ornare, tortor augue elementum augue, quis egestas nisi ipsum eget urna. Suspendisse vitae lectus quis turpis dapibus euismod eget a metus. Nulla eget nunc purus. Ut egestas et nulla at pretium. Pellentesque sed varius lectus.</p>
                    <button class="btn btn-outline-dark fw-bold mt-3">O'qituvchilarimiz bilan Tanishing!</button>
                </div>
            </div>
            <div id="cours">
                <h1 class="text-center">Bizning Kurslar</h1>
                <p class="text-center">O'zingiz uchun eng yaxshi kurslarni toping!</p>
                <p id="text-col" class="text-center">___ <i class="fa-solid fa-award"></i> ___</p>
                <!-- Carousel -->
                <div class="container1 mt-3">
                    <div class="faders">
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
    
                    <div class="items">
                        <div class="entry">
                            <p class="name">Ingliz Tili</p>
                            <img id="img" class="img-fluid" src="{{asset('assets/courses/english.png')}}" alt="Smiling person" />
                        </div>
                        <div class="entry">
                            <p class="name">Rus Tili</p>
                            <img id="img" class="img-fluid" src="{{asset('assets/courses/image.webp')}}" alt="Smiling person" />
                        </div>
                        <div class="entry">
                            <p class="name">Arab Tili</p>
                            <img id="img" class="img-fluid" src="{{asset('assets/courses/arabic.jpg')}}" alt="Smiling person" />
                        </div>
                        <div class="entry">
                            <p class="name">Matematika</p>
                            <img id="img" class="img-fluid" src="{{asset('assets/courses/MATH.jpg')}}" alt="Smiling person" />
                        </div>
                        <div class="entry">
                            <p class="name1 pt-4">Web Dasturlash (IT)</p>
                            <img id="img" class="img-fluid mt-4 pt-2" src="{{asset('assets/courses/IT.jpg')}}" alt="Smiling person" />
                        </div>
                        <div class="entry">
                            <p class="name">Grafik Dizayn</p>
                            <img id="img" class="img-fluid" src="{{asset('assets/courses/graphic.jpg')}}" alt="Smiling person" />
                        </div>
                        <div class="entry">
                            <p class="name1">Kompyuter Savodxonlik</p>
                            <img id="img" class="img-fluid mt-4 pt-2" src="{{asset('assets/courses/com.jpg')}}" alt="Smiling person" />
                        </div>
                        <div class="entry">
                            <p class="name">Kareys Tili</p>
                            <img id="img" class="img-fluid" src="{{asset('assets/courses/korean.png')}}" alt="Smiling person" />
                        </div>
                    </div>
                </div>
                <!-- end Carousel -->
                <div class="d-flex justify-content-center w-75 mx-auto pb-5">
                    <a class="w-100" href=""><button class=" w-100 btn btn-outline-primary mt-3">Batafsil</button></a>
                </div>
            </div>
            <div class="container-fluid">
                <div class="p-5 bg-dark d-flex justify-content-around row">
                    <div id="dip-img" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <img class="img-fluid" src="{{asset('assets/diplomat.jpg')}}" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <h1 class="text-uppercase text-warning text-center">Biz bilan o'qish oson, ajoyib va maroqli</h1>
                        <div class="d-flex justify-content-center mt-5">
                            <ol class="fs-4 text-white">
                                <li>O'zingizga yoqqan kursni tanlang va uni o'rganing!</li>
                                <li class="mt-3">Biz haqimizda ko'proq ma'lumot olish uchun biz bilan bog'laning!</li>
                                <li class="mt-3">Ro'yxatdan o'ting va biz bilan yaxshi kelajakni boshlang!</li>
                            </ol>
                        </div>
                        <div class="d-flex justify-content-center mx-auto pb-5">
                            <a href=""><button class=" btn btn-outline-primary mt-3">Batafsil</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="nav-bottom">
                <div class="d-flex align-items-center pt-2">
                    <h5>Savollar uchun</h5>
                    <i class="fa-solid fa-phone ms-3"></i>
                    <h5 class="ms-1">+998 (90) 365-51-00</h5>
                </div>
                <div class="d-flex align-items-center pb-2">
                    <a href=""><button class="btn btn-warning text-white fw-bold">Bog'lanish</button></a>
                </div>
            </div>
            <div id="footer" class="bg-dark text-white">
                <div id="foot">
                    <h4>Ish Vaqtimiz</h4>
                    <hr>
                    <ul>
                        <li><i class="fa-solid fa-check"></i> Dushanba: 08:00-18:00</li>
                        <li><i class="fa-solid fa-check"></i> Seshanba: 08:00-18:00</li>
                        <li><i class="fa-solid fa-check"></i> Chorshanba: 08:00-18:00</li>
                        <li><i class="fa-solid fa-check"></i> Payshanba: 08:00-18:00</li>
                        <li><i class="fa-solid fa-check"></i> Jum'a: 08:00-18:00</li>
                        <li><i class="fa-solid fa-check"></i> Shanba: 08:00-18:00</li>
                        <li><i class="fa-solid fa-check"></i> Yakshanba: Dam olish kuni.</li>
                    </ul>
                </div>
                <div id="foot1">
                    <div>
                        <div>
                            <i class="fa-solid fa-location-dot fs-4 mt-1"></i>
                        </div>
                        <div class="ms-3">
                            <h4>Manzil</h4>
                            <p>Istiqlol 32</p>
                            <p>Mo'ljal: Gorod Belayn Ofis</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <i class="fa-solid fa-mobile-screen-button fs-4 mt-1"></i>
                        </div>
                        <div class="ms-3">
                            <h4>Aloqa</h4>
                            <p>+998 (90) 365-51-00</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h4>Socials</h4>
                        </div>
                        <div class="ms-3">
                            <p>Soon</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="end-foot">
                <p>2023 © Diplomat Education All Rights Reserved.</p>
            </div>
        </div>
    </div>
@endsection