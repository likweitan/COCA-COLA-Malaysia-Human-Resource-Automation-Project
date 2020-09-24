;(function ($) {

    $.fn.picChange = function (options) {

        var defaults = [
            {
                desc: '',
                path: 'img/example-slide-1.jpg'
            },
            {
                desc: '',
                path: 'img/example-slide-2.jpg'
            },
            {
                desc: '',
                path: 'img/example-slide-3.jpg'
            },
            {
                desc: '',
                path: 'img/example-slide-4.jpg'
            }
        ];

        var setting = $.extend(defaults, options);

        let self = this;

        $.each(setting, function(index, value){
        	var picContent = $('<img src="' + value.path + '" title="myLove' + (index+1) + '">');
        	self.append(picContent);
        });

        return this;
    };
})(jQuery);

