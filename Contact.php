<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome |E- Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
        <body>
        <?php
        include ("includes/header.php");
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h2>LIVE SUPPORT</h2>
                        <P>
                            24 hours | 7 days a week | 365 days  a year Live Technical Support
                        </P><br>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <img src="img/contact.png" alt="#">
                    </div>
                </div>
                <br>
                <br>

                <div class="row">
                    <div class="col-lg-7">
                        <h1>CONTACT US</h1>
                        <form>
                            <div class="form-group">
                                <label>Name:</label>
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message:</label>
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"></textarea>
                              </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-offset-1 col-lg-4">
                        <h1>
                            Company Information
                        </h1>
                        <p>500 Lorem Ipsum Dolor Sit,</p>
                        <p>22-56-2-9 Sit Amet, Lorem,</p>
                        <p>USA</p>
                        <P>Phone:(00) 222 666 444</P>
                        <p>Fax: (000) 0000 00 00 0</p>
                        <p>Email: info@mycompany.com</p>
                        <p>Follow on: Facebook,Twitter</p>
                    </div>
                </div>


            </div>
            <br>
            <?php
        include 'includes/footer.php';
        ?>

        </body>
</html>