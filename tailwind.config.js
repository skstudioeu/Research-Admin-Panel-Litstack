module.exports = {
  purge: [
    './resources/views/**/*.blade.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      screens: {
        'sm': '640px',
        // => @media (min-width: 640px) { ... }

        'md': '768px',
        // => @media (min-width: 768px) { ... }

        'lg': '1024px',
        // => @media (min-width: 1024px) { ... }

        'xl': '1140px',
        // => @media (min-width: 1280px) { ... }

        '2xl': '1140px',
        // => @media (min-width: 1536px) { ... }
      },
      fontFamily: {
        body: ['Poppins']
      },
      fontSize: {
        'xs': '.75rem',
        'sm': '.875rem',
        'tiny': '.875rem',
        'base': '1rem',
        'lg': '1.1875rem',
        'xl': '1.25rem',
        '2xl': '1.5rem',
        '3xl': '1.875rem',
        '4xl': '2.625rem',
        '5xl': '3rem',
        '6xl': '4rem',
        '7xl': '5rem',
      },
      colors: {
        primary: '#FF365F',
        secondary: '#353047',
        third: '#1E1736',
      }
    },

  },
  variants: {
    extend: {},
  },
  plugins: [],
}
