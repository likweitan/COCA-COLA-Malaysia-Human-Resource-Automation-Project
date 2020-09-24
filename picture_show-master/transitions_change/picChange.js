;(function ($) {

    $.fn.picChange = function (options) {

        var defaults = [
            {
                desc: '',
                path: 'images/1.jpg'
            },
            {
                desc: '',
                path: 'images/2.jpg'
            },
            {
                desc: '',
                path: 'images/3.jpg'
            },
            {
                desc: '',
                path: 'images/4.jpg'
            },
            {
                desc: '',
                path: 'images/5.jpg'
            },
            {
                desc: '',
                path: 'images/1.jpg'
            },
            {
                desc: '',
                path: 'images/2.jpg'
            },
            {
                desc: '',
                path: 'images/3.jpg'
            }
        ];

        var setting = $.extend(defaults, options);

        let self = this;

        $.each(setting, function(index, value){
        	var picContent = $('<img src="' + value.path + '" title="myLove' + (index+1) + '" />');
        	self.append(picContent);
        });
        return this;
    };
})(jQuery);

