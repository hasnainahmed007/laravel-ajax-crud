

<div class="container">
<div class="row">
 
    <div class="col-md-4">
    
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{route('student.store')}}" method="post" id="addProduct">
        @csrf
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="errMessage"></div>
      <div class="modal-body">
      @if(session()->has('status'))
       <div class="alert alert-success" role="alert">{{session()->get('status')}}</div>
       @endif
        <div class="form-group">
            <label for="name">Student Name</label>
            <input type="text" class="form-control" name="student_name" id="name">
            <span class="text-danger">
              @error('student_name')
              {{$message}}
              @enderror
           </span>
            
            
        </div>

        <div class="form-group">
            <label for="name">Roll</label>
            <input type="text" class="form-control" name="student_roll" id="roll">
            <span class="text-danger">
              @error('student_roll')
              {{$message}}
              @enderror
           </span>
            
            
        </div>
       

        <div class="form-group">
            <label for="name">Phone number</label>
            <input type="text" class="form-control" name="student_phone" id="name">
            <span class="text-danger">
              @error('student_phone')
              {{$message}}
              @enderror
           </span>
            
            
        </div>
       
       

        <div class="form-group mt-2">
            <label for="name">Email</label>
            <input type="email" class="form-control" name="student_email" id="price">
            <span class="text-danger">
              @error('student_email')
              {{$message}}
              @enderror
           </span>
        </div>

        <div class="form-group">
            <label for="name">Student Image</label>
            <input type="file" class="form-control" name="student_image" id="image">
            <span class="text-danger">
              @error('student_image')
              {{$message}}
              @enderror
           </span>
            
            
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" class="add_product">Save Product</button>
      </div>
    </div>
  </div>
  </form>
</div>
</div>
</div>
</div>