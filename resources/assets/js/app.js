function toggleBody() {
  document.querySelector('#displayAbout').classList.toggle('hidden');
  document.querySelector('#displayCasestudies').classList.toggle('hidden');
  document.querySelector('#displayHome').classList.toggle('hidden');
  document.querySelector('#displayPhone').classList.toggle('hidden');
  document.querySelector('#displayLetstalk').classList.toggle('hidden');
}

document.querySelector('#nav').addEventListener('click', toggleBody);
