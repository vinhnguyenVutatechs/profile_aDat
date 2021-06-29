
    <!DOCTYPE html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="{{$settings['name-admin'][0]}} Dịch vụ Facebook | Admin Cộng đồng like}}">
    <meta name="author" content="Marketify">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{$settings['name-admin'][0]}}</title>
    <meta name='Title' content="{{$settings['name-admin'][0]}} | Dịch Vụ Facebook">
    <meta name='Keywords' content="{{$settings['name-admin'][0]}}, Dịch vụ facebook">
    <meta name='Copyright' content="{{$settings['name-admin'][0]}}">
    <meta name='Classification' content="Personal">
    <meta name='Rating' content="General">
    <meta name='Revisit-After' content="7 Days">
    <meta http-equiv="pragma" content="no-cache"/>
    <meta http-equiv='Content-Type' content="text/html; charset=utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image:width" content="490px" />
    <meta property="og:image:height" content="292px" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="tiendatmedia.com" />
    <meta name="geo.placename" content="Viet Nam" />
    <meta name="geo.region" content="vn" />
    <meta name="DC.Language" content="vn" >
    <link rel="alternate" href="{{ url('/') }}" hreflang="vn">
    <meta name="robots" content="noodp,index,follow">
    <meta property="fb:app_id" content="">
    <meta name="alexaVerifyID" content="">
    <link rel="shortcut icon" href="{{ asset($settings['faicon'][0]) }}" type="image/x-icon" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type"   : "Organization",
            "url"     : "{{ url('/') }}",
            "logo"    : "{{ asset($settings['faicon'][0]) }}",
            "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": "{{ $settings['faicon'][0] }}",
                "contactType": "customer service"
            }
            ]
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/dark.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />

    </head>
    <body class="dark">

    <div id="preloader">
        <div class="loader_line"></div>
    </div>
<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "1527803460772775");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="tokyo_tm_all_wrap" data-magic-cursor="" data-color="white"> 
    <div class="tokyo_tm_modalbox_news">
        <div class="box_inner">
            <div class="close">
                <a href="#"><img class="svg" src="{{asset('img/svg/cancel.svg')}}" alt="" /></a>
            </div>
            <div class="description_wrap scrollable"></div>
        </div>
    </div>


    <div class="tokyo_tm_modalbox_about">
        <div class="box_inner">
            <div class="close">
                <a href="#"><img class="svg" src="{{asset('img/svg/cancel.svg')}}" alt="" /></a>
            </div>
        <div class="description_wrap scrollable">
            <div class="my_box"> 
                <div class="left" style="width:100%;">
                    <div class="about_title">
                        <h3>Kỹ năng dịch vụ</h3>
                    </div>
                    <div class="tokyo_progress">
                    @foreach ($skill as $key=>$value)
                        <div class="progress_inner" data-value="{{$key}}">
                            <span>
                                <span class="label">{{$key}}</span>
                                <span class="number">{{$value}}%</span>
                            </span>
                            <div class="background">
                                <div class="bar">
                                    <div class="bar_in"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="counter">
                <div class="about_title">
                    <h3>Fun Facts</h3>
                </div>
                    <ul>
                        @foreach ($funfacts as $key=>$value)
                        <li>
                            <div class="list_inner">
                                <h3>{{$value}}</h3>
                                <span>{{$key}}</span>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="partners">
                    <div class="about_title">
                    <h3>Our Partners</h3>
                </div>
                <ul class="owl-carousel">
                    @foreach ($personal as $value)
                    <li class="item"><a href="{{$value->slug}}"><img src="{{$value->img}}" alt="{{$value->name}}" /></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>  
