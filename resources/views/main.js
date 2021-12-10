$(function(){
// Posting to backend //
$('#login').on('click',function()
{
  
    $.ajax({
        type: 'POST',
        // url of userinfo
        url:'/login',
        headers:
        {
            "Authorization": localStorage.setItem('token',$token),
            'Content-Type':'application/json'
        },
       
        // error: function(){
        //     alert('error saving data');
        // }
    })
});
// //logout
// $('#logout').on('click',function()
// {
  
//     $.ajax({
//         type: 'GET',
//         // url of userinfo
//         url:'/logout',
//         headers:
//         {
//             "Authorization": localStorage.getItem('token'),
//             'Content-Type':'application/json'
//         },
       
//         // error: function(){
//         //     alert('error saving data');
//         // }
//     })
// });
});