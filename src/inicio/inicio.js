const botaoEntrar = document.getElementById('entrar');
const modal = document.getElementById('modalLogin');


botaoEntrar.addEventListener('click', () => {
  modal.hidden = false;
});

modal.addEventListener('click', (event) => {
  if (event.target === modal) {
    modal.hidden = true;
  }
});