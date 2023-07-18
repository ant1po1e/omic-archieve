@extends('layout.main')

@section('container')
<!-- Album -->
<section id="album" class="pb-5">
    <div class="container" data-aos="fade-up">
        <div class="row text-center mb-5 ">
            <div class="col">
                <h2>TOC <span class="acolor">Albums</span></h2>
            </div>
        </div>
        <div class="row fs-5 justify-content-evenly bg-content">
            <div class="col-md-4 mb-3">
                <div class="card" data-aos="fade-up" data-aos-delay="50">
                    <a href="https://music.apple.com/us/album/suck-my-world/1507914636" target="blank"><img id="ftr"
                            src="images/album1.jpg" class="card-img-top" alt="suckmyworld"></a>
                    <div class="card-body">
                        <h5 class="card-title text-center">SUCK MY WORLD</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" data-aos="fade-up" data-aos-delay="150">
                    <a href="https://music.apple.com/us/album/fixion/1064406932?l" target="blank"><img id="ftr"
                            src="images/album2.png" class="card-img-top" alt="fixion"></a>
                    <div class="card-body">
                        <h5 class="card-title text-center">FIXION</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" data-aos="fade-up" data-aos-delay="250">
                    <a href="https://music.apple.com/us/album/kisses-and-kills/1382495894" target="blank"><img
                            id="ftr" src="../images/album3.png" class="card-img-top" alt="kissandkills"></a>
                    <div class="card-body">
                        <h5 class="card-title text-center">Kisses and Kills</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Album-END -->
@endsection