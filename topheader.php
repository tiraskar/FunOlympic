<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
 
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
i{
  font-size:30px;
  padding:5px;
  border-radius:10px;
}
.loginbtns{
  font-size:15px;
}

.fa-facebook-square{
  color:#1877f2;
}
.fa-twitter-square{
  color:#1DA1F2;
}
.fa-youtube-square{
  color:#CD201F;
}
.fa-instagram{

}
</style>
</head>

<body>
    
<div class="header-top">
    <div class=" card-group d-flex justify-content-end ">                   
      <div class="my-5">
          <div class="right_top_section card-group my-5">  
            <div  class=" d-flex right align-items-right">
          
                         
                        
            </div>                         
                          
                           <!-- end social icon -->                          
                      
                            <div class="d-flex">

                   <div class="text-primary my-2 mx-2">
<strong>
                 
                              <?php
                           if (isset($_SESSION['username'])) {
               echo ('Welcome ' . $_SESSION['username']); ?>
               </strong>
                </div>
                
                    <div class="dropdown">
                      
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      
                    </button>
                    <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton">
                    <button class="btn btn-success  w-100 m-1 text-center"> <a href="logout.php" class="text-white">Logout</a></button>
                    
                    <button class="btn btn-info w-100 m-1"><a href="changepass.php" class="text-white">Change Password</a></button>
                   
                     
                    </div>
                  </div>
                <!-- <button class="btn btn-primary"> <a href="logout.php" class="text-white"><i class="fa fa-shopping-cart loginbtns"></i>Logout</a></button> -->
      
         </div>
              
                 <div>

         
                <?php } else{
     
                  
    
                    echo ('Sign in to watch live '); ?>

                  <button class="btn btn-primary text-white"><a href="login.php" class="login text-white"><i class="fa fa-user loginbtns" ></i>Login/Signup</a></button>  
                <?php
                }?> 
                        </div>
                           </di>
                           <!-- button section -->
                                                   
           </div>
       </div>
    </div>
  </div>

            
            
            
            
       

    

</body>

</html>