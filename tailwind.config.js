/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily:{
      
      'arial-rounded': ['Arial Rounded MT Regular', 'sans-serif'],
    
    },
  
    extend: {
      colors: {
        'DDS-blue' : '#009DCA',
        'Card-blue' : '#DCEFF7',

      }
    },
  },
  plugins: [],
}

