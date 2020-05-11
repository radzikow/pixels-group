// Page Loader Animation

window.addEventListener('load', () => {
  const preloader = document.querySelector('.preloader');

    if (preloader.classList.contains('loaded')) {
      preloader.classList.remove('loaded');
    }

    preloader.classList.add('loaded');
});

