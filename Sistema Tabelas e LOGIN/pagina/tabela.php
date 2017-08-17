

<link rel="stylesheet" type="text/css" href="css/tabela.css">

<div class="span7">   
<div class="widget stacked widget-table action-table">
            
        <div class="widget-header">
          <i class="icon-th-list"></i>
          <h3>Table</h3>
          <br>
        </div> <!-- /widget-header -->
        <div class="widget-content col-sm-8">
          
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NOME</th>
                <th>EMAIL</th>
                <th class="td-actions"> EDITAR/DELETAR</th>
              </tr>
            </thead>
            <tbody>

            <?php

              include("conexao.php");

              $sqlListar = "SELECT * FROM pessoas";
              $query = $mysqli->query($sqlListar);
              
              while ($resultado = $query->fetch_array(MYSQL_BOTH)) {
                
                print "

              <tr>
                <td>$resultado[nome]</td>
                <td>$resultado[email]</td>

               <td class='td-actions'>
                  <a href='index.php?id=$resultado[id]' class='btn btn-small btn-primary'>
                    <i class='btn-icon-only icon-ok'>EDITAR</i>                   
                  </a>
                  
                  <a href='remover.php?id=$resultado[id]' class='btn btn-small'>
                    <i class='btn-icon-only icon-remove'>
                    DELETAR</i>                   
                  </a>
                </td>
              </tr>

                  ";

              }

            ?>
              
              </tbody>
            </table>
          
        </div> <!-- /widget-content -->

        <div class="col-sm-4" align="center">
         
         <legend>CADASTRO</legend>

          <form action="" method="">
            
          <div class="form-group" style="margin-bottom: 2%">
            <label class="col-sm-6 control-label" for="nome">
              NOME
            </label>
            <div class="col-sm-6">
              <input type="text" name="nome" id="nome" placeholder="Nome da Pessoa" class="form-control input-md">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-6 control-label" for="email">
              EMAIL
            </label>
            <div class="col-sm-6">
              <input type="email" name="email" id="email" placeholder="Nome da Pessoa" class="form-control input-md">
            </div>
          </div>
          <div class="form-group col-sm-4 col-sm-offset-8">
          <br>
          <button type="submit" class="bnt btn-primary bnt-block">CADASTRAR</button>
            </div>
          </form>
      </div>





      </div> <!-- /widget -->
            </div>