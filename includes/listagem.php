<?php
 $mensagem = '';
 if(isset($_GET['status'])){
   switch ($_GET['status']) {
     case 'success':
       $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
       break;

     case 'error':
       $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
       break;
   }
 }

 $resultados = '';
 foreach($atletas as $atletas){
   $resultados .= '<tr>
                     <td>'.$atletas->id.'</td>
                     <td>'.$atletas->nome.'</td>
                     <td>'.$atletas->modalidade.'</td>
                     <td>'.$atletas->medalha.'</td>
                     <td>
                       <a href="editar.php?id='.$atletas->id.'">
                         <button type="button" class="btn btn-info">Editar</button>
                       </a>
                       <a href="deletar.php?id='.$atletas->id.'">
                         <button type="button" class="btn btn-danger">Excluir</button>
                       </a>
                     </td>
                   </tr>';
 }

 $resultados = strlen($resultados) ? $resultados : '<tr>
                                                      <td colspan="6" class="text-center">
                                                             Nenhum Atleta encontrada
                                                      </td>
                                                   </tr>';

?>
<main>
    <?=$mensagem?>  
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-info">Adicionar</button>
        </a>
    </section>
    
    <section>
      <form method="get">
        <div class="row my-4">
          <div class="col">
            <label>Buscar por Nome</label>
            <input type="text" name="busca" class="form-control" value="<?=$busca?>">
          </div>

          <div class="col">
            <label>Medalha</label>
            <select name="medalhas" class="form-control">
              <option value="">Todos</option>
              <option value="Ordem" <?=$filtros == 'Ordem' ? 'selected' : '' ?>>Ordem de medalhas</option>
              <option value="Ouro" <?=$filtros == 'Ouro' ? 'selected' : '' ?>>Ouro</option>
              <option value="Prata"<?=$filtros == 'Prata' ? 'selected' : '' ?>>Prata</option>
              <option value="Bronze"<?=$filtros == 'Bronze' ? 'selected' : '' ?>>Bronze</option>
            </select>
          </div>

          <div class="col d-flex align-itens-and">
            <button type="submit" class="btn btn-info">Filtrar</button>
          </div>
        </div>
      </form>
    </section>

    <section>
    
        <table class="table bg-light mt-4">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Modalidade</th>
                <th>Medalha</th>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>

    </section>


</main>