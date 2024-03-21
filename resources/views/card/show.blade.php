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
            <div class="col-lg-7 pb-5 pe-lg-5 mr-auto">
                <div class="row">
                    <div class="col-12 p-5">
                        <img src="images/card.jpg"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-0 ps-lg-4">
                @if(isset($card))
                <div class="row m-0">
                    <div class="col-12 px-4">
                        <div class="d-flex align-items-end mt-4 mb-2">
                            <p class="h4 m-0"><span class="pe-1">{{$card->slug}}</p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Starting amount</p>
                            <p class="fs-14 fw-bold"><span class="fas fa-dollar-sign pe-1"></span>{{$card->amount}}</p>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <p class="textmuted">Last charge</p>
                            <p class="fs-14 fw-bold">-<span class="fas fa-dollar-sign px-1"></span>26.9</p>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <p class="textmuted fw-bold">Amount left</p>
                            <div class="d-flex align-text-top ">
                                <span class="fas fa-dollar-sign mt-1 pe-1 fs-14 "></span><span class="h4">{{$card->amount_left}}</span>
                            </div>
                        </div>
                    </div>
                    @endif 
                    @if(isset($card))
                    <div class="row m-0 bg-light">
                        <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                            <p class="text-muted">Last used at</p>
                            <p class="h5">{{$card->updated_at->format('d.m H:i')}}</p>
                        </div>
                        <div class="col-md-4 col-6  ps-30 my-4">
                            <p class="text-muted">Cost of charge</p>
                            <p class="h5 m-0">26.9</p>
                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">
                            <p class="text-muted">Charging spot location</p>
                            <p class="h5 m-0">Front</p>
                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">
                            <p class="text-muted">Bought at</p>
                            <p class="h5 m-0">{{$card->created_at->format('d.m H:i')}}</p>
                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">
                            <p class="text-muted">Store location</p>
                            <p class="h5 m-0">{{$card->store->address}}</p>
                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">
                            <p class="text-muted">Placeholder</p>
                            <p class="h5 m-0">Placeholder</p>
                        </div>
                    </div>
                @endif                 
                </div>
            </div>
        </div>
    </div>
</body>
</html>