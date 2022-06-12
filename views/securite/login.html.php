

   <div class="d-flex flex-row justify-content-center mt-5">
          <div class="card w-50 mt-5">
            <div class="card-body bg-white">
              <p class="card-title text-center fs-5">Formulaire de Connexion</p>
            <?php if(isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                      <strong><?=$error?></strong>
                </div>
             <?php endif ?>
              <div class="card-text">
              <form method="post" action="<?=WEB_URL?>">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Login</label>
                      <input name="login" type="text" class="form-control <?=isset($errors['login'])?"is-invalid":""  ?> " id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="" class="form-text invalid-feedback"><?=$errors['login']?></div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input name="password" type="password" class="form-control <?=isset($errors['password'])?"is-invalid":""  ?> " id="exampleInputPassword1">
                      <div id="" class="form-text invalid-feedback"><?=$errors['password']?></div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary float-end">Connexion</button>
              </form>

              </div>
            </div>
          </div>
      </div>
