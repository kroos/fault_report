<?php
namespace App\Http\Controllers\SwitchAccess;

use App\Http\Controllers\Controller;
use App\Model\Switches;
use Illuminate\Http\Request;

// load session
use Session;

class SwitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('switch.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('switch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $sw = Switches::create($request->only(['hostname', 'ip_address']));
        if ($request->has('sw')) {
            foreach ($request->sw as $k2 => $v2) {
                $sw->hasmanyswtag()->create([
                    'tag_number' => $v2['tag_number']
                ]);
            }
        }
        Session::flash('flash_message', 'Data successfully stored!');
        return redirect(route('switches.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Switches  $switches
     * @return \Illuminate\Http\Response
     */
    public function show(Switches $switch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Switches  $switches
     * @return \Illuminate\Http\Response
     */
    public function edit(Switches $switch)
    {
        return view('switch.edit', compact(['switch']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Switches  $switches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Switches $switch)
    {
        // dd($request->all());
        $switch->update($request->only(['hostname', 'ip_address']));

        if($request->has('sw')) {
            foreach ($request->sw as $k1 => $v1) {

                if (!\Arr::has($v1, ['id'])) {                          // to make sure that updateOrCreate is running, firstOrCreate was not very accurate in this process
                    $v1['id'] = NULL;
                }
                $r = $switch->hasmanyswtag()->updateOrCreate(
                    [
                        'id' => $v1['id'],
                    ],
                    [
                        'tag_number' => $v1['tag_number']
                    ]
                );
            }
        }

        Session::flash('flash_message', 'Data successfully stored!');
        return redirect(route('switches.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Switches  $switches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Switches $switch)
    {
        $switch->hasmanyswtag()->delete();
        $switch->delete();
        return response()->json([
            'message' => 'Data deleted',
            'status' => 'success'
        ]);
    }
}