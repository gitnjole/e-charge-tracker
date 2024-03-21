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
                    @if(isset($card))
                        <div class="row m-0 bg-light">
                            <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                                <p class="text-muted">Last used at</p>
                                <p class="h5">{{$card->updated_at->format('d-m-Y H:i')}}</p>
                            </div>
                            <div class="col-md-4 col-6  ps-30 my-4">
                                <p class="text-muted">Transmission</p>
                                <p class="h5 m-0">Manual</p>
                            </div>
                            <div class="col-md-4 col-6 ps-30 my-4">
                                <p class="text-muted">Drive unit</p>
                                <p class="h5 m-0">Front</p>
                            </div>
                            <div class="col-md-4 col-6 ps-30 my-4">
                                <p class="text-muted">Body</p>
                                <p class="h5 m-0">Coupe</p>
                            </div>
                            <div class="col-md-4 col-6 ps-30 my-4">
                                <p class="text-muted">Color</p>
                                <p class="h5 m-0">White</p>
                            </div>
                            <div class="col-md-4 col-6 ps-30 my-4">
                                <p class="text-muted">Daily UI</p>
                                <p class="h5 m-0">#002</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-5 p-0 ps-lg-4">
                @if(isset($card))
                <div class="row m-0">
                    <div class="col-12 px-4">
                        <div class="d-flex align-items-end mt-4 mb-2">
                            <p class="h4 m-0"><span class="pe-1">ZAZ</span><span class="pe-1">966</span><span
                                    class="pe-1">B</span></p>
                            <P class="ps-3 textmuted">1L</P>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Qty</p>
                            <p class="fs-14 fw-bold">1</p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Subtotal</p>
                            <p class="fs-14 fw-bold"><span class="fas fa-dollar-sign pe-1"></span>1,450</p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Shipping</p>
                            <p class="fs-14 fw-bold">Free</p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Promo code</p>
                            <p class="fs-14 fw-bold">-<span class="fas fa-dollar-sign px-1"></span>100</p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class="textmuted fw-bold">Total</p>
                            <div class="d-flex align-text-top ">
                                <span class="fas fa-dollar-sign mt-1 pe-1 fs-14 "></span><span class="h4">1,350</span>
                            </div>
                        </div>
                    </div>
                    @endif

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