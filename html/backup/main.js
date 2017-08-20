
$(function(){
  // LEVEL選択後　div切り替え
  $('[name=ranges]').on('change', function() {
    let val = $('[name=ranges]').val();
    $('#range_content > div').removeClass('active');
    $(`#range_content > div:nth-of-type(${val})`).addClass('active');
    $(`#range_content > div:nth-of-type(${val}) ul:nth-of-type(1) li:nth-of-type(1)`).addClass('active');
    $(`#range_content > div:nth-of-type(${val}) ul:nth-of-type(2) li:nth-of-type(1)`).addClass('active');
  });

  // コンテンツ内　タブ切り替え
  let tab_li = $('#range_content ul:nth-of-type(1) li'),
      content_li = $('#range_content ul:nth-of-type(2) li');

  $(tab_li).on('click', function(){
    let index = $(tab_li).index(this)+1,
        has = $(this).hasClass('active');

    if (index % 2 == 0) {
      index = 2;
    } else {
      index = 1;
    }
    if (has === false) {        
      $(tab_li).removeClass('active');
      $(`div.active ul:nth-of-type(1) li:nth-of-type(${index})`).addClass('active');
      $(content_li).removeClass('active');
      $(`div.active ul:nth-of-type(2) li:nth-of-type(${index})`).addClass('active');
    }
  });
});