</div>
    <div class="leftpart">
    <div class="leftpart_inner">
    <div class="logo">
    <a href="#"><img src="{{asset('img/logo/logo.png')}}" alt="" /></a>
    </div>
    <div class="menu">
    <ul>
        @foreach ($categories as $key=>$value)
            <li class="{{ ($key == 0) ? 'active' : '' }}"><a href="#{{ $value->slug }}" data-filter="*">{{$value->name}}</a></li>  
        @endforeach
    </ul>
    </div>
    </div>
    </div>


    <div class="rightpart">
    <div class="rightpart_in">

    <div id="home" class="tokyo_tm_section active">
    <div class="container">
    <div class="tokyo_tm_home">
    <div class="home_content">
    <div class="avatar">
    <div class="image" data-img-url="{{asset('img/slider/1.jpg')}}"></div>
    </div>
    <div class="details">
        <h3 class="name">{{$settings['name-admin'][0]}}</h3>
        <p class="job">{{ $settings['content-demo'][0] }}</p>
    <div class="social">
        <ul>
            @if (!is_null($settings['facebook'][0]))   
                <li><a href="{{ $settings['facebook'][0] }}"><img class="svg" src="{{asset('img/svg/social/facebook.svg')}}" alt="" /></a></li>
            @endif
            @if (!is_null($settings['twitter'][0]))
                <li><a href="{{ $settings['twitter'][0] }}"><img class="svg" src="{{asset('img/svg/social/twitter.svg')}}" alt="" /></a></li>
            @endif
            @if (!is_null($settings['instagram']))
                <li><a href="{{ $settings['instagram'][0] }}"><img class="svg" src="{{asset('img/svg/social/instagram.svg')}}" alt="" /></a></li>
            @endif
            @if (!is_null($settings['dribbble']))
                <li><a href="{{ $settings['dribbble'][0] }}"><img class="svg" src="{{asset('img/svg/social/dribbble.svg')}}" alt="" /></a></li>
            @endif
            @if (!is_null($settings['tik-tok']))
                <li><a href="{{ $settings['tik-tok'][0] }}"><img class="svg" src="{{asset('img/svg/social/tik-tok.svg')}}" alt="" /></a></li>
            @endif
        </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div id="about" class="tokyo_tm_section">
    <div class="container">
    <div class="tokyo_tm_about">
    <div class="about_image">
    <img src="{{asset('img/thumbs/4-2.jpg')}}" alt="" />
    <div class="main" data-img-url="{{asset('img/slider/1.jpg')}}"></div>
    </div>
    <div class="description">
    <h3 class="name">{{ $settings['adriano-smith-photographer'][0] }}</h3>
    <div class="description_inner">
    <div class="left">
    <p>{{$settings['content-about'][0]}}</p>
    <div class="tokyo_tm_button">
    <a href="#">Learn More</a>
    </div>
    </div>
        <div class="right">
            <ul>
                @foreach ($profile as $key=>$value)
                <li><p><span>{{$key}}:</span>{{$value}}</p></li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

            <div class="tokyo_tm_portfolio_titles"></div>
                <div id="portfolio" class="tokyo_tm_section">
                    <div class="container">
                    <div class="tokyo_tm_portfolio">
                    <div class="tokyo_tm_title">
                    <div class="title_flex">
                    <div class="left">
                    <span>Portfolio</span>
                    <h3>Creative Portfolio</h3>
                </div>
                <div class="portfolio_filter">
                    <ul>
                        @foreach ($categories_portfolio as $key=>$value)
                            <li><a href="#" {{$key == 0 ? "class='current'" : ''}} data-filter="{{$key == 0 ? $value->slug : ".$value->slug"}}">{{$value->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="list_wrapper">
            <ul class="portfolio_list gallery_zoom">
                @foreach ($portdolio as $value)
                <li class="{{$value->CategoriesPortfolio->slug}}">
                    <div class="inner">
                        <div class="entry tokyo_tm_portfolio_animation_wrap" data-title="{{$value->name}}" data-category="{{$value->CategoriesPortfolio->name}}">
                            <a class="popup-{{$value->CategoriesPortfolio->slug}}" href="{{$value->video}}">
                                <img src="{{asset('img/thumbs/1-1.jpg')}}" />
                                <div class="main_image" data-img-url="{{$value->img}}"></div>
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>
    </div>


    <div id="news" class="tokyo_tm_section">
        <div class="container">
            <div class="tokyo_tm_news">
                <div class="tokyo_tm_title">
                    <div class="title_flex">
                        <div class="left">
                            <span>News</span>
                            <h3>Latest News</h3>
                        </div>
                    </div>
                </div>
                <ul>
                    @foreach ($blogs as $blog)
                    <li>
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{asset('img/thumbs/4-3.jpg')}}" alt="" />
                                <div class="main" data-img-url="{{$blog->img}}"></div>
                                <a class="tokyo_tm_full_link" href="{{$blog->slug}}"></a>
                            </div>
                            <div class="details">
                                <div class="extra">
                                    <div class="short">
                                        <p class="date">By <a href="#">{{$blog->Users->name}}</a> <span>{{$blog->created_at->format('d-m-Y')}}</span></p>
                                    </div>
                                    <div class="my_like">
                                        <a href="#">
                                            <span>{{$blog->view}} view</span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="title">
                                    <a href="#">{{$blog->name}}</a>
                                </h3>
                                <div class="tokyo_tm_read_more">
                                    <a href="{{$blog->slug}}"><span>Xem thêm</span></a>
                                </div>
                            </div>
                            <div class="main_content">
                                <div class="descriptions">
                                    {!!$blog->content!!}
                                </div>
                                <div class="news_share">
                                    <span>Share:</span>
                                    <ul>
                                        <li><a href="#"><img class="svg" src="{{asset('img/svg/social/facebook.svg')}}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{asset('img/svg/social/twitter.svg')}}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{asset('img/svg/social/instagram.svg')}}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{asset('img/svg/social/dribbble.svg')}}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{asset('img/svg/social/tik-tok.svg')}}" alt="" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


    <div id="contact" class="tokyo_tm_section">
        <div class="container">
            <div class="tokyo_tm_contact">
                <div class="tokyo_tm_title">
                    <div class="title_flex">
                        <div class="left">
                            <span>Liên hệ</span>
                            <h3>Get in Touch</h3>
                        </div>
                    </div>
                </div>
                <div class="fields">
                    <form method="post" action="{{route('Contact')}}" class="contact_form">
                        @csrf
                        <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                        <div class="empty_notice">
                            <span>Vui lòng điền thông tin đầy đủ.</span>
                        </div>
                        @include('error')
                        <div class="first">
                            <ul>
                                <li>
                                    <input name="name"  type="text" placeholder="Name" value="{{ old('name') }}">
                                </li>
                                <li>
                                    <input name="information" type="text" value="{{old('information')}}" placeholder="Email hoặc số điện thoại...">
                                </li>
                            </ul>
                        </div>
                        <div class="last">
                            <textarea  placeholder="Nội dung" name="content">{{old('content')}}</textarea>
                        </div>
                        <div class="tokyo_tm_button" data-position="left">
                            <input value="Contact" type="submit">
                                {{-- <span>Contact</span> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

    </div>


    <script data-cfasync="false" src="{{asset('js/email-decode.min.js')}}">
    </script><script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5bpEs3xlB8vhxNFErwoo3MXR64uavf6Y&amp;callback=initMap"></script>

    </body>

    </html>