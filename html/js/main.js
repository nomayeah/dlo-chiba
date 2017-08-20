
$(function(){
  // LEVEL選択後　div切り替え
  $('select[name=ranges]').on('change', function() {
    var val = $('select[name=ranges]').val(),
        li = $('#range_content > div:nth-of-type(' + val + '})'),
        li_1 = $('#range_content > div:nth-of-type(' + val + 'ul:nth-of-type(1) li:nth-of-type(1)'),
        li_2 = $('#range_content > div:nth-of-type(' + val + 'ul:nth-of-type(2) li:nth-of-type(1)');

    $('#range_content > div').removeClass('active');
    $(li).addClass('active');
    $(li_1).addClass('active');
    $(li_2).addClass('active');
  });

  // コンテンツ内　タブ切り替え
  // var tab_li = $('#range_content ul:nth-of-type(1) li'),
  //     content_li = $('#range_content ul:nth-of-type(2) li');

  // $(tab_li).on('click', function(){
  //   var index = $(tab_li).index(this)+1,
  //       has = $(this).hasClass('active');

  //   if (index % 2 == 0) {
  //     index = 2;
  //   } else {
  //     index = 1;
  //   }

  //   var li_1 = 'div.active ul:nth-of-type(1) li:nth-of-type(' + index + ')',
  //       li_2 = 'div.active ul:nth-of-type(2) li:nth-of-type(' + index + ')';
  //   if (has === false) {
  //     $(tab_li).removeClass('active');
  //     $(li_1).addClass('active');
  //     $(content_li).removeClass('active');
  //     $(li_2).addClass('active');
  //   }
  // });

  // エントリーフォーム切り替え
  $('[name="user-entry-form"]').on('change', function() {
    var val = '#user-entry-form > div:nth-of-type(' + $('[name="user-entry-form"]').val() + ')';
    $('#user-entry-form > div').removeClass('active');
    $(val).addClass('active');
  });

  // $('[name="email-1"]').on('change', function() {
  //   console.log($('[name="email-1"]').val());
  //   if(!$('[name="email-1"]').val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])*\.([a-z]+)+$/)){
  //     $('span.input-mail').html('');
  //     $('span.input-mail').html('メールアドレスが正しくありません。');
  //   } else {
  //     $('span.input-mail').html('');
  //   }
  // });

  $('[name="email-2"]').on('change', function() {
    var val1 = $('[name="email-1"]').val(),
        val2 = $(this).val();
    
    if (val1 != val2){
      $('<span role="alert" class="wpcf7-not-valid-tip input-confirm-mail"></span>').appendTo('.input-confirm-mail　.wpcf7-form-control-wrap').html("メールアドレスが一致しません。"); // 一致していなかったら、エラーメッセージを表示する
        return false;
      } else {
        $('span.input-confirm-mail').html('');
        $('[name="email"]').val(val2);
      }
  });

});