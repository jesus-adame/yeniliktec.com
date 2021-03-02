require('./../build/ckeditor')

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
            'link',
            'imageUpload',
            'blockQuote',
            'codeBlock',
            'insertTable',
        ]
    },
    image: {
        toolbar: [
            'imageStyle:alignLeft', 'imageStyle:alignCenter', 'imageStyle:alignRight',
            '|',
            'imageResize',
            '|',
            'imageTextAlternative',
            'linkImage',
        ],
        upload: { types: [ 'png', 'jpeg', 'webp' ] }, // Image upload feature options.
        // You need to configure the image toolbar, too, so it uses the new style buttons.
        styles: [
            'full', // This option is equal to a situation where no style is applied.
            'alignCenter', // This represents an image aligned to the left.
            'alignLeft',
            'alignRight' // This represents an image aligned to the right.
        ],
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


let commentConfig = {
    toolbar: {
        items: [                                          // <--- ADDED
            'bold',
            'italic',
            '|',
            'bulletedList',
            'numberedList',
            'link',
            'blockQuote',
            'codeBlock',
        ]
    },
    language: 'es',
    codeBlock: {
        languages: [
            { language: 'css', label: 'CSS' },
            { language: 'html', label: 'HTML' },
            { language: 'php', label: 'PHP' },
        ]
    }
}

let commentEditorEl = document.querySelector('#commentEditor')

if (commentEditorEl) {
    ClassicEditor
        .create(commentEditorEl, commentConfig)
        .catch( error => {
            console.error( error );
        });
}