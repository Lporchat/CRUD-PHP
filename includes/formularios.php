<main>

    <section>
        <a href="index.php">
            <button class="btn btn-info">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">

        <div class="form-group">
            <label>Atleta</label>
            <input type="text" class="form-control" name="nome">
        </div>

        <div class="form-group">
            <label>Modalidade</label>
            <textarea class="form-control" name="modalidades" rows="1"></textarea>
        </div>

        <div class="form-group">
            <label>Medalha</label>
            <div>

                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="medalha" value="Ouro"> Ouro
                    </label>
                </div>
                
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="medalha" value="Prata"> Prata
                    </label>
                </div>
                
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="medalha" value="Bronze"> Bronze
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">Enviar</button>
        </div>
    </form>
</main>