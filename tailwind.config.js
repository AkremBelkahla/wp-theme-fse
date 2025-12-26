/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './templates/**/*.html',
    './parts/**/*.html',
    './patterns/**/*.php',
    './blocks/**/*.{js,jsx,php}',
    './acf-blocks/**/*.php',
    './inc/**/*.php',
    './functions.php',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0056b3',
        secondary: '#6c757d',
        accent: '#17a2b8',
        dark: '#212529',
        light: '#f8f9fa',
        success: '#28a745',
        warning: '#ffc107',
        error: '#dc3545',
      },
      fontFamily: {
        sans: ['-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', 'sans-serif'],
        serif: ['Merriweather', 'Georgia', 'serif'],
        poppins: ['Poppins', 'sans-serif'],
      },
      spacing: {
        'xxs': '0.25rem',
        'xs': '0.5rem',
        's': '1rem',
        'm': '1.5rem',
        'l': '2rem',
        'xl': '3rem',
        'xxl': '5rem',
      },
      maxWidth: {
        'content': '800px',
        'wide': '1200px',
      },
    },
  },
  plugins: [],
  corePlugins: {
    preflight: true,
  },
  important: true,
}
