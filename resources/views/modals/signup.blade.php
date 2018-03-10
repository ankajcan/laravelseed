<div class="modal fade" id="sign-up-modal" tabindex="-1" role="dialog" aria-labelledby="SignUpLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sign Up</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                        <a  id="btn-login-fb" class="btn btn-block btn-social btn-facebook">
                            <span class="fa fa-facebook"></span> Sign Up With Facebook
                        </a>
                    </div>
                    <hr class="hr-line-dashed">
                    <h3 class="text-center m-t-lg m-b-lg">OR</h3>
                    <div class="col-xs-12">
                        <div class="col-xs-12">
                            <form id="sign-up-form">
                                {{ csrf_field() }}
                                <input id="on-success" type="hidden" name="on_success" value="">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6" data-error="first_name">
                                            <input type="text" class="form-control" required name="first_name" placeholder="First name">
                                            <p class="text-danger text-left error-content"></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-6" data-error="last_name">
                                            <input type="text" class="form-control" required name="last_name" placeholder="Last Name">
                                            <p class="text-danger text-left error-content"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12" data-error="email">
                                            <input type="email" class="form-control" required name="email" placeholder="Your Email">
                                            <p class="text-danger text-left error-content"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12" data-error="password">
                                            <input type="password" class="form-control" required  name="password" placeholder="Choose a Password">
                                            <p class="text-danger text-left error-content"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12" data-error="password_confirm">
                                            <input type="password" class="form-control" required  name="password_confirm" placeholder="Repeat Password">
                                            <p class="text-danger text-left error-content"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 text-center">
                                            <button type="submit" class="btn btn-primary">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Already have an account? <a onclick="$('#sign-up-modal').modal('hide');$('#login-modal').modal('show');return;">Login</a></p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
