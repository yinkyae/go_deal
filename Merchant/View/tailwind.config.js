/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,js,php}", "*/*.{html,js,php}"],
  theme: {
    extend: {
      boxShadow: {
        '3xl': '0px 4px 16px -7px rgba(0, 0, 0, 0.5)',
      }
    },
    colors: {
      'button': '#2A57FD',
      'inputBox': '#D9D9D9',
      'whiteText': '#ffffff',
      'grayText2': '#5B5858',
      'orange': '#F25D3B',
      'blueText': '#51459E',
      'greyText1': '#505877',
      'smallText': '9A9A9A',
      'blueChart': '#4C62CD',
      'cyanChart': '#43E2B7',
      'search':'#F5F9FD',
    },
    fontFamily: {
      'ABeeZee': ['ABeeZee'],
      'RobotoSlab': ['Roboto Slab'],
      'Tommorrow': ['Tommorrow'],
    },
  },
  plugins: [],
}

