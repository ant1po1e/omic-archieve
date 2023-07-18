@extends('layout.main')

@section('container')
<!-- Member -->
<section id="member" class="pb-5">
    <div class="container" data-aos="fade-up">
        <div class="row text-center mb-5 ">
            <div class="col">
                <h2>About <span class="acolor">Member</span></h2>
            </div>
        </div>
        <div class="row fs-5 justify-content-evenly bg-content">
            <div class="col-md-4 mb-3">
                <div class="card" data-aos="fade-up" data-aos-delay="150">
                    <img id="ftr" src="images/Suzuki.jfif" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Shigenobu Suzuki (鈴木 重伸)</h5>
                        <p class="card-text">As: Guitarist
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" data-aos="fade-up" data-aos-delay="50">
                    <img id="ftr" src="images/Akira.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Akira Akirakani (あきらかにあきら)</h5>
                        <p class="card-text">As: Bassist, Vocalist</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" data-aos="fade-up" data-aos-delay="250">
                    <img id="ftr" src="images/Masaya.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Masaya Nakanishi (中西 雅哉)</h5>
                        <p class="card-text">As: Drummist</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" data-aos="fade-up" data-aos-delay="250">
                    <img id="ftr" src="images/Takuya.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Takuya Yamanaka (山中 拓也)</h5>
                        <p class="card-text">As: Lead Vocalist, Guitarist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Member-END -->
@endsection