(function($){
  $(document).ready(function(){
    // facebook
    // var facebook = {
    //   init: function() {

    //     this.open();

    //     var url = 'http://graph.facebook.com/?id=' + encodeURIComponent(location.href);
    //     $.ajax({
    //       url: url,
    //       dataType: 'jsonp',
    //       success: function(json) {
    //         var count = json.shares ? json.shares : 0;
    //         $('#main').find('.count--fb').html(count);
    //       }
    //     });
    //   },
    //   open: function() {
    //     var $target = $('#main').find('.btnShare--fb');
    //     $target.on('click', function(event) {
    //       event.preventDefault();
    //       window.open($(this).attr('href'), 'facebook', 'width=670, height=400, menubar=no, toolbar=no, scrollbars=yes');
    //     });
    //   }
    // }
    // facebook.init();
    // Facebook Like Button
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    // Hatebu
    // var hatebu = {
    //   init: function() {

    //     this.open();

    //     var url = 'http://api.b.st-hatena.com/entry.count?url=' + encodeURIComponent(location.href);
    //     $.ajax({
    //       url: url,
    //       dataType: 'jsonp',
    //       success: function(json) {
    //         var count = json ? json : 0;
    //         $('#main').find('.count--ha').html(count);

    //         if(typeof(count) == 'undefined'){
    //           count = 0;
    //         }
    //       }
    //     });
    //   },
    //   open: function() {
    //     var $target = $('#main').find('.btnShare--ha');
    //     $target.on('click', function(event) {
    //       event.preventDefault();
    //       window.open($(this).attr('href'), 'はてなブックマークブックマークレット', 'width=550, height=420, menubar=no, toolbar=no, scrollbars=yes');
    //     });
    //   }
    // }
    // hatebu.init();
    // // Twitter
    // var twitter = {
    //   open: function() {
    //     var $target = $('#main').find('.btnShare--tw');
    //     $target.on('click', function(event) {
    //       event.preventDefault();
    //       window.open($(this).attr('href'), 'Twitter でリンクを共有する', 'width=550, height=400, menubar=no, toolbar=no, scrollbars=yes');
    //     });
    //   }
    // }
    // twitter.init();
    // // pocket
    // !function(d,i){
    //   if(!d.getElementById(i)){
    //     var j=d.createElement("script");
    //     j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";
    //     var w=d.getElementById(i);
    //     d.body.appendChild(j);}
    // }
    // (document,"pocket-btn-js");
  });
})(jQuery);
