<div class="modal fade login-modal" id="login" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">log in</h3>
         </div>
         <div class="modal-body">
            <form action="{{ route('user-login') }}" method="POST" role="form">
            {{ csrf_field() }}
               <div class="form-group">
                  <label for="">Enter Email</label>
                  <input type="email" class="form-control" id="" name="email">
               </div>
               <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" id="" name="password">
               </div>
               <div class="checkbox">
                  <label>
                  <input type="checkbox"> Remember Me
                  </label>
               </div>
               <button type="submit" class="btn btn-primary btn-block">Log in</button>
               <button type="button" class="btn btn-link btn-block">Forgot Password?</button>
            </form>
         </div>
      </div>
   </div>
</div>