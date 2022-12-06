<main>
    <section>
        <button class="btn btn-sucess">
            <a href="index.php">
               <button type="button" class="btn btn-outline-success" style="background-color: green; color:white;">Voltar</button>
            </a>
    </section>
    <h2 class="mt-3">Cadastrar Vaga</h2>
    <form method="post">
        <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" name='title'>
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <textarea class="form-control" name='descricao' rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label for="form-control">
                        <input type="radio" name="ativo" value="s" checked>Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label for="form-control">
                        <input type="radio" name="ativo" value="n">Inativo
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
        <button class="btn btn-sucess">
               <button type="submit" class="btn btn-outline-success" style="background-color: green; color:white;">Enviar</button>       
        </div>

    </form>
</main>