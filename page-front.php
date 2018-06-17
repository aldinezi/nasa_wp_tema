<?php /* Template Name: Home Template */?>
<?php get_header(); ?>
    <main role="main">
        <section class="intro-slide">
                <div id="carouselOKCIntroSlide" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselOKCIntroSlide" data-slide-to="1"></li>
                        <li data-target="#carouselOKCIntroSlide" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselOKCIntroSlide" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="https://placeholdit.co//i/500x150?&bg=213fasd&text=OKCUrbanArt" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://placeholdit.co//i/500x150?&bg=213fasd&text=OKCUrbanArt" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://placeholdit.co//i/500x150?&bg=213fasd&text=OKCUrbanArt" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselOKCIntroSlide" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselOKCIntroSlide" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
        </main>
<?php get_footer(); ?>