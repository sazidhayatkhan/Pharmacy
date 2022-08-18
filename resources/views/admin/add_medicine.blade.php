<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type='text/css'>
label{
display:inline-block;
width:200px;
}
    </style>
    @include('admin.css')
  </head>
  <body>
  <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <!-- partial -->
      
     @include('admin.sidebar')
        <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            
            <div class='container-fluid page-body-wrapper'>

           


                <div class="container">


                @if(session()->has('message'))

<div class='alert alert-success'>
    <button type='button' class='close' data-dismiss='alert'>X</button>
    {{session()->get('message')}}

</div>

@endif

                    <form action="{{url('upload_medicine')}}" method='POST' enctype='multipart/form-data'>

                    @csrf
                        <div style='padding:15px'>
                            <label>Medicine Name</label>
                            <input type='text' style='color:black'; name='name' placeholder="Write the name" required=''>
                        </div>
                        <div style='padding:15px'>
                            <label>Batch Number</label>
                            <input type='number' style='color:black'; name='number' placeholder="Write the batch" required=''>
                        </div>
                        <div style='padding:15px'>
                            <label>Catagory</label>
                            <select style='color:black; width:215px'>
                                <option>--Select--</option>
                                <option value="Skin">Skin</option>
                                <option value="Heart">Heart</option>
                                <option value="Eye">Eye</option>
                                <option value="Nose">Nose</option>
                            </select>
                        </div>
                        <div style='padding:15px'>
                            <label>Expiery Date</label>
                            <input type='date' style='color:black'; name='date' placeholder="Write the date" required=''>
                        </div>
                        <div style='padding:15px'>
                            <label>Medicine Image</label>
                            <input type='file' name='file'>
                        </div>
                        <div style='padding:15px'>
                            
                            <input type='submit'class='btn btn-success'>
                        </div>
                    </form>
                </div>
        
            </div>
          <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>