jQuery(document).ready(function () {
    var blockquotes = jQuery('blockquote');
    for (var i = 0; i < blockquotes.length; i++) {
        var blockQuoteText = jQuery(blockquotes[i]).text();
        var currentUrl = window.location;
        var textColor = jQuery(blockquotes[i]).css('color');
        // add share buttons (change TwitterName to your Twitter handle for automatic mentions)
        // change paths to the icons to suit your installation (download link below)
        jQuery(blockquotes[i]).append('<div class="social-icons"><ul>' +
            '<li><a class="pinterest pop-up"' +'href="http://pinterest.com/pin/create/button/?url=' + currentUrl + '&amp;description=' + blockQuoteText+ '" ></a></li>' +
				'<li><a class="twitter pop-up"' +
            'href="http://twitter.com/intent/tweet?status=' + blockQuoteText + '+' + currentUrl + '"></a></li>'+
				'<li><a class="facebook pop-up"' +
            'https://www.facebook.com/sharer/sharer.php?u=' + currentUrl + '&amp;title=' + blockQuoteText + '"></a></li>'+
			'<li><a class="googleplus pop-up"' +
            'https://plus.google.com/share?url=' + currentUrl + '" ></a></li>'+	
            '</ul><div class="clear"></div></div>');
    }

    // pop-up without being blocked by pop-up blockers
    jQuery('a.pop-up').live('click', function () {
        newwindow = window.open(jQuery(this).attr('href'), '', 'height=640,width=600');
        if (window.focus) {
            newwindow.focus()
        }
        return false;
    });
});


                    