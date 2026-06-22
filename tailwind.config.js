/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/*.php", "./js/**/*.js"],
    safelist: [
        'entry-content',
        'wp-element-button',
        'wp-block-image',
        'wp-block-gallery',
        'wp-block-audio',
        'wp-block-video',
        'wp-block-embed',
        'wp-block-embed__wrapper',
        'wp-block-embed-youtube',
        'wp-embed-aspect-21-9',
        'wp-embed-aspect-18-9',
        'wp-embed-aspect-16-9',
        'wp-has-aspect-ratio',
        'is-type-video',
        'is-provider-youtube',
        'wp-block-file',
        'wp-block-file__button',
        'wp-block-table',
        'wp-block-quote',
        'wp-block-pullquote',
        'wp-block-preformatted',
        'wp-block-verse',
        'wp-block-cover',
        'wp-block-columns',
        'wp-block-column',
        'wp-block-group',
        'wp-block-details',
        'wp-block-buttons',
        'wp-block-button',
        'wp-block-button__link',
        'wp-block-separator',
        'wp-block-list',
        'has-nested-images',
        'is-style-outline',
        'is-style-stripes',
        'is-style-dots',
        'are-vertically-aligned-center',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            maxWidth: { 'zen': '56rem' },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        '--tw-prose-body': theme('colors.gray.700'),
                        '--tw-prose-headings': theme('colors.gray.900'),
                        '--tw-prose-links': theme('colors.gray.900'),
                        maxWidth: '100%',
                        a: { textDecoration: 'none', borderBottom: '1px solid #e5e7eb', transition: 'border-color 0.2s', '&:hover': { borderBottomColor: '#111827' } },
                    },
                },
                invert: {
                    css: {
                        '--tw-prose-body': theme('colors.gray.300'),
                        '--tw-prose-headings': theme('colors.white'),
                        '--tw-prose-links': theme('colors.white'),
                        a: { borderBottom: '1px solid #374151', '&:hover': { borderBottomColor: '#f3f4f6' } },
                    }
                }
            }),
        }
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
