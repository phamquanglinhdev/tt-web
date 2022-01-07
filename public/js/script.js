(function() {
	var $;
	$ = this.jQuery || window.jQuery;
	win = $(window), body = $('body'), doc = $(document);

	$.fn.hc_accordion = function() {
		var acd = $(this);
		acd.find('ul>li').each(function(index, el) {
            var act = $(el).find('ul').is(':hidden') ? "" : 'active';
			if($(el).find('ul li').length > 0) $(el).prepend('<button type="button" class="acd-drop '+act+'"></button>');
		});
		acd.on('click','.acd-drop', function(e){
			e.preventDefault();
			var ul=$(this).nextAll("ul");
			if(ul.is(":hidden") === true){
				ul.parent('li').parent('ul').children('li').children('ul').slideUp(180);
				ul.parent('li').parent('ul').children('li').children('.acd-drop').removeClass("active");
				$(this).addClass("active");
				ul.slideDown(180);
			}
			else{
				$(this).removeClass("active");
				ul.slideUp(180);
			}
		});
	}
}).call(this);


jQuery(function($) {
	var win = $(window), body = $('body'), doc = $(document);

	var UI = {
		mMenu: function(){
			var main_nav = $('#subHeader .main-nav');
			var m_nav = $('<div class="m-nav psy-pane"><button class="m-nav-close">&times;</button><div class="nav-ct"></div></div>');
			body.append(m_nav);

			m_nav.find('.m-nav-close').click(function(e) {
				e.preventDefault();
				mnav_close();
			});

			m_nav.find('.nav-ct').append(main_nav.children().clone());

			var mnav_open = function(){
				m_nav.addClass('active');
				body.append('<div class="m-nav-over"></div>').css('overflow', 'hidden');
			}
			var mnav_close = function(){
				m_nav.removeClass('active');
				body.children('.m-nav-over').remove();
				body.css('overflow', '');
			}

			doc.on('click', '.m-nav-open', function(e) {
				e.preventDefault();
				if(win.width() <=1199) mnav_open();
			}).on('click', '.m-nav-over', function(e) {
				e.preventDefault();
				mnav_close();
			});

			m_nav.hc_accordion();
		},

	    init: function(){
		    UI.mMenu();
		},
	}

	UI.init();
})