<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('wrapper.head')
    
    <body>
        @include('wrapper.nav')

        
        <div class="flex-center position-ref full-height">
            <div class="container">
            <div class="row mb-1"> 
                <div class="col-md-12">
                     @include('wrapper.carusel')
                </div>            
            </div>
           

           
            <div class="row mb-2">    
                 <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A789eeae01e1885db47d9e9fd730fcc5a68abcfb21c277fe94a4379783fbe51a2&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
            </div>
            </div>
        </div>
        @include('wrapper.footer')
        @include('wrapper.scripts')
    </body>
    
</html>
