<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
  <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <!-- partial -->
      
     @include('admin.sidebar')
        <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            
        <!-- partial -->
            @include('admin.body')
          <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>