// abhijeet's code start
if ($request->status == 1) {
    return $pdf->download('my.pdf'); // it will download the pdf file.
} elseif ($request->status == 2) {
    // it will help to download word
    $headers = [
        'content-type'        => 'text/html',
        'Content-Disposition' => 'attatchement;Filename=my.doc',
    ];
    return \Response::make(view('view_name', compact('data', 'request')), 200, $headers);
} else {
    return redirect()->back()->with('success', 'Sorry! Not available.');
}
