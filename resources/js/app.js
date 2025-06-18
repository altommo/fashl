import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

window.addEventListener('DOMContentLoaded', () => {
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileMenuCloseButton = document.getElementById('mobile-menu-close-button');

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('-translate-y-full'); // Toggle to slide down
    });
  }

  if (mobileMenuCloseButton && mobileMenu) {
    mobileMenuCloseButton.addEventListener('click', () => {
      mobileMenu.classList.add('-translate-y-full'); // Hide the menu
    });
  }
});
