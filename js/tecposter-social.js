(function($){

var $profile = $('#tecposter-linkedin-profile');
if ($profile.length == 1) {
    $(function() {
        $.getScript('http://platform.linkedin.com/in.js', function() {
            $profile.html('<script type="IN/MemberProfile" data-id="'
                + $profile.attr('data-id')
                + '" data-format="inline" data-related="false"'
                + ' data-width="300"'
                + '>'
            );
        });
    });
}

})(jQuery);
