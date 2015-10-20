$(document).ready(function() {
    $('.custom-file-input').on('change', function() {
        realVal = $(this).val();
        lastIndex = realVal.lastIndexOf('\\') + 1;
        if(lastIndex !== -1) {
            realVal = realVal.substr(lastIndex);
            $(this).prev('.mask').find('.fileInputText').val(realVal);
        }
    });
});/**
 * Created by ASI on 18.10.2015.
 */

$(document).ready(function() {
    $('#uploadform-imagefile').change(function() {
        $('#uploadform-imagefile').attr('style', 'opacity: 1; z-index: 1;');
    });
});