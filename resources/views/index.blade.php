    @extends('Layouts.pagelayout')
    @section('content')
    {{-- Header --}}
    <header></header>
    <!-- Card -->
<div class="container">
<h2 class="mt-4 mb-3">All Posts</h2>
<div class="row">
    @foreach (range(1,8) as $card)
    <!-- Card-->
    <div class="col-md-4">
    <!-- Card image -->
    <div class="view overlay">
      <img class="card-img-top " src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg"
        alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
  
    <!-- Card content -->
    <div class="card-body">
  
      <!-- Title -->
      <h4 class="card-title">Card title</h4>
      <!-- Text -->
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
        content.</p>
      <!-- Button -->
      <a href="#" class="btn btn-primary">Button</a>
    </div>
    </div>
    <!-- Card-->  
    @endforeach
    
</div>
</div>

@endsection

