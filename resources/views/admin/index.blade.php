@include('layout.head')
<div class="container-fluid p-0">

    <div class="row m-0">

        <div class="col-12 p-0">

            <div class="login-card">

                <div>

                    <div class="login-main">

                        <form class="theme-form" method="post"   action="login">
                            @csrf
                            <input type="hidden" name="admin" value="da" />

                            <h4>Login administrare </h4>

                            @if(session()->has('errorlog'))
                                <div class="alert-danger" style="padding:5px;">
                                    {{ session()->get('errorlog') }}
                                </div>
                            @endif

                            <div class="form-group">

                                <label class="col-form-label">User</label>

                                <input class="form-control" name="user" type="text" required="" placeholder="user login">

                            </div>

                            <div class="form-group">

                                <label class="col-form-label">Parola</label>

                                <div class="form-input position-relative">

                                    <input class="form-control" type="password" name="pass" required="" placeholder="*********">

                                </div>

                            </div>

                            <div class="form-group mb-0">

                                <label class="text-muted" for="checkbox1" style="margin-bottom: 25px;"><a class="link" href="recuperare.php">Ai uitat parola?</a></label>

                                <div class="text-end mt-3">

                                    <button class="btn btn-primary btn-block w-100" type="submit">Logare</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>