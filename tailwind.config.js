module.exports = {
	content: ['./templates/**/*.twig', './src/**/*.{html,vue,ts,pcss,js}'],
	theme: {
		colors: {
			blue: '#3C6C94',
			white: '#fff',
			gray: '#b8b8b8',
			black: '#000',
			transparent: 'transparent',
		},

		// You can replace the Tailwind fonts with the client's brand fonts here
		fontFamily: {
			// sans: 'avant-garde-book', // ? overrides the default font
			// bold: 'avant-garde-bold',
			// medium: 'avant-garde-medium',
		},

		extend: {
			// ? The 'extend' key adds to the config instead of replacing it
			screens: {
				// '3xl': '1690px', // ? add a huge breakpoint to match design
			},
		},
	},
}
