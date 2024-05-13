/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                md:'3rem',
                lg: '14rem',
                xl: '15rem',
                '2xl': '6rem',
              },
          },
      extend: {
        spacing:{
            '128': '22rem',
            '144': '36rem',
        }
      },
    },
    plugins: [],
    darkMode: 'selector',
  }
