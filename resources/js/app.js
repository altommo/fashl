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
  const quickViewMainImage = document.getElementById('quickViewMainImage');
  const quickViewTitle = document.getElementById('quickViewTitle');
  const quickViewDescription = document.getElementById('quickViewDescription');
  const quickViewPrice = document.getElementById('quickViewPrice');
  const quickViewThumbnailsContainer = document.getElementById('quickViewThumbnails');


  // Function to populate and show quick view modal
  const showQuickViewModal = (productData) => {
    if (quickViewMainImage) quickViewMainImage.src = productData.mainImage;
    if (quickViewTitle) quickViewTitle.textContent = productData.title;
    if (quickViewDescription) quickViewDescription.textContent = productData.description;
    if (quickViewPrice) quickViewPrice.textContent = productData.price;
    
    // Clear existing thumbnails
    if (quickViewThumbnailsContainer) {
      quickViewThumbnailsContainer.innerHTML = '';
      // Add new thumbnails
      productData.thumbnails.forEach(thumbnailUrl => {
        const img = document.createElement('img');
        img.src = thumbnailUrl;
        img.alt = productData.title + ' thumbnail';
        img.classList.add('w-20', 'h-24', 'object-cover', 'rounded-md', 'cursor-pointer', 'border-2', 'border-transparent', 'hover:border-fashl-sage', 'transition-colors');
        img.addEventListener('click', () => {
          quickViewMainImage.src = thumbnailUrl; // Change main image on thumbnail click
        });
        quickViewThumbnailsContainer.appendChild(img);
      });
    }

    if (quickViewModal) {
      quickViewModal.classList.remove('hidden');
    }
  };

  // Event listeners for quick view buttons
  document.querySelectorAll('.open-quick-view').forEach(button => {
    button.addEventListener('click', (event) => {
      event.preventDefault();
      const productData = {
        id: button.dataset.productId,
        title: button.dataset.productTitle,
        description: button.dataset.productDescription,
        price: button.dataset.productPrice,
        mainImage: button.dataset.productMainImage,
        thumbnails: JSON.parse(button.dataset.productThumbnails),
      };
      showQuickViewModal(productData);
    });
  });

  if (closeQuickViewButton && quickViewModal) {
    closeQuickViewButton.addEventListener('click', () => {
      quickViewModal.classList.add('hidden');
    });
  }

  // Search Autocomplete Logic
  const desktopSearchInput = document.getElementById('desktop-search-input');

  // Debounce function
  const debounce = (func, delay) => {
    let timeout;
    return function(...args) {
      const context = this;
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(context, args), delay);
    };
  };

  const showSuggestions = (query) => {
    if (query.length > 2) { // Only show suggestions for queries longer than 2 characters
      console.log('Fetching suggestions for:', query);
      // In a real application, you would make an AJAX request here
      // and display suggestions in a dropdown below the input.
    } else {
      console.log('Query too short for suggestions:', query);
      // Hide suggestions if query is too short
    }
  };

  if (desktopSearchInput) {
    desktopSearchInput.addEventListener('input', debounce((event) => {
      showSuggestions(event.target.value);
    }, 300));
  }
});
