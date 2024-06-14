<h1 class="titulo_contato pb_20">Contato</h1>
<form action="" class="form_contato flex column gap_20">
    <div class="flex column">
        <label for="nome">Seu nome</label>
        <input class="input_padrao" type="text" id="nome" name="nome" require>
    </div>
    <div class="flex column">
        <label for="email">Seu e-mail</label>
        <input class="input_padrao" type="email" id="email" name="email" require>
    </div>
    <div class="flex column">
        <label for="assunto">Assunto</label>
        <input class="input_padrao" type="text" id="assunto" name="assunto" require>
    </div>
    <div class="flex column">
        <label for="mensagem">Sua mensagem</label>
        <textarea type="text" id="mensagem" name="mensagem" require></textarea>
    </div>
    <div class="flex column">
        <button>Enviar</button>
    </div>
</form>