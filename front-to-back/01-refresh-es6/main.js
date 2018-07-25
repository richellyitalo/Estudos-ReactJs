// LET
let name = 'Jão';
name = 'Djao';
// console.log(name);

// CONST
const pessoa = {
  nome: 'Jao'
};
// nao permitido
// pessoa = {
//   nome: 'Novo Jao'
// };
pessoa.nome = 'Djao';
// console.log(pessoa);

// FOREACH
const frutas = ['Maça', 'Banana', 'Melao'];
// frutas.forEach((fruta, index) => console.log(index))

// FILTER
const pessoas = [
  'Jao',
  'Djao',
  'Maria'
];
const pessoa2 = pessoas.filter(pessoa => pessoa !== 'Djao');
// console.log(pessoa2);

// SPREAD
const pessoa1 = {
  nome: 'Jao'
};

const pessoa3 = {
  ...pessoa1,
  nome: 'djao',
  email: 'jao@email.com'
};
// console.log(pessoa3);

// CLASSES
class Pessoa {
  constructor(nome, idade) {
    this.nome = nome;
    this.idade = idade;
  }

  static gritar() {
    console.log('Ahhhhhhhhhhhh!!!');
  }

  gritar() {
    console.log('Aiiiiiiiiiiii!!!');
  }

  resumo() {
    return `Olá, eu sou ${this.nome} e tenho ${this.idade}`;
  }
}

const Pessoa1 = new Pessoa('Jao', 35);

// console.log(Pessoa1.resumo());
// Pessoa1.gritar();
// Pessoa.gritar();

// SUBCLASSES
class Cliente extends Pessoa {
  constructor(nome, idade, valor) {
    super(nome, idade);

    this.valor = valor;
  }

  info() {
    return `${this.nome} tem ${this.valor}`;
  }
}

const cliente = new Cliente('Djao', 40, 3000);
// console.log(cliente.info());

// MODULES

