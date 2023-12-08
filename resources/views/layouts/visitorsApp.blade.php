<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? 'Not Found' }} | {{ config('app.name') }}</title>
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('inc.headerLinks')

    <style>
        .modal-header .close{
            position: absolute;
            right: 1rem;
            top: 1rem;
            font-size: 3rem;
        }
        .btn-primary{
            background: var(--primary-color);
            border: var(--primary-color);
        }
        .btn-primary:hover{
            background: var(--secondary-color);
            border: var(--secondary-color);
        }

        input{
            accent-color: var(--primary-color);
        }

        ::-moz-selection {
            /* Code for Firefox */
            background: var(--primary-color);
            color:white;
        }

        ::selection {
            background: var(--primary-color);
            color:white;
        }

    </style>


    @yield('head')
</head>

<body>
    <div id="preloader"></div>

    @include('inc.header')

    @yield('content')

    @include('inc.footer')

    <!-- Modal -->
    <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Book Tour</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="company_name">Company Name</label>
                                <input type="text" class="form-control" id="company_name" placeholder="Abc Pvt. Ltd." required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="johndoe@gamil.com" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="mobile">Contact No.</label>
                                <input type="tel" class="form-control" id="mobile" placeholder="+91 98XX-789-XXX" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="tour_date">Tour Date.</label>
                                <input type="date" class="form-control" id="tour_date" placeholder="12-12-2023" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="tour_time">Tour Time.</label>
                                <input type="time" class="form-control" id="tour_time" placeholder="12:00pm" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="no_of_seats">Number of seats required.</label>
                                <input type="number" class="form-control" id="no_of_seats" placeholder="100" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="business_type">Type of Business and Industry</label>
                                <input type="text" class="form-control" id="business_type" placeholder="Finance" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="space_req">Space Requirements (sq. feet)</label>
                                <input type="text" class="form-control" id="space_req" placeholder="100" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- all js here -->
    @include('inc.footerLinks')

    @yield('scripts')
</body>

</html>
