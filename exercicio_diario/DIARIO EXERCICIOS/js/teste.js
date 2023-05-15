var clientes = [
    {
      id: 1,
      nome: 'Luis Santos Silveira',
      idade: 18
    },
    {
      id: 2,
      nome: 'Ricardo Lopes Alves',
      idade: 30
    },
    {
      id: 3,
      nome: 'Gustavo Silva Junior',
      idade: 26
    }
  ];
  
  var numero = "5(1)9-876-543-21";

  for (var i = 0; i < clientes.length; i++) {
    var cliente = clientes[i];
    var nomeCompleto = cliente.nome.split(' ');
    var ultimoNome = nomeCompleto[nomeCompleto.length - 1];
    var primeiroNome = nomeCompleto.slice(0, -1).join(' ');
  
    var nomeFormatado = ultimoNome + ', ' + primeiroNome;
    console.log(nomeFormatado);
  }

  var numeroFormatado = numero.replace(/^(\d{2})(\d)(\d{4})(\d{4})$/, '($1)_$2_$3-$4');
console.log(numeroFormatado);
