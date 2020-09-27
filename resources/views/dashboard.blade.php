@extends('layouts.dashboard')


@section('content')
<div class='dashboard_container'>
    <h1 class='dashboard__header'>{{$dashboardHeader}}</h1>

    <div class="dashboard__quick_stats">
        <h2>Some quick numbers for you</h2>

        <div class='dashboard__quick_stats_wrapper'>
            <div class="dashboard__card">
                <div class="dashboard__card__inner">
                    <h2>200</h2>
                    <span>Kg</span>
                </div>
                <div class="dashboard__card__outer">
                    <span>Cod Sold today</span>
                </div>
            </div>

            <div class="dashboard__card">
                <div class="dashboard__card__inner">
                    <h2>3,000</h2>
                    <span>&pound;</span>
                </div>
                <div class="dashboard__card__outer">
                    <span>In sales today so far</span>
                </div>
            </div>

            <div class="dashboard__card">
                <div class="dashboard__card__inner">
                    <h2>90</h2>
                    <span>days</span>
                </div>
                <div class="dashboard__card__outer">
                    <span>Until quota resets</span>
                </div>
            </div>

        </div>

    </div>

    <div class="dashboard__quick_stats">
        <h2>A nice chart to look at</h2>

        <!--  data taken from https://www.ons.gov.uk/economy/inflationandpriceindices/timeseries/czol/mm23 -->
        <div class='dashboard__chart'>
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>
</div>

<div class='dashboard_container-aside'>
    <h4>Tide information for {{$favouriteMarket->name}}</h4>

    <table class='table table-auto' id='dashboard__tide_times'>
        <thead>
            <th>Depth/Low Tide</th>
            <th>Depth/High Tide</th>
        </thead>
        <tbody>
            <tr>
                <td>1.48m / 3.48 am</td>
                <td>3.4m / 10.14 pm</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection