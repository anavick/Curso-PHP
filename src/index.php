<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
</head>

<body>

    <?php

        $nome = "Ana";
        $saudacao = "Oi,";
        $titulo = $saudacao . "portfolio da " . $nome;
        $subtitulo = "Bem-vindo ao meu portifolio";
        $ano = 2018;


        $projeto = "Meu portfolio";
        $finalizado = true;
        $dataDoProjeto = "2024-01-01";
        $descricao = "Este é o meu portifolio, escrito em PHP e HTML.";


        $projetos = [
            [
                "titulo" => "Meu Portfólio",
                "finalizado" => false,
                "ano" => "2024",
                "descricao" => "Este é o meu portfolio, escrito em PHP e HTML."
            ],
            [
                "titulo" => "Lista de tarefas",
                "finalizado" => true,
                "ano" => "2023",
                "descricao" => "Esta é uma lista de tarefas, escrita em JavaScript e HTML."
            ],
            [
                "titulo" => "Lista de livros",
                "finalizado" => true,
                "ano" => "2022",
                "descricao" => "Esta é uma lista de livros, escrito em JavaScript e HTML."
            ],
            [
                "titulo" => "Mais um projeto",
                "finalizado" => false,
                "ano" => "2025",
                "descricao" => "Este é mais um projeto, escrito em PHP e HTML."
            ],

        ];

        function verificarSeEstaFinalizado($projeto){

            if(! $projeto['finalizado']){
                echo "<span style='color:red'>⛔ não finalizado</span>";

            }else {
                echo "<span style='color:green'>✅ finalizado </span>";
            }

        }


        $projetosFiltrados = array_filter($projetos, function($projeto) {
            return $projeto['ano'] >= 2024;
        });

    ?>

    <h1><?php echo $titulo;?></h1>
    <p><?php echo $subtitulo;?></p>
    <p><?php echo $ano;?></p>


    <hr/>


    <div>
        <ul>
            <?php foreach($projetosFiltrados as $projeto): ?>

                <div

                    <?php if((2024 - $ano) > 2 ): ?>
                        style="background-color: burlywood;"
                    <?php endif; ?>

                >

                    <h2><?= $projeto['titulo']?></h2> 
                    <p><?= $projeto['descricao']?></p>


                    <div>

                        <div><?= $projeto['ano']?></div>
                        
                        <div>Projeto:

                            <?php verificarSeEstaFinalizado($projeto); ?>
                            
                        </div>

                    </div>
                </div>

            <?php endforeach; ?>
        </ul>
    </div>

    
    

    
</body>

</html>