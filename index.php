<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>



    <title>System Register</title>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="complete_name" placeholder="name@example.com">
                        <label for="complete_name">Enter your name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="complete_email" placeholder="name@example.com">
                        <label for="complete_email">Enter your email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="complete_mobile" placeholder="name@example.com">
                        <label for="complete_mobile">Enter your mobile</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="complete_place" placeholder="name@example.com">
                        <label for="complete_place">Enter your place</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="adduser()">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs- dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <!-- update -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"> 
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="update_name" placeholder="name@example.com">
                        <label for="update_name">Enter your name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="update_email" placeholder="name@example.com">
                        <label for="update_email">Enter your email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="update_mobile" placeholder="name@example.com">
                        <label for="update_mobile">Enter your mobile</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="update_place" placeholder="name@example.com">
                        <label for="update_place">Enter your place</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="updateDetails()">Update</button>
                    <button type="button" class="btn btn-danger" data-bs- dismiss="modal">Close</button>
                    <input type="hidden" id="hiddendata">
                </div>
            </div>
        </div>
    </div>
    


    <div class="container my-3 mx-6">
        <h1 class="text-center">PHP CRUD operations using bootstrap modal</h1>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModal">
            Adde New Users
        </button>
        <div id="displayDataTable">
            
        </div>
    </div>

</body>
<script src="./js/register.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>