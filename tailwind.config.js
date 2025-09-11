/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
    "./storage/framework/views/*.php",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
        fontFamily: {
        sans: ['"Helvetica Neue"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
        ivy: ['"ivypresto-display"', 'serif'],
        },
    },
    container: {
        center: true,
        padding: { DEFAULT: '1rem', lg: '2rem' },
        screens: { xl: '1200px', '2xl': '1400px' }
    },
},
  plugins: [],
};
