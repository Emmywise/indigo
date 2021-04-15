<?php

namespace App\Http\Controllers;

use App\Bracket;
use Illuminate\Http\Request;

class BracketController extends Controller
{
    public function index()
    {
        return response()->json(Bracket::all(),200);
    }
    
    public function store(Request $request)
    {
        $Bracket = Bracket::create([
            'spend' => $request->spend,
            '£0.00 - £1,999.99' => $request->£0.00 - £1,999.99,
            '£2,000 - £4,999.99' => $request->£2,000 - £4,999.99,
            '£5,000 - £24,999.99' => $request->£5,000 - £24,999.99,
            '£25,000 and above' => $request->£25,000 and above
        ]);
        
        return response()->json([
            'status' => (bool) $bracket,
            'data'   => $bracket,
            'message' => $bracket ? 'Bracket Created!' : 'Error Creating Product'
        ]);
    }
    
    public function show(Bracket $bracket)
    {
        return response()->json($bracket,200); 
    }

    public function update(Request $request, Bracket $bracket)
    {
        $status = $bracket->update(
            $request->only(['spend', '£0.00 - £1,999.99', '£2,000 - £4,999.99', '£5,000 - £24,999.99', '£25,000 and above'])
        );
        
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Bracket Updated!' : 'Error Updating Product'
        ]);
    }
    
    public function updateUnits(Request $request, Product $product)
    {
        $product->units = $product->units + $request->get('units');
        $status = $product->save();
        
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Units Added!' : 'Error Adding Product Units'
        ]);
    }

    public function destroy(Bracket $bracket)
    {
        $status = $bracket->delete();
        
        return response()->json([
            'status' => $status,
            'message' => $status ? 'Bracket Deleted!' : 'Error Deleting Bracket'
        ]);
    }
}
