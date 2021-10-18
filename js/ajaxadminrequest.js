function loginadmin(){
    // $("#stuLogemail").on("keyup blur",function(){
    // var stuname=$("#stuname").val();
    var adminLogemail=$("#adminLogemail").val();
    var adminLogpass=$("#adminLogpass").val();
    // console.log(stuname);
    console.log(adminLogemail);
    console.log(adminLogpass);

    // checking for submision

        if(adminLogemail.trim() == ""){
            $("#loginMsg1").html("<small style='color:red;'>Please enter email</small>");
            $("#adminLogemail").focus();
            return false;
        }else if(adminLogpass.trim() == ""){
            $("#loginMsg2").html("<small style='color:red;'>Please enter pass</small>");
            $("#adminLogpass").focus();
            return false;
        }
        else{
    $.ajax({
        url:'../Admin/admin.php',
        method:'POST',
        data:{
            adminlogin:"adminlogin",
            adminLogemail:adminLogemail,
            adminLogpass:adminLogpass,
        },
        success:function(data){
            console.log(data);
            if(data ==1){
                $('#adminloginMsg').html("<span class= 'alert alert-success'>Admmin Loged In Successfully</span>");
                window.location.href = "../Admin/adminDashboard.php";
                // window.location.reload();
                }else if(data>1){
                $('#adminloginMsg').html("<span class= 'alert alert-danger'>Not Loged In Successfully</span>");
            }
        }
    })
}
// });
}