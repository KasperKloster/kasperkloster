module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primaryWhite: {
          50: '#F7F7F7',
          100: '#F0F0F0',
        },
        primaryBlack: {
          100: '#b5b5b5',
          900: '#3C3C3C',
        }
      },
      fontFamily: {
        titillium: ['Titillium Web'],
      },
      minHeight: {
        '400': '400px',
      },
      minWidth: {
        '420': '420px',
      },

      inset: {
        '13p' : '13%',
        '20p' : '20%',
        '30p' : '30%',
        '38'  : '38%',
        '39p' : '39%',
        '45p' : '45%',
        '47p' : '47%',
        '70p' : '70%',
        '80p' : '80%',
        '1032px' : '1032px',
      }

    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
