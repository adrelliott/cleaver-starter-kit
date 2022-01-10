module.exports = {
    content: [
        './resources/views/**/*.php',
        './resources/views/**/*.html',
        './resources/assets/js/**/*.vue',
        './resources/content/**/*.html'
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp')
    ],
}