<div {{ $attributes }} class="header-bottom">
    <!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        @foreach ($menu as $item)
                        @if (is_array($item['url']))
                        <li class="dropdown"><a href="#">{{$item['title']}}<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                @foreach ($item['url'] as $sub)
                            <li><a href="{{ $sub['url'] }}">{{ $sub['title'] }}</a></li>

                                @endforeach
                            </ul>
                        </li>
                        @else
                        <li><a href="{{$item['url']}}" class="active">{{$item['title']}}</a></li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Search" />
                </div>
            </div>
        </div>
    </div>
    {{ $slot }}
</div>
<!--/header-bottom-->