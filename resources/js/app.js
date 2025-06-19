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
      mobileMenu.classList.toggle('translate-x-full'); // Toggle to slide from right
    });
  }

  if (mobileMenuCloseButton && mobileMenu) {
    mobileMenuCloseButton.addEventListener('click', () => {
      mobileMenu.classList.add('translate-x-full'); // Hide the menu
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

  // Filter Checklist Modal Logic
  const openFilterChecklistModalButton = document.getElementById('open-filter-checklist-modal');
  const filterChecklistModal = document.getElementById('filter-checklist-modal');
  const filterChecklistCloseButton = document.getElementById('filter-checklist-close-button');

  if (openFilterChecklistModalButton && filterChecklistModal) {
    openFilterChecklistModalButton.addEventListener('click', () => {
      filterChecklistModal.classList.remove('hidden');
    });
  }

  if (filterChecklistCloseButton && filterChecklistModal) {
    filterChecklistCloseButton.addEventListener('click', () => {
      filterChecklistModal.classList.add('hidden');
    });
  }

  // Pre-Order Notification Dismissal Logic (now integrated into header)
  const dismissPreOrderNotificationButton = document.getElementById('dismiss-pre-order-notification');
  const preOrderNotificationBar = dismissPreOrderNotificationButton ? dismissPreOrderNotificationButton.closest('div') : null;

  if (dismissPreOrderNotificationButton && preOrderNotificationBar) {
    dismissPreOrderNotificationButton.addEventListener('click', () => {
      preOrderNotificationBar.classList.add('hidden');
    });
  }

  // Header scroll detection for styling (e.g., adding shadow on scroll)
  const mainHeader = document.getElementById('main-header');
  if (mainHeader) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) { // Adjust scroll threshold as needed
        mainHeader.classList.add('scrolled');
      } else {
        mainHeader.classList.remove('scrolled');
      }
    });
  }

  // Quick View Modal Logic
  const quickViewModal = document.getElementById('quickViewModal');
  const closeQuickViewButton = document.getElementById('closeQuickView');
  // You'll need to add event listeners to your product cards or quick view buttons
  // For example: document.querySelectorAll('.open-quick-view').forEach(button => { ... });

  if (closeQuickViewButton && quickViewModal) {
    closeQuickViewButton.addEventListener('click', () => {
      quickViewModal.classList.add('hidden');
    });
  }
});
