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

      animation:{
        fadeIn: "fadeIn",
        fadeOut: "fadeOut",
        scaleIn : "scaleIn",
        scaleOut: "scaleOut",
      },
      keyframes:{
        fadeIn:{
          "0%":{opacity: 0 },
          "100%":{opacity:1},
        },
        fadeOut:{
          "0%":{opacity: 1 },
          "100%":{opacity:0},
        },
        scaleIn:{
          "0%":{transform:"scale(0)" },
          "100%":{transform:"scale(1)"},
        },
        scaleOut:{
          "0%":{transform:"scale(1)" },
          "100%":{transform:"scale(0)"},
        },
      },
   
      
   colors: {
        'primary-color': '#2072AF',
        'secondary-color': '#FADA5E',
      },
    },
  },
  
  plugins: [],

};
