require('./bootstrap');

require('alpinejs');

require('./build/ckeditor')

let editorEl = document.querySelector('#editor')

let editorConfig = {
    toolbar: {
        items: [
            'heading',
            '|',                                                // <--- ADDED
            'bold',
            'italic',
            'alignment:left',
            'alignment:right',
            'alignment:center',
            'alignment:justify',
            '|',
            'bulletedList',
            'numberedList',
            'imageUpload',
            'link',
            'blockQuote',
            'imageTextAlternative',
            'codeBlock',
            'insertTable',
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
    codeBlock: {
        languages: [
            { language: 'css', label: 'CSS' },
            { language: 'html', label: 'HTML' },
            { language: 'php', label: 'PHP' },
        ]
    }
}

if (editorEl) {
    ClassicEditor
        .create(editorEl, editorConfig)
        .catch( error => {
            console.error( error );
        });
}