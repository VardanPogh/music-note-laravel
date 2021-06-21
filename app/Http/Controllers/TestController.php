<?php

namespace App\Http\Controllers;

use Square\SquareClient;
use Square\LocationsApi;
use Square\Exceptions\ApiException;
use Square\Http\ApiResponse;
use Square\Models\ListLocationsResponse;
use Square\Environment;

use App\Diving;
use App\Clef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clefs = Clef::get();
        return view('Clef/list', ['clefs' => $clefs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Clef/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('Clef/create');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function chtest()
    {
        return view('pages/chindex');

    }

    public function test(Request $request)
    {

        $client = new SquareClient([
            'accessToken' => 'EAAAEEcR3i_fzOgJyy1Wq07xObipMACcJoxlxgFQwyWblQ9MXDE5qyrvrCWGXSC8',
            'environment' => Environment::SANDBOX,
        ]);

        try {
            $amount_money = new \Square\Models\Money();
            $amount_money->setAmount(intval($request->amount));
            $amount_money->setCurrency('USD');

            $body = new \Square\Models\CreatePaymentRequest(
                'cnon:card-nonce-ok',
                '528fd44f-d7ae-44f8-8410-cb8ce4a53857',
                $amount_money
            );

            $api_response = $client->getPaymentsApi()->createPayment($body);

            if ($api_response->isSuccess()) {
                $result = $api_response->getResult();
                print_r('ITS RESPONSE');
                dd($result);
            } else {
                $errors = $api_response->getErrors();
            }
        } catch (ApiException $e) {
            dd("Recieved error while calling Square: " . $e->getMessage());
        }
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clef = Clef::find($id);
        return view('Clef/update', ['clef' => $clef]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clef = Clef::find($id);
        $clefData = array(
            'positions' => $request->input('positions'),
            'a_with_16th' => $request->input('a_with_16th'),
        );
        $clef->update($clefData);

        return redirect('/clefs')->with('info', 'Clef saved successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $clef = Clef::find($id);
        $clef->diving()->detach();
        $clef->waterslide()->detach();
        $clef->feature()->detach();
        $clef->delete();
        return redirect('/admin/clef')->with('info', 'Clef deleted!');
    }

    public function getClefsData()
    {
        return Clef::all();
//        dd($request);
    }
}
