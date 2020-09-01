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
                '445':        '445px',
            },
            width: {
                'f40':        '40px',
                'f60':        '60px',
                '200':        '200px',
                '445':        '445px',
                '490':        '490px',
                '512':        '512px',
            },
            height: {
                'f40':        '40px',
                'f60':        '60px',
                '280':        '280px',
                '300':        '300px',
                '360':        '360px',
                '500':        '500px',
                '1650':       '1650px',
            },
            margin: {
                'n2':         '-0.5rem',
                'n90':        '-90px',
                'n100':       '-100px',
                'n131':       '-131px',
                'n145':       '-145px',
                'n166':       '-166px',
                'n174':       '-174px',
                'n200':       '-200px',
                'n204':       '-204px',
                'n281':       '-281px',
                'n500':       '-500px',
                'n1100':      '-1100px',
                'n1650':      '-1650px',
                'p20':         '20px',
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
