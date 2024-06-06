<div class="formulario">
    <div class="form-contato">
        <h3>Formulário para contato</h3>
        <form id="formulario" >
            <div class="form-group">
                <label class="form-lab" for="">Nome:</label><br>
                <input name="nome" class="form-input form-control" type="text" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <label class="form-lab" for="">E-mail:</label><br>
                <input name="email" class="form-input form-control" type="email" placeholder="E-mail" required>
            </div>
            <div class="form-group">
                <label class="form-lab" for="">Contato (apenas números):</label><br>
                <input id="contato" name="contato" oninput="formatarTelefone(event)" class="form-input form-control" type="text" placeholder="(38) 9 9999-9999" required>
            </div>
            <div class="form-group">
                <label class="form-lab" for="">Mensagem:</label><br>
                <textarea name="mensagem" class="form-input form-control" rows="4" placeholder="Digite o que está procurando" required></textarea>
            </div>

            <div class="form-group"><br>
                <input id="btn" class="form-btn" type="submit" name="submit" value="Enviar">
            </div>
        </form>
    </div>
</div>