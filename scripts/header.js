const links = document.querySelectorAll('.btn');

if (links.length) {
  links.forEach((link) => {
    link.addEventListener('click', (e) => {
      links.forEach((link) => {
        link.classList.remove('active');
      });
      e.preventDefault();
      link.classList.add('active');
    });
  });
}