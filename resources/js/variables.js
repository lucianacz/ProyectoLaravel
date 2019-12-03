var usuario =
{
nombre : 'Luciana',
esAlmuno : false,
hobbies : ['programar', 'correr', 'saltar'],
agregarHobbies : function (hobby)
  {
    this.hobbies.push(hobby)
  }
}

usuario.agregarHobbies('pintar')
usuario.email = 'luciana@gmail.com'

console.log(usuario);
