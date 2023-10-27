<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Http\Requests\StoreChartRequest;
use App\Http\Requests\UpdateChartRequest;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = new Chart();
        $orders = $obj->orderChart();
        $labels = array();
        $data = array();
        $colors = [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
        ];
        for ($i = 1; $i <= 12; $i++) {
            $month = date('F', mktime(0, 0, 0, $i, 1));
            $count = 0;
            foreach ($orders as $order) {
                $orderMonth = date('F', mktime(0, 0, 0, $order->month, 1));
                if ($orderMonth == $month) {
                    $count = $order->count;
                    break;
                }
            }
            $labels[] = $month;
            $data[] = $count;
        }

        $datasets = [
            [
                'label' => 'Orders',
                'data' => $data,
                'backgroundColor' => $colors,
            ],
        ];
        return view('admin/chart/chart', compact('labels', 'datasets'));
    }

    public function index2() {
        $obj = new Chart();
        $orders = $obj->totalPriceChart();
        $labels = array();
        $data = array();
        $colors = [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
        ];
        for ($i = 1; $i <= 12; $i++) {
            $month = date('F', mktime(0, 0, 0, $i, 1));
            $total_price = 0;
            foreach ($orders as $order) {
                $orderMonth = date('F', mktime(0, 0, 0, $order->month, 1));
                if ($orderMonth == $month) {
                    $total_price = $order->total_price;
                    break;
                }
            }
            $labels[] = $month;
            $data[] = $total_price;
        }

        $datasets = [
            [
                'label' => 'Orders',
                'data' => $data,
                'backgroundColor' => $colors,
            ],
        ];
        return view('admin/chart/chartTotalPrice', compact('labels', 'datasets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Chart $chart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chart $chart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChartRequest $request, Chart $chart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chart $chart)
    {
        //
    }
}
