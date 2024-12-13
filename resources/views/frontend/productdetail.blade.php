@extends('components.main')

@section('content')
<section class="product py-12 px-4 sm:px-6 lg:px-8 mx-auto max-w-7xl">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
    <!-- Product Photo Section -->
    <div class="product__photo">
      <div class="photo-container relative">
        <!-- Main Product Image -->
        <div class="photo-main relative">
          <div class="controls absolute top-4 right-4 flex space-x-4">
            <i class="material-icons text-white bg-black bg-opacity-50 p-2 rounded-full cursor-pointer" onclick="shareProduct()">share</i>
            <i class="material-icons text-white bg-black bg-opacity-50 p-2 rounded-full cursor-pointer" onclick="toggleFavorite()">favorite_border</i>
          </div>
          <img id="main-image" src="{{asset('assets/image/product1.jpeg')}}" alt="Momas Flash Bike Helmet" class="w-full h-[500px] object-cover rounded-lg shadow-lg">
        </div>

        <!-- Photo Album Thumbnails -->
        <div class="photo-album mt-4">
          <ul class="flex space-x-2 overflow-x-auto">
            <li><img src="{{asset('assets/image/ebike.jpeg')}}" alt="Helmet Thumbnail 1" class="w-16 h-16 object-cover rounded-lg cursor-pointer" onclick="changeImage('{{asset('assets/image/ebike.jpeg')}}')"></li>
            <li><img src="{{asset('assets/image/unicycle.png')}}" alt="Helmet Thumbnail 2" class="w-16 h-16 object-cover rounded-lg cursor-pointer" onclick="changeImage('{{asset('assets/image/unicycle.png')}}')"></li>
            <li><img src="{{asset('assets/image/e-scooter.jpeg')}}" alt="Helmet Thumbnail 3" class="w-16 h-16 object-cover rounded-lg cursor-pointer" onclick="changeImage('{{asset('assets/image/e-scooter.jpeg')}}')"></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Product Info Section -->
    <div class="product__info">
      <div class="title mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Momas Flash Bike Helmet</h1>
        <span class="text-sm text-gray-600">Regular price: €139.00 EUR</span>
        <span class="text-sm text-gray-600">Tax included. Shipping calculated at checkout.</span>
      </div>
      <div class="price mb-6">
        <span class="text-2xl font-semibold text-gray-900">€139.00</span>
      </div>

      <div class="country-selection mb-6">
        <p class="text-lg font-semibold text-gray-800">This product is only available in selected countries.</p>
        <select id="country-select" class="mt-2 w-full p-3 border border-gray-300 rounded-lg">
          <option value="eu">Select Country</option>
          <option value="us">United States</option>
          <option value="uk">United Kingdom</option>
          <!-- Add more countries here -->
        </select>
        <p id="shipping-info" class="text-sm text-gray-500 mt-2">Not available in your country yet? <a href="#" class="text-blue-500">Contact us</a></p>
      </div>

      <div class="description mb-6">
        <h3 class="text-lg font-semibold text-gray-800">Product Description</h3>
        <p class="text-gray-700">
          Be seen in traffic! The Flash is an affordable bicycle helmet that works everywhere, whether you're cycling off-road, on the road, or in the city. This model combines sleek design with low weight and good protection. Equipped with lights and indicators in the helmet, you can signal your intentions to those around you in traffic. You control the lights with a remote that attaches to the bicycle handlebars.
        </p>
      </div>

      <div class="accessories mb-6">
        <h3 class="text-lg font-semibold text-gray-800">Accessories</h3>
        <ul class="list-none pl-0">
          <li class="text-gray-700">
            <strong>Momas Flash Bike Helmet</strong> - €139.00
          </li>
          <li class="text-gray-700">
            <strong>Thule VeloSpace XT2 (2 bikes)</strong> - €789.00
          </li>
          <li class="text-gray-700">
            <strong>Gaciron Race X 1000 L Front Light</strong> - €69.00
          </li>
          <li class="text-gray-700">
            <strong>Gaciron LED-Back light</strong> - €19.00
          </li>
        </ul>
      </div>
      
      <form action="#" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="1"> <!-- You can replace with dynamic product ID -->
        <button type="submit" class="buy--btn w-full py-3 border border-blue-600 text-black font-semibold rounded-lg hover:border-blue-700 transition-all"><a href="{{route('orderdetail')}}">ADD TO CART</a></button>
      </form>
    </div>
  </div>

  <!-- You May Also Like Section -->
  <div class="you-may-also-like mb-6 grid md:grid-cols-4-5 gap-2 lg:mx-24">
    <h3 class="text-lg font-semibold text-gray-800">You May Also Like</h3>
    <ul class="flex space-x-2 overflow-x-auto">
      <li>
        <img src="{{asset('assets/image/ebike.jpeg')}}" alt="Momas Flare Bike Helmet" class="w-24 h-24 object-cover rounded-lg cursor-pointer">
        <p class="text-gray-700 text-center">Momas Flare Bike Helmet - €52.00</p>
      </li>
      <li>
        <img src="{{asset('assets/image/ebike.jpeg')}}" alt="Momas Flare Bike Helmet" class="w-24 h-24 object-cover rounded-lg cursor-pointer">
        <p class="text-gray-700 text-center">Momas Flare Bike Helmet - €52.00</p>
      </li>
      <li>
        <img src="{{asset('assets/image/ebike.jpeg')}}" alt="Momas Flare Bike Helmet" class="w-24 h-24 object-cover rounded-lg cursor-pointer">
        <p class="text-gray-700 text-center">Momas Flare Bike Helmet - €52.00</p>
      </li>
      <li>
        <img src="{{asset('assets/image/unicycle.png')}}" alt="Momas Balance Bike" class="w-24 h-24 object-cover rounded-lg cursor-pointer">
        <p class="text-gray-700 text-center">Momas Balance+ - From €2,191.00</p>
      </li>
      <li>
        <img src="{{asset('assets/image/e-scooter.jpeg')}}" alt="Momas Neutron" class="w-24 h-24 object-cover rounded-lg cursor-pointer">
        <p class="text-gray-700 text-center">Momas Neutron - €3,358.00</p>
      </li>
    </ul>
  </div>
</section>


<!-- Add JavaScript for dynamic interactions -->
<script>
  function changeImage(imageSrc) {
    document.getElementById('main-image').src = imageSrc;
  }

  function shareProduct() {
    alert('Product shared!');
  }

  function toggleFavorite() {
    alert('Added to favorites!');
  }

  document.getElementById('country-select').addEventListener('change', function() {
    const selectedCountry = this.value;
    const shippingInfo = document.getElementById('shipping-info');
    if (selectedCountry === 'us') {
      shippingInfo.textContent = 'Shipping available to the United States.';
    } else if (selectedCountry === 'uk') {
      shippingInfo.textContent = 'Shipping available to the United Kingdom.';
    } else {
      shippingInfo.textContent = 'Not available in your country yet? Contact us';
    }
  });
</script>

@endsection
