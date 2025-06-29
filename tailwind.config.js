/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './app/**/*.php',
    './resources/**/*.{php,js,css}',   // include CSS for @apply
  ],
  theme: {
    extend: {
      colors: {
        'fashl-white': '#FEFCF7', // Warm white from style tile
        'fashl-black': '#1A1A1A', // True black from style tile
        'fashl-sage': '#9CAF88',  // Sage (seasonal) from style tile
        'fashl-gray': '#F5F5F5',  // Soft gray from style tile
        'fashl-cream': '#F9F6F1', // Cream from style tile
      },
      fontFamily: {
        'inter': ['Inter', 'sans-serif'],
        'montserrat': ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
