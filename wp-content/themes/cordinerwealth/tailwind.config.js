// tailwind.config.js
module.exports = {
    theme: {
        fontFamily: {
            'montserrat':     ['Montserrat, sans-serif'],
            'merriweather':   ['Merriweather, sans-serif']
        },
        container: {
            center: true,
            padding: '0.75rem',
        },
        extend: {
            colors: {
                darkblue:    '#303845',
                darkgrey:    '#241F21',
                orange:      '#B26E45',
                green:       '#06332E',
                lightgrey:   '#F5F5F5',
                border:      '#B26E45',
                blue:        '#002E5C',
                cream:       '#EDE8DE',
            },
            fontSize: {
                'ss':         '0.6rem',
                '08':         '0.8rem',
                '09':         '0.9rem',
                '12':         '1.2rem',
                '175':        '1.75rem',
            },
            lineHeight: {
                '175':        '1.75rem',
            },
            padding: {
                '0125':       '0.125rem',
                '165':        '1.65rem',
                '7':          '1.75rem',
                '195':        '1.95rem',
            },
            width: {

            },
            height: {
                '500':        '500px',
                '1100':       '1100px ',
            },
            margin: {
                'n2':         '-0.5rem',
                'n90':        '-90px',
                'n100':       '-100px',
                'n131':       '-131px',
                'n145':       '-145px',
                'n160':       '-160px',
                'n174':       '-174px',
                'n200':       '-200px',
                'n500':       '-500px',
                'n1100':      '-1100px',
                '50':         '50px',
                '100':        '100px',
                '200':        '200px',
            },
            inset: {
                '1':          '1rem',
                '1-3':        '1.3rem',
                '2':          '2rem',
                '50%':        '50%'
            },
        }
    },
    variants: {},
    plugins: [],
}
