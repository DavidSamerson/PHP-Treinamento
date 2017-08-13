
<?php include ("../cabecalho.php"); ?>

<div class="login-body">
    <article class="container-login center-block">
    <section>
      <ul id="top-bar" class="nav nav-tabs nav-justified">
        <li class="active"><a data-toggle="tab" href="#login-access">ENTRAR</a></li>
        <li><a href="#cadastro" data-toggle="tab">CADASTRAR</a></li>
      </ul>
      <div class="tab-content tabs-login col-lg-12 col-md-12 col-sm-12 cols-xs-12">
        <div id="login-access" class="tab-pane fade active in">
          <h2><i class="glyphicon glyphicon-log-in"></i>  Minha Agenda</h2>
          <br>          
          <form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
            <div class="form-group ">
              <label for="login" class="sr-only">Email</label>
                <input type="text" class="form-control" name="login" id="login_value" 
                  placeholder="Email" tabindex="1" value="" />
            </div>
            <div class="form-group ">
              <label for="password" class="sr-only">Password</label>
                <input type="password" class="form-control" name="password" id="password"
                  placeholder="Password" value="" tabindex="2" />
            </div>
            <div class="checkbox">
                <label class="control-label" for="remember_me">
                  <input type="checkbox" name="remember_me" id="remember_me" value="1" class="" tabindex="3" /> Relembrar
                </label>
            </div>
            <br/>
            <div class="form-group ">       
                <button type="submit" name="log-me-in" id="submit" tabindex="5" class="btn btn-lg btn-primary">Entra</button>
            </div>
          </form>     
        </div>

        <div id="cadastro" class="tab-pane fade">
          <h2><i class="glyphicon glyphicon-log-in"></i>  CADASTRO</h2>
          <br>          
          <form method="post" accept-charset="utf-8" autocomplete="off" role="form" class="form-horizontal">
            <div class="form-group ">
              <label for="name" class="sr-only">Nome</label>
                <input type="text" class="form-control" name="name" id="login_value" 
                  placeholder="Email" tabindex="1" value="" />
            </div>
            <div class="form-group ">
              <label for="login" class="sr-only">Email</label>
                <input type="email" class="form-control" name="login" id="login_value" 
                  placeholder="Email" tabindex="1" value="" />
            </div>
            <div class="form-group ">
              <label for="password" class="sr-only">Senha</label>
                <input type="password" class="form-control" name="password" id="password"
                  placeholder="Password" value="" tabindex="2" />
            </div>
            <br/>
            <div class="form-group ">       
                <button type="submit" name="log-me-in" id="submit" tabindex="5" class="btn btn-lg btn-primary">Cadastrar</button>
            </div>
          </form>     
        </div>
      </div>
    </section>
  </article>
</div>

<script type="text/javascript">
// Select all tabs
$('.nav-tabs a').click(function(){
    $(this).tab('show');
})

// Select tab by name
$('.nav-tabs a[href="#login-access"]').tab('show')

// Select first tab
$('.nav-tabs a:first').tab('show') 

// Select last tab
$('.nav-tabs a:last').tab('show') 

// Select fourth tab (zero-based)
$('.nav-tabs li:eq(3) a').tab('show')

</script>


<?php include ("../rodape.php"); ?>