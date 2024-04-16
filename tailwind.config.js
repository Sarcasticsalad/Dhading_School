/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily:{
      
      'arialBold': ['Arial Rounded MT Bold', 'sans-serif'],
      'arialRegular' : ['Arial Rounded MT Regular', 'sans-serif'],
    
    },
  
    extend: {
      colors: {
        'DDS-blue' : '#00B3E6',
        'Card-blue' : '#F2F2F2',
        'heading-blue' : '#00ADDE',
        'shadow-blue' : '#00A1CF',
        'schoolcard-blue' : '#F2F2F2',

      }
    },
  },
  plugins: [],
}

