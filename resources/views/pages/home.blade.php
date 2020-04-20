@extends('layouts.common')


@section('content')

<div id="carouselPreviewCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselPreviewCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselPreviewCaptions" data-slide-to="1"></li>
            <li data-target="#carouselPreviewCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.thetattooshop.com/uk/media/aw_rbslider/slides/Desktop.DynamicInk3for50.UK_1.jpg" class="d-block image-fit" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem, ipsum.
                    </h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.thetattooshop.com/uk/media/aw_rbslider/slides/Desktop.DynamicInk3for50.UK_1.jpg" class="d-block image-fit" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem, ipsum.</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.thetattooshop.com/uk/media/aw_rbslider/slides/Desktop.DynamicInk3for50.UK_1.jpg" class="d-block image-fit" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Lorem, ipsum dolor.
                    </h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselPreviewCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselPreviewCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    @include('partials.item_deals', [])
    @include('partials.item_deals', [])
    @include('partials.item_deals', [])    
    
@endsection