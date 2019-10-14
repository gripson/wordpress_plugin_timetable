// (function( $ ) {
// 	'use strict';

//       //Tab vertical pills
//        // $("#22nd-july-beginning").load("22nd-july-beginning.html");
//        // $("#22nd-july-Keynote1-MS-02").load("22nd-july-Keynote1-MS-02.html");
//        // $("#22nd-july-Keynote261-MS-09").load("22nd-july-Keynote261-MS-09.html");
//        // $("#22nd-july-Keynote1-MS-14").load("22nd-july-Keynote1-MS-14.html");

//        //Tab pills
//     $("#all-sessions").load("/session/sessions");

// })( jQuery );

// jQuery(document).ready(function($){
//     $("#submit").click(function(e){
//         e.preventDefault();//阻止默认的表单提交
//         keyword = $("#keyword").val();//获取表单的输入值
// 		$.post( MyAjax_obj.ajaxurl,
// 			{
// 				// 这里需要传一个参数，意味着触发
// 				// wp_ajax_nopriv_myajax-submit 或 wp_ajax_myajax-submit
// 				action : "timetable_searchDem8",
		 
// 				// 也可以跟一些其他的参数
// 				keyword: keyword
// 			},function( response ) {
// 				alert( response );
// 			}
// 		);
// 	});
// });
// ---------------------------------above works
jQuery(document).ready(function($){
    $("#submit_talk").click(function(e){
        e.preventDefault();//阻止默认的表单提交
        keyword_talk = $("#keyword_talk").val();//获取表单的输入值

        $.ajax({
            type:"POST",
            // url:"/Session/search",
            url: MyAjax_obj.ajaxurl,
            // action: 'dem8_searchByPresenter',
            data:{
            	action: 'timetable_searchDem8ByTalk',
            	// action: 'dem8_searchByPresenter',
            	keyword_talk:keyword_talk
            },//提交到demo.php的数据
            dataType:"json",//回调函数接收数据的格式
            success:function(msg){
                // console.log(msg[0].session_name);
                // console.log(msg[0].sesion_uuid);
                $("#searchResult").empty();//清空
                $.each(msg,function(index,value){
                  var person_name = value.person_name.split(",");
                  var showing = 
                  "<div id='info' class='row' style='margin-top: 20px;'>"+
                   "<div class='col-sm-10 bg-secondary text-white'>"+
                    "<div class='row'>"+
                    "<div class='col-sm-3'>"+
                      "<p id='date'>"+value.date+" July 2019 </p>"+
                    "</div>"+
                    "<div class='col-sm-9'>"+
                     "<p id='time'>"+value.talk_time+"</p>"+
                   "</div>"+
                    "<div class='w-100 d-none d-md-block d-md-none'></div>"+
                      "<div class='col-sm-12'>"+
                         "<p id='sessionName'>"+value.session_name+"</p>"+
                      "</div>"+
                    "<div class='w-100 d-none d-md-block d-md-none'></div>"+
                   "<div class='col-sm-12'>"+
                     "<p id='talkName'>"+value.talk_uuid+" "+value.talk_name+"</p>"+
                   "</div>"+
                   // "<div class='col-sm-10'>"+
                   //    "<p id='talk_content'>"+value.talk_content+"</p>"+
                   // "</div>"+
                   "<div class='w-100 d-none d-md-block d-md-none'></div>"+
                   "<div class='col-sm-12 bg-light text-dark'>"+
                    "<p id='presenter'> Invited Talk organized by: "+person_name[1]+", "+ person_name[0]+"</p>"+
                  "</div>"+
                    "</div>"+
                  "</div>"+
                   "<div class='col-sm-2 bg-light text-dark'>"+
                   "<p id='room'>"+value.room_name+"</p>"+
                  "</div>"+
                   "</div>";
                  $("#searchResult").append(showing);
                });

            },
            error:function(msg){
                console.log("request fail:"+msg);
            }
        });
    });
});


jQuery(document).ready(function($){
    $("#submit_author").click(function(e){
        e.preventDefault();//阻止默认的表单提交
        keyword_author = $("#keyword_author").val();//获取表单的输入值

        if(keyword_author.indexOf(",") != -1){
        	arrKeyword = keyword_author.trim().split(",");
        	revArrKeyword = arrKeyword.reverse();
        	keyword_author = revArrKeyword.join(", ");
        	keyword_author = keyword_author.trim();
        } else if(keyword_author.indexOf(" ") != -1){
        	arrKeyword = keyword_author.trim().split(" ");
        	revArrKeyword = arrKeyword.reverse();
        	keyword_author = revArrKeyword.join(", ");
        }

        $.ajax({
            type:"POST",
            // url:"/Session/search",
            url: MyAjax_obj.ajaxurl,
            // action: 'dem8_searchByPresenter',
            data:{
            	action: 'timetable_searchDem8ByAuthor',
            	// action: 'dem8_searchByPresenter',
            	keyword_author:keyword_author
            },//提交到demo.php的数据
            dataType:"json",//回调函数接收数据的格式
            success:function(msg){
                // console.log(msg[0].session_name);
                // console.log(msg[0].sesion_uuid);
                $("#searchResult").empty();//清空
                $.each(msg,function(index,value){
            	  var person_name = value.person_name.split(",");
                  var showing = 
                  "<div id='info' class='row' style='margin-top: 20px;'>"+
                   "<div class='col-sm-10 bg-secondary text-white'>"+
                    "<div class='row'>"+
                    "<div class='col-sm-3'>"+
                      "<p id='date'>"+value.date+" July 2019 </p>"+
                    "</div>"+
                    "<div class='col-sm-9'>"+
                     "<p id='time'>"+value.talk_time+"</p>"+
                   "</div>"+
                    "<div class='w-100 d-none d-md-block d-md-none'></div>"+
                      "<div class='col-sm-12'>"+
                         "<p id='sessionName'>"+value.session_name+"</p>"+
                      "</div>"+
                    "<div class='w-100 d-none d-md-block d-md-none'></div>"+
                   "<div class='col-sm-12'>"+
                     "<p id='talkName'>"+value.talk_uuid+" "+value.talk_name+"</p>"+
                   "</div>"+
                   // "<div class='col-sm-10'>"+
                   //    "<p id='talk_content'>"+value.talk_content+"</p>"+
                   // "</div>"+
                   "<div class='w-100 d-none d-md-block d-md-none'></div>"+
                   "<div class='col-sm-12 bg-light text-dark'>"+
                    "<p id='presenter'> Invited Talk organized by: "+person_name[1]+", "+ person_name[0]+"</p>"+
                  "</div>"+
                    "</div>"+
                  "</div>"+
                   "<div class='col-sm-2 bg-light text-dark'>"+
                   "<p id='room'>"+value.room_name+"</p>"+
                  "</div>"+
                   "</div>";
                  $("#searchResult").append(showing);
                });

            },
            error:function(msg){
                console.log("request fail:"+msg);
            }
        });
    });
});