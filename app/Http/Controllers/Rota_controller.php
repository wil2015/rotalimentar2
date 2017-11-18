<?php

namespace rota2\Http\Controllers;

use Illuminate\Http\Request;
use rota2\Produto;
class Rota_controller extends Controller
{
    //

    public function index()
    {
        $images = Produto::get();
        return view('rota.index', compact('images'));
    }
        
    public function upload2()
    {
        $images = Produto::get();
        return view('rota.upload');
    }
    
    
    
    
    /**
    
     * Upload image function

     *

     * @return \Illuminate\Http\Response

     */

    public function upload(Request $request)
    
        {
    
            $this->validate($request, [
    
                'title' => 'required',
    
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
            ]);
    
    
            $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
    
            $request->image->move(public_path('images'), $input['image']);
    
    
            $input['title'] = $request->title;
    
           // ImageGallery::create($input);
            Produto::create($input);
    
    
            return back()
    
                ->with('success','Image Uploaded successfully.');
    
        }
    
    
        /**
    
         * Remove Image function
    
         *
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function destroy($id)
    
        {
    
         //   ImageGallery::find($id)->delete();
              Produto::find($id)->delete();
    
            return back()
    
                ->with('success','Image removed successfully.');	
    
        }
}
