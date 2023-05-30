<!-- 


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{route('add.product')}}" method="post" id="addProduct">
        @csrf
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="errMessage"></div>
      <div class="modal-body">
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" name="name" id="name">
            
        </div>
       

        <div class="form-group mt-2">
            <label for="name">Product Price</label>
            <input type="text" class="form-control" name="price" id="price">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" class="add_product">Save Product</button>
      </div>
    </div>
  </div>
  </form>
</div> -->