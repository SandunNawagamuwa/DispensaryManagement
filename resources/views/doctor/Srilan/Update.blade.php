<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Successfully Update</title>

     <!--bootstrap link-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     <!--bootstrap jscripts-->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 
</head>
<body>

    <div class="container">
        
        
      
      <form action="/updatenew" method="post">
        @csrf 
      
           
                        <h5 id="Label">Blood Sugar Update</h5>
                            
                    
                  
  
                    <div>
  
                        <label >Medical ID</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Enter Patient's Id" value="{{$taskdata->id}}">
                         <br>  
                        <label>Blood Sugar Level</label>
                        <input type="text" class="form-control" id="rate" name="rate" placeholder="Enter rate" value="{{$taskdata->rate}}">
                        
                    </div>
  
                    <div class="modal-footer">
  
                        <button type="submit" class="btn btn-outline-success" id="submit" name="submit">Save</button>
                        <button type="reset" class="btn btn-outline-success" name="Reset">Reset</button>
                        
                    </div>
                   
                </div>
            </div>
        </div>   
        </form>
      </div>
    
</body>
</html>