/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'custom-orange': "#FFA500"
        }
    },
  },
  darkMode: 'class',
  plugins: [],
}

