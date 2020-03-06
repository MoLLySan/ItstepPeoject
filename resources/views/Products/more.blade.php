<!DOCTYPE html>
<html>
@include('wrapper.head')


<body>
    @include('wrapper.nav')
<div class="container">
    <div class="row">
        
    
    
        <div class="col rounded">
        <img src="/storage/{{$product->img}}" class="figure-img img-fluid rounded ">
    </div>
        
        
        
        
        
        
        <dt class="col">
            
            {{-- <dt>Название :</dt> --}}
            <h2 class="card-title">{{$product->name}}</h2>
            {{-- <dt>Характеристики :</dt> --}}
            <p class="card-text">{{$product->description}}</p>
            {{-- <dt>Цена :</dt> --}}
            <p class="card-text">{{$product->cost}} тг.</p>
            
        
        </dt>
      
    
    </div>


</div>

    @include('wrapper.footer')
    @include('wrapper.scripts')
</body>
</html>