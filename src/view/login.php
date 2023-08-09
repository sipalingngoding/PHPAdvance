<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <?php flash(); ?>
                    <form method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control <?= $css['email'] ?? "" ?>" id="email" name="email" value="<?=$inputs['email'] ?? "" ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control <?= $css['password'] ?? "" ?>" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-success btn-block form-control mt-2">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>