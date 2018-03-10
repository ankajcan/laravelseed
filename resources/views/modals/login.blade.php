<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="loginLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login In to Your Account</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <a  id="btn-login-fb" class="btn btn-block btn-social btn-facebook">
                            <span class="fa fa-facebook"></span> Sign in with Facebook
                        </a>
                    </div>
                    <hr class="hr-line-dashed">
                    <h3 class="text-center m-t-lg m-b-lg">OR</h3>
                    <div class="col-xs-12">
                        <form id="login-form" role="form" >
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="email" class="form-control" required name="email"  placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" required name="password"  placeholder="Password">
                            </div>
                            <div class="form-group" data-error="message">
                                <p class="text-danger center error-content"></p>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Log In</button>
                            </div>
                        </form>
                        <p class="text-center">
                            <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
                        </p>
                        <p class="text-center">Don't have an account? <a onclick="$('#sign-up-modal').modal('show');$('#login-modal').modal('hide');return;">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
