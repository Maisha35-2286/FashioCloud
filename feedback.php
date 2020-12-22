<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Feedback</div>
                            <div class="card-body">

                                <form class="form-horizontal" action="feedback-add.php" method="post" >

                                    <div class="form-group">
                                        <label for="user" class="cols-sm-2 control-label">User Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <?php
                                                    session_start();
                                                    $user = $_SESSION['user'];
                                                ?>
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" value="<?php echo $user?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Brand Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="brandname" id="brandname" placeholder="Brand Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment" class="cols-sm-2 control-label">Comment</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="comment" id="comment" placeholder="Enter your comment" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Feedback" name="Feedback">
                                    </div>
                                    <div class="login-register">
                                        <p>Already commented? <a href="index.php">Home</a></p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>