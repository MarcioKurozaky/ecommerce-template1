@extends('frontend.main_master')

@section('content')
@section('title')Product Detail @endsection


<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="{{ asset('frontend/assets/images/products/f1.jpg') }}" width="100%"  id="mainImg" alt="">

        <div class="small-img-group">
            <div class="small-img-col">
                <img src="{{ asset('frontend/assets/images/products/f1.jpg') }}" width="100%"  id="mainImg" alt="">
            </div>

            <div class="small-img-col">
                <img src="{{ asset('frontend/assets/images/products/f1.jpg') }}" width="100%"  id="mainImg" alt="">
            </div>

            <div class="small-img-col">
                <img src="{{ asset('frontend/assets/images/products/f1.jpg') }}" width="100%"  id="mainImg" alt="">
            </div>

            <div class="small-img-col">
                <img src="{{ asset('frontend/assets/images/products/f1.jpg') }}" width="100%"  id="mainImg" alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-detail">
        <h6>Home / T-Shirts</h6>
        <h4>Men´s Fashion T Shirts</h4>
        <h2>$139.2</h2>
        <select>
            <option >Select Size</option>
            <option >XL</option>
            <option >XXL</option>
            <option >Small</option>
        </select>

        <input type="number" value="1">
        <button>Add To cart</button>
        <span>
            sajjad latafatyhá 6 mesesBrother, your teaching style is really wonderful, you explain very fluently and calmly, and I learned a lot of codes again..Continue again thanks
            Your courses are very well designed and well explained. You are a great mentor. Keep sharing and teaching.
            </span>


    </div>

</section>





@endsection
