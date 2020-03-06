<!DOCTYPE html>
<html>
@include('wrapper.head')
<body>
    @include('wrapper.nav')
        @if(auth()->user()->is_admin)
        <div>
        <button data-toggle="modal" data-target="#myModal" class="btn btn-outline-white">Создать продукт</button>
        </div>
        @else
        @endif
    <div class="container">
        
        <div class="row">
            
        @foreach ($products as $product)
        <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="storage/{{$product->img}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title text-dark" >{{$product->name}}</h5>
            <p class="card-text text-dark">{{$product->description}}</p>
            <p class="card-text text-dark">{{$product->cost}} тг.</p>
            <a href="{{route('more',$product->id)}}" class="btn btn-primary">подробнее</a>

            @auth
            @if(auth()->user()->is_admin)
            <a href="{{route('proddel',$product->id)}}" class="btn btn-danger">удалить</a>
            @else
            @endif
            @endauth
            </div>
        </div>
        </div>
        @endforeach
        </div>
    </div>

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add product</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            <form method="POST" action="{{route('prodCreate')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Название') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('описание') }}</label>

                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cost" class="col-md-4 col-form-label text-md-right">{{ __('цена') }}</label>

                        <div class="col-md-6">
                            <input id="cost" type="bigInteger" class="form-control @error('cost') is-invalid @enderror" name="cost" value="{{ old('cost') }}" required autocomplete="cost" autofocus>

                            @error('cost')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('картинка') }}</label>

                        <div class="col-md-6">
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required>

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('create') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('wrapper.footer')
@include('wrapper.scripts')
</body>
</html>



