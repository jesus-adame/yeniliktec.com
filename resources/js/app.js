require('./bootstrap');

require('alpinejs');

require('./build/ckeditor')

ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: {
            items: [
                'heading',
                '|',                                                // <--- ADDED
                'bold',
                'italic',
                'link',
                'bulletedList',
                'numberedList',
                'imageUpload',
                'blockQuote',
                'imageTextAlternative',
                'insertTable'
            ]
        },
        image: {
            toolbar: [ 'imageTextAlternative' ],
			upload: { types: [ 'png', 'jpeg', 'webp' ] }, // Image upload feature options.
            // You need to configure the image toolbar, too, so it uses the new style buttons.

            styles: [
                // This option is equal to a situation where no style is applied.
                'full',

                // This represents an image aligned to the left.
                'alignLeft',

                // This represents an image aligned to the right.
                'alignRight'
            ]
		},
        language: 'es',
        table: {
            contentToolbar: [
                'tableColumn',
                'tableRow',
                'mergeTableCells'
            ]
        },

    })
    .catch( error => {
        console.error( error );
    });