<main>

  <h2 class="mt-3">Deletar Vaga</h2>

  <form method="post">

    <div class="form-group">
      <p>Você deseja realmente excluir o Atleta <strong><?=$obAtleta->nome?></strong>?</p>
    </div>

    <div class="form-group">
      <a href="index.php">
        <button type="button" class="btn btn-info">Cancelar</button>
      </a>

      <button type="submit" name="deletar" class="btn btn-danger">Deletar</button>
    </div>

  </form>

</main>