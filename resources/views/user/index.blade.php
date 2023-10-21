
@include('user.header')
    

      
       
          <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Selamat datang, {{ auth()->user()->name }}</h1>
            
          </div>
        </div>
      
      
        @include('user.footer')
   


   