/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.html",
    "./public/**/*.php",
    "./src/**/*.php",
    "./src/**/*.html",
    "./src/**/*.js"
  ],
  theme: {
    extend: {
      backgroundImage: {
        'about-1': "url('/img/about/about-1.svg')",
        'about-2': "url('/img/about/about-2.svg')",
      },
      boxShadow: {
        'custom': '0 0 30px rgb(0 0 0 / 0.1), 0 0 10px rgb(0 0 0 / 0.1)',
      },
    },
  },
  plugins: [
    function ({ addUtilities }) {
      addUtilities({
        '.text-outline': {
          textShadow: `
            -2px -2px 0 #ffffff,
            2px -2px 0 #ffffff,
            -2px 2px 0 #ffffff,
            2px 2px 0 #ffffff,
            -3px -3px 0 #ffffff,
            3px -3px 0 #ffffff,
            -3px 3px 0 #ffffff,
            3px 3px 0 #ffffff
          `,
        },
      });
    },    
  ],
}

