(function($) {
  $(function() {
    $('.js-navBtn').click(function(){
      $(this).parent().toggleClass('Nav--active');
    })

    $('.js-navMenuItem').click(function(){
      if ($(this).hasClass('Nav-menu-item--active')) {
        return;
      }
      var newFragmentID = $(this).attr('data-fm');
      var newFragment = $('#'+newFragmentID);
       
      if (newFragment.length === 0) {
        console.log('Có lỗi phát sinh');
        return;
      }
      $('#mainContent > div').hide();
      newFragment.show();
      $('.Nav-menu-item--active').removeClass('Nav-menu-item--active');
      $(this).addClass('Nav-menu-item--active');
      $('.js-nav').removeClass('Nav--active');
    });

    $.ajax(
      {
        url: "/server/api/user.php",
        type: "POST",
        data: {
          action: "GET_USER",
          datas: ""
        },
        success: function(res) {
          //Thành công lấy được data ở đây
          if (res == "" || res == "undefined") {
            console.log('Có lỗi phát sinh');
            return;
          }
          var result = JSON.parse(res);
          var data = result.data;
          for(let key in data) {
            var user = data[key];
            var htmlCode = 
            '<div class="User-list-item">'+
              '<p class="f-50">'+user.ID+'</p>'+
              '<p class="f-full">'+user.Username+'</p>'+
              '<p class="f-150">'+user.Usercode+'</p>'+
              '<p class="f-100">'+user.RoleID+'</p>'+
              '<p class="f-100">'+user.CreatedDate+'</p>'+
              '<p class="f-130"><span class="Button">Sửa</span><span class="Button">Khóa</span></p>'+
            '</div>';
            $('#userList').append(htmlCode);
          }
        },
        error: function(xhr) {
          console.log(xhr.responseText);
        }
      }
    )
  });
})(jQuery);