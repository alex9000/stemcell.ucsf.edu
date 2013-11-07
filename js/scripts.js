/* Override of Views slideshow funcion to replace div's with list items */
Drupal.theme.prototype.viewsSlideshowPagerNumbered = function (classes, idx, slide, settings) {
  var href = '#';
  if (settings.pager_click_to_page) {
    href = $(slide).find('a').attr('href');
  }
  return '<li class="' + classes + '"><a href="' + href + '">' + (idx+1) + '</a></li>';
}


// Pause the slideshow 
viewsSlideshowSingleFramePause = function (settings) {
  $(settings.targetId).cycle('pause');
  if (settings.controls > 0) {
    $('#views_slideshow_singleframe_playpause_' + settings.vss_id)
      .addClass('views_slideshow_singleframe_play')
      .addClass('views_slideshow_play')
      .removeClass('views_slideshow_singleframe_pause')
      .removeClass('views_slideshow_pause')
      .html('<img src ="' + Drupal.settings.path_to_images + 'play.jpg" >');
  }
  settings.paused = true;
}

// Resume the slideshow
viewsSlideshowSingleFrameResume = function (settings) {
  $(settings.targetId).cycle('resume');
  if (settings.controls > 0) {
    $('#views_slideshow_singleframe_playpause_' + settings.vss_id)
      .addClass('views_slideshow_singleframe_pause')
      .addClass('views_slideshow_pause')
      .removeClass('views_slideshow_singleframe_play')
      .removeClass('views_slideshow_play')
      .html('<img src ="' + Drupal.settings.path_to_images + 'pause.jpg" >');
  }
  settings.paused = false;
}


/*
	Faculty List Sidebar Tabbed Navigation
	Customized from jQuery Cookbook, 
	O’Reilly Media, Inc., 
	Chapter 13.4 Tabbed Navigation, 
	
	Alex Kerr
	6/21/11
*/

function init_tabs() {
   	// Does element exist?
    if (!$('.tabs').length) {
        // If not, exit.
        return;
    }

    // Reveal initial content area(s).
    $('.faculty-list-block #faculty-alpha-container div.tab_content_wrap:first div.tab_content:first').show();

    // Listen for click on tabs.
    $('.tabs a', '.faculty-list-block').click(function() {

        // If not current tab.
        if (!$(this).hasClass('current')) {
            // Change the current indicator.
            $(this).addClass('current').parent('li').siblings('li')
            	.find('a.current').removeClass('current');

            // If not current list
            if (!$(this).parents('.tabs').hasClass('selected')) {

                //Change the current selected list
                $(this).parents('.tabs').addClass('selected').siblings('.tabs').removeClass('selected')
                .find('a.current').removeClass('current');
            }

            // Hide all content
            $('div.tab_content', '.faculty-list-block').hide();


            // If content present, show
            if ($($(this).attr('href'), '.faculty-list-block').children().length) {
                $($(this).attr('href'), '.faculty-list-block').slideDown(400, 'swing');
            }
        }
        // Nofollow.
        this.blur();
        return false;
    });
}


Drupal.behaviors.formatting = function (context) {
	// Remove bottom border from last sidebar block
	$("#sidebar .block:last").addClass("border-bottom-none");
	
	// Add 'first' class to first paragraph without top image
	$("#main #content .content > p:first-child, #sidebar .block .content > p:first-child, #bottom-right .content > p:first-child").addClass("first");
	
};

Drupal.behaviors.tabs = function (context) {
	//Initialize tabs
 	init_tabs();
};

Drupal.behaviors.accordion = function (context) {
	$("#accordion").accordion({ 
		header: 'h3', 
		autoHeight: false
	 });
	$('#accordion h3').hover(
		function () {
		    $(this).addClass("hover");
		  },
		  function () {
		    $(this).removeClass("hover");
		  }
	);
};

/*
 Page: about/faculty-a-z
 Description: Toggles between sort by alphabet and sort by subject
*/
Drupal.behaviors.toggleFacultySort = function(context) {
    // Access cookie, if set
    var bySubject = $.cookie('bySubject');

    if (bySubject != null && bySubject != "")
    {
        showBySubject();
    }
    else
    {
        showByAlpha();
    }

    function showByAlpha()
    {
        $('#faculty-alpha-container').show();
        $('#faculty-by-subject-container').hide();
        $('.faculty-list-page h2.alpha').show();
        $('.faculty-list-page h2.subject').hide();
    }

    function showBySubject()
    {
#faculty-alpha-container').hide();
        $('#faculty-by-subject-container').show();
        $('.faculty-list-page h2.subject').show();
        $('.faculty-list-page h2.alpha').hide();
    }

    $('.faculty-list-page h2 a').click(function() {
        if ($(this).parent('h2').attr("class") == 'alpha')
        {
            showBySubject();
            bySubject = 1;
        }
        else
        {
            showByAlpha();
            bySubject = "";
        }
        $.cookie('bySubject', bySubject);
    });
};

