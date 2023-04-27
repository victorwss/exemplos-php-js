<!DOCTYPE html>
<html>
    <head>
        <title>Formulário</title>
        <style>
            .erro {
                background: #FFC0C0;
                color: red;
            }
        </style>
        <script>
            function ehNumerico(algumTexto) {
                for (let i = 0; i < algumTexto.length; i++) {
                    const caractere = algumTexto.charAt(i);
                    if (!"0123456789".includes(caractere)) return false;
                }
                return true;
            }

            function enviar() {
                // Crie a função enviar() de forma que ela faça o seguinte:
                // - Não deixe enviar se qualquer campo estiver em branco.
                // - Não deixe enviar se não houver um "@" dentro do endereço de e-mail.
                // - Não deixe enviar se não houverem exatamente 11 números no telefone.
                // - Coloque próximo a cada campo, uma <div> ou <span> inicialmente invisível
                //   para colocar uma mensagem de erro.
                // - Se houver um erro em algum campo, a <div> com o erro correspondente fica
                //   visível exibindo a mensagem de erro.
                // - Não se esqueça de ocultar a <div> caso o usuário conserte o erro.
                // - Lembre-se das propriedades CSS "display: none" e "display: block".
                // - Faça o submit apenas quando não houver erros no formulário.
                const nome     = document.querySelector("#nome").value.trim();
                const endereco = document.querySelector("#endereco").value.trim();
                const telefone = document.querySelector("#telefone").value.trim();
                const email    = document.querySelector("#email").value.trim();
                const erroNome     = document.querySelector("#erro_nome");
                const erroTelefone = document.querySelector("#erro_telefone");
                const erroEmail    = document.querySelector("#erro_email");
                const erroEndereco = document.querySelector("#erro_endereco");
                let deuErro = false;

                if (nome === "") {
                    erroNome.innerHTML = "Preencha o nome!";
                    erroNome.style.display = "block";
                    deuErro = true;
                } else {
                    erroNome.style.display = "none";
                }

                if (telefone === "") {
                    erroTelefone.innerHTML = "Preencha o telefone!";
                    erroTelefone.style.display = "block";
                    deuErro = true;
                } else if (telefone.length !== 11 || !ehNumerico(telefone)) {
                    erroTelefone.innerHTML = "Preencha o telefone com 11 dígitos!";
                    erroTelefone.style.display = "block";
                    deuErro = true;
                } else {
                    erroTelefone.style.display = "none";
                }

                if (email === "") {
                    erroEmail.innerHTML = "Preencha o e-mail!";
                    erroEmail.style.display = "block";
                    deuErro = true;
                } else if (!email.includes("@")) {
                    erroEmail.innerHTML = "O e-mail tem que ter @!";
                    erroEmail.style.display = "block";
                    deuErro = true;
                } else {
                    erroEmail.style.display = "none";
                }

                if (endereco === "") {
                    erroEndereco.innerHTML = "Preencha o endereço!";
                    erroEndereco.style.display = "block";
                    deuErro = true;
                } else {
                    erroEndereco.style.display = "none";
                }

                if (!deuErro) {
                    document.querySelector("form").submit();
                }
            }
        </script>
    </head>
    <body>
        <form method="POST" action="/postget/aula2-ex4-b.php">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" />
                <div class="erro" id="erro_nome" style="display: none;"></div>
            </p>
            <p>
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" />
                <div class="erro" id="erro_telefone" style="display: none;"></div>
            </p>
            <p>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" />
                <div class="erro" id="erro_email" style="display: none;"></div>
            </p>
            <p>
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" />
                <div class="erro" id="erro_endereco" style="display: none;"></div>
            </p>
            <p>
                <button type="button" onclick="enviar();">Enviar</button>
            </p>
        </form>
    </body>
</html>