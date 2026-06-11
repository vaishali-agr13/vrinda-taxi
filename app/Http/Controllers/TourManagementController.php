<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourManagement;
use Barryvdh\DomPDF\Facade\Pdf;

class TourManagementController extends Controller
{
    public function index()
    {
        $bookings = TourManagement::latest()->paginate(20);

        return view('admin.tour-bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('admin.tour-bookings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
        ]);

        TourManagement::create($request->all());

        return redirect()
            ->route('tour-bookings.index')
            ->with('success','Booking Created Successfully');
    }

    public function show($id)
    {
        $booking = TourManagement::findOrFail($id);

        return view('admin.tour-bookings.show', compact('booking'));
    }

    public function edit($id)
    {
        $booking = TourManagement::findOrFail($id);

        return view('admin.tour-bookings.edit', compact('booking'));
    }

    public function update(Request $request, $id)
    {
        $booking = TourManagement::findOrFail($id);

        $booking->update($request->all());

        return redirect()
            ->route('tour-bookings.index')
            ->with('success','Booking Updated Successfully');
    }

    public function destroy($id)
    {
        $booking = TourManagement::findOrFail($id);

        $booking->delete();

        return redirect()
            ->route('tour-bookings.index')
            ->with('success','Booking Deleted Successfully');
    }

    public function downloadAllPdf()
        {
            $bookings = TourManagement::orderBy('id', 'desc')->get();

            $pdf = Pdf::loadView('admin.tour-bookings.pdf', compact('bookings'))
                    ->setPaper('A3', 'landscape');

            return $pdf->download('tour-bookings.pdf');
        }
}