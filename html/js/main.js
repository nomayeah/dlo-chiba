
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

  var flag_01 = true,
      flag_02 = true;
  // エントリーフォーム切り替え
  $('[name="user-entry-form"]').on('change', function() {
    var val = $('[name="user-entry-form"]').val(),
        entry_form = $('#user-entry-form > div:nth-of-type(' + val + ')'),
        list = $('#store-name-0' + val );
    $('#user-entry-form > div').removeClass('active');
    $(entry_form).addClass('active');
    if(val >= 2) {
      $(list).empty();
      $('#store-name-01 option').clone().appendTo(list);
    }
  });

  function calculateAge(birthday) {
    var  birth = birthday.split('-'); // birth[0]: year, birth[1]: month, birth[2]: day
    var _birth = parseInt("" + birth[0] + birth[1] + birth[2]);// 文字列型に明示変換後にparseInt
    var  today = new Date();
    var _today = parseInt("" + today.getFullYear() + affixZero(today.getMonth() + 1) + affixZero(today.getDate()));// 文字列型に明示変換後にparseInt
    return parseInt((_today - _birth) / 10000) > 20;
  }
  
  function affixZero(int) {
    if (int < 10) int = "0" + int;
    return "" + int;
  }

  $('[name="birth"]').on('change', function() { 
    flag_01 = calculateAge($(this).val());
    console.log(1, flag_01, flag_02);
    if( flag_02 == false ){
      $('.min-age__caption').addClass('active');
      $('dl.form .submit input:last-child').addClass('active');
    } else if( flag_01 == false ){
      $('.min-age__caption').addClass('active');
      $('dl.form .submit input:last-child').addClass('active');
    } else {
      $('.min-age__caption').removeClass('active');
      $('dl.form .submit input:last-child').removeClass('active');
    }
  });

  $('[name="birth_pair"]').on('change', function() { 
    flag_02 = calculateAge($(this).val());
    console.log(2, flag_01, flag_02);
    if( flag_01 == false ){
      $('.min-age__caption').addClass('active');
      $('dl.form .submit input:last-child').addClass('active');
    } else if( flag_02 == false ){
      $('.min-age__caption').addClass('active');
      $('dl.form .submit input:last-child').addClass('active');
    } else {
      $('.min-age__caption').removeClass('active');
      $('dl.form .submit input:last-child').removeClass('active');
    }
  });

  $('.min-age__caption input').on('change', function() {
    if($('.min-age__caption input:checked').val()) {
      $('dl.form .submit input:last-child').removeClass('active');
    } else {
      $('dl.form .submit input:last-child').addClass('active');
    }
  });

  // $('[name="birth"]').on('change', function() {  
  //   console.log(calculateAge(this.value));
  // });


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

  $('dl.form dd.store-name select#store-name-01').on('change', function(){
    var target = $('dl.form dd.store-name select#store-name-01 option:checked'),
        val = $(target).val();
    $('.store_01 input[name=payment_store]').val(val);
  });

  $('dl.form dd.store-name select#store-name-02').on('change', function(){
    var target = $('dl.form dd.store-name select#store-name-02 option:checked'),
        val = $(target).val();
    $('.store_02 input[name=payment_store]').val(val);
  });

  $('dl.form dd.store-name select#store-name-03').on('change', function(){
    var target = $('dl.form dd.store-name select#store-name-03 option:checked'),
        val = $(target).val();
    $('.store_03 input[name=payment_store]').val(val);
  });

  $('dl.form dd.store-name select#store-name-04').on('change', function(){
    var target = $('dl.form dd.store-name select#store-name-04 option:checked'),
        val = $(target).val();
    $('.store_04 input[name=payment_store]').val(val);
  });
});