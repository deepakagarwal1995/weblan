@extends('layouts.visitorsApp')
@section('content')
<!-- Start Bottom Header -->
<div class="page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline text-center">
                        <h3>Pricing</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!-- start pricing table area -->
<div class="pricing-area bg-color area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Rent Prices</h3>
                    <p>Help agencies to define their new business objectives and then create professional software.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pricing-content">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="table-list">
                        <span class="base">10% Discount</span>
                        <div class="top-price-inner">
                            <h4>Guest</h4>
                            <div class="rates">
                                <span class="prices"><span class="dolar">$</span>700</span><span class="users">Per
                                    Month</span>
                            </div>
                        </div>
                        <ol>
                            <li class="check">Online System</li>
                            <li class="check">Free apps</li>
                            <li class="check cross">full access</li>
                            <li class="check">live preview</li>
                            <li class="check cross">Support unlimited</li>
                        </ol>
                        <div class="price-btn">
                            <a href="order-from">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="table-list">
                        <span class="base">20% Discount</span>
                        <div class="top-price-inner">
                            <h4>Non-members</h4>
                            <div class="rates">
                                <span class="prices"><span class="dolar">$</span>500</span><span class="users">Per
                                    Month</span>
                            </div>
                        </div>
                        <ol>
                            <li class="check">Online System</li>
                            <li class="check">Free apps</li>
                            <li class="check cross">full access</li>
                            <li class="check">live preview</li>
                            <li class="check">Support unlimited</li>
                        </ol>
                        <div class="price-btn">
                            <a href="order-from">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="table-list">
                        <span class="base">30% Discount</span>
                        <div class="top-price-inner">
                            <h4>Members</h4>
                            <div class="rates">
                                <span class="prices"><span class="dolar">$</span>300</span><span class="users">Per
                                    Month</span>
                            </div>
                        </div>
                        <ol>
                            <li class="check">Online System</li>
                            <li class="check">Free apps</li>
                            <li class="check">full access</li>
                            <li class="check">live preview</li>
                            <li class="check">Support unlimited</li>
                        </ol>
                        <div class="price-btn">
                            <a href="order-from">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End pricing table area -->
@endsection
