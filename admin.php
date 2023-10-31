<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Search Library </title>
    <!-- <img src="img/logo.jpg" alt=""> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
    .footer{
        /* min-height: 550px; */
       
    }
    .button{
        /* margin-right: 0%; */
        /* top:19%; */
       left:88%;
       
       height:40px;
       position: relative;
       z-index: 2;
       
    }
</style>

<body>
    <?php include "partials/_header.php";
    ?>
    <div class="container my-2">
        <marquee behavior="scroll" direction="top" scrollamount="12" width="100%" bgcolor="pink"  > <h3 style="color: red; "  >If you want to add new library & update the library so you can register or login.  </h3></marquee>
   <hr> </div>
    
    <div class="container my-2  footer">
        <div class="button">
        <button class="btn btn-outline-success mr-0 " data-bs-toggle="modal" data-bs-target="#loginModal" style="  background-color: aqua;  color:black; "> Login</button>
        <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
    </div>
     </div>
   <div class="container">
   <div class="card">
          <div class="card-body">
            <h3 class="card-title ">Important Instruction </h3>
            <table style="width:100%">
              <tr>
                <td>
                    
                  <li>Before adding the library please read all the instuction</li>
                  <ol>
                  <li> Fill all the detail true. </li>
                  <li> Keep your username unique and create your password strong . </li>
                  
                </ol>
                </td>
              </tr>
            </table>
            <p> </p>
          </div>
   </div>
   </div>




    <?php include "partials/_footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>


</body>

</html>