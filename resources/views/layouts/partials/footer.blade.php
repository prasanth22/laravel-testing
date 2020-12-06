<!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script>
  $("#search-btn").on('click', function(){      
    alert("Please");       
    //e.preventDefault();     
    //serializing form data       
    //var formData = $(this).serialize();     
    //var ajaxUrl = $(this).attr('action'); 
    //Getting the url  
    $.ajax({   
      url: "{{ route('postAjaxDemo') }}",  
      //data : formData,  
      method : "POST",  
      success : function(data) {   
      $(".message").addClass('alert alert-success');   
      $(".message").html(data.result);  
      }, 
      error : function(data) {   
      $(".message").addClass('alert alert-danger');   
      $(".message").html(data.result);  
      } 
    });
    });
  </script>