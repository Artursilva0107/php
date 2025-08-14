let nota1 = 7.5;
let nota2 = 6.0;
let nota3 = 8.2;
let media = (nota1 + nota2 + nota3) / 3;

if (media >= 7) {
    console.log(`Aluno aprovado com média ${media.toFixed(2)}`);
} else {
    console.log(`Aluno reprovado com média ${media.toFixed(2)}`);
}