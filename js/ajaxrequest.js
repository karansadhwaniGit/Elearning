$(document).ready(function(){
    $("#stuemail").on("keyup blur",function(){
        var stuemail = $("#stuemail").val();
        $.ajax({
            url: 'student/addStudent.php',
            method:'POST',
            data:{
                checkemail :"checkemail",
                stuemail1:stuemail,
            },
                success:function(data){
                    if($.parseJSON(data) == 0){
                        $('#successMsg').html("<span class= 'alert alert-success'>Valid</span>");
                        // $("#signup").attr("disabled",true);
                    }else if($.parseJSON(data) > 0){
                        $('#successMsg').html("<span class= 'alert alert-danger'>Not Valid User</span>");   
                    }
                },
        });
    });
});

function addstu(){
    var stuname=$("#stuname").val();
    var stuemail=$("#stuemail").val();
    var stupass=$("#stupass").val();
    // console.log(stuname);
    // console.log(stuemail);
    // console.log(stupass);

    // checking for submision

        if(stuname.trim() == ""){
            $("#statusMsg1").html("<small style='color:red;'>Please enter name</small>");
            $("#stuname").focus();
            return false;
        }else if(stuemail.trim() == ""){
            $("#statusMsg2").html("<small style='color:red;'>Please enter email</small>");
            $("#stuemail").focus();
            return false;
        }else if(stupass.trim() == ""){
            $("#statusMsg3").html("<small style='color:red;'>Please enter pass</small>");
            $("#stupass").focus();
            return false;
        }
        else{
    $.ajax({
        url:'../Student/addStudent.php',
        method:'POST',
        data:{
            stusignup:"stusignup",
            stuname:stuname,
            stuemail:stuemail,
            stupass:stupass,
        },
        success:function(data){
            console.log(data);
            if($.parseJSON(data)=="OK"){
                $('#successMsg').html("<span class= 'alert alert-success'>Registered Successfully</span>");
                clearStuRegField();
            }else if($.parseJSON(data) == "failed"){
                $('#successMsg').html("<span class= 'alert alert-danger'>Not Registered Successfully</span>");
            }
        }
    })
}
}

function loginstu(){
    // $("#stuLogemail").on("keyup blur",function(){
    // var stuname=$("#stuname").val();
    var stuLogemail=$("#stuLogemail").val();
    var stuLogpass=$("#stuLogpass").val();
    // console.log(stuname);
    console.log(stuLogemail);
    console.log(stuLogpass);

    // checking for submision

        if(stuLogemail.trim() == ""){
            $("#Msg1").html("<small style='color:red;'>Please enter email</small>");
            $("#stuLogemail").focus();
            return false;
        }else if(stuLogpass.trim() == ""){
            $("#Msg2").html("<small style='color:red;'>Please enter pass</small>");
            $("#stuLogpass").focus();
            return false;
        }
        else{
    $.ajax({
        url:'../Student/loginStudent.php',
        method:'POST',
        data:{
            stulogin:"stulogin",
            stuLogemail:stuLogemail,
            stuLogpass:stuLogpass,
        },
        success:function(data){
            console.log(data);
            if(data ==1){
                $('#loginMsg').html("<span class= 'alert alert-success'>Loged In Successfully</span>");
                window.location.href = "../index.php";
                // window.location.reload();
                }else if(data>1){
                $('#loginMsg').html("<span class= 'alert alert-danger'>Not Registered Successfully</span>");
            }
        }
    })
}
// });
}
// empty all fields and status also 
function clearStuRegField(){
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html("");
    $("#statusMsg2").html("");
    $("#statusMsg3").html("");
}