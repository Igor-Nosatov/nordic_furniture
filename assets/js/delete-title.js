jQuery(document).ready(function($) {
    $('img[title]').each(function() { $(this).removeAttr('title'); });
});
