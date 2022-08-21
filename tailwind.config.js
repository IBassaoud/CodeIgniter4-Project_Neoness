/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/Views/*.php',
    './app/Views/**/*.php',
    './app/Views/**/**/*.php',
    './app/Views/**/**/**/*.php',
    './node_modules/flowbite/**/*.js',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio')
]
}
