$(function(){function e(e){var t=e.split("-"),n=parseInt(""+t[0]+t[1]+t[2]),o=new Date,i=parseInt(""+o.getFullYear()+a(o.getMonth()+1)+a(o.getDate()));return parseInt((i-n)/1e4)>20}function a(e){return e<10&&(e="0"+e),""+e}$("select[name=ranges]").on("change",function(){var e=$("select[name=ranges]").val(),a=$("#range_content > div:nth-of-type("+e+"})"),t=$("#range_content > div:nth-of-type("+e+"ul:nth-of-type(1) li:nth-of-type(1)"),n=$("#range_content > div:nth-of-type("+e+"ul:nth-of-type(2) li:nth-of-type(1)");$("#range_content > div").removeClass("active"),$(a).addClass("active"),$(t).addClass("active"),$(n).addClass("active")});var t=!0,n=!0;$('[name="user-entry-form"]').on("change",function(){var e=$('[name="user-entry-form"]').val(),a=$("#user-entry-form > div:nth-of-type("+e+")"),t=$("#store-name-0"+e);$("#user-entry-form > div").removeClass("active"),$(a).addClass("active"),e>=2&&($(t).empty(),$("#store-name-01 option").clone().appendTo(t))}),$('[name="birth"]').on("change",function(){t=e($(this).val()),console.log(1,t,n),0==n?($(".min-age__caption").addClass("active"),$("dl.form .submit input:last-child").addClass("active")):0==t?($(".min-age__caption").addClass("active"),$("dl.form .submit input:last-child").addClass("active")):($(".min-age__caption").removeClass("active"),$("dl.form .submit input:last-child").removeClass("active"))}),$('[name="birth_pair"]').on("change",function(){n=e($(this).val()),console.log(2,t,n),0==t?($(".min-age__caption").addClass("active"),$("dl.form .submit input:last-child").addClass("active")):0==n?($(".min-age__caption").addClass("active"),$("dl.form .submit input:last-child").addClass("active")):($(".min-age__caption").removeClass("active"),$("dl.form .submit input:last-child").removeClass("active"))}),$(".min-age__caption input").on("change",function(){$(".min-age__caption input:checked").val()?$("dl.form .submit input:last-child").removeClass("active"):$("dl.form .submit input:last-child").addClass("active")}),$('[name="email-2"]').on("change",function(){var e=$('[name="email-1"]').val(),a=$(this).val();if(e!=a)return $('<span role="alert" class="wpcf7-not-valid-tip input-confirm-mail"></span>').appendTo(".input-confirm-mail　.wpcf7-form-control-wrap").html("メールアドレスが一致しません。"),!1;$("span.input-confirm-mail").html(""),$('[name="email"]').val(a)}),$("dl.form dd.store-name select#store-name-01").on("change",function(){var e=$("dl.form dd.store-name select#store-name-01 option:checked"),a=$(e).val();$(".store_01 input[name=payment_store]").val(a)}),$("dl.form dd.store-name select#store-name-02").on("change",function(){var e=$("dl.form dd.store-name select#store-name-02 option:checked"),a=$(e).val();$(".store_02 input[name=payment_store]").val(a)}),$("dl.form dd.store-name select#store-name-03").on("change",function(){var e=$("dl.form dd.store-name select#store-name-03 option:checked"),a=$(e).val();$(".store_03 input[name=payment_store]").val(a)}),$("dl.form dd.store-name select#store-name-04").on("change",function(){var e=$("dl.form dd.store-name select#store-name-04 option:checked"),a=$(e).val();$(".store_04 input[name=payment_store]").val(a)})});