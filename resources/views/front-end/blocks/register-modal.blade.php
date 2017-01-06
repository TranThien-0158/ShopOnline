<div class="modal fade" id="signup" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Create an account</h3>
         </div>
         <div class="modal-body">
            <form action="{{ route('user-register') }}" method="POST" role="form" enctype="multipart/form-data">
               {{ csrf_field() }}
               <div class="form-group">
                  <label for="">Enter Name</label>
                  <input type="text" class="form-control" name="txtName">
               </div>
               <div class="form-group">
                  <label for="">Enter Email</label>
                  <input type="email" class="form-control" id="" name="txtEmail">
               </div>
               <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" id="" name="txtPassword">
               </div>
               <div class="form-group">
                  <label for="">Confirm Password</label>
                  <input type="password" class="form-control" id="" name="txtRePassword">
               </div>
               <button type="submit" class="btn btn-primary btn-block">Sign up</button>
            </form>
         </div>
         @include('admin.blocks.errors')
      </div>
   </div>v 
</div>