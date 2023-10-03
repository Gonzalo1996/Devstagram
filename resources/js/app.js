import './bootstrap';
import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube aquí tu imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,

    init: function() {
        if(document.querySelector('[name="image"]').value.trim())
        {
            const publishedImg = {};
            publishedImg.size = 1234;
            publishedImg.name = document.querySelector('[name="image"]').value;

            this.options.addedfile.call(this, publishedImg);
            this.options.thumbnail.call(this, publishedImg, `/uploads/${publishedImg.name}`);

            publishedImg.previewElement.classList.add('dz-success', 'dz-complete');
        }
    }
});

dropzone.on('sending', function(file, xhr, formData) {
    console.log(formData);
});

dropzone.on('success', function(file, response) {
    document.querySelector('[name="image"]').value = response.imagen; 
});

dropzone.on('error', function(file, message) {
    console.log(message);
});

dropzone.on('removedfile', function() {
    document.querySelector('[name="image"]').value = ' ';
});