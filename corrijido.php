<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
</head>
<body>
    <?php 
    echo "Escola<br>";

    // Primeira classe e dados abaixo do diretor
    class Diretor {
        public $nome;
        public $id;
        public $gmail;
    }

    // Dados do diretor
    $d = new Diretor();
    $d->nome = "Guilherme"; 
    $d->id = "12345657"; 
    $d->gmail = "guilherme@gmail.com"; // Adicionando o e-mail do diretor

    echo "Diretor: " . $d->nome . "<br>";
    echo "ID do Diretor: " . $d->id . "<br>";
    echo "E-mail do Diretor: " . $d->gmail . "<br><br>";

    // Segunda classe e dados abaixo do professor
    class Professor {
        public $nome;
        public $rm;
        public $materia;
    }

    // Dados do professor
    $p = new Professor();
    $p->nome = "José";
    $p->rm = "12345678";
    $p->materia = "Matemática"; // Adicionando a matéria do professor

    echo "Professor: " . $p->nome . "<br>";
    echo "RM do Professor: " . $p->rm . "<br>";
    echo "Matéria: " . $p->materia . "<br><br>";

    // Terceira classe e dados abaixo do aluno
    class Aluno {
        public $nome;
        public $ra;
        public $serie;
    }

    // Dados do aluno
    $a = new Aluno();
    $a->nome = "Ana";
    $a->ra = "123123";
    $a->serie = "3º Ano";

    echo "Aluno: " . $a->nome . "<br>";
    echo "RA do Aluno: " . $a->ra . "<br>";
    echo "Série do Aluno: " . $a->serie . "<br>";
    ?>
</body>
</html>
