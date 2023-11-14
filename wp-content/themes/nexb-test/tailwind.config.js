/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./template-parts/**/*.php", "./*.php", "./js/*.js"],
	theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
		extend: {},
	},
	plugins: [],
};
