@include('frontend.body.header')

<!-- // toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />

        <!-- main-area -->
        <main>
            @yield('main')
        </main>
        <!-- main-area-end -->




        <!-- Footer-area -->
        @include('frontend.body.footer')
        <!-- Footer-area-end -->




		<!-- JS-area -->
        @include('frontend.body.js')
        <!-- JS-area-end -->


        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



        <script type="text/javascript">
  
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type','info') }}"
  switch(type) {
  case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;

   case 'success':
    toastr.success("{{ Session::get('message') }}");
    break; 

    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break; 

  case 'error':
    toastr.error("{{ Session::get('message') }}");
    break; 
  }
  @endif

</script>
