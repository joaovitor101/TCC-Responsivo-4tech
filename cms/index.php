<?php
include("../models/conexao.php");
include("../views/blades/header.php");
?>
<style>
    <?php include '../css/style.css'; ?>
</style>
<!-- <div class="container p-5 mt-5 rounded" id="login">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card bg-dark text-white">
            <h3 class="p-3">Login</h3>
                <div class="card-body">
                    <form action="../controllers/login.php" method="POST">
                        <div class="mb-3">
                            <label>Usuario</label>
                            <input type="text" name="usuario" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Senha</label>
                            <input type="password" name="senha" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->




<div class="content">
         <div class="text">
            Login
         </div>
         <form action="../controllers/login.php" method="POST">
            <div class="field">
               <input required="" type="text" class="input form-control" name="usuario">
               <span class="span"><svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><path class="" data-original="#000000" fill="#595959" d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"></path></g></svg></span>
               <label class="label">Usuario</label>
               
            </div>
            <div class="field">
               <input required="" type="password" class="input" name="senha">
               <span class="span"><svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><path class="" data-original="#000000" fill="#595959" d="M336 192h-16v-64C320 57.406 262.594 0 192 0S64 57.406 64 128v64H48c-26.453 0-48 21.523-48 48v224c0 26.477 21.547 48 48 48h288c26.453 0 48-21.523 48-48V240c0-26.477-21.547-48-48-48zm-229.332-64c0-47.063 38.27-85.332 85.332-85.332s85.332 38.27 85.332 85.332v64H106.668zm0 0"></path></g></svg></span>
               <label class="label">Senha</label>
            </div>
            <button type="submit" class="button">Entrar</button>


            <!-- <div class="sign-upa">
               Novo Cadastro?
               <button type="submit" class="button-reg">Registrar</button>
            </div> -->
         </form>
      </div>
  


  

<?php include("../views/blades/footer.php")?>