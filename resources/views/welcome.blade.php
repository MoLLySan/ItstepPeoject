<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('wrapper.head')
    
    <body>
        @include('wrapper.nav')

        
        <div class="col-md-12 bg-dark text-white">
            @include('wrapper.carusel')
       </div> 




       


       @include('wrapper.catalog')


            
        @include('wrapper.mapY')          
            
           

           
          
            
        
        @include('wrapper.footer')
        @include('wrapper.scripts')
    </body>
    
</html>
