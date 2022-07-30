@extends('layouts.front')

@section('title')
welcome to eshop
@endsection

@section('content')
@include('layouts.inc.slider')

<div class="py-5">
    <div class="container">
        <div class="row">
            <h1>ini landing page</h1>
            <h2>Featured Products</h2>
            <!-- owl carousel -->
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach ($featured_products as $prod)
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('assets/upload/products/'.$prod->image) }}" alt="Product Image">
                        <div class="card-body">
                            <h5>{{ $prod->name }}</h5>
                            <span class="float-start">{{ "Rp. " . number_format($prod->selling_price, 2, ',', '.') }}</span>
                            <span class="float-end"> <s>{{ "Rp. " . number_format($prod->original_price, 2, ',', '.') }}</s> </span>
                            <!-- echo "Rp. " . number_format($total, 2, ',', '.'); -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- owl carousel -->



            <!-- <div class="col-md-3">
                <div class="card">
                    <img src="#" alt="Product Image">
                    <div class="card-body">
                        <h5>judul</h5>
                        <small>harga</small>
                    </div>
                </div>
            </div> -->



        </div>
    </div>
</div>



<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Trending Category</h2>
            <!-- owl carousel -->
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach ($trending_category as $tcategory)
                <div class="item">
                    <a href="{{ url('view-category/'.$tcategory->slug) }}">
                        <div class="card">
                            <img src="{{ asset('assets/upload/category/'.$tcategory->image) }}" alt="Product Image">
                            <div class="card-body">
                                <h5>{{ $tcategory->name }}</h5>
                                <p>
                                    {{ $tcategory->description }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- hero-1 --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ asset('assets/upload/products/'.$prod->image) }}" alt="" width="100%">
            </div>
    
    
            <div class="col-sm-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dicta.</p>
            </div>
        </div>
    </div>
</section>
{{-- hero-1 --}}


{{-- hero-2 --}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="d-flex align-items-center">
                    flex Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, modi?
                </div>
            </div>
    
            <div class="col-sm-6">
                <img src="{{ asset('assets/upload/products/'.$prod->image) }}" alt="" width="100%">
            </div>
        </div>
    
    
        {{-- <div class="d-flex align-items-center">
    </div>
        <div class="flex-shrink-0">
            <img src="{{ asset('assets/upload/products/'.$prod->image) }}" alt="" width="">
        </div>
        <div class="flex-grow-1 ms-3">
          This is some content from a media component. You can replace this with any content and adjust it as needed.
        </div>
      </div> --}}
</section>
{{-- hero-2 --}}

{{-- section-3 --}}
<section>
    <div class="container">
        <p>For you</p>
        
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/upload/products/'.$prod->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/upload/products/'.$prod->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/upload/products/'.$prod->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
{{-- section-3 --}}

{{-- section-3 --}}
<section>
    <div class="container">
        <p>In season</p>
        
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/upload/products/'.$prod->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/upload/products/'.$prod->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
{{-- section-3 --}}

{{-- footer --}}
<div class="py-5">
    <div class="container">
        <div class="row bg-danger">
            <h2>ini footer</h2>
            <!-- owl carousel -->
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus dolore inventore voluptatem accusantium eum alias, necessitatibus esse nam repudiandae adipisci, quis in doloribus id itaque molestiae eaque sequi impedit exercitationem hic tenetur porro quia aspernatur commodi! Tenetur, distinctio voluptatibus ipsum placeat ullam amet quisquam cupiditate architecto qui! Consequuntur saepe architecto, ipsa provident inventore ipsam placeat voluptatem, nemo soluta commodi expedita voluptatibus assumenda, debitis quam molestiae similique fugit voluptatum! Doloremque tempore, quisquam aliquid deleniti quidem modi sapiente ut commodi doloribus alias velit delectus ratione impedit quam earum omnis ab minima quo atque sequi! Voluptas minima iste earum. Voluptate nemo excepturi veniam.
            </p>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <img src="{{ asset('assets/upload/products/'.$prod->image) }}" alt="" width="50%">
            </div>
            <div class="col-sm-4">
                <p><a href="">BLOG</a></p>
                <p><a href="">ABOUT US</a></p>
                <p><a href="">CONTACT US</a></p>
            </div>
            <div class="col-sm-4">
                <p>ADDRESS</p>
                <p>
                    JL. Kebon Kacang No.2<br>
                    Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40265<br>
                    Phone: +62 812-1234-1234<br>
                </p>
            </div>
            
        </div>    
    </div>

    <hr>
    <div class="container bg-dark text-light">
        <div class="row">
            <div class="col-sm-6">
                <p>
                    &copy; 2022 Lilo Store. All Rights Reserved. 
                </p>
                <p>
                    <a href="">Privacy Policy</a> | <a href="">Terms & Conditions</a>
                </p>
            </div>
            <div class="col-sm-6">
                <p>FOLLOW US</p>
            </div>
            {{-- <a href="">Privacy Policy</a> | <a href="">Terms & Conditions</a> | <a href="">Contact Us</a> | <a href="">About Us</a>  --}}
        </div>



        
    </div>
    
{{-- footer --}}





{{-- <h1>bawah sendiri</h1> --}}
@endsection

@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>
@endsection