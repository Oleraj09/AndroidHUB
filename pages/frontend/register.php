<main>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5">

                            <h3 class="mb-5 text-center">Create Account
                                <hr>
                            </h3>

                            <form action="pages/frontend/action-register.php" method="POST">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    <input type="email" name="email" id="typeEmailX-2" class="form-control form-control-lg" />

                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input type="password" name="pass" id="typePasswordX-2" class="form-control form-control-lg" />

                                </div>

                                <button class="btn btn-primary btn-lg btn-block text-uppercase px-5" type="submit">REGISTER</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>