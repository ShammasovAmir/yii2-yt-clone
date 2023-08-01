$(function () {
    'use strict'
    $('#videoFileInput').change(e => {
        $(e.target).closest('form').trigger('submit')
    })
})