<section id="slider">
    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @for ($i = 0; $i < $slider->count(); $i++)
                            <li data-target="#slider-carousel" data-slide-to="{{ $i }}"
                                class="{{ ($i===0)? "active": NULL }}"></li>
                            @endfor
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($slider as $key => $item)
                        <div class="item {{ ($key === 0)? "active": NULL }}">
                            <div class="col-sm-6">
                                <h1><span>{{ substr($item->title, 0, 1) }}</span>{{ substr($item->title, 1) }}</h1>
                                <h2>{{ $item->subtitle }}</h2>
                                <p>{{ $item->description }}</p>
                                <a href="{{ $item->link }}">
                                    <button type="button" class="btn btn-default get">{{ $item->link_text }}
                                    </button></a>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset($item->image) }}" class="girl img-responsive" alt="" />
                                <img src="images/home/pricing.png" class="pricing" alt="" />
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/slider-->