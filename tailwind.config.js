/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './app/Filament/**/*.php',
    './resources/views/**/*.blade.php',
    "./resources/**/*.js",
    './vendor/filament/**/*.blade.php',    
  ],
  theme: { 
    extend: {
      fontFamily: {
        'sans': ['Lato','ui-sans-serif','Open Sans'],
        'serif': ['Optima','ui-serif','Georgia'],
      },
      colors: {
        'pine': '#414f41',
        'sage': '#93937f',
        'pebble': '#e5ded2',
        'driedrose': '#c0a396',
        'soul': '#435d5f',
        'plum': '#603a3f',
        'oceanmist': '#758d93',
        'coastalcalm': '#2d404e',
      },   
      backgroundImage: {
        'lander': "url('img/mycelium.jpg')",
        'pattern': "url('e7pattern-black.png')",
      }      
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

