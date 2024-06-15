/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./components/**/*.{html,js}",
    "./pages/**/*.{html,js}",
    "./*.html",
    "./*.php",
    './src/**/*.{html,js}',
  ],
  theme: {
    extend: {
      colors: {
        'primary-color': '#59c6bc',
      },
    },
  },
  
  plugins: [],

};
