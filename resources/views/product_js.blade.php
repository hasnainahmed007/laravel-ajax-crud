<!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
   });
    </script>

    <script>
        $(document).ready(function(){
            $(document).on('click','.add_product',function(e){
                e.preventDefault();
                let name = $('#name').val();
                let price = $('#price').val();
                console.log(name+price);

                $.ajax({
                    url:"{{route('add.product')}}",
                    method:'post',
                    data:{name:name,price:price},
                    success:function(res){

                    },
                    error:function(err){
                        let error = err.responseJSON;
                        $.each(error.errors,function(index,value){
                            $('.errMessage').append('<span class="text-danger">'+value+'</span>'+'<br>');
                        });
                    }
                });
            });
        });
    </script> -->