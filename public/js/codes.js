const menuHamburguer = document.querySelector('.menu-hamburguer');
const lista = document.querySelector('.lf-lista');
let aberto = false;

menuHamburguer.addEventListener('click', () => {
  if (!aberto) {
    menuHamburguer.classList.add('aberto');
    lista.classList.add('aberto');
    aberto = true;
  } else {
    menuHamburguer.classList.remove('aberto');
    lista.classList.remove('aberto');
    aberto = false;
  }
});