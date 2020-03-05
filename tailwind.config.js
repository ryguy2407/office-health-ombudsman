module.exports = {
  theme: {
    fontFamily: {
      body: ['sofia-pro', 'sans-serif'],
    },
    container: {
      center: true,
      padding: '1.25rem',
    },

    aspectRatio: { // defaults to {}
      'square': [1, 1],
      'landscape': [6, 4],
      'portrait': [4, 6],
      '16/9': [16, 9],
      '4/3': [4, 3],
      '21/9': [21, 9],
    },
    opacity: {
      '0': '0',
      '25': '.25',
      '50': '.5',
      '75': '.75',
      '10': '.1',
      '20': '.2',
      '30': '.3',
      '40': '.4',
      '50': '.5',
      '60': '.6',
      '70': '.7',
      '80': '.8',
      '90': '.9',
      '100': '1',
    },
    extend: {
      zIndex: {
        '1': '1',
        '-1': '-1',
      },
      maxWidth: {
        '1': '0.25rem',
        '2': '0.5rem',
        '3': '0.75rem',
        '4': '1rem',
        '5': '1.25rem',
        '6': '1.5rem',
        '8': '2rem',
        '10': '2.5rem',
        '12': '3rem',
        '16': '4rem',
      },
      colors: {
        light: '#F2F6F8',
        orange: '#DE6A45',
        'primary': {
          100: '#FDF8EF',
          200: '#FAECD6',
          300: '#F7E1BD',
          400: '#F0CB8C',
          500: '#EAB45B',
          600: '#D3A252',
          700: '#8C6C37',
          800: '#695129',
          900: '#46361B',
        },
        dark: '#012345',
        white: '#ffffff',
        green: '#4C7F7A',
        blue: '#004B7E',
        grey: '#58595B',
        red: '#D14D3C',
        'navy': {
          100: '#E6E9EC',
          200: '#C0C8D1',
          300: '#99A7B5',
          400: '#4D657D',
          500: '#012345',
          600: '#01203E',
          700: '#011529',
          800: '#00101F',
          900: '#000B15',
        },
      },
      height: {
        '1px': '1px',
        '2px': '2px',
        '60%': '60%',
        '756px': '756px',
      },
      spacing: {
        '96': '24rem',
        '128': '32rem',
      },
      inset: {
        '0': 0,
        auto: 'auto',
        '1/2': '50%',
        '-9999': '-9999px',
        '1': '0.25rem',
        '2': '0.5rem',
        '3': '0.75rem',
        '4': '1rem',
        '5': '1.25rem',
        '6': '1.5rem',
        '8': '2rem',
        '10': '2.5rem',

      },

    },
    transitionProperty: {
      // defaults to these values
      none: 'none',
      all: 'all',
      color: 'color',
      bg: 'background-color',
      border: 'border-color',
      colors: ['color', 'background-color', 'border-color'],
      opacity: 'opacity',
      transform: 'transform',
      width: 'width',
      padding: 'padding',
    },

    transform: {
      // defaults to this value
      none: 'none',
    },

    scale: {
      // defaults to {}
      '90': '0.9',
      '100': '1',
      '110': '1.1'
    },

  },
  variants: {
    // all the following default to ['responsive']
    cursor: ['responsive', 'hover'],
    transitionProperty: ['responsive'],
    transitionDuration: ['responsive'],
    transitionTimingFunction: ['responsive'],
    transitionDelay: ['responsive'],
    willChange: ['responsive'],
    opacity: ['responsive', 'hover', 'focus', 'group-hover'],
    width: ['responsive', 'hover', 'group-hover'],
    textColor: ['responsive', 'hover', 'group-hover'],
    transform: ['responsive'],
    transformOrigin: ['responsive'],
    translate: ['responsive'],
    scale: ['responsive', 'hover', 'group-hover'],
    rotate: ['responsive'],
    skew: ['responsive'],
    perspective: ['responsive'],
    perspectiveOrigin: ['responsive'],
    transformStyle: ['responsive'],
    backfaceVisibility: ['responsive'],
    transformBox: ['responsive'],
    display: ['responsive', 'hover', 'group-hover', 'focus'],
    visibility: ['responsive', 'focus'],
    position: ['responsive', 'focus'],
    inset: ['responsive', 'focus', 'hover', 'group-hover'],
    mixBlendMode: ['responsive'],
    backgroundBlendMode: ['responsive'],
    isolation: ['responsive'],
    aspectRatio: ['responsive'],
  },
  plugins: [
    require('tailwindcss-transitions')(),
    require('tailwindcss-transforms')({
      '3d': false, // defaults to false
    }),
    require('tailwindcss-blend-mode')(), // no options to configure
    require('tailwindcss-aspect-ratio')(),
  ],
};
