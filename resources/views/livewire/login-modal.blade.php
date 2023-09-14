<div>
    <!-- =========== LOGIN MODAL STARTS ==============  -->
    <div>
        <div>
            <div class="modal fade" id="loginModal" tabIndex="-1" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="w-100 text-center position-relative">
                                <img src="https://jew.zishstudio.com/wp-content/themes/elessi-theme/assets/images/logo.jpg"
                                    height="45" width="60" alt="" />
                                <button type="button" class="btn-close modal_close" data-bs-dismiss="modal"
                                    aria-label="Close" id="closeButton"></button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="login__maiN_">
                                <div class="form-section">
                                    <div class="form-section">
                                        <div class="login-box">
                                            <form method="post" action="{{ route('login') }}">
                                                @csrf
                                                <div class=" login__">
                                                    <div class="mb-3">
                                                        <label htmlFor="email" class="form-label">
                                                            Username or email
                                                            <span style="color: red;">*</span>
                                                        </label>
                                                        <input type="email" class="form-control" id="email"
                                                            name="email" />

                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex justify-content-between">
                                                            <label htmlFor="exampleFormControlInput2"
                                                                class="form-label">
                                                                Password <span style="color: red;">*</span>
                                                            </label>
                                                        </div>
                                                        <input type="password" class="form-control" id="password"
                                                            name="password" />

                                                    </div>
                                                    <button class="sign_blue_btn" type="submit">
                                                        <Spinner color="white" /> SIGN IN TO YOUR ACCOUNT
                                                    </button>
                                                    <div class="text-center mt-3">
                                                        <p>
                                                            Not a member?
                                                            <span>
                                                                <a href="{{ route('register') }}">Create an
                                                                    account</a>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =========== LOGIN MODAL ENDS ==============  -->
    </div>
</div>
