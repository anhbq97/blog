/*
 |--------------------------------------------------------------------------
 | Shards Dashboards: Blog Add New Post Template
 |--------------------------------------------------------------------------
 */

'use strict';

(function ($) {
  $(document).ready(function () {

    var toolbarOptions = [
      [{ 'header': [1, 2, 3, 4, 5, false] }],
      ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
      ['blockquote', 'code-block'],
      [{ 'header': 1 }, { 'header': 2 }],               // custom button values
      [{ 'list': 'ordered'}, { 'list': 'bullet' }],
      [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
      [{ 'indent': '-1'}, { 'indent': '+1' }],
      [ 'link', 'image', 'video', 'formula' ],
      [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
  
      [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
      [{ 'font': [] }],
      [{ 'align': [] }],
      ['clean']          // outdent/indent                                       // remove formatting button
    ];

    // Init the Quill RTE
    var quill = new Quill('#editor-container', {
      modules: {
        toolbar: toolbarOptions
      },
      placeholder: 'Sử dụng các tác vụ bên trên y như sử dụng WORD OFFICE',
      theme: 'snow'
    });


    $(document).on('click', '#btn-public-post', function(){
        var summary = quill.getText().substring(0, 100);
        var category;
        var section;

        if ($('.ck-category').filter(':checked').length != 1 || $('.ck-category').filter(':checked').length == 0) {
          alert('Chỉ được chọn 1 danh mục | Hoặc bạn chưa chọn danh mục nào');
          return false;
        }

        if ($('.ck-section').filter(':checked').length !=1 || $('.ck-section').filter(':checked').length == 0) {
          alert('Chỉ được chọn 1 section | Hoặc bạn chưa chọn section nào');
          return false;
        }

        // console.log($('.ck-section').filter(':checked').val());
        // console.log($('input[name="checkbox-category"]').length);

        // $('input[name="checkbox-section"]').each(function (index) {
        //   if ($(this).is(':checked')) {
        //     countSection = countSection+1;
        //     if (countSection > 1) {
        //       alert('Chỉ đc chọn 1 section');
        //       return false;
        //     } else {
        //       section = $(this).val();
        //     }
        //   }

        //   if ($('input[name="checkbox-category"]').length-1 == index) {
        //     pushNow();
        //   }
        // })

        // $('input[name="checkbox-category"]').each(function (index) {
        //   if ($(this).is(':checked')) {
        //     countCategory = countCategory+1;
        //     if (countCategory > 1) {
        //       alert('Chỉ đc chọn 1 danh mục');
        //       return false;
        //     } else {
        //       category = $(this).val();
        //     }
        //   }

        //   if ($('input[name="checkbox-category"]').length-1 == index) {
        //     pushNow();
        //   }
        // })

        $.ajax({
          url: 'addPost',
          type: 'POST',
          dataType: 'json',

          data: {
            '_token': $('input[name="_token"]').val(), 
            'title': $('input[name="title-post"]').val(),
            'content': quill.root.innerHTML,
            'summary': summary+'...',
            'image': 'post_4.jpg',
            'author': $('input[name="author"]').val(), 
            'category': $('.ck-category').filter(':checked').val(),
            'tags': $('input[name="tags"]').val(),
            'section': $('.ck-section').filter(':checked').val(),
            'visibility': $('#visibility option:selected').val(),
            'status': 0,
            'schedule': '',
            'readability': 0
          },

          success: function (data) {
            if (data.errors) {
              alert(data.errors.title);
            } else {
              alert(data.name);
            } 
          },
          error: function (err) {
            if (err.status == 422) {
              alert(err.responseJSON.title);
              alert(err.responseJSON.section);
              alert(err.responseJSON.tags);
              alert(err.responseJSON.category);
            }
          }

        });
        return false;
        
    })
  });
})(jQuery);

$(document).on('click', '.create-category', function (){
  $('#btn-add-category').click(function() {
    $.ajax({
      url: 'addCategory',
      type: 'POST',
      dataType: 'json',

      data: {
        '_token': $('input[name="_token"]').val(), 
        'name': $('input[name="category"]').val()
      },

      success: function (data) {
        if (data.errors) {
          alert(data.errors.title);
        } else {
          $('#list-category').append(`<div class="custom-control custom-checkbox mb-1">
            <input type="checkbox" class="custom-control-input" value="`+data.id+`">
            <label class="custom-control-label">`+data.name+`</label>
          </div>`);
        }
      },
      error: function (err) {
        if (err.status == 422) {
          alert(err.responseJSON.name);
        }
      }

    });
    return false;
  })
})

$('.checked-category').each(function(){
  $(this).on('click', function(){
    if ($(this).children('input[name="checkbox-category"]').is(':checked')) {
      $(this).children('input[name="checkbox-category"]').attr("checked", false);
    } else {
      $(this).children('input[name="checkbox-category"]').attr("checked", true);
    }
  })
})

$('.checked-section').each(function(){
  $(this).on('click', function(){
    if ($(this).children('input[name="checkbox-section"]').is(':checked')) {
      $(this).children('input[name="checkbox-section"]').attr("checked", false);
    } else {
      $(this).children('input[name="checkbox-section"]').attr("checked", true);
    }
  })
})

