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

  // Mobile Filters Logic
  const mobileFilterOpenButton = document.getElementById('mobile-filter-open-button');
  const mobileFilterPanel = document.getElementById('mobile-filter-panel');
  const mobileFilterCloseButton = document.getElementById('mobile-filter-close-button');

  if (mobileFilterOpenButton && mobileFilterPanel) {
    mobileFilterOpenButton.addEventListener('click', () => {
      mobileFilterPanel.classList.remove('translate-x-full');
    });
  }

  if (mobileFilterCloseButton && mobileFilterPanel) {
    mobileFilterCloseButton.addEventListener('click', () => {
      mobileFilterPanel.classList.add('translate-x-full');
    });
  }
});
