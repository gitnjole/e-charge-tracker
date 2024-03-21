<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-Charge Card Status</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/landing.css">
</head>
<body>
    <div class="container">
        <div class="row m-0">
            <div class="col-lg-7 pb-5 pe-lg-5">
                <div class="row">
                    <div class="col-12 p-5">
                        <img src="images/card.jpg"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-0 ps-lg-4">
                <div class="col-12 px-0">
                    <form method="POST" action="/"> <div class="row bg-light m-0">
                        @csrf
                            <div class="col-12 px-4 my-4">
                                <p class="fw-bold">Card details</p>
                            </div>
                            <div class="col-12 px-4">
                                <div class="d-flex  mb-4">
                                    <span class="">
                                        <label for="cardSlug" class="text-muted">Card number</label> <input class="form-control" type="text"
                                            id="cardSlug" name="cardSlug" placeholder="h255z82e551"> </span>
                                </div>
                                <div class="d-flex mb-5">
                                    <span class="me-5">
                                        <label for="pin" class="text-muted">PIN</label> <input class="form-control" type="text" 
                                            id="pin" name="pin" placeholder="1234"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="col-12  mb-4 p-0">
                                <button type="submit" class="btn btn-primary">Check status<span class="fas fa-arrow-right ps-2"></span></button> </div>
                        </div>
                    </form>
                </div>                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>