@extends('layout')

@section('content')
    <!--Start of slider section-->
    <section id="slider">
        <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="slider_overlay">
                        <img src="{{URL::asset('img/img1.jpg')}}" alt="...">
                        <div class="carousel-caption">
                            <div class="slider_text">
                                <h3>Almaty</h3>
                                <h2>Find your second home</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!--End of item With Active-->
                <div class="item">
                    <div class="slider_overlay">
                        <img src="{{URL::asset('img/img2.jpg')}}" alt="...">
                        <div class="carousel-caption">
                            <div class="slider_text">
                                <h3>Almaty</h3>
                                <h2>Find your second home</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Item-->
                <div class="item">
                    <div class="slider_overlay">
                        <img src="{{URL::asset('img/img3.jpg')}}" alt="...">
                        <div class="carousel-caption">
                            <div class="slider_text">
                                <h3>Almaty</h3>
                                <h2>Find your second home</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of item-->
            </div>
            <!--End of Carousel Inner-->
        </div>
    </section>
    <!--end of slider section-->

    <!--Start of 'what to do in Almaty?' section-->
    <section id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wel_header">
                        <h3>What to do in almaty?</h3>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class=""><img src="{{URL::asset('img/mountains.png')}}"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class=""><img src="{{URL::asset('img/yurt.png')}}"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class=""><img src="{{URL::asset('img/cable-car.png')}}"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item_list">
                                <div class="welcome_icon">
                                    <i class=""><img src="{{URL::asset('img/cityscape.png')}}"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--end of 'what to do in Almaty?' section-->

    <!--Start top chart places Inside-->
    <section id="top" style="margin-bottom: 50px; margin-top: 50px;">

        <div class="row" style="margin-left: 140px">
            <div class="wel_header">
                <h3>Top places in Almaty</h3>
            </div>
        </div>

        <div class="row" style="margin-left: 140px">
            <div class="wel_header">
                <h4>Inside</h4>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top1.jpg')}}" alt=""></a>
                        <div class="card-body text-center">
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Медеу</a>
                            </h4>
                            <p class="card-text">Ледовый каток Медеу, расположенный на высоте 1691,2 метра над уровнем моря, известен всему миру. Он был возведен в 1972 году. Поверхность льда занимает 10,5 тысяч кв.м., что позволяет проводить соревнования по конькобежному спорту, хоккею и фигурному катанию.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top2.jpg')}}" alt=""></a>
                        <div class="card-body text-center" >
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Кок тобе</a>
                            </h4>
                            <p class="card-text">Подняться на Кок-Тюбе можно как по петляющей автомобильной дороге, так и по «канатке». Канатная дорога берёт начало от сквера у Дворца Республики (пр. Достык, угол пр. Абая). Она была сооружена в 1967 году. Канатная дорога протянулась над частью старого города, застроенного частными домами, который называют «компотом» </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top3.jpg')}}" alt=""></a>
                        <div class="card-body text-center">
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Арбат</a>
                            </h4>
                            <p class="card-text">Алматинский Арбат, официально называемый улица Жибек Жолы, находится неподалёку от хостел в центре Алматы, рядом с ЦУМ-ом, и это самая популярная улица для прогулок в городе. В теплое время года тут, как и на одноименной улице российской столицы, постоянно кипит жизнь.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Top Chart Places Inside-->

    <!--Start top chart places Outside-->
    <section id="top" style="margin-bottom: 100px; margin-top: 50px;">

        <div class="row" style="margin-left: 140px">
            <div class="wel_header">
                <h4>Outside</h4>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top4.jpg')}}" alt=""></a>
                        <div class="card-body text-center">
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Большое Алматинское озеро</a>
                            </h4>
                            <p class="card-text">Озеро расположено в горах Заилийского Алатау  на высоте 2500 метров над уровнем моря и образовалось в процессе деятельности древнего ледника.  В 60х годах прошлого века на Большом Алматинском построили каскад ГЭС,  установили водозаборные сооружения, и в настоящее время таким образом снабжают Алматы водой.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top5.jpg')}}" alt=""></a>
                        <div class="card-body text-center">
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Каньон Чарын</a>
                            </h4>
                            <p class="card-text">Каньон Чарын расположен на территории Чарынского национального парка, созданного с целью сохранения природных и геологических объектов. Национальный парк был образован 23 февраля 2004 года. На территории парка обитает большое количество редких и исчезающих видов животных, занесенных в Красную книгу. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="{{URL::asset('img/top6.jpg')}}" alt=""></a>
                        <div class="card-body text-center">
                            <h4 class="card-title" style="margin: 10px 0px 10px 0px;">
                                <a href="#">Поющий бархан</a>
                            </h4>
                            <p class="card-text">Поющий бархан – жемчужина в короне знаменитого казахстанского заповедника «Алтын-Эмель». 150-метровая песчаная дюна одиноко возвышается в пустыне неподалеку речки Или между двумя гребнями Джунгарского Алатау - Кысты-Калкан (Малый Калкан) и Улькен-Калкан (Большой Калкан). Длина бархана около 3 км. Вокруг – только каменистая пустыня, поросшая саксаулом и небольшими кустиками…</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Top Chart Places Outside-->

    <!--Photo report section START-->
    <section id="photo_report" style="margin: 50px 0px 100px 0px;">

        <div class="row" style="margin-left: 140px">
            <div class="wel_header">
                <h3>Photoreport</h3>
            </div>
        </div>

        <div class="container">
            <div class="row1 row">
                <div class="column1 column">
                    <img src="{{URL::asset('img/photogrid/img1.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img2.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img3.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img4.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img17.jpg')}}">
                </div>
                <div class="column1 column">
                    <img src="{{URL::asset('img/photogrid/img5.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img6.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img7.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img8.jpg')}}">
                </div>
                <div class="column1 column">
                    <img src="{{URL::asset('img/photogrid/img9.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img10.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img11.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img12.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img18.jpg')}}">
                </div>
                <div class="column1 column">
                    <img src="{{URL::asset('img/photogrid/img13.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img14.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img15.jpg')}}">
                    <img src="{{URL::asset('img/photogrid/img16.jpg')}}">
                </div>
            </div>
        </div>
    </section>
    <!--Photo report section END-->

    <!--Google Map section Start-->
    <section>
        <div class="row" style="margin-left: 140px">
            <div class="wel_header">
                <h3>Almaty's map</h3>
            </div>
        </div>

        <div class="container">
            <div  class="col-lg-4 col-sm-6" id="map" style="height: 500px; width: 1140px; margin-bottom: 100px;"></div>
        </div>
    </section>
    <!--Google Map section End-->
@endsection