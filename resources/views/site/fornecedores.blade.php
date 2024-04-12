<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #f2f2f2;
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #6a329f;
        border-radius: 5px;
    }

    ::-webkit-scrollbar-track {
        background-color: #b498cf;
    }
</style>

<body>
    <nav style="display: flex; justify-content: space-between; background-color: #f2f2f2; padding: 25px;">
        <!-- Logotipo. -->
        <ul style="list-style-type: none; display: flex;">
            <li>
                <a href="/"
                    style="text-decoration: none; margin-left: 50px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 23px;">Ciclista
                    Amador<span style="color: #6a329f; font-weight: bolder; font-family: cursive;">.</span></a>
            </li>
        </ul>

        <!-- Links. -->
        <ul style="list-style-type: none; display: flex;">
            <li>
                <a href="/"
                    style="text-decoration: none; margin-right: 30px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 20px;"
                    onmouseover="this.style.color='#6a329f'" onmouseout="this.style.color='#0c0c0c'">Início</a>
            </li>
            <li>
                <a href="/sobrenos"
                    style="text-decoration: none; margin-right: 30px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 20px;"
                    onmouseover="this.style.color='#6a329f'" onmouseout="this.style.color='#0c0c0c'">Sobre Nós</a>
            </li>
            <li>
                <a href="/contato"
                    style="text-decoration: none; margin-right: 30px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 20px;"
                    onmouseover="this.style.color='#6a329f'" onmouseout="this.style.color='#0c0c0c'">Contato</a>

            </li>

            <!-- Fornecedores. -->
            <li>
                <a href="/fornecedores"
                    style="text-decoration: none; margin-right: 50px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 20px;"
                    onmouseover="this.style.color='#6a329f'" onmouseout="this.style.color='#0c0c0c'">Fornecedores</a>

            </li>

            <li>
                <a href="/login"
                    style="text-decoration: none; margin-right: 20px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 20px;"
                    onmouseover="this.style.color='#6a329f'" onmouseout="this.style.color='#0c0c0c'">Entrar</a>

            </li>
            <li>
                <a href="/register"
                    style="text-decoration: none; margin-right: 50px; color: #0c0c0c; font-weight: bold; font-family: 'arial'; font-size: 20px;"
                    onmouseover="this.style.color='#6a329f'" onmouseout="this.style.color='#0c0c0c'">Cadastrar</a>

            </li>
        </ul>
    </nav>

    <section style="display: flex; justify-content: space-between; flex-direction: column; background-color: 
    #fefefe; font-family: 'arial'; margin: 120px 60px;">
        <h1
            style="color: #6a329f; letter-spacing: 8px; text-align: center; font-weight: bold; font-size: 60px; margin-top: 75px;">
            Você encontrou a melhor
        </h1>

        <h2
            style="color: #4a236f; letter-spacing: 8px; text-align: center; font-weight: bold; font-size: 30px; margin-top: 15px;">
            Comunidade Nacional de Ciclistas</h2>

        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin-top: 30px;">
            Você
            encontrou o seu lar, o ponto de encontro definitivo para ciclistas de todo o país. Seja você um ciclista
            casual, um entusiasta de longa data ou um novato ansioso para explorar novas trilhas, nossa comunidade tem
            algo para todos.
        </p>



        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin-top: 10px;">
            @if (count($fornecedores) > 0 && count($fornecedores) < 10)
                <h3>Existem alguns fornecedores cadastrados</h3>
            @elseif(count($fornecedores) > 10)
                <h3>Existem mais de 10 fornecedores cadastrados</h3>
            @else
                <h3>Ainda não existe fornecedores cadastrados cadastrados</h3>
            @endif
        </p>

        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin-top: 10px;">
            Junte-se a nós e experimente os benefícios de fazer parte de uma comunidade vibrante de ciclistas. Desde
            dicas e truques para aprimorar suas habilidades até eventos emocionantes e passeios em grupo, estamos aqui
            para tornar sua jornada de ciclismo ainda mais gratificante e emocionante.
        </p>

        <p style="color: #0c0c0c; text-align: justify; font-size: 20px; margin-top: 10px;">
            Junte-se à melhor comunidade nacional de ciclistas hoje mesmo e comece a fazer parte de algo verdadeiramente
            especial. Vamos pedalar juntos em direção a novos horizontes!
        </p>

        <div style="display: flex; justify-content: center; margin-top: 35px;">
            <a href="/register">
                <button 
                    style="padding: 13px 25px; color: #0c0c0c; background-color: #f2f2f2; border: 3px solid #6a329f; border-radius: 5px; cursor: pointer; font-weight: 700; font-size: 18px;"
                    onmouseover="this.style.background='#6a329f'" onmouseout="this.style.background='#f2f2f2'">
                    CADASTRAR
                </button>
            </a>
        </div>
    </section>

    <section
        style="background: linear-gradient(to bottom, #0c0c0c, #6a329f); padding: 20px; border-top: 5px solid #6a329f; font-family: arial;">
        <h2 style="text-align: center;">
            <a href="/"
                style="text-decoration: none; font-family: cursive; color: #f2f2f2; letter-spacing: 3px; font-weight: bold; font-size: 30px; margin-top: 20px;">Ciclista
                Amador<span style="color: #0c0c0c; font-size: 60px; font-weight: bolder; font-family: cursive;">.</span>
            </a>
        </h2>

        <h3
            style="color: #f2f2f2; letter-spacing: 3px; text-align: center; font-weight: bold; font-size: 20px; margin-top: 10px;">
            Um site feito para o pelotão
        </h3>

        <p style="color: #f2f2f2; text-align: center; font-size: 15px; margin-top: 50px;">Copyright © 2024 Ciclista
            Amador. Todos os direitos reservados.</p>
    </section>
</body>

</html